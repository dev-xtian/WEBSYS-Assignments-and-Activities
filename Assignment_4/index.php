<?php

    session_start();

    $errors = [];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $firstName = trim($_POST["firstName"]);
        $lastName = trim($_POST["lastName"]);
        $city = trim($_POST['city']);
        $region = trim($_POST['region']);
        $postcode = trim($_POST['postcode']);
        $phone = trim($_POST['phoneNumber']);
        $email = trim($_POST['email']);
        $school = trim($_POST['school']);
        $citySchool = trim($_POST['citySchool']);
        $field = trim($_POST['field']);
        $qualification = trim($_POST['qualification']);
        $skills = $_POST['skills'] ?? [];
        $objective = trim($_POST['objective']);
        $jobTitle = trim($_POST['jobTitle']);
        $employer = trim($_POST['employer']);
        $startDate = trim($_POST['startDate']);
        $endDate = trim($_POST['endDate']);
        

        if(empty($firstName)){
            $errors["firstName"] = "First name is required";
        }

        if(empty($lastName)){
            $errors["lastName"] = "Last name is required";
        }

        if(empty($city)){
            $errors["city"] = "City is required";
        }

        if(empty($region)){
            $errors["region"] = "Region is required";
        }

        if(empty($postcode)){
            $errors["postcode"] = "Postcode is required";
        }

        if(empty($phone)){
            $errors["phone"] = "First name is required";
        }

        if(empty($email)){
            $errors["email"] = "Email is required";
        }

        if(empty($school)){
            $errors["school"] = "School is required";
        }

        if(empty($citySchool)){
            $errors["citySchool"] = "City is required";
        }

        if(empty($field)){
            $errors["field"] = "Field is required";
        }

        if(empty($qualification)){
            $errors["qualification"] = "Field is required";
        }

        if(count($skills) <=2){
            $errors["skills"] = "Select atleast 3 skills";
        }

        if(empty($objective)){
            $errors["objective"] = "Objective is required";
        }

        if(empty($errors)){
            $_SESSION['firstName'] = $firstName;
            $_SESSION['lastName'] = $lastName;
            $_SESSION['city'] = $city;
            $_SESSION['region'] = $region;
            $_SESSION['postcode'] = $postcode;
            $_SESSION['phone'] = $phone;
            $_SESSION['email'] = $email;
            $_SESSION['school'] = $school;
            $_SESSION['citySchool'] = $citySchool;
            $_SESSION['field'] = $field;
            $_SESSION['qualification'] = $qualification;
            $_SESSION['skills'] = $skills;
            $_SESSION['objective'] = $objective;
            $_SESSION['jobTitle'] = $jobTitle;
            $_SESSION['employer'] = $employer;
            $_SESSION['startDate'] = $startDate;
            $_SESSION['endDate'] = $endDate;

            
            header("Location: result.php");
            exit();
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .form {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            padding: 20px;
            border-radius: 5px;
            width: 900px;
            margin: 0 auto;

        }

        .top{
            background-color: #3a8bdd;
            display: flex;
            justify-content: center;
            padding: 50px;
        }

        body {
            margin: 0px;
            padding: 0px;
        }

        .pfp{
            width: 150px;
            length: 150px;
        }

        
    </style>
</head>
<body>
    
    <h1 class="top">Resume Generator</h1>
    <div class="form container my-4">
        <form method="POST" class="row g-3 form-sm" onsubmit="return validateForm()">
            
            <div class="container m-1 my-5">
                <h2>How do you want recruiters to contact you?</h2>
                <div class="row g-1 m-3">
                    <div class="col-md-3">
                        <img class="pfp" src="images/pfp.png"  alt="profile picture">
                        <div class="container m-2">
                            <button disabled>Upload Photo</button>
                        </div>
                        
                    </div>
                    <div class="col-md-9">
                        <div class="row my-4">
                            <div class="col-md-6">
                                <label class="form-label" for="name">First name</label>
                                <input id="fn" type="text" class="form-control" name="firstName" placeholder="John">
                                <span style="color:red"><?= $errors["firstName"] ?? "" ?></span>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="name">Last name</label>
                                <input id="ln" type="text" class="form-control" name="lastName" placeholder="Cruz">
                                <span style="color:red"><?= $errors["lastName"] ?? "" ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label" for="name">City</label>
                                <input id="city" type="text" class="form-control" name="city" placeholder="Urdaneta City">
                                <span style="color:red"><?= $errors["city"] ?? "" ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-1 m-2 my-4">
                    <div class="row">
                        <div class="col-md-6 ">
                            <label  class="form-label">County/Region</label>
                            <input id ="region" type="text" class="form-control" name="region" placeholder="Pangasinan" >
                            <span style="color:red"><?= $errors["region"] ?? "" ?></span>
                        </div>
                    
                         <div class="col-md-6 ">
                            <label  class="form-label">Postcode</label>
                            <input  id="postcode" type="text" name="postcode" class="form-control" placeholder="0000" >
                            <span style="color:red"><?= $errors["postcode"] ?? "" ?></span>
                        </div>
                    </div>
                </div>
                <div class="row g-1 m-2 my-4">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" class="form-control" name="email" placeholder="example@gmail.com" >
                            <span style="color:red"><?= $errors["email"] ?? "" ?></span>
                        </div>
                    
                         <div class="col-md-6">
                            <label for="pNumber" class="form-label">Phone</label>
                            <input id="phone" type="text" name="phoneNumber" class="form-control" placeholder="Enter Your Phone Number" >
                            <span style="color:red"><?= $errors["phone"] ?? "" ?></span>
                        </div>
                    </div>
                </div>
                
            </div>
            <hr>
            
            <div class="container m-1 my-5">
                <h2>Add your experience (optional)</h2>
                <div class="row g-1 m-2 my-4">
                    <div class="row">
                        <div class="col-md-6">
                            <label  class="form-label">Job title</label>
                            <input id ="jobTitle" type="text" class="form-control" name="jobTitle" placeholder="Cashier" >
                        </div>
                    
                         <div class="col-md-6">
                            <label  class="form-label">Employer</label>
                            <input  id="employer" type="text" name="employer" class="form-control" placeholder="McDonalds" >
                        </div>
                    </div>
                </div>
                <div class="row g-1 m-2 my-4">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="form-label">Start date</label>
                            <input type="month" name="startDate" class="form-control">
                        </div>
                    
                         <div class="year col-md-6">
                            <label for="" class="form-label">End date</label>   
                            <input type="month" name="endDate" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container m-1 my-5">
                <h2>Tell us about your education</h2>
                <div class="row g-1 m-2 my-4">
                    <div class="row">
                        <div class="col-md-6">
                            <label  class="form-label">Institution</label>
                            <input id ="school" type="text" class="form-control" name="school" placeholder="Pangasinan State University - UCC" >
                            <span style="color:red"><?= $errors["school"] ?? "" ?></span>
                        </div>
                    
                         <div class="col-md-6 ">
                            <label  class="form-label">City</label>
                            <input  id="citySchool" type="text" name="citySchool" class="form-control" placeholder="Urdaneta City">
                            <span style="color:red"><?= $errors["citySchool"] ?? "" ?></span>
                        </div>
                    </div>
                </div>
                <div class="row g-1 m-2 my-4">
                    <div class="row">
                        <div class="col-md-6">
                            <label  class="form-label">Field of study</label>
                            <input id ="field" type="text" class="form-control" name="field" placeholder="Information Technology" >
                            <span style="color:red"><?= $errors["field"] ?? "" ?></span>
                        </div>
                         <div class="col-md-6">
                            <label  class="form-label">Qualification</label>
                            <select name="qualification" id="qualification" class="form-control">
                                <option value="" selected>Select</option>
                                <option value="Level I: NC I ">Level I: National Certificate I (NC I) for basic routine skills.</option>
                                <option value="Level II: NC II">Level II: National Certificate II (NC II) for familiar, predictable practical tasks.</option>
                                <option value="Level III: NC III">Level III: National Certificate III (NC III) for complex or independent operational tasks.</option>
                                <option value="Level IV: NC IV">Level IV: National Certificate IV (NC IV) for supervisory technical skills.</option>
                                <option value="Level V: Diploma">Level V: Diploma programs bridging vocational and higher education.</option>
                                <option value="Level VI: Baccaluareate">Level VI: Baccalaureate (Bachelor's) degree level.</option>
                                <option value="Level VII: Post-Baccaluareate/master's">Level VII: Post-Baccalaureate and Master's degree level.</option>
                                <option value="Level VIII Doctorate">Level VIII: Doctorate and Post-Doctoral level.</option>
                            </select>
                            <span style="color:red"><?= $errors["qualification"] ?? "" ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div id="skillContainer" class="container m-1 my-5">
                <h2>Add your skills</h2>
                <div class="row g-1 m-2 my-4">
                    <div class="row">
                        <div class="col-md-4">
                            <input value="Communication skills" type="checkbox" class="skills" name="skills[]">
                            <label  class="form-label">Communication skills</label>
                        </div>
                         <div class="col-md-4">
                            <input value="Problem-solving" type="checkbox" class="skills" name="skills[]">
                            <label  class="form-label">Problem-solving</label>
                        </div>
                        <div class="col-md-4">
                            <input value="Willingness to learn" type="checkbox" class="skills" name="skills[]">
                            <label  class="form-label">Willingness to learn</label>
                        </div>
                    </div>
                </div>
                <div class="row g-1 m-2 my-4">
                    <div class="row">
                        <div class="col-md-4">
                            <input value="Calm under pressure" type="checkbox" class="skills" name="skills[]">
                            <label  class="form-label">Calm under pressure</label>
                        </div>
                         <div class="col-md-4">
                            <input value="Active listening" type="checkbox" class="skills" name="skills[]">
                            <label  class="form-label">Active listening</label>
                        </div>
                        <div class="col-md-4">
                            <input value="Leadership" type="checkbox" class="skills" name="skills[]">
                            <label  class="form-label">Leadership</label>
                        </div>
                    </div>
                </div>
                <div class="row g-1 m-2 my-4">
                    <div class="row">
                        <div class="col-md-4">
                            <input value="Team building" type="checkbox" class="skills" name="skills[]">
                            <label  class="form-label">Team building</label>
                        </div>
                         <div class="col-md-4">
                            <input value="Active listening" type="checkbox" class="skills" name="skills[]">
                            <label  class="form-label">Active listening</label>
                        </div>
                        <div class="col-md-4">
                            <input value="Analytical and critical thinking" type="checkbox" class="skills" name="skills[]">
                            <label  class="form-label">Analytical thinking</label>
                        </div>
                    </div>
                </div>
                <div class="row g-1 m-2 my-4">
                    <div class="row">
                        <div class="col-md-4">
                            <input value="Task collaboration" type="checkbox" class="skills" name="skills[]">
                            <label  class="form-label">Task collaboration</label>
                        </div>
                         <div class="col-md-4">
                            <input value="Deadline management" type="checkbox" class="skills" name="skills[]">
                            <label  class="form-label">Deadline management</label>
                        </div>
                        <div class="col-md-4">
                            <input value="Project planning and coordination" type="checkbox" class="skills" name="skills[]">
                            <label  class="form-label">Project planning</label>
                        </div>
                    </div>
                </div>
                <span id="skillsNotif" style="color:red"><?= $errors["skills"] ?? "" ?></span>
            </div>
            <hr>
            
            <div class="container m-1 my-5">
                <h2>Objectives</h2>
                <div class="mb-3 mx-3">
                    <textarea name="objective" id="objective" class="form-control" rows="5" placeholder="Enter your objectives here"></textarea>
                    <span style="color:red"><?= $errors["objective"] ?? "" ?></span>
                </div>
            </div>

            <div class="container m-1 my-5">
                <div class="row mx-4">
                    <div class="col-md-2">
                        <button type="reset" class="btn btn-primary">Clear</button>
                    </div>
                    <div class="col-md-8"></div>
                    <div class="col-md-2 gx-1">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                

            </div>
        </form>
    </div>
  
 
</body>
</html>

