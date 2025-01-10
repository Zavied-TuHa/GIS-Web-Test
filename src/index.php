<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://openlayers.org/en/v4.6.5/build/ol.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
    <!-- đường dẫn project -->
    <?php include './baseURL.php'; ?>
    <!--script và css index-->
    <script src="<?= $baseURL ?>/js/index.js"></script>
    <link rel="stylesheet" href="<?= $baseURL ?>/css/index.css">
    <title>WEB_GIS</title>
</head>

<body onLoad="initMap();">
    <div class="map" id="map"></div>
    <?php include './DB_Connection.php'; ?>
    <?php include './menuStart.php'; ?>
    <?php include './menuFeature.php'; ?>
</body>

</html>