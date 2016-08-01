<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
        </title>
    </head>
    <body>
        <div>
            <?php echo "IP - " .  $_SERVER['REMOTE_ADDR']; ?> </br>
            <?php echo "Страна - " . $_SERVER['GEOIP_COUNTRY_NAME']; ?> </br>
            <?php echo "Версия - " . phpversion();?> </br>
        </div>
    </body>
</html>


