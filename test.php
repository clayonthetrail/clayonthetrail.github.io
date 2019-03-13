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
            <?php
            //$myApiKey="AIzaSyCp_vUH--23sRfU4nYYBp32KNaqiFfU7K"; // Provide your API Key
            //$myChannelID="UCN9yXb-9EjAEaatdRq0yNOA"; // Provide your Channel ID
            //$maxResults="1000"; // Number of results to display
            // Make an API call to store list of videos to JSON variable
            $myQuery = "https://www.googleapis.com/youtube/v3/search?key=AIzaSyCp_vUH--23sRfU4nYYBp32KNaqiFfU7K&channelId=UCN9yXb-9EjAEaatdRq0yNOA&part=snippet,id&order=date";
            $videoList = file_get_contents($myQuery);

            // Convert JSON to PHP Array
            $decoded = json_decode($videoList, true);

            // Run a loop to display list of videos
            foreach ($decoded['items'] as $items)
            {
                $id = $items['id']['videoId'];
                $title= $items['snippet']['title'];
                $description = $items['snippet']['description'];
                $thumbnail = $items['snippet']['thumbnails']['default']['url'];

                // Display list with some basic CSS formatting
                echo "
<p style='display:inline-block;width:200px;margin:10px;text-align:center;vertical-align:top'>";
                echo "<img src='$thumbnail'>
";
                echo "<strong>$title</strong>
";
                echo "<small>$description</small>";
                echo "

";
            }
            ?>
        </main>
        <footer w3-include-html="footer.html"></footer>
        <script src="scripts/w3.js"></script>
        <script src="scripts/hamburger.js"></script>
        <script src="scripts/wayfinding.js"></script>
        <script src="scripts/modularize.js"></script>
    </body>
</html>

