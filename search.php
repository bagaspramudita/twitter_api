<?php
session_start();
// Panggil package dari TwitterOAuth
require 'autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;
// config API Twitter
require 'config/api.php';
// Membuat object dari class TwitterOAuth
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
$connection->setTimeouts(10, 15);
// Request token
$request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));
$urlnya = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
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
        // Ambil data query
        if(isset($_GET['q'])){
          $query  = str_replace('"','',urldecode($_GET['q']));
        }
        else{
          $query = 'Indonesia';
        }
        // Ambil data berdasarkan filtering
        if(isset($_GET['result_type'])){
          $result_type = $_GET['result_type'];
        }
        else{
          $result_type = 'recent';
        }
        // Jumlah tweets pencarian
        if(isset($_GET['count'])){
          $count = $_GET['count'];
        }
        else{
          $count = 25;
        }
        // Ambil data pada halaman selanjutnya
        if(isset($_GET['max_id'])){
          $max_id = $_GET['max_id'];
        }
        else{
          $max_id = -1;
        }
        // Mengambil hasil pencarian pada twitter
        $search = $connection->get('search/tweets', ['q' => $query,'result_type' => $result_type, 'count' => $count]);
        // Handle error
        if ($connection->getLastHttpCode() != 200) {
          echo json_encode($search);exit();
        }
        ?>
        <div class="well well-sm">
          Cari orang, hastag populer menggunakan form berikut ini.
        </div>
        <div class="panel panel-default">
          <div class="panel-body">
            <form class="form-inline">
              <input type="hidden" name="p" value="search"/>
              <div class="form-group">
                <label>Cari</label>
                <input type="text" class="form-control" value="<?php echo $query ?>" name="q"/>
              </div>
              <div class="form-group">
                <label>Berdasarkan</label>
                <select name="result_type" class="form-control">
                  <option value="recent" <?php if($result_type == 'recent') echo 'selected'; ?>>Terbaru</option>
                  <option value="popular" <?php if($result_type == 'popular') echo 'selected'; ?>>Populer</option>
                  <option value="mixed" <?php if($result_type == 'mixed') echo 'selected'; ?>>Acak</option>
                </select>
              </div>
              <div class="form-group">
                <label>Jumlah</label>
                <select name="count" class="form-control">
                  <option value="25" <?php if($count == 25) echo 'selected'; ?>>25</option>
                  <option value="50" <?php if($count == 50) echo 'selected'; ?>>50</option>
                  <option value="75" <?php if($count == 75) echo 'selected'; ?>>75</option>
                  <option value="100" <?php if($count == 100) echo 'selected'; ?>>100</option>
                </select>
              </div>
              <input type="submit" value="Terapkan" class="btn btn-default"/>
            </form>
          </div>
        </div>
        <div class="form-group">
          <form action="" method="GET">
            <input type="hidden" name="p" value="search"/>
            <input type="hidden" value="<?php echo $query ?>" name="q"/>
            <input type="hidden" value="<?php echo $result_type ?>" name="result_type"/>
            <input type="hidden" value="<?php echo $count ?>" name="count"/>
            <input type="hidden" value="<?php echo $search->search_metadata->max_id ?>" name="max_id"/>
            <input type="submit" class="btn btn-default" value="Data Selanjutnya"/>
          </form>
        </div>
        <div class="panel panel-default">
          <div class="panel-body" style="height: 500px;overflow:auto">
            <?php
              foreach($search->statuses as $search):
              $nama_replace = str_ireplace($query,"<span style='color:red'><u><b>$query</b></u></span>",$search->user->screen_name);
              $text_replace = str_ireplace($query,"<span style='color:red'><u><b>$query</b></u></span>",$search->text);
            ?>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="<?php echo $search->user->profile_image_url_https ?>" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">@<?php echo $nama_replace;  ?> <small>Melalui <?php echo $search->source ?></small></h4>
                <?php echo $text_replace ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
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
