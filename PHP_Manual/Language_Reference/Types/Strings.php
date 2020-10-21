<?php 
header('Content-type:text/plain');

echo "
# Strings: A string is series of characters, where a character is the same as a byte.

# String literal can be specified in 4 diff ways
1. single quoted // ('')
2. double quoted // (\"\")
3. heredoc syntax // (<<< EOT>>>);
4. nowdoc syntax // '\EOT => (')

";

// header('Content-type: text/plain');


// Output: This is a simple string
echo 'This is a simple string'."\n"; 

// Output: You can also have embedded newlines in strings this way as it is okay to do.
echo 'You can also have embedded newlines in
strings this way as it is okay to do '."\n";

// Output: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"'. "\n"; 

// Output:(\*) You deleted C:\*.*?
echo 'You deleted c:\\*.*?'."\n";

// Output: You deleted C:\*.*?
echo 'You deleted c:\*.*?'."\n";

// Output: Don't followed the escape sequence for speacial characters\n 
echo 'This will not expand: \n a newline'."\n";

// Output: dont searching any variable 
echo 'Variables do not $expand $either'."\n";


# Escape sequence for special characters
echo "Double quoted worked on special characters(n) \n"; // new line
echo "carrage return(r) \r";
echo "horizontal tab(t) \t";
echo "vertical tab(v) \n";


class foo{
	var $foo;
	var $bar;

	function __construct(){
		$this->foo = 'Foo';
		$this->bar = array('Bar1','Bar2','Bar3');
	}
	function display(){
		print "Foo display() method \n";
	}

}
$foo = new foo();
// Output: This is the single quoted.
$foo->display(); 

// Output: My name is Foo
echo <<<EOT
My name is $foo->foo \n
EOT;

// Output: Undefined property: foo::$display 
echo <<<EOT
This is the $foo->display() \n
EOT;

echo $foo->bar[1]."\n";

class test{
	static $v = <<<label
	Nothing in here... \n
	label;
}
test::$v;


