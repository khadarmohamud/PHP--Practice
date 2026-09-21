<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>   
<body>
    <?php
    $name="khadar mohamud" ;
    echo  $name ;
    echo "<br>" ;

    $marks = 100;
    $pass = 100 ;
    
    if ($marks >= $pass) {
        echo "pass" ;
    } 
    else {
        echo "failed" ;
    } 
    echo "<br>" ;
$day = 3;

switch ($day) {
    case 1:
        echo "Monday";
        break;

    case 2:
        echo "Tuesday";
        break;
    default:
        echo "Invalid Day";
}

    ?>
</body>
</html>