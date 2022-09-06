<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>BMI calculator</title>
        <style>
            body{
        background-color: #EAF6F6;  
        }
        h1{
            margin-bottom: 100px;
            text-align: center;
            color: #11999E;
            font-size: 50px;
                
        }
        *{
            font-family: 'Montserrat',cursive;
            font-size: 30px;
            text-align: center;
        }
        
        </style>
        
    </head>
    <body>
        <h1>BMI calculator</h1>
        <form action="index.php" method="post">
            Height:<input type="number" name="height"><br><br>
            Weight:<input type="number" name="weight"><br><br>
            <input type="submit">
        </form>
        <?php
        // put your code here
        $height= $_POST["height"];
        $weight= $_POST["weight"];
        $height=$height/100;
        $bmi=$weight/($height*$height);
        echo 'Bmi is ',$bmi,'<br>';
        if ($bmi>0){
            if($bmi<=16){
                echo 'you are severely underweight';
            }
            else if($bmi<=18.5){
                echo 'you are underweight'; 
            }
            else if($bmi<=25){
                echo 'you are normal';
            }
            else if($bmi<=30){
                echo 'you are overweight';
            }
            else {
                echo 'you are severely overweight';
            }
            }
        else {
                echo 'enter valid details';   
         }
        ?>
        <p class="copy-Rights" >CopyRight &copy; 2022 created by Yadunandan.</p>
    </body>
</html>
