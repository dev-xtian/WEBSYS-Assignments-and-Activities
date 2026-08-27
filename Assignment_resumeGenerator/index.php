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
    </style>
</head>
<body>

    <h1 class="top">Resume Generator</h1>
    <div class="form container my-4">
        <form action="result.php" method="get" class="row g-3">
            <h2>Enter you personal Details</h2>
            <div class="col-md-8">
                <label class="form-label" for="name">Name</label>
                <input type="text" class="form-control" name="fullName" placeholder="Enter your Full Name" required>
            </div>
            <h3>Contact</h3>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="example@gmail.com" required>
            </div>
            <div class="col-md-6">
                <label for="pNumber" class="form-label">Phone</label>
                <input type="text" name="phoneNumber" class="form-control" placeholder="Enter Your Phone Number" required>
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Enter Your Permanent Address" required>
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">LinkedIn</label>
                <input type="text" class="form-control" name="linkedIn" placeholder="Paste Your LinkedIn Profile Here" required>
            </div>
            
            <h3>Education</h3>
            <div class="col-md-5">
                <label for="" class="form-label">University</label>
                <input type="text" name="school" class="form-control" placeholder="University that you have graduated" required>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">GWA</label>
                <input type="text" class="form-control" name="gwa" id="" placeholder="Enter Your GWA">

            </div>
            <div class="col-md-4">
                <label for="" class="form-label">Program</label>
                <select name="program" id="" class="form-select">
                    <option value="BS Information Technology" selected>BS Information Technology</option>
                    <option value="BS Computer Science">BS Computer Science</option>
                </select>
            </div>
            <div class="col-md-1 gx-1">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-md-11">
                <button type="reset" class="btn btn-primary">Clear</button>
            </div>
        </form>
    </div>
  

</body>
</html>
