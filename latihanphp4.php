<html>
    <head>
        <title>Latihan PHP 4</title>
    <head>
<body>
<?php
$d=date("D");
if ($d=="Fri") {
    echo "Have a nice weekend!";
} elseif ($d=="Sun") {
echo "Have a nice Sunday!";
} elseif ($d=="Wed") {
echo "Have a nice Study!";
} else {
echo "Have a nice day!";
}
?>
</body>
</html>