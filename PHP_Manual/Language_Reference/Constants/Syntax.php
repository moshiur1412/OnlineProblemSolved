<?php

const CONSTANT = 'Hello world';

echo CONSTANT;

const ANOTHER_CONSTANT = CONSTANT.'; Goodbye world';

echo ANOTHER_CONSTANT;

define('ANIMALS', array(

	'a', 'b','d'
));

echo ANIMALS[1];