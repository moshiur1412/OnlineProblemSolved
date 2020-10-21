Comments: support c c++ style
<hr>

<?php
echo 'This is the comment first line <br>';
// This is a one-line c++ style comment

/* This is a muli line comment
yet another line of comment */
echo 'This is yet another test <br>';
echo 'One Final Test <br>';
?>

<h1> This is an <?php #echo 'simple'; ?> example simple comments </h1>

<?php
/*
echo 'This is a test'; /* This comment will cause a problem */
*/

// Parse error: syntax error, unexpected '*', expecting end of file in /opt/lampp/htdocs/HackerRankSolutions/PHP_Manual/Language_Reference/Basic_syntax/Comments.php on line 19
