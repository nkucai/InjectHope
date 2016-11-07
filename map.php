<?php include('config.php'); ?>
<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Map</title>
    <?php include('header.php'); ?>
</head>
<body>

<div data-role="page" id="pageone">
    <div data-role="header" data-theme="b">
        <a id="btnHamburger" href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
        <h1>Map</h1>
        <a id="btn911" href="" data-icon="phone">Call 911</a>
        <img style="width: 100%; max-width: 500px; display: block; margin: auto;" src="images/inject_hope_banner.png">
    </div>

    <div role="main" class="ui-content">
        <iframe frameborder="0" scrolling="no" allowfullscreen src="http://nkhd.maps.arcgis.com/apps/webappviewer/index.html?id=d97aaa516363496d81d0bff8d79b4fe8"
        style="overflow: hidden; height: 100%; width: 100%; position: absolute" ></iframe>
    </div>

    <?php include('menu.php'); ?>
</body>
</html>
