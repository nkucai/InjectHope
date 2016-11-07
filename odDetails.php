<?php include('config.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Overdose Details</title>
    <?php include('header.php'); ?>
</head>
<body>

<div data-role="page" id="pageone">
    <div data-role="header" data-theme="b">
        <a id="btnHamburger" href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
        <h1>Overdose Details</h1>
        <a id="btn911" href="" data-icon="phone">Call 911</a>
        <img style="width: 100%; max-width: 500px; display: block; margin: auto;" src="images/inject_hope_banner.png">
    </div>

    <div role="main" class="ui-content">
        <div class="content">
            <img style="width: 100%; max-width: 1000px;" src="images/overdose_alert.png">
        </div>
    </div>

    <?php include('menu.php'); ?>
</div>
</body>
</html>
