<form>
    <h2>E-commerce Discount Tier</h2>
    <input type="number" name="totalPrice" placeholder="Enter The Total Puchase amount">
    <button type="submit">submit</button>
    <button type="reset">clear</button>
</form>

<?php 
    $totalPrice = $_GET['totalPrice'] ?? null;
    $discount = 0;

    
    if($totalPrice >= 50 && $totalPrice <=99.99){
        $discount = $totalPrice*0.10;
    }else if($totalPrice >= 100 && $totalPrice <=199.99){
        $discount = $totalPrice*0.15;
    }else if($totalPrice>=200){
        $discount = $totalPrice*0.20;
    }

    
    if($totalPrice != null){
        echo "Original price: $totalPrice<br>Discount amount: $discount<br>Final price: ".($totalPrice-$discount);
    }

    
?>