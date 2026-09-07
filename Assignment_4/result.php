
<?php
    session_start();

    $fname = $_SESSION['firstName'];
    $lname = $_SESSION['lastName'];
    $city = $_SESSION['city'];
    $region = $_SESSION['region'];
    $postcode = $_SESSION['postcode'];
    $phone = $_SESSION['phone'];
    $email = $_SESSION['email'];
    $school = $_SESSION['school'];
    $citySchool = $_SESSION['citySchool'];
    $field = $_SESSION['field'];
    $qualification = $_SESSION['qualification'] ;
    $skills = $_SESSION['skills'];
    $objective = $_SESSION['objective'];
    $jobTitle = $_SESSION['jobTitle'];
    $employer = $_SESSION['employer'];
    $startDate = $_SESSION['startDate'];
    $endDate = $_SESSION['endDate'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body{
            
        }
        

        .main {
            width: 800px;
            background-color: #f5f4f4;
            padding: 30px;
            length: 1500px;
        }

        .pfp{
            width: 150px;
            length: 150px;
        }

        .contact li{
            list-style-type: none;
            

        }

        .contact, li{
            padding: 5px;
            margin: 1px;
            padding-bottom: 4px;
        }

        .contact img{
            length: 20px;
            width:20px;
        }

        .first{
            padding-bottom: 50px;
        }

        .title{
            
            border-top: 3px solid #3a8bdd;

        }

        .content{
            margin-bottom: 20px;
        }
        .con{
            padding:30px;
        }
    </style>
</head>
<body>
    <div class="main container my-5">
        <div class="row">
            <div class="con col-md-4">
                <div class="row">
                    <div class="first col-12 mx-4">
                        <img class="pfp" src="images/pfp.png" alt="">
                    </div>
                    
                    <div class="title col-12">
                        <h2>Contact</h2>
                    </div>
                    <div class="content col-12">
                        <ul class="contact">
                            <li><img src="images/location.png" alt="location"><?php echo "$city, $region $postcode" ?></li>
                            <li><img src="images/phone-call.png" alt="phone"><?php echo $phone ?></li>
                            <li><img src="images/mail.png" alt="mail"> <?php echo $email?></li>
                        </ul>
                    </div>
                    <div class="title col-12 ">
                        <h2>Skills</h2>
                    </div>
                    <div class="content col-12">
                        <ul>
                            <?php
                            for($i=0 ; $i<count($skills); $i++){
                                echo "<li>".$skills[$i]."</li>";
                            }
                            
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="con col-md-8">
                <div class="row">
                    <div class="col-12 text-center my-4">
                        <h2><?php echo "$fname $lname";?></h2>
                    </div>
                    <div class="title col-12"> 
                        <h2>Objectives</h2>
                    </div>
                    <div class="content col-12">
                        <?php echo $objective;?>
                    </div>
                    <div class="title col-12"> 
                        <h2>Experience</h2>
                    </div>
                    <div class="content col-12">
                        <?php echo "$jobTitle $startDate to $endDate<br>$employer";?>
                    </div>
                    <div class="title col-12"> 
                        <h2>Education</h2>
                    </div>
                    <div class="content col-12">
                        <?php echo "$qualification <br>$school - $citySchool <br>$field";?>
                    </div>

                </div>

            </div>
        </div>
        
    </div>
    
</body>
</html>