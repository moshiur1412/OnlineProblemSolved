<?php

var_dump(isset($_ENV['PATH']));
getenv('PATH');
var_dump(isset($_ENV['PATH']));


$_REQUEST['id'] = 0;

function some_other_method(){
	echo $_REQUEST['id'];
}

function some_method(){
	$_REQUEST['id'] = 400;
	some_other_method();
}



?>