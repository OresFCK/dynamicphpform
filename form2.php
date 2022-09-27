<?php 
    $sum = 0;
    if(isset($_POST["option3"])){
        if(isset($_POST['submit'])){
            if(!empty($_POST['addons'])){
            foreach($_POST['addons'] as $checked){
               $sum += (int)$checked;
            }
            echo " " . $sum + 700;
            }
    }
    }elseif(isset($_POST["option4"])){
        echo $_POST["lokale"] * 450;
    }
?>