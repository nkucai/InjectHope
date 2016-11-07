<div class="post">
    <div class="post-heading">
        <img src="http://zblogged.com/wp-content/uploads/2015/11/17.jpg" class="profile-pic"/>
        <div class="post-details">
            <p class="post-person"><?php echo $post->poster_name ?></p>
            <p class="post-time"><?php echo humanTiming($post->date_published) ?></p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="post-content">
        <p><?php echo $post->content ?></p>
    </div>
    <div class="post-footer">
        <p class="onhover like-button"><img class="onhover" src="<?php echo BASE ?>images/thumb.png" height="14"/>Like</p>
        <p class="onhover"><img class="onhover" src="<?php echo BASE ?>images/comment.png" height="14"/>Comment</p>
        <p class="onhover" onclick="clickedReport()">
        <img class="onhover" src="<?php echo BASE ?>images/report.png" height="14" onclick="clickedReport()"/>
        Report</p>
    </div>
</div>