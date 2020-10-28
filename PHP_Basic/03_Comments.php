<?php 
# There are two types of comments
# Single Line Comments
# Multiline Comments

// Single Line Comments
function singleLineComment(){
	# This is for echo perpose
	echo "I am from sigleline comments";
}

/*
* Multi line comments example
* @return void
*/
function multiLineComments(){
	echo "See the above multiline comments";
}


singleLineComment();
echo "<br>";
multiLineComments();

?>