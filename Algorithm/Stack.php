<?php


Class Stack{
	
	public static $stack_max = 100;
	public $top;
	// public $data = new SplFixedArray(1);
	public $data = [];


}

function push(Stack &$s, $item){

	if($s->top < $s::$stack_max) {
		$s->data[$s->top] = $item;
		$s->top = $s->top +1;
	}else{
		printf("Stack is full!\n");
	}

}

function pop(Stack &$s){
	$item;
	if($s->top == 0){
		printf("stack is empty!\n");
		return -1;
	}else{
		$s->top = $s->top-1;
		$item = $s->data[$s->top];
	}
	return $item;
}


function main(){
	$my_stack = new Stack; 
	$item;

	$my_stack->top = 0;

	push($my_stack,1);
	push($my_stack,2);
	push($my_stack,3);

	$item =pop($my_stack);
	printf("%d\n", $item);

	$item =pop($my_stack);

	printf("%d\n", $item);

}

print_r(main());