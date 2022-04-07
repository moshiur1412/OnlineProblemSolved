<?php

// https://www.codechef.com/problems/MUFFINS3

$cases = fgets(STDIN);

// print_r($case);

for($i=0; $i<$cases; $i++){
	$case = fgets(STDIN);
	echo (((int)($case/2))+1).PHP_EOL;
}

# Solution 2 

$t = (int)fgets(STDIN);

for ($i=0; $i<$t; $i++)
{
	$num = (int)fgets(STDIN);

	$cakes_num = (int)($num/2) + 1;

	echo "$cakes_num\n";
}

# Solutions 3
$t = (int)trim(fgets(STDIN));
if($t <= 1000 and $t >= 1)
{
	while($t--)
	{
		$n = (int)trim(fgets(STDIN));
		if($n <= pow(10,8) and $n >= 2)
			$a = (int)($n/2)+1;

		echo $a."\n";
	}
}


# Solutions 4
$t = (int)trim(fgets(STDIN));

while ($t--) {

	$n = (int)trim(fgets(STDIN));

	echo floor($n/2) + 1, "\n";

}

# Solutions 5
$cases = trim(fgets(STDIN));
$ans= '';
for($case = 0; $case < $cases; $case++)	$ans.= floor((trim(fgets(STDIN))/2) + 1 )."\n";
	echo $ans;

# Solutions 6
$num_element = trim(fgets(STDIN));

while ($num_element--)
{
	$cupcakes = trim(fgets(STDIN));

	$pack_size = floor($cupcakes / 2)+1;

	echo $pack_size . "\n";
}

# Solution 7
/**
 * Author: गोपाल शर्मा <gopalindians@gmail.com>
 * Date: 13-01-2017
 * Time: 03:42 AM
 * Place: जम्मू/भारत
 * Licence: https://github.com/philsturgeon/dbad/blob/master/LICENSE-hi.md
 * @link: https://www.codechef.com/problems/MUFFINS3
 * @Editorial: http://discuss.codechef.com/problems/MUFFINS3
 */
define('MAX_NUMBER_OF_TEST_CASES', 1000);
define('MIN_NUMBER_OF_TEST_CASES', 1);


define('MAX_NUMBER_CUP_CAKE', 100000000);
define('MIN_NUMBER_CUP_CAKE', 2);


fscanf(STDIN, '%d', $numberOfTestCases);

$results = [];

if ($numberOfTestCases >= MIN_NUMBER_OF_TEST_CASES && $numberOfTestCases <= MAX_NUMBER_OF_TEST_CASES) {
	for ($i = 0; $i < $numberOfTestCases; $i++) {
		fscanf(STDIN, '%d', $numberOfCupCake);
		if ($numberOfCupCake >= MIN_NUMBER_CUP_CAKE && $numberOfCupCake <= MAX_NUMBER_CUP_CAKE) {
			$results[$i] = floor($numberOfCupCake / 2 + 1);
		}
	}
}

foreach ($results as $result) {
	fprintf(STDOUT, '%d' .PHP_EOL,$result);
}


# Solution 8
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout','r');

fscanf($stdin, "%d",$tc);
while($tc-->0){
	fscanf($stdin,"%d",$i);
	if($i<3){
		echo $i."\n";
	}else{
		echo ((int)($i/2)+1)."\n";
	}
}

/*
2=2
3=2
4=3
5=3
6=4
7=4
8=5
9=5
10=6
11=6
12=7
13=7
14=8
15=8
16=9
17=9
18=10
19=10
20=11
21=11
*/


# Solutions

