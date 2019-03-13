<?php
$myApiKey="AIzaSyCp_vUH--23sRfU4nYYBp32KNaqiFfU7K"; // Provide your API Key
$myChannelID="UCN9yXb-9EjAEaatdRq0yNOA"; // Provide your Channel ID
$maxResults="1000"; // Number of results to display

// Make an API call to store list of videos to JSON variable
$myQuery = "https://www.googleapis.com/youtube/v3/search?key=$myApiKey&channelId=$myChannelID&part=snippet,id&order=date&maxResults=$maxResults";
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
