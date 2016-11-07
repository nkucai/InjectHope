<?php include('config.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Help!</title>
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
            <a style="background-color: red; color: white;" href="" class="ui-btn">Call 911!</a>
            <a href="sendHelp.php" class="ui-btn">Help! (I don't have a phone)</a>
            <br>
            <div class="ui-corner-all custom-corners">
                <div class="ui-bar ui-bar-a">
                    <h3>How to use Naloxone (Narcan) to reverse an opioid overdose</h3>
                </div>
                <div class="ui-body ui-body-a">
                    <p>Opioid overdoses have become epidemic.  On average, one person dies every day from an opioid overdose.
                    Naloxone, also known as Narcan, can reverse an opioid overdose in a few minutes.
                    Opioids include street drugs (like heroin) and prescription drugs (like Oxycontin).  People do overdose and die from prescription drugs by using too much or mixing them with other pills, street drugs, or alcohol.</p>
                </div>
            </div>
            <br>
            <div class="ui-corner-all custom-corners">
                <div class="ui-bar ui-bar-a">
                    <h3>How to recognize an opioid overdose</h3>
                </div>
                <div class="ui-body ui-body-a">
                    <ul>
                        <li>The person does not respond when you call their name, shake them or cause pain by rubbing your knuckles hard on their breastbone.</li>
                        <li>Their breathing is too slow (less than 10 breaths per minute) or they aren't breathing at all.</li>
                        <li>Their skin is blue or gray, especially the lips and fingernails.</li>
                        <li>They may be making loud, uneven snoring or gurgling noises.</li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="ui-corner-all custom-corners">
                <div class="ui-bar ui-bar-a">
                    <h3>What to do if you think the person has overdosed on opioids</h3>
                </div>
                <div class="ui-body ui-body-a">
                    <ul>
                        <li><strong>Call 911</strong> - tell them the person isn't breathing or is having trouble breathing and explain your exact location.</li>
                        <li><strong>Rescue Breathing</strong> - you can help the person get oxygen by:
                            <ul><li>Putting them on their back and open their airway by tilting their head back and lifting their chin.</li>
                                <li>Pinch their nose and give 2 breaths first, then one breath every 5 seconds.</li>
                                <li>Don't stop unless they revive, EMS arrives or to give the Naloxone.</li></ul>
                        <li><strong>Give Naloxone</strong></li>
                        For intranasal Naloxone:
                        <ul>
                            <li>Remove the yellow cap atop the plastic tube and screw the atomizer on</li>
                            <li>Remove the bottom yellow cap and the red cap from the vial; screw the vial into the bottom of the tube</li>
                            <li>Spray half the vial up each nostril by pushing the vial up through the tube</li>
                        </ul>
                        <li><strong>Recovery Position</strong></li>
                        If you must leave the person alone at any time, roll them onto their side so they won't choke if they start to vomit.
                    </ul>
                </div>
            </div>
            <br>
            <div class="video-container"><iframe src="https://www.youtube.com/embed/rE0Dcg7BrKg"></iframe></div>
        </div>
    </div>

    <?php include('menu.php'); ?>
</div>
</body>
</html>
