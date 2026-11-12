<?php
require 'config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM users
        INNER JOIN user_course ON users.user_ID = user_course.user_ID
        WHERE users.user_ID = '$id'";

$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);

$courses = mysqli_query($mysqli, "SELECT * FROM course");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card p-4">
        <h3>Edit Student</h3>

        <form action="update.php" method="POST">

            <input type="hidden" name="user_id"
                   value="<?php echo $row['user_ID']; ?>">

            <label>First Name</label>
            <input type="text" name="firstname" class="form-control mb-3"
                   value="<?php echo $row['Firstname']; ?>" required>

            <label>Middle Name</label>
            <input type="text" name="middlename" class="form-control mb-3"
                   value="<?php echo $row['Middlename']; ?>">

            <label>Last Name</label>
            <input type="text" name="lastname" class="form-control mb-3"
                   value="<?php echo $row['Lastname']; ?>" required>

            <label>Birthdate</label>
            <input type="date" name="birthdate" class="form-control mb-3"
                   value="<?php echo $row['Birthdate']; ?>" required>

            <label>Gender</label>
            <select name="gender" class="form-select mb-3">
                <option value="M" <?php if($row['Gender'] == 'M') echo 'selected'; ?>>Male</option>
                <option value="F" <?php if($row['Gender'] == 'F') echo 'selected'; ?>>Female</option>
            </select>

            <label>Email</label>
            <input type="email" name="email" class="form-control mb-3"
                   value="<?php echo $row['Email']; ?>" required>

            <label>Course</label>
            <select name="course_id" class="form-select mb-3">
                <?php while($course = mysqli_fetch_assoc($courses)) { ?>
                    <option value="<?php echo $course['Course_ID']; ?>"
                        <?php if($course['Course_ID'] == $row['course_ID']) echo 'selected'; ?>>
                        <?php echo $course['name']; ?>
                    </option>
                <?php } ?>
            </select>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>

        </form>
    </div>
</div>

</body>
</html>