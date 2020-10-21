<?php

function MainDisplay($start_date, $end_date, $week_day) {
    
    $generateDateDayRange = generateDateDayRange($start_date, $end_date);

    foreach ($generateDateDayRange as $key => $value) {
        
        $date_day = explode("/", $value);
        
        if($week_day == $date_day[1]){
                        
            $api_data = file_get_contents('https://jsonmock.hackerrank.com/api/stocks/?date='.$date_day[0]);
            
            $json_response = json_decode($api_data, true); 
   
            if(!empty($json_response["data"][0]['date'])){
                echo $json_response["data"][0]['date']." ". $json_response["data"][0]['open']. " " .$json_response["data"][0]['close'] ." <br>";
            }   
            
        }
        
        
    }
    
    
}

function generateDateDayRange($start_date, $end_date, $day_step = '+1 day', $date_format_output = 'j-F-Y/l' ) {
    
    $start_date = strtotime($start_date);
    $end_date = strtotime($end_date);
    $return_dates = array();

    while( $start_date <= $end_date ) {

        $return_dates[] = date($date_format_output, $start_date);
        $start_date = strtotime($day_step, $start_date);
    }
    
    return $return_dates;
}

$start_date = trim(fgets(STDIN), "\r\n");
$end_date = trim(fgets(STDIN), "\r\n");
$week_day = trim(fgets(STDIN), "\r\n");

MainDisplay($start_date,$end_date, $week_day);
