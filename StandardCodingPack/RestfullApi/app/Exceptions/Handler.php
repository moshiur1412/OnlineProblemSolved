<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($exception instanceof HttpResponseException) {
            \Log::error($exception->getMessage());
            if ($request->ajax()) {
                return response()->json(['error' => 'Server error'], 500);
            }
            return response()->view('errors.500', [], 500);
        } elseif ($exception instanceof ModelNotFoundException or $exception instanceof NotFoundHttpException) {
            \Log::error($exception->getMessage());
            // ajax 404 json feedback
            if ($request->ajax()) {
                return response()->json(['error' => 'Not Found'], 404);
            }
            return response()->view('errors.404', [], 404);
            
        } elseif ($exception instanceof AuthenticationException) {
            \Log::error($exception->getMessage());
            if ($request->ajax()) {
                return response()->json(['error' => 'Unauthorized'], 403);
            }
            return redirect(route('login'));
        } elseif ($exception instanceof AuthorizationException) {
            \Log::error($exception->getMessage());
            if ($request->ajax()) {
                return response()->json(['error' => 'Unauthorized'], 403);
            }
            return $this->view('errors.403', [], 403);
        } elseif($exception instanceof HttpException){
           \Log::error($exception->getMessage());
           if ($request->ajax()) {
            return response()->json(['error' => 'Unauthorized Session'], 401);
        }
        return $this->view('errors.401', [], 401);

    }elseif($exception instanceof RequestException) {
        if ($request->ajax()) {
            return response()->json(['error' => 'Bad Request'], 400);
        }
        return response()->view('errors.400', [], 400);
    }
    return parent::render($request, $exception);
    }
}
