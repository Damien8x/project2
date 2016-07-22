<!DOCTYPE>
<HTML>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
   
    
    <form action="index.php" method="post">
        
        <h3>Watchya Want?</h3>
        
     <div class="burgerChoice">
         
    <select id="burger" name="burger">                      
<option value="0">Please Select A burger</option>
<option value="Beef">Beef 6.75</option>
<option value="Chicken">Chicken 6.75</option>
<option value="Fish">Fish 8.95</option>
<option value="Veggie">Veggie 4.95</option>
</select>
           
</div> 
  
        
        <p> 
       <label><input type="checkbox" name="pickles" value="pickles">Pickles</label>
        <label><input type="checkbox" name="tomato" value="tomato">Tomato</label>
         <label><input type="checkbox" name="onion" value="onion">Onions</label>
       </p>
         <p> 
       <label><input type="checkbox" name="lettuce" value="lettuce">lettuce</label>
        <label><input type="checkbox" name="mayo" value="mayo">Mayo</label>
         <label><input type="checkbox" name="mustard" value="mustard">Mustard</label>
       </p>
        <p> For a little extra (add $1) </p>
        <p>
       <label><input type="checkbox" name="cheese" value="cheese">Cheese (it's cheddar)</label>
        <label><input type="checkbox" name="bacon" value="bacon">Bacon</label>
         <label><input type="checkbox" name="guacamole" value="guacamole">Guacamole</label>
       </p>
        <input class="btn" type=submit value="Let's Make A Burger!" name="submit"/>
            <?php
        class Burgers {
            public $burgerType;
            public $pickles;
            public $tomato;
            public $onion;
            public $lettuce;
            public $mayo;
            public $mustard;
            public $cheese;
            public $bacon;
            public $guacamole;
            
            public function __construct($burgerType, $pickles, $tomato, $onion, $lettuce, $mayo, $mustard, $cheese, $bacon, $guacamole){
                
                $this->burgerType = $burgerType;
                $this->pickles= $pickles;
                $this->tomato = $tomato;
                $this->onion = $onion;
                $this->lettuce = $lettuce;
                $this->mayo = $mayo;
                $this->mustard = $mustard;
                $this->cheese = $cheese;
                $this->bacon = $bacon;
                $this->guacamole = $guacamole;
            }
        }
    
   if(isset($_POST['submit'])){
                $burgerType = $_POST['burger'];
                $pickles= $_POST['pickles'];
                $tomato = $_POST['tomato'];
                $onion = $_POST['onion'];
                $lettuce = $_POST['lettuce'];
                $mayo = $_POST['mayo'];
                $mustard = $_POST['mustard'];
                $cheese = $_POST['cheese'];
                $bacon = $_POST['bacon'];
                $guacamole = $_POST['guacamole'];
        $burger = new Burgers($burgerType, $pickles, $tomato, $onion, $lettuce, $mayo, $mustard, $cheese, $bacon, $guacamole);
$subtotal= 0;  
      
       if($burgerType == "Beef" || $burgerType == "Chicken"){
           $burgerAmount = 6.75;
       }else if($burgerType == "Fish"){
           $burgerAmount = 8.95;
       }else if($burgerType =="Veggie"){
           $burgerAmount =4.95;
       }else{
           $burgerAmount=0;
       }
     
?>
    <div class = "burger">
   <img class="pic" src="image/burgerTop.png">
    <h3><?php echo $burgerType; ?></h3>
     <?php   if (isset($_POST['pickles'])){
   ?> <p>pickles</p> <?php
} ?>
 <?php   if (isset($_POST['tomato'])){
   ?> <p>Tomato</p> <?php
} ?>
     <?php   if (isset($_POST['onion'])){
   ?> <p>Onion</p> <?php
} ?>
     <?php   if (isset($_POST['lettuce'])){
   ?> <p>lettuce</p> <?php
} ?>
     <?php   if (isset($_POST['mayo'])){
   ?> <p>Mayo</p> <?php
} ?>
     <?php   if (isset($_POST['mustard'])){
   ?> <p>Mustard</p> <?php
} ?>
     <?php   if (isset($_POST['cheese'])){
   ?> <p>Cheese (that'll be a buck)</p> <?php
    $subtotal = $subtotal +1;
} ?>
     <?php   if (isset($_POST['bacon'])){
   ?> <p>Bacon (that'll be a buck)</p> <?php
    $subtotal = $subtotal +1;
} ?>
     <?php   if (isset($_POST['guacamole'])){
   ?> <p>Guacamole (that'll be a buck) </p> <?php
    $subtotal = $subtotal +1;
   
} 
        
        ?>
       
<?php  
$subtotal = $subtotal + $burgerAmount;
$tax = $subtotal*.096;
$taxFormatted = number_format($tax, 2);
$total = $subtotal + $tax; 
$totalFormatted = number_format($total, 2);
 ?>
    <img class= "pic" src= "image/burgerBottom.png">
  <h3>Now That's a Tasty Burger!</h3>
</div>
<p>Subtotal:    $<?php echo $subtotal ?></p>
<p>Tax:     $<?php echo $taxFormatted; ?></p>
<p>Total:   $<?php echo $totalFormatted; ?></p>
 <?php     } ?>
    </form>
    


</body>
</HTML>