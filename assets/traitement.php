<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

   $name = $_POST['nom'];
   $prenom = $_POST['prenom'];
   $date = $_POST['date-de-naissance'];
   echo ("bonjour $name $prenom ");

   $aujourdhui = date("Y-m-d");
   $diff = date_diff(date_create($date), date_create($aujourdhui));
   
   $age = $diff->format('%y');
   echo $age;
if ($age >= 18) {
    echo ("+ 18");
    
}
else { 
    echo ("- 18"); 
}

?>


</body>
</html>