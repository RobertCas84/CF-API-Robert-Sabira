<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <?php
require_once 'restful.php';
$url = 'http://api.serri.codefactory.live/random/';
$response = curl_get($url);
$result=json_decode($response);

echo "<h1>".$result->joke."</h1>";



?>
    </div>
    
<div class='container'>
    <div class='row'>
<?php
require_once 'restful.php';
$url = 'http://feeds.bbci.co.uk/news/technology/rss.xml';
$response = curl_get($url);
$xml = simplexml_load_string($response);

foreach ($xml->channel->item as $item) {
echo " 

    <div class='col-4'>
    <div class='card' style='width: 18rem;'>
  <div class='card-body'>
    <h5 class='card-title'>".$item->title."</h5>
    <a href='".$item->link."'>".$item->link."</a><br>
    
  </div>
</div>


</div>
 ";
 }
echo " </div>
</div> "

?>
<div>CNN</div>
<?php
require_once 'RESTful.php';
$url = 'http://rss.cnn.com/rss/edition_technology.rss';
$response = curl_get('http://rss.cnn.com/rss/edition_technology.rss');
$xml = simplexml_load_string($response);
echo "<div class='container'>
    <div class='row'>";
foreach ($xml->channel->item as $item) {
echo " 

    <div class='col-4'>
    <div class='card' style='width: 18rem;'>
  <div class='card-body'>
    <h5 class='card-title'>$item->title</h5>
    <a href='".$item->link."' >".$item->link."</a><br>
    
  </div>
</div>


</div>
 ";
 }
echo " </div>
</div> "
;?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>