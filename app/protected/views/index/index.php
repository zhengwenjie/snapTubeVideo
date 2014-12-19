
  
    <header><a href="//www.snaptubevideo.com/" class="logo">SnapTube</a>
      <nav><a href="https://www.facebook.com/pages/SnapTube/746438775443012" onclick="ga('send', 'event', 'snaptubevideo.com', 'snaptube', 'facebook');" class="facebook">Facebook</a><a href="https://twitter.com/snaptubeapp" onclick="ga('send', 'event', 'snaptubevideo.com', 'snaptube', 'twitter');" class="twitter">Twitter</a></nav>
    </header>
    <section id="hero">
      <div class="intro">
        <div class="wrapper-table">
          <div class="wrapper-table-cell">
            <h1>Download YouTube Videos and Music</h1>
            <h2>Easy, fast, and free</h2><a href="http://dl-master.snappea.com/installer/snaptube/latest/Click_me_to_install_SnapTube_tube_homepage.apk" onclick="ga('send', 'event', 'snaptubevideo.com', 'snaptube', 'download');" class="btn">Download</a>
          </div>
        </div>
      </div>
      <div class="slides">
        <div class="wrapper-table">
          <div class="wrapper-table-cell"><i class="windows-screenshot"></i></div>
        </div>
      </div>
      <div class="learn-more"><a href="#features" onclick="ga('send', 'event', 'snaptubevideo.com', 'snaptube', 'learn-more');">Learn More<i></i></a></div>
    </section>
    <section id="features" class="features for-web">
      <ul>
        <li>
          <h3>DOWNLOAD IN MULTIPLE RESOLUTIONS</h3>
          <p>MP4 videos are available in resolutions: choose the small size of 360 pixels or the high-definition 720 pixels.</p>
        </li>
        <li>
          <h3>DIRECT MP3 DOWNLOADS</h3>
          <p>Download any YouTube music video directly as an MP3 file. No extra encoding process or plugin needed. Save space and listen to your favorite music video anytime you want.</p>
        </li>
        <li>
          <h3>SEARCH VIDEOS WITH KEYWORDS</h3>
          <p>Search a video with keywords. Easily find the exact video you want.</p>
        </li>
        <li>
          <h3>DISCOVER NEW VIDEOS</h3>
          <p>Explore videos in your favorite categories like Music and Movies. Discover new videos with recommended lists from our curators.</p>
        </li>
        <li>
          <h3>MANAGE VIDEO DOWNLOADS</h3>
          <p>Pause, cancel or resume a video download. Delete the videos you don't need anymore. Manage all of your video downloads in one place.</p>
        </li>
        <li>
          <h3>NO ADS</h3>
          <p>Clean design lets you focus on your videos. No annoying ads.</p>
        </li>
      </ul>
    </section>
    <section class="features for-mobile">
      <ul>
        <li>
          <h3>MULTIPLE RESOLUTIONS</h3>
          <p>MP4 videos available in 360 pixels to 720 pixels.</p>
        </li>
        <li>
          <h3>DOWNLOAD AS MP3</h3>
          <p>Direct download. No extra encoding process or plugin needed.</p>
        </li>
        <li>
          <h3>SEARCH</h3>
          <p>Search a video with keywords. Find the video you want.</p>
        </li>
        <li>
          <h3>DISCOVER</h3>
          <p>Explore videos in your favorite categories like Music and Movies.</p>
        </li>
        <li>
          <h3>MANAGE</h3>
          <p>Pause, cancel or resume a video download. Delete videos you don't need anymore. </p>
        </li>
        <li>
          <h3>NO ADS</h3>
          <p>Clean design lets you focus on your videos. No annoying ads.</p>
        </li>
      </ul>
    </section>
    <!-- categories [s] -->
    <div class="download-more"><a href="#categories" onclick="ga('send', 'event', 'snaptubevideo.com', 'snaptube', 'download-more');">Lot's of new videos you can download<i></i></a>
    </div>
    <section id="categories" class="categories">
      <h3>Categories</h3>
      <ul>
        <?php if(count($categories)){
                foreach ($categories as $item) {
        ?>   
        <li><a href="#"><?php echo $item['alias']; ?></a></li>       
        <?php }}?>
      </ul>
    </section>
    <!-- categories [e] -->

    <section id="main" class="clearfix">
    <!-- Recommended Playlists [s] -->
    <article id="recommended">
    <div class="recommended">
      <h3>Recommended Playlists</h3>
      <?php if(count($specials)) {
          foreach ($specials as $special) {
      ?>
      <div class="hd">
        <h4><a href="#"><?php echo $special['special']['name']; ?></a></h4>
        <a href="#" class="more">More>></a>
      </div>
      <div class="bd">
        <ul>
          <?php if(count($special['items'])) {
              foreach ($special['items'] as $item) {
          ?>
          <li>
            <figure class="pic">
              <a href="#"><img src="<?php echo $item['coverRes']; ?>" alt="recommended" width="196" height="110"/>
              <span class="time">2:47</span>
              <span class="overlay"></span></a>
            </figure>
            <p class="title"><a href="#"><?php echo $item['title']; ?></a></p>
            <p class="info"><?php echo number_format($item['playCount']); ?> views <?php echo $this->formatDate($item['createdDate']); ?></p>
          </li> 
          <?php }}?>
        </ul>
      </div> 
      <?php }} ?> 
      
      <div class="more-list"><a href="#">More lists>></a></div>
    </div>
    </article>
    <!-- Recommended Playlists [e] -->

    <!-- Top Weekly Download [s] -->
    <aside id="top-weekly">
    <div class="top-weekly">
      <h3>Top Weekly Download</h3>
      <ul>
      <li>
        <figure class="pic">
          <a href="#"><img src="/static/images/weekly_1.jpg" alt="top_weekly" />
          <span class="time">2:47</span>
          <span class="overlay"></span></a>
        </figure>
        <div class="desc">
          <h4 class="title"><a href="#"><i>1.</i>Tony Bennett, Lady Gaga - Bang Bang</a></h4>
          <p class="info">1k Download</p>
        </div>
      </li>
      <li>
        <figure class="pic">
          <a href="#"><img src="/static/images/weekly_1.jpg" alt="top_weekly" />
          <span class="time">2:47</span>
          <span class="overlay"></span></a>
        </figure>
        <div class="desc">
          <h4 class="title"><a href="#"><i>2.</i>Tony Bennett, Lady Gaga - Bang Bang</a></h4>
          <p class="info">1k Download</p>
        </div>
      </li>
      <li>
        <figure class="pic">
          <a href="#"><img src="/static/images/weekly_1.jpg" alt="top_weekly" />
          <span class="time">2:47</span>
          <span class="overlay"></span></a>
        </figure>
        <div class="desc">
          <h4 class="title"><a href="#"><i>3.</i>Tony Bennett, Lady Gaga - Bang Bang</a></h4>
          <p class="info">1k Download</p>
        </div>
      </li>
      <li>
        <figure class="pic">
          <a href="#"><img src="/static/images/weekly_1.jpg" alt="top_weekly" />
          <span class="time">2:47</span>
          <span class="overlay"></span></a>
        </figure>
        <div class="desc">
          <h4 class="title"><a href="#"><i>4.</i>Tony Bennett, Lady Gaga - Bang Bang</a></h4>
          <p class="info">1k Download</p>
        </div>
      </li>
      <li>
        <figure class="pic">
          <a href="#"><img src="/static/images/weekly_1.jpg" alt="top_weekly" />
          <span class="time">2:47</span>
          <span class="overlay"></span></a>
        </figure>
        <div class="desc">
          <h4 class="title"><a href="#"><i>5.</i>Tony Bennett, Lady Gaga - Bang Bang</a></h4>
          <p class="info">1k Download</p>
        </div>
      </li>
      <li>
        <figure class="pic">
          <a href="#"><img src="/static/images/weekly_1.jpg" alt="top_weekly" />
          <span class="time">2:47</span>
          <span class="overlay"></span></a>
        </figure>
        <div class="desc">
          <h4 class="title"><a href="#"><i>6.</i>Tony Bennett, Lady Gaga - Bang Bang</a></h4>
          <p class="info">1k Download</p>
        </div>
      </li>
      </ul>
      <div class="more"><a href="#">More>></a></div>
    </div>
    </aside>
    <!-- Top Weekly Download [e] -->

    </section>
