<?php
    $fullName = "Christian L. De Vera";
    $email = "24ur0336@psu.edu.ph";
    $phoneNumber = "09948644820";
    $parentsName = "Saturnino E. De Vera";
    $contactNumber = "09096682528";
    $program = "BS Information Technology";
    $photo = "photo.jiff";
    
    echo "<h2>".$fullName."</h2>";
    
    $careerTrack ="";

    if($program == "Bs Information Technology"){
        $careerTrack = "System Administrator";
    }else{
        $careerTrack = "Software Developer";
    }



?>