<?php
$birthDateDaniel = new DateTimeImmutable("1982-05-11 10:15:00 Europe/Bucharest");
$birthDateAlexandra = new DateTimeImmutable("2014-12-17 07:14:00 Europe/Paris");
$nowBaiaMare = new DateTime('now', new DateTimeZone('Europe/Bucharest'));
echo "<br><br>";
echo 'Now in <strong>Baia Mare</strong> is '.$nowBaiaMare->format('l jS \of F Y h:i:s A');
echo "<br><br>";
$ageDaniel = date_diff($birthDateDaniel, $nowBaiaMare);
echo '<strong>Daniel</strong> your age is '.$ageDaniel->format('%y-years %m-months %d-days %h-hours %i-minutes %s-seconds<br><br>');
echo "<br><br>";
$nowParis = new DateTime('now', new DateTimeZone('Europe/Paris'));
echo 'Now in <strong>Paris</strong> is '.$nowParis->format('l jS \of F Y h:i:s A');
echo "<br><br>";

$ageAlexandra = date_diff($birthDateAlexandra, $nowParis);
echo '<strong>Alexandra</strong> your age is '.$ageAlexandra->format('%y-years %m-months %d-days %h-hours %i-minutes %s-seconds');
$birthDayAlexandra = new DateTimeImmutable("2023-12-17 07:14:00 Europe/Paris");
$timeToAlexandraBirthDay = date_diff($nowParis, $birthDayAlexandra);
echo '<br><br>Countdown till <strong>Alexandra</strong> birthday is : '.$timeToAlexandraBirthDay->format('%y-years %m-months %d-days %h-hours %i-minutes %s-seconds');
//$page = $_SERVER['PHP_SELF'];
//$sec = "1";
?>
<html>
    <head>
    <meta http-equiv="refresh" content="1">
    <title>How old are you?</title>
    </head>
    <body>
    <?php
        echo "<br><br><br><br>Watch the page reload itself in 1 second!";
    ?>
    </body>
</html>