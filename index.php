<!--
Author: Mark Sweeney
Date: 2017-31-03
-->

<?php
require_once 'classes/DB.php';
require_once 'classes/StoriesTable.php';

try {
    $conn = DB::getConnection();
    $table = new StoriesTable($conn);
    // $allStories = $table->findAll();
    $topStory = $table->findAll('Top Story',1);
    $business = $table->findAll('Business',3);
    $tech = $table->findAll('Tech',3);
    $trending = $table->findAll('Trending',3);
    $latest = $table->findAll('Latest',3);
    $sport = $table->findAll('Sport',3);


}
catch (PDOException $e) {
    $conn = null;
    exit("Connection failed: " . $e->getMessage());
}

?>


<!DOCTYPE html>
<html>

    <head>
        <title>Daily News</title>

		<link rel="stylesheet" type="text/css" href="css/grid.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lora|Montserrat|Roboto+Mono" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="author" content="Mark Sweeney">

    </head>
    <body>
        <div class = "header"><h3>Daily News</h3>
        </div>

    <div class="container">
         <div class="date-header">
            <h3>Sunday 2nd April 2017</h3></div>
         <div class="nine omega">


        <?php
        $row = $topStory->fetch();

        while($row != null){

            echo '<h5 class="top-story-category">' . $row[StoriesTable::COLUMN_TYPE]. '<img src="images/topstory.png">'. '</h5>';
            echo '<p class="timestamp">' .
                /*dd*/ substr($row [StoriesTable::COLUMN_DATE],8,10)  . ''.
                /*mm*/ substr($row [StoriesTable::COLUMN_DATE],4,4)  . ''.
                /*yy*/ substr($row [StoriesTable::COLUMN_DATE],2,2)  .'  '.
                /*time*/'<span class="bold">'.substr($row[StoriesTable::COLUMN_TIME],0,5) . ' GMT '. '<span>' . '</p>';
            echo '<h1>' . $row[StoriesTable::COLUMN_HEADLINE]. '</h1>';
            echo '<p class="title">' . $row[StoriesTable::COLUMN_AUTHOR] . ' - '. $row[StoriesTable::COLUMN_TITLE]. '</p>';
            echo ' <img class="top-story-img" src="images/top-story-hero.png">';

            /*  PHOTO BY: Natalia Ostashova (Moscow)
                SOURCE: https://unsplash.com/collections/364455/news?photo=cWhLlFB2IGI  */

            echo  '<article><p>' . nl2br(substr($row[StoriesTable::COLUMN_STORY],0,650)). '...'. '</p></article>';
            echo  '<p class="readmore"><a href="#">Read More</a></p>';
            echo '<hr>';
            $row = $topStory->fetch();
        }
        ?>


        <div class="latest nine alpha omega">
        <h5>Latest <img src="images/latest.png"></h5>

        <?php
        $row = $latest->fetch();

        while($row != null){

            echo '<div class="three alpha omega">';
            echo '<p class="timestamp">' .
                /*dd*/ substr($row [StoriesTable::COLUMN_DATE],8,10)  . ''.
                /*mm*/ substr($row [StoriesTable::COLUMN_DATE],4,4)  . ''.
                /*yy*/ substr($row [StoriesTable::COLUMN_DATE],2,2)  .'  '.
                /*time*/'<span class="bold">'.substr($row[StoriesTable::COLUMN_TIME],0,5) . ' GMT '. '<span>' . '</p>';
            echo '<h2>' . $row[StoriesTable::COLUMN_HEADLINE]. '</h2>';
            echo '<p class="title">' . $row[StoriesTable::COLUMN_AUTHOR] . ' - '. $row[StoriesTable::COLUMN_TITLE]. '</p>';
            echo  '<p>' . nl2br(substr($row[StoriesTable::COLUMN_STORY],0,350)). '...'. '</p>';
            echo'<p class="readmore"><a href="#">Read More</a></p>';
            echo '</div>';
            $row = $latest->fetch();
        }
        ?>

       </div> <!--end of latest nine alpha omega-->
        <hr>


        <div class="sport nine alpha omega">
        <h5>Sport <img src="images/sport.png"> </h5>

        <?php
        $row = $sport->fetch();

        while($row != null){

            echo '<div class="three alpha omega">';
             echo '<p class="timestamp">' .
                /*dd*/ substr($row [StoriesTable::COLUMN_DATE],8,10)  . ''.
                /*mm*/ substr($row [StoriesTable::COLUMN_DATE],4,4)  . ''.
                /*yy*/ substr($row [StoriesTable::COLUMN_DATE],2,2)  .'  '.
                /*time*/'<span class="bold">'.substr($row[StoriesTable::COLUMN_TIME],0,5) . ' GMT '. '<span>' . '</p>';
            echo '<h2>' . $row[StoriesTable::COLUMN_HEADLINE]. '</h2>';
            echo '<p class="title">' . $row[StoriesTable::COLUMN_AUTHOR] . ' - '. $row[StoriesTable::COLUMN_TITLE]. '</p>';
            echo  '<p>' . nl2br(substr($row[StoriesTable::COLUMN_STORY],0,350)). '...'. '</p>';
            echo'<p class="readmore"><a href="#">Read More</a></p>';
            echo '</div>';
            $row = $sport->fetch();
        }
        ?>
       </div> <!--end of sport nine alpha omega-->
        <hr>

        <p class="video-ad">AD: KBC Bank Ireland</p>


        <iframe width="890" height="360" src="https://www.youtube.com/embed/6cRDiob0Afw?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

        <div class="business nine alpha omega">
        <h5>Business <img src="images/business.png"> </h5>
        <?php
        $row = $business->fetch();

        while($row != null){

            echo '<div class="three alpha omega">';
            echo '<p class="timestamp">' .
                /*dd*/ substr($row [StoriesTable::COLUMN_DATE],8,10)  . ''.
                /*mm*/ substr($row [StoriesTable::COLUMN_DATE],4,4)  . ''.
                /*yy*/ substr($row [StoriesTable::COLUMN_DATE],2,2)  .'  '.
                /*time*/'<span class="bold">'.substr($row[StoriesTable::COLUMN_TIME],0,5) . ' GMT '. '<span>' . '</p>';
            echo '<h2>' . $row[StoriesTable::COLUMN_HEADLINE]. '</h2>';
            echo '<p class="title">' . $row[StoriesTable::COLUMN_AUTHOR] . ' - '. $row[StoriesTable::COLUMN_TITLE]. '</p>';
            echo  '<p>' . nl2br(substr($row[StoriesTable::COLUMN_STORY],0,350)). '...'. '</p>';
            echo'<p class="readmore"><a href="#">Read More</a></p>';
            echo '</div>';
            $row = $business->fetch();
        }
        ?>
       </div> <!--end of business nine alpha omega-->
       <hr>
         <!--samsung galaxy s8 youtube video-->
        <iframe width="890" height="360" src="https://www.youtube.com/embed/zWrmEy0lkWI" frameborder="0" allowfullscreen></iframe>


        <div class="tech nine alpha omega">
        <h5>Tech <img src="images/tech.png"> </h5>
        <?php
        $row = $tech->fetch();

        while($row != null){


            echo '<div class="three alpha omega">';
            echo '<p class="timestamp">' .
                /*dd*/ substr($row [StoriesTable::COLUMN_DATE],8,10)  . ''.
                /*mm*/ substr($row [StoriesTable::COLUMN_DATE],4,4)  . ''.
                /*yy*/ substr($row [StoriesTable::COLUMN_DATE],2,2)  .'  '.
                /*time*/'<span class="bold">'.substr($row[StoriesTable::COLUMN_TIME],0,5) . ' GMT '. '<span>' . '</p>';
            echo '<h2>' . $row[StoriesTable::COLUMN_HEADLINE]. '</h2>';
            echo '<p class="title">' . $row[StoriesTable::COLUMN_AUTHOR] . ' - '. $row[StoriesTable::COLUMN_TITLE]. '</p>';
            echo  '<p>' . nl2br(substr($row[StoriesTable::COLUMN_STORY],0,350)). '...'. '</p>';
            echo'<p class="readmore"><a href="#">Read More</a></p>';
            echo '</div>';

            $row = $tech->fetch();
        }
        ?>


        </div> <!-- end of tech nine alpha omega-->
        <hr>
       </div>




            <h5 class="login three alpha omega"> <a href="form.php">login</a> &nbsp; <img src="images/login.png"> </h5>


        </div>

        <div class=three omega>



         <div class = "weather three omega">
                <p class="bold">Cloudy</p>
                <img src="images/cloudy.png">
                <p>Dublin</p>
                <p>12°C</p>

                <table>
                <tr>
                    <th class="bold">Monday</th>
                    <th>14°C</th>
                </tr>

                    <tr>
                    <th>Tuesday</th>
                    <th>17°C</th>
                </tr>

                    <tr>
                    <th>Wednedsay</th>
                    <th>9°C</th>
                </tr>

                    <tr>
                    <th>Thursday</th>
                    <th>10°C</th>
                </tr>

                <tr>
                    <th>Friday</th>
                    <th>6°C</th>
                </tr>
                </table>

            </div>

            <div class = "livenews three omega">
                <p class="bold">LIVE NEWS</p>
                <iframe width="280" height="150" src="https://www.youtube-nocookie.com/embed/9Auq9mYxFEE?controls=0" frameborder="0" allowfullscreen></iframe>
            </div>


        <div class="trending three alpha omega">
        <h5>Trending <img src="images/trending.png"> </h5>
        <?php
        $row = $trending->fetch();

        while($row != null){
            echo '<div class="three alpha omega">';
            echo '<p class="timestamp">' .
                /*dd*/ substr($row [StoriesTable::COLUMN_DATE],8,10)  . ''.
                /*mm*/ substr($row [StoriesTable::COLUMN_DATE],4,4)  . ''.
                /*yy*/ substr($row [StoriesTable::COLUMN_DATE],2,2)  .'  '.
                /*time*/'<span class="bold">'.substr($row[StoriesTable::COLUMN_TIME],0,5) . ' GMT '. '<span>' . '</p>';
            echo '<h3>' . $row[StoriesTable::COLUMN_HEADLINE]. '</h3>';
            echo '<p class="title">' . $row[StoriesTable::COLUMN_AUTHOR] . ' - '. $row[StoriesTable::COLUMN_TITLE]. '</p>';
            echo  '<p>' . nl2br(substr($row[StoriesTable::COLUMN_STORY],0,200)). '...'. '</p>';
            echo'<p class="readmore"><a href="#">Read More</a></p>';
            echo '<hr>';
            $row = $trending->fetch();
        }
        ?>
       </div> <!--end of trending three alpha omega-->


              <!--google ad-->
      <a id="aw0" target="_blank" href="https://www.googleadservices.com/pagead/aclk?sa=L&amp;ai=CifFFcbzTWPCdLfeNtgfUvp2wBs-pnrpI1_C9pewEwI23ARABIOP7kwNg9drqg_wOoAH7kOnfA8gBA6kCWOMO4LD1tD6oAwHIA8kEqgSaAU_Q8NQvu6rqwphafZ4SUiQnkLOz2dJtmNrgou0TRHRn-xOjKtS0ZDQI7EXBqeIw3jt5c0BjrYKvp7zxh9gEiUm5ULT2ta74IJ3PAdgsiV_icmI9PEG_1C_Yh_Wgkvi3wmcHgJ2RDWNH0I1doPtz3oMedXy1A0n_YFfGERYaE48ybiZPp2BCcNlFQp8nD9iZ-obQcZ9Co_pmXsegBgOAB-3uliCoB6a-G9gHAdIIBQiAYRAB&amp;num=1&amp;cid=CAASEuRo7tdyXzNn9mPmTcEy2RlPZQ&amp;sig=AOD64_2Fo0K89vWPz4tyTGEQq-DIZyDIMQ&amp;client=ca-pub-6219811747049371&amp;nm=11&amp;nx=206&amp;ny=206&amp;mb=2&amp;bg=!vL-lv6dEDP6gI_-1zFcCAAAAZFIAAAAgmQFoY4PKF7TXGxG_Sw8I-Ld4Tv6e7_sjM_SzGS-15a6gR943WiC1k8U7P8Y04UdSqXTwBgd-KOGPuj0vwrnKmn147x7paHJUoC-64PlPN76NhiGw3ZRcqOTkBRqDDEk9zGGtgJ8Cqd3BhCuybTvnQxmxZms3pPu9AVlBS0s31xtSF-RtRJQWFFE1xVEwcpX26VhbtACZvsmJ3U1Fz-Bjh15uinotAn7-q30qocQV4sj7A7XYQPJiPsS7ueupd7NYcQMSzoUm7WlTzd6N8-1yNsilJSvSrBiEI8xtFb4F1yW1eSye5gwWpaOH_enMW1B3RL4p-OY0HIXpepHQ6gvTCkI5Z4V__Xqv7LVIwIoEklI9wvMeNA2w6rme5PJfhzxvPdcQ579ioIuCQNERD7OFqjihPnFw3e2pLCfZZ3BetSZoya6GlOe7WVPROo7qmcaVjLQvL2m27YAnGX8rbPLE_nBRJkirJ5UTT126&amp;adurl=https://www.canterbury.com/training-hub/" data-original-click-url="https://www.googleadservices.com/pagead/aclk?sa=L&amp;ai=CifFFcbzTWPCdLfeNtgfUvp2wBs-pnrpI1_C9pewEwI23ARABIOP7kwNg9drqg_wOoAH7kOnfA8gBA6kCWOMO4LD1tD6oAwHIA8kEqgSaAU_Q8NQvu6rqwphafZ4SUiQnkLOz2dJtmNrgou0TRHRn-xOjKtS0ZDQI7EXBqeIw3jt5c0BjrYKvp7zxh9gEiUm5ULT2ta74IJ3PAdgsiV_icmI9PEG_1C_Yh_Wgkvi3wmcHgJ2RDWNH0I1doPtz3oMedXy1A0n_YFfGERYaE48ybiZPp2BCcNlFQp8nD9iZ-obQcZ9Co_pmXsegBgOAB-3uliCoB6a-G9gHAdIIBQiAYRAB&amp;num=1&amp;cid=CAASEuRo7tdyXzNn9mPmTcEy2RlPZQ&amp;sig=AOD64_2Fo0K89vWPz4tyTGEQq-DIZyDIMQ&amp;client=ca-pub-6219811747049371&amp;adurl=https://www.canterbury.com/training-hub/"><img src="https://tpc.googlesyndication.com/simgad/11285790420048657563" border="0" width="300" height="250" alt="" class="img_ad"></a>


    <!--twitter timeline for @skynews-->
    <a class="twitter-timeline" data-lang="en" data-width="300px" data-height="600px" href="https://twitter.com/skynews">Live Tweets</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

    <div class = "livenews three alpha omega">
                <p class="bold">Trending on YouTube</p>
                <p class="bold">Casey Neistat</p>
                <iframe width="280" height="150" src="https://www.youtube.com/embed/MpVfH5QDbPo" frameborder="0" allowfullscreen></iframe>
            </div> <!--end of livenews three alpha omega-->


            <!--advert-->
            <img src="https://tpc.googlesyndication.com/simgad/16852045867211390157" border="0" width="300" alt="" class="img_ad">


 </div> <!--end of container-->
    </body>
</html>
