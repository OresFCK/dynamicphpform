<?php 
if(isset($_POST["option1"])){
    echo "750";
   }else{
    if($_POST["powierzchnia"] > 1){
        echo 750 + $_POST["powierzchnia"] * 250;
    }else
    {
        echo 750;   
    }
   }


?>