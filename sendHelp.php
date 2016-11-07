<?php include('config.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Send Help</title>
    <?php include('header.php'); ?>

    <style>
        .video-container {
            position:relative;
            padding-bottom:56.25%;
            padding-top:30px;
            height:0;
            overflow:hidden;
        }

        .video-container iframe, .video-container object, .video-container embed {
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
        }
    </style>
</head>
<body>

<div data-role="page" id="pageone">
    <div data-role="header" data-theme="b">
        <a id="btnHamburger" href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
        <h1>Help!</h1>
        <a id="btn911" href="" data-icon="phone">Call 911</a>
        <img style="width: 100%; max-width: 500px; display: block; margin: auto;" src="images/inject_hope_banner.png">
    </div>

    <div role="main" class="ui-content">
        <div class="content">
            <form>
                <label for="textarea-1">What is your address?  Where are you located?</label>
                <input type="text" name="textarea-1" id="textarea-1"/>
                <a href="" class="ui-btn">Send</a>
            </form>
            <div style="margin-left: 20px;">
                <ol>
                    <li>Clear their airway and perform rescue breathing</li>
                    <div class="video-container"><iframe src="https://www.youtube.com/embed/Zh44OeEMay0"></iframe></div>
                    <li>Give the first dose of Naloxone</li>
                    <li>Continue rescue breathing. If the person is not responding after 5 minutes, give them the second dose of Naloxone</li>
                    <li>Continue rescue breathing until the person responds. Stay with the person until the paramedics arrive</li>
                </ol>
            </div>
        </div>
    </div>

    <?php include('menu.php'); ?>
</div>
</body>
</html>
