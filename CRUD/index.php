<?php 
    require 'config.php';

    $users = [];
    $where = "";

    if(isset($_GET['nagan'])){
        if($_GET['nagan']){
            $where.=" AND Lastname like '%".$_GET['nagan']."%'";
            $where.=" OR Users.Firstname like '%".$_GET['nagan']."%'";
            $where.=" OR Users.Middlename like '%".$_GET['nagan']."%'";
            $where.=" OR Course.Description like '%".$_GET['nagan']."%'";
            $where.=" OR Course.course_code like '%".$_GET['nagan']."%'";
        }

        if($_GET['gender']){
            $where .= " AND Gender = '".$_GET['gender']."'";
        }

        if($_GET['date']){
            $where.= " AND DATE(Date_Created) = '".$_GET['date']."'";
        }
    }

    $sql = "SELECT
                    Users.user_ID,
                    Users.Firstname,
                    Users.Middlename,
                    Users.Lastname,
                    Users.Birthdate,
                    Users.Gender,
                    Users.Email,
                    Users.Date_Created,
                    Course.Course_ID,
                    Course.name,
                    Course.description,
                    Course.course_code,
                    Course.status

                FROM Users

                INNER JOIN User_Course
                    ON Users.user_ID = User_Course.user_ID

                INNER JOIN Course
                    ON User_Course.course_ID = Course.Course_ID
                WHERE 1=1 $where ORDER BY user_ID DESC;";
    
    if($result = mysqli_query($mysqli, $sql)) {
        while ($row = mysqli_fetch_assoc($result)){
            $users[] = $row;
            
        }
    } else {
        die('Query error: '.mysqli_error($mysqli));
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light">
		<div class="container py-5">
			<div class="d-flex justify-content-between align-items-center mb-3">
				<h1 class="h3">Students Records</h1>
				<a href="add.php" class="btn btn-primary">+ Add Student</a>
			</div>
			
			<?php if(count($users) === 0): ?>
				<div class="alert alert-info">No records Found.</div>
			<?php else: ?>
				<form > 
					Filter : 
					<input type="text" name="nagan" placeholder="Search Name,description,course code...">
					<select name="gender">
						<option value="">Select Gender</option>
						<option value="m">Male</option>
						<option value="f">Female</option>
					</select>
					<input type="date" name="date" >
					<input type="submit" value="Search">
				</form>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
						<th>User ID</th>
						<th>Last Name</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Birthdate</th>
						<th>Gender</th>
						<th>Email</th>
                        <th>Date Created</th>
                        <th>Course ID</th>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Course Code</th>
                        <th>status(on/off)</th>
                        <th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($users as $c): ?>
						<tr>
							<td><?php echo htmlspecialchars($c['user_ID']); ?></td>
							<td><?php echo htmlspecialchars($c['Firstname']); ?></td>
							<td><?php echo htmlspecialchars($c['Lastname']); ?></td>
							<td><?php echo htmlspecialchars($c['Middlename']); ?></td>
							<td><?php echo htmlspecialchars($c['Birthdate']); ?></td>
                            <td><?php 
								if ($c['Gender']=="F") { echo "FEMALE";}else{echo "MALE";} ?></td>
                            <td><?php echo htmlspecialchars($c['Email']); ?></td>
                            <td><?php echo htmlspecialchars($c['Date_Created']); ?></td>
                            <td><?php echo htmlspecialchars($c['Course_ID']); ?></td>
                            <td><?php echo htmlspecialchars($c['name']); ?></td>
                            <td><?php echo htmlspecialchars($c['description']); ?></td>
                            <td><?php echo htmlspecialchars($c['course_code']); ?></td>
                            <td><?php echo htmlspecialchars($c['status']); ?></td>
							<td>
							<a href="edit.php?id=<?php echo $c['user_ID']; ?>" class="btn btn-sm btn-warning">Edit</a>
							<a href="delete.php?id=<?php echo $c['user_ID']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this contact?');">Delete</a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			<?php endif; ?>
		</div>
	</body>
</html>