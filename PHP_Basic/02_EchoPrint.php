<?php
# echo is not actually a function (it is a language construct), so you are not required to use parentheses with it. 
# echo ---> output one or more string
# echo(string $arg, [string $n...]):void;
# echo ---> return void;
// echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.', chr(10);

echo print 5; // output-> 51
// echo print true; // 11
// echo print false; // 1
// echo print(4)+3; // 71
// echo 5,6,7; // 567
// echo 5,6.5,'<br>'; // 56.5
// echo "Hello", "World", "<br>";
// echo print; // No Error & No output  
$boolean = false;

echo $boolean; // nothing 

# print — Output a string 
# print ( string $arg ) : int 
# print ->retrun boolean
// print "print() also works wihout parentheses.";
// print 5,6,7; // Syntax error
// print echo 5; // Syntax error

// echo "test echo 1<br>";
// echo ("test echo 2<br>");

// print "print test 1<br>";
// print ("print test 2<br>");


# echo তে আপনি একাদিক parameter নিতে পারবেন, যদি parenthesis ব্যবহার না করেন। অন্যদিকে print এ আপনি শুধু একটি parameter নিতে পারবেন, হোক সেটা parenthesis সহ অথবা parenthesis ছাড়া। নিচের উদাহরণ গুলো লক্ষ্য করুন :

// echo "1"; 			// valid    1
// print "1";			// valid    1
// echo "1", "2";		// valid    12
// print "1","2";		// invalid
// echo ("1", "2"); 	// invalid

# echo এর কোনো return value নেই।  অন্যদিকে print boolean true মানে 1 রিটার্ন করে। নিচের উদাহরণ দেখলেই বাকিটা ক্লিয়ার হয়ে যাবে:

// echo print 5; // 51 -> 5 for echo print true =1 


// Language Construct:
// 1. Language constructs are keywords of the language. 
// 2. They are parts of language it self. 
// 3. They can't defined by user.
// 4. They may or may not take arguments
// 5. They may or may not have return values

// PHP language construct Ex-
// 1. require()
// 2. empty()
// 3. isset()
// 4. unset()
// 5. echo()
// 6. print()
// 7. die()
// 8. include()
// 9. list
// 10. array()










