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
    echo "Welcome to Canada";
    


?>