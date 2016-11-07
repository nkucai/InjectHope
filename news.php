<?php include('config.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>News</title>
    <?php include('header.php'); ?>
</head>
<body>

<div data-role="page" id="pageone">
    <div data-role="header" data-theme="b">
        <a id="btnHamburger" href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
        <h1>News</h1>
        <a id="btn911" href="" data-icon="phone">Call 911</a>
        <img style="width: 100%; max-width: 500px; display: block; margin: auto;" src="images/inject_hope_banner.png">
    </div>

    <div role="main" class="ui-content">
        <div class="card" style="width: 50%;">
            <a href="http://www.usnews.com/news/articles/2016-10-06/fda-panel-more-naloxone-needed-in-overdose-reversal-device" target="_blank">
                Major Changes Could Be Coming to Overdose-Reversal Drugs
            </a>
        </div>
        <div class="card" style="width: 50%;">
            <a href="http://www.nkytribune.com/2016/09/northern-kentucky-county-health-centers-to-distribute-free-naloxone-overdose-reversal-kits/" target="_blank">
                Northern Kentucky County Health Centers to distribute free naloxone overdose reversal kits
            </a>
        </div>
        <div class="card" style="width: 50%;">
            <a href="http://www.nkytribune.com/2016/09/northern-kentucky-county-health-centers-to-distribute-free-naloxone-overdose-reversal-kits/" target="_blank">
                Kentucky tells ERs to stock up on heroin-overdose antidote Naloxone for Labor Day weekend
            </a>
        </div>
        <div class="card" style="width: 50%;">
            <a href="http://www.wcpo.com/news/local-news/colleges/nku-news/northern-kentucky-university-police-will-start-using-naloxone-this-summer-to-fight-heroin-overdoses" target="_blank">
                Northern Kentucky University police will start using Naloxone this summer to fight heroin overdoses
            </a>
        </div>
    </div>

    <?php include('menu.php'); ?>
</div>
</body>
</html>
