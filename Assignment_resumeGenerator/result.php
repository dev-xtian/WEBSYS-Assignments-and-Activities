<?php
    $name = $_GET['fullName'] ?? '';
    $program = $_GET['program'] ?? '';
    $email = $_GET['email'] ?? '';
    $phoneNumber = $_GET['phoneNumber'] ?? '';
    $address = $_GET['address'] ?? '';
    $linkedIn = $_GET['linkedIn'] ?? '';
    $school = $_GET['school'] ?? '';
    $gwa = $_GET['gwa'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .main {
            border: 1px solid black;
        }

        .main2 {
            display: flex;
            justify-content: center;
            padding-top: 20px; 
            
        }
        #contact{
            border-right: 1px solid black;
            
        }
        .top{
            border-bottom: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="main container my-4">
        <div class="top row py-5">
            <div class="main2 col-12">
                <h2><?php echo $name ?></h2>
            </div>
        </div>
        <div class="container">
            <div class="row g-2">
                <div id="contact" class="col-4 p-5">
                    <h3>Contact</h3>
                    <h4><li><?php echo $phoneNumber ?></li></h4>
                    <h4><li><?php echo $address ?></li></h4>
                    <h4><li><?php echo $email ?></li></h4>
                    <h4><li><?php echo $linkedIn ?></li></h4>
                </div>
                <div class="col-8 p-5">
                    <div class="row">
                        <h3>Career Objective</h3>
                        <?php
                            $careerTrack = "";

                            if($program=="BS Information Technology"){
                                $careerTrack.="System Administrator";
                                echo "<p style='font-size:15pt'>A motivated $program student seeking an entry-level position as a 
                                $careerTrack where I can apply my knowledge of network administration, system maintenance, troubleshooting, and IT infrastructure. I aim to develop my technical skills, contribute to reliable and secure systems, and grow professionally in the field of system administration.</p>";
                            }else{
                                $careerTrack.="Software Developer";
                                echo "<p style='font-size:15pt'>A motivated $program student seeking an entry-level position as a $careerTrack where I can apply my knowledge of programming, software development, problem-solving, and database management. I aim to continuously improve my technical skills, contribute to the development of reliable and efficient software solutions, and grow professionally in the field of software development.</p>";
                            }
                            
                        ?>
                        <hr>
                    </div>
                    <div class="row">
                        <h3>Technical Skills</h3>
                        <?php
                            if($careerTrack == "System Administrator"){
                                echo "<ul style='font-size:14pt'>
                                        <li>Network Configuration</li>
                                        <li>Hardware Troubleshooting</li>
                                        <li>Linux Administration</li>
                                        <li>Server Management</li>
                                      </ul>";
                            }else{
                                echo "<ul style='font-size:14pt'>
                                        <li>PHP</li>
                                        <li>MySQL</li>
                                        <li>Conditional Logic</li>
                                        <li>Object-Oriented Programming</li>
                                      </ul>";
                            }
                        ?>
                        <hr>
                    </div>

                    <div class="row">
                        <h3>Educatoin</h3>
                        <?php
                            echo "<ul style='font-size:14pt'>
                                        <li>$school</li>
                                        <li>GWA: $gwa</li>
                                   </ul>"
                        ?>

                    </div>
                    
                </div>
            </div>
        
        </div>
        

    </div>
    
</body>
</html>