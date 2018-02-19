<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML5 Template.</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php

include 'challenge_01.php';
?>


<?php

$byc1 = new Bicycle;
$byc1->brand = 'Giant Manufacturing Co. Ltd.';
$byc1->model = 'TCX Cyclocros';
$byc1->year = 2017;
$byc1->img_url = './assets/denali-rb.jpg';
$byc1->description = "Giant Manufacturing Co. Ltd. is a Taiwanese bicycle manufacturer that is the world’s largest bicycle manufacturer. Giant was started started by King Liu in 1972. Giant has manufacturing facilities in Taiwan, the Netherlands, and China.By 2014, Giant had sales in over 50 countries, in over 12,000 retail stores. In 2007, its global sales surpassed 5 million bicycles and US$820 million in global revenue, and by 2012 it had reached 6.3 million bicycles and revenue of US$1.8 billion.";
$byc1->weight_kg = 6.75;
$byc1->weight_lbs = 14.8812;
echo '<section class="byc-desc">';
echo '<h2>' . $byc1->name() . '</h2>';
echo $byc1->description();
echo '<article class="weight-conversion"><div class="desc-lbs"><h3>Weight: ' . round($byc1->weight_lbs(),2) . 'lbs</h3></div>';
echo '<div class="desc-kgs"><h3>Weight: ' . round($byc1->set_weight_lbs($byc1->weight_lbs),2) . 'kgs</h3></div></article>';
echo '</section>';
?>


</body>
</html>
