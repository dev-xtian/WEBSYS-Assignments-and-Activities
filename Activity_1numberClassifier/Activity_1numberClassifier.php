<form>
    <h2>Number Classifier</h2>
    <input type="number" name="num1" placeholder="Enter a number here">
    <button type="submit">Submit</button>
    <button type="reset">reset</button>
</form>
<?php 

    $number = $_GET['num1'] ?? null;
    if($number!=null){
        echo "Number: $number"; 

        if($number>0){
            echo '<h3>The number is positive.</h3>';
            if($number%2==0){
                echo 'even';
            }else{
                echo 'odd';
            }
        }else if($number==0){
            echo '<h3>The number is zero.</h3>'; 
        }else{
            echo '<h3>The number is negative.</h3>';
        }      
    }  
    
?>