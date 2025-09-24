<html>
    <head>
        <title>Latihan PHP 5</title>
    </head>
    <body>
<?php
$d = date("D");
    switch ($d) {
    case "Fri": 
        echo "Have a nice weekend";
        break;
    case "Sun":
        echo "Have a nice Sunday";
        break;
    case "Wed":
        echo "Have a nice study";
        break;
    default:
        echo "Have a nice day!";
    }
    echo "<br>";
    $x=2;
    switch($x){
        case 1:
            echo "Number 1";
            break;
        case 2:
            echo "Number 2";
            break;
        case 3:
            echo "Number 3";
            break;
        default:
            echo "No Number Between 1 and 3";
    }
?>
</body>
</html>