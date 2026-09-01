<form>
	<input type="text" placeholder="Enter Name" name="pangalan">
    <input type="text" placeholder="Enter Subject" name="subject">
    <select name="gender">
		<option value="1" selected>Male</option>
		<option value="2" >Female</option>
	</select>
    <input type="number" placeholder="Enter your Score" name ="score">
	<input type="submit">
</form>

<?php
    $name = $_GET['pangalan'] ?? '';
    $subject = $_GET['subject'] ?? '';
    $gender="";

    if($_GET['gender'] ?? ''== 1){
        $gender="Male";
    }else{
        $gender="Female";
    }

    $score = $_GET['score'] ?? null;


    if($score >=90 && $score<=100){
        echo "A";
    }else if($score >=80 && $score<=89){
        echo "B";
    }else if($score >=70 && $score<=79){
        echo "C";
    }else if($score <70 &&$score!=null){
        echo "D";

    }
?>	