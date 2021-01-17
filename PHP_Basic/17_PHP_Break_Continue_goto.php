<?php
    # continue: continue is used within looping to skip the rest of the current loop iteration
    # break: break ends execution of the current for, foreach, while, do-while or swithch structure
    # goto: the goto operator can be used to jump to another section in the program. 
    $countries = [ "Arabic", "Bangladesh", "India", "Canada", "Pakistan", "Australia"];

    foreach($countries as $country){
       
        if($country == "India"){
            continue;
        }
        if($country == "Cadana"){
            goto canada;
        }
        if($country == "Pakistan"){
            break;
        }
        echo $country, "<br>";
    }

    canada:
    echo "Welcome to Canada", "<br>";
    

    # Another popular example;
    # date: format a local time/date
    # N for numeric represation of the day of the week
    $day = date('N');
    
    echo "<hr>", $day, "<hr>";

    switch($day){
        case 1:
            echo "This is the first day (1 for Monday)";
            break;
        case 2:
            echo "This is the second day (2 for Tuesday)";
            break;
        case 3:
            echo "This is the third day( 3 for Wednesday)";
            break;
        case 4:
            echo "This is the fourth day (4 for Thursday";
            break;
        case 5:
            echo "This is the fifth day (5 for Friday)";
            break;
        case 6:
            echo "This is the sixth day (6 for Saturday)";
            break;
        default:
            echo "This is the default day (7 for Sunday)";
            break;
    }


?>