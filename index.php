<?php
session_start();
require   'autoload.php';
use       Abraham\TwitterOAuth\TwitterOAuth;
require   'config/api.php';
$connection       = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
$connection->setTimeouts(10, 15);
$request_token    = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));
$urlnya           = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JT x API Twitter</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
</head>
<body style="margin-top: 30px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>JalanTikus - Twitter Trending API</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <?php
          if(isset($_GET['woeid'])){
            $woeid = $_GET['woeid'];
          }
          else{
            $woeid = 23424846; // Default untuk Indonesia
          }
            $trends = $connection->get('trends/place', ['id' => $woeid]);

          if ($connection->getLastHttpCode() != 200) {
              echo json_encode($trends);exit();
          }
        ?>
<div class="panel panel-default">
  <div class="panel-body">
    <form class="form-inline">
      <div class="form-group">
        <label>Woeid</label>
        <input type="text" class="form-control" value="<?php echo $woeid ?>" name="woeid"/>
      </div>
      <input type="submit" value="Terapkan" class="btn btn-default"/>
    </form>
  </div>
</div>
<div class="well well-sm">
  <b>woeid.rosselliot.co.nz</b>.
  <ol>
    <li>Indonesia : <b>23424846</b></li>
    <li>DKI Jakarta : <b>1047378</b></li>
    <li>Bandung : <b>1047180</b></li>
    <li>Bekasi : <b>1030077</b></li>
  </ol>
</div>
<?php foreach($trends as $data_trends): ?>
  <table class="table table-bordered table-responsive">
    <tr>
      <td colspan="2" align="center"><b>Informasi Umum</b></td>
    </tr>
    <tr>
      <td>Data dibuat pada :</td>
      <td><?php echo $data_trends->created_at; ?></td>
    </tr>
    <?php foreach($data_trends->locations as $location): ?>
      <tr>
        <td>Lokasi :</td>
        <td><?php echo $location->name; ?></td>
      </tr>
      <tr>
        <td>Woeid :</td>
        <td><?php echo $location->woeid; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>

  <table class="table table-striped table-bordered">
    <tr>
      <td align="center"><b>Trending Topik</b></td>
      <td align="center"><b>Jumlah Tweets</b></td>
      <td align="center"><b>Link ke twitter</b></td>
    </tr>
    <?php foreach($data_trends->trends as $datatrends): ?>
      <tr>
        <?php
        $kueri  = urlencode($datatrends->query);
        ?>
        <td><a href="search.php?q=<?php echo $kueri; ?>"><?php echo $datatrends->name ?></a></td>
        <td><?php if($datatrends->tweet_volume != NULL) echo $datatrends->tweet_volume;else '-';  ?></td>
        <td><a href="<?php echo $datatrends->url ?>" target="_blank">Klik Disini</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
<?php endforeach; ?>
</div>
<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-body">
      &copy; <?php echo date('Y') ?> by <b>Bagas Pramudita</b>
    </div>
  </div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>