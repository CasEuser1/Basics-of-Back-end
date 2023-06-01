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

$t = date("H");

echo '<div id="output">';
if ($t < "12") {
    echo "Goede morgen!";
    $images = "morning.png";
} 

elseif ($t < "18") {
    echo "Goede middag!";
    $images = "afternoon.png";
}

elseif ($t < "24") {
    echo "Goede avond!";
    $images = "evening.png";
}

elseif ($t < "6") {
    echo "Goede nacht!";
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
    @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

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