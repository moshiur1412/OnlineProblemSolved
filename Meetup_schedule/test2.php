<?php 

$tests = 1000000;
$max = 5000001;


for( $i = 1; $i <= $max; $i += 10000 ) {
    //create lookup array
    $array = array_fill( 0, $i, NULL );

    //build test indexes
    $test_indexes = array();
    for( $j = 0; $j < $tests; $j++ ) {
        $test_indexes[] = rand( 0, $i-1 );
    }

    //benchmark array lookups
    $start = microtime( TRUE );
    foreach( $test_indexes as $test_index ) {
        $value = $array[ $test_index ];
        unset( $value );
    }
    $stop = microtime( TRUE );
    unset( $array, $test_indexes, $test_index );

    printf( "%d,%1.15f\n", $i, $stop - $start ); //time per 1mil lookups
    unset( $stop, $start );
}