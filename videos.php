<?php

$API_key    = "AIzaSyDahte9UOBgXmAgqQ8-ocLkW6DcxKyeBd0";

$channelID  = "UCN9yXb-9EjAEaatdRq0yNOA";

$maxResults = 50;

$videoList = json_decode(file_get_contents("https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=".$channelID."&maxResults=".$maxResults."&key=".$API_key));

$videoList = json_decode(json_encode($videoList), true);

foreach($videoList['items'] as $video){
$videoFrame = "<iframe src='https://www.youtube.com/embed/".$video['id']['videoId']."' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
echo $videoFrame;
}
?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135886645-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-135886645-1');
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clayonthetrail</title>
        <link rel="icon" type="image/png" href="images/favicon.png">
        <link rel="stylesheet" href="style/videos.css">
        <meta name="google-site-verification" content="KX_iU-7i3-3cJi919isLRYQlmyRgO_KGc4FsRKOJ4cA" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <nav w3-include-html="nav.html"></nav>
        <header w3-include-html="header.html"></header>
        <main>
            <div class="grid-container">
           <?php foreach($videoList['items'] as $video){
$videoFrame = "
<div class='grid-item'>
<figure>
<iframe src='https://www.youtube.com/embed/".$video['id']['videoId']."' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>
  <figcaption>
        <p class='video'>34 IH Rat Rod</p>
        <p><a href='https://www.youtube.com/watch?v=OhTWUAKYqg0' class='youtube'>YouTube</a></p>
    </figcaption>
</figure>
</div>";
echo $videoFrame;
}

                ?>
              </div>
        </main>
        <footer w3-include-html="footer.html"></footer>
        <script src="scripts/w3.js"></script>
        <script src="scripts/hamburger.js"></script>
        <script src="scripts/wayfinding.js"></script>
        <script src="scripts/modularize.js"></script>
    </body>
</html>