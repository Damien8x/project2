<!DOCTYPE>
<HTML>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
   
    
    <form action="test.php" method="post">
        
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
         <label><input type="checkbox" name="Guacamole" value="guacamole">Guacamole</label>
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