<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php
date_default_timezone_set('europe/amsterdam');
$today = date("H:i");

$tijd = date("H");

echo '<div id="output">';
if ($tijd < "12") {
    echo "Goeie morgen!";
    $images = "morning.png";
} 

elseif ($tijd < "18") {
    echo "Goeie middag!";
    $images = "afternoon.png";
}

elseif ($tijd < "24") {
    echo "Goeie avond!";
    $images = "evening.png";
}

elseif ($tijd < "6") {
    echo "Goeie nacht!";
    $images = "night.png";
}
'</div>';
echo '<div id="tijd">';
echo "Het is nu $today";
'</div>';
?>
</head>
<body>
<style>
    body {
        background-image: url('images/<?php echo $images; ?>');
        background-repeat: no-repeat; 
        background-size: cover;
    }

    #output {
        font-family: 'Pacifico', cursive;
        color: white;
        font-size: 200%;
        width: 250px;
        position: relative;
        left: 44%;
        top: 250px;
    }
</style>
</body>
</html>