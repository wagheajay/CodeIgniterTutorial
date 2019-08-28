<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data from controller</title>
</head>
<body>

<h3>

<?php

    //showing data from controller to view 

      foreach($result as $obj){

        echo $obj->id. "<br>";
        echo $obj->username . "<br>";
        echo $obj->password . "<br>";
      }



?>
</h1>
    
</body>
</html>