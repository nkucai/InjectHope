<?php include('config.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Location</title>
    <?php include('header.php'); ?>
</head>
<body>

<div data-role="page" id="pageone">
    <div data-role="header" data-theme="b">
        <a id="btnHamburger" href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
        <h1>Location</h1>
        <a id="btn911" href="" data-icon="phone">Call 911</a>
        <img style="width: 100%; max-width: 500px; display: block; margin: auto;" src="images/inject_hope_banner.png">
    </div>

    <div role="main" class="ui-content">
        <strong>Your Location</strong>
        <select>
            <option value="Highland Heights, KY">Highland Heights, KY</option>
            <option value="Newport, KY">Newport, KY</option>
            <option value="Erlanger, KY">Erlanger, KY</option>
            <option value="Cincinnati, OH">Cincinnati, OH</option>
            <option value="Indianapolis, IN">Indianapolis, IN</option>
            <option value="Chicago, IL">Chicago, IL</option>
        </select>
    </div>

    <?php include('menu.php'); ?>
</div>
</body>
</html>
