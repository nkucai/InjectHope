<?php include('config.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Where to get Help</title>
    <?php include('header.php'); ?>
</head>
<body>

<div data-role="page" id="pageone">
    <div data-role="header" data-theme="b">
        <a id="btnHamburger" href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
        <h1>Where to get Help</h1>
        <a id="btn911" href="" data-icon="phone">Call 911</a>
        <img style="width: 100%; max-width: 500px; display: block; margin: auto;" src="images/inject_hope_banner.png">
    </div>

    <div role="main" class="ui-content">
        <img style="width: 100%; max-width: 500px; display: block; margin: auto;" src="images/nky_helpline.png">
        <div data-role="tabs" id="tabs">
            <div data-role="navbar">
                <ul>
                    <li><a href="#needle" data-ajax="false" class="ui-btn-active">Needle Exchange</a></li>
                    <li><a href="#counselors" data-ajax="false">Counselors</a></li>
                    <li><a href="#treatment" data-ajax="false">Treatment Centers</a></li>
                </ul>
            </div>
            <div id="needle">
                <iframe frameborder="0" scrolling="yes" allowfullscreen src="http://nkhd.maps.arcgis.com/apps/Embed/index.html?webmap=c40d190e0d8d4305ba09e0426c652e93&extent=-86.0523,38.2228,-83.358,39.3043&zoom=true&scale=true&legendlayers=true&disable_scroll=true&theme=light"
                        style="overflow: hidden; height: 1000px; width: 100%;" ></iframe>
            </div>
            <div id="counselors">
                <iframe frameborder="0" scrolling="yes" allowfullscreen src="http://nkhd.maps.arcgis.com/apps/Embed/index.html?webmap=a61eb702467245429228adf59c1fe88b&extent=-84.9266,38.8402,-84.253,39.1098&zoom=true&scale=true&legendlayers=true&disable_scroll=true&theme=light"
                        style="overflow: hidden; height: 1000px; width: 100%;" ></iframe>
            </div>
            <div id="treatment">
                <iframe frameborder="0" scrolling="yes" allowfullscreen src="http://nkhd.maps.arcgis.com/apps/Embed/index.html?webmap=3fa403d84f684e19ac65ec333c700795&extent=-84.9486,38.8328,-84.275,39.1024&zoom=true&scale=true&legendlayers=true&disable_scroll=true&theme=light"
                        style="overflow: hidden; height: 1000px; width: 100%;" ></iframe>
            </div>
        </div>
    </div>

    <?php include('menu.php'); ?>
</div>
</body>
</html>
