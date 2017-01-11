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
		<title>
			JT x API Twitter
		</title>
		<!-- <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css"> -->
		<!-- <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" type="text/css"> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"> </script>
	</head>
	<body>
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
		<!-- <div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>
						JalanTikus - Twitter Trending API
					</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					
					<div class="panel panel-default">
						<div class="panel-body">
							<form class="form-inline">
								<div class="form-group">
									<label>Woeid</label> <input type="text" class="form-control" value="<?php echo $woeid ?>" name="woeid">
								</div><input type="submit" value="Terapkan" class="btn btn-default">
							</form>
						</div>
					</div>
					<div class="well well-sm">
						<b>woeid.rosselliot.co.nz</b>.
						<ol>
							<li>Indonesia : <b>23424846</b>
							</li>
							<li>DKI Jakarta : <b>1047378</b>
							</li>
							<li>Bandung : <b>1047180</b>
							</li>
							<li>Bekasi : <b>1030077</b>
							</li>
						</ol>
					</div><?php foreach($trends as $data_trends): ?>
					<table class="table table-bordered table-responsive">
						<tr>
							<td colspan="2" align="center">
								<b>Informasi Umum</b>
							</td>
						</tr>
						<tr>
							<td>
								Data dibuat pada :
							</td>
							<td>
								<?php echo $data_trends->created_at; ?>
							</td>
						</tr><?php foreach($data_trends->locations as $location): ?>
						<tr>
							<td>
								Lokasi :
							</td>
							<td>
								<?php echo $location->name; ?>
							</td>
						</tr>
						<tr>
							<td>
								Woeid :
							</td>
							<td>
								<?php echo $location->woeid; ?>
							</td>
						</tr><?php endforeach; ?>
					</table>
					<table class="table table-striped table-bordered">
						<tr>
							<td align="center">
								<b>Trending Topik</b>
							</td>
							<td align="center">
								<b>Jumlah Tweets</b>
							</td>
							<td align="center">
								<b>Link ke twitter</b>
							</td>
						</tr>
						<?php foreach($data_trends->trends as $datatrends): ?>
						<tr>
							<?php
									$kueri  = urlencode($datatrends->query);
									?>
							<td>
								<a href="search.php?q=%3C?php%20echo%20$kueri;%20?%3E"><?php echo $datatrends->name ?></a>
							</td>
							<td>
								<?php if($datatrends->tweet_volume != NULL) echo $datatrends->tweet_volume;else '-';  ?>
							</td>
							<td>
								<a href="%3C?php%20echo%20$datatrends-%3Eurl%20?%3E" target="_blank">Klik Disini</a>
							</td>
						</tr>
						<?php endforeach; ?>
					</table><?php endforeach; ?>
				</div>
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							© <?php echo date('Y') ?> by <b>Bagas Pramudita</b>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="row">
			<div class="card">
				<div class="card-display">
					<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
				</div>
				<div class="card-hidden">
				</div>
			</div>
			<div class="card">
				<div class="card-display">
					<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
				</div>
				<div class="card-hidden">
				</div>
				<a href="" target="_blank">
				</a>
			</div>
			<div class="card">
				<div class="card-display">
					<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
				</div>
				<div class="card-hidden">
				</div>
				<a href="" target="_blank">
				</a>
			</div>
			<div class="card">
				<div class="card-display">
					<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
				</div>
				<div class="card-hidden">
				</div>
				<a href="" target="_blank">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="card">
				<div class="card-display">
					<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
				</div>
				<div class="card-hidden">
				</div>
				<a href="" target="_blank">
				</a>
			</div>
			<div class="card">
				<div class="card-display">
					<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
				</div>
				<div class="card-hidden">
				</div>
				<a href="" target="_blank">
				</a>
			</div>
			<div class="card">
				<div class="card-display">
					<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
				</div>
				<div class="card-hidden">
				</div>
				<a href="" target="_blank">
				</a>
			</div>
			<div class="card">
				<div class="card-display">
					<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
				</div>
				<div class="card-hidden">
				</div>
				<a href="" target="_blank">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="card">
				<div class="card-display">
					<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
				</div>
				<div class="card-hidden">
				</div>
				<a href="" target="_blank">
				</a>
			</div>
			<div class="card">
				<div class="card-display">
					<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
				</div>
				<div class="card-hidden">
				</div>
				<a href="" target="_blank">
				</a>
			</div>
			<div class="card">
				<div class="card-display">
					<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
				</div>
				<div class="card-hidden">
				</div>
				<a href="" target="_blank">
				</a>
			</div>
			<div class="card">
				<div class="card-display">
					<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
				</div>
				<div class="card-hidden">
				</div>
				<a href="" target="_blank">
				</a>
			</div>
		</div>
		<div class="region-select-container">
			Menampilkan trending topic di 
			<select class="region-select" required>
				<option value="23424846" selected>Indonesia</option>
				<option value="1047378">DKI Jakarta</option>
				<option value="1047180">Bandung</option>
				<option value="1030077">Bekasi</option>
			</select>
		</div>
		<style>
			@font-face {
			    font-family: 'Product Sans';
			    src: url('assets/fonts/Product Sans Regular.ttf') format('truetype');
			    font-weight: 500;
			    font-style: normal;
			}
			@font-face {
			    font-family: 'Product Sans';
			    src: url('assets/fonts/Product Sans Bold.ttf') format('truetype');
			    font-weight: 700;
			    font-style: normal;
			}
			@font-face {
			    font-family: 'Product Sans';
			    src: url('assets/fonts/Product Sans Italic.ttf') format('truetype');
			    font-weight: 500;
			    font-style: italic;
			}
			@font-face {
			    font-family: 'Product Sans';
			    src: url('assets/fonts/Product Sans Bold Italic.ttf') format('truetype');
			    font-weight: 700;
			    font-style: italic;
			}
			body, html
			{
				font-family: "Product Sans";
				padding: 0;
				margin: 0;
				border: 0;
				background-color: gray;
			}
			.row
			{
				height: 33.33vh;
				background-color: white
			}
			.row:nth-child(3n)
			{
				height: 33.34vh
			}
			.card
			{
				position: relative;
				width: 25%;
				height: 100%;
				display: block;
				float: left;
				overflow: hidden;
			}
			.card .card-display, .card .card-hidden
			{
				position: absolute;
				height: 100%;
				width: 100%;
			}
			.card .card-display
			{
				color: #fff;
				z-index: 4;
				
			}
			.card .card-display .card-text-container
			{
				position: absolute;
				max-width: 100%;
				font-size: 40px;
				padding: 0 12px;
				box-sizing: border-box;
				top: 50%;
				-webkit-transform: translate(0, -50%);
				transform: translate(0, -50%);
				word-wrap: break-word;
			}
			.card .card-display .card-text-container .card-text
			{
				text-shadow: 2px 2px 2px rgba(0,0,0,0.2);
			}
			.card .card-hidden
			{
				z-index: 3;
			}
			.card a
			{
				position: absolute;
				top: 0;
				right: 0;
				left: 0;
				bottom: 0;
				z-index: 9;
			}
			.card:nth-child(4n)
			{
				float: right
			}
			.refresh
			{
				position: fixed;
				top: 10px;
				right: 10px;
				height: 20px;
				width: 20px;
				display: block;
				background-color: rgba(0,0,0,0.1);
				border-radius: 50%;
				z-index: 999;
			}
			.region-select-container
			{
				position: fixed;
				left: 50%;
				-webkit-transform: translate(-50%, 0);
				transform: translate(-50%, 0);
				bottom: 10px;
			    font-size: 14px;
				z-index: 99
			}
			.region-select
			{
			    background: transparent;
			    -webkit-appearance: none;
			    border: 0;
			    text-decoration: underline dashed;
			    padding: 0;
			    margin: 0;
			    width: auto;
			    outline: transparent;
			    font-weight: 500;
			}
			.blue
			{background-color: blue}
			.red
			{background-color: red}
			.green
			{background-color: green}
			.yellow
			{background-color: yellow}
			.color1
			{background-color: #4FC3F7;}
			.color2
			{background-color: #29B6F6;}
			.color3
			{background-color: #03A9F4;}
			.color4
			{background-color: #039BE5;}
			.color5
			{background-color: #0288D1;}
			.color6
			{background-color: #0277BD;}
			.typer
			{
				color: transparent;
				animation: typer 1s infinite;
				text-shadow: 0 0 transparent !important;
				border-right: 1px solid #fff;
			}
			@keyframes typer
			{
				0%, 40%, 100%
				{
					opacity: 0.8;
				}
				70%
				{
					opacity: 0.2;
				}
			}
		</style>
		<script>
			var colors = ["color1", "color2", "color3", "color4", "color5", "color6"];
			var directions = ["right", "left", "bottom", "top"];

			var content = [];
			<?php foreach($data_trends->trends as $datatrends): ?>
				content.push(["<?php echo $datatrends->name ?>" , "<?php echo $datatrends->url ?>"])
			<?php endforeach; ?>
			var aContent = [];
			var repeater = [];
			var timeouts = [];
			var isType = true;
			var id = 0;
			$(function() {
				$(".card").each(function() {
					var _this = $(this);
					var _display = _this.find(".card-display");
					var _hidden = _this.find(".card-hidden");
					var rand = getRandomColor();
					var ct = getRandomContent();
					var dur = (ct[0].length * 200) + 2500;
					_this.data("duration", dur);
					_this.data("direction", getRandomDirection());
					_this.data("id", id);
					_display.addClass(rand);
					_hidden.addClass(getRandomColor(rand));
					_this.find("a").attr("href", ct[1]);
					_this.data("value", ct);
					slowType(_this, ct[0], 0);
					timeouts[id] = setTimeout(function() {
						run(_this)
					}, _this.data("duration"));
					id+=1;
				})

				var split = window.location.href.split("?");
				if(typeof split[1] != "undefined")
				{
					split = split[1].split("=");
					$(".region-select").val(split[1])
				}

				$(".region-select").on("change", function(){
					window.location.href = window.location.origin + window.location.pathname + "?woeid="+$(this).val();
				})
			})

			function slowType(obj, text, index) {
				var body = obj.find(".card-display .card-text");
				var str = text.split("");
				var bid = obj.data("id");
				repeater[bid] = setTimeout(function() {
					if (index < str.length) {
						body.html(body.html() + str[index])
						index += 1;
						checkOverflow(body);
						slowType(obj, text, index);
					} else {
						clearTimeout(repeater[bid]);
					}
				}, 200)
			}

			function checkOverflow(el)
			{
				el = el.closest(".card-text-container");
				while(el.innerHeight() > (parseInt(el.css("font-size"), 10) * 1.5))
				{
					el.css("font-size", parseInt(el.css("font-size"), 10) - 1);
				}
			}

			function randomize(min, max) {
				return Math.floor(Math.random() * (max - min + 1) + min);
			}
			function getRandomDirection()
			{
				var len = directions.length - 1;
				return directions[randomize(0, len)]
			}
			function getRandomColor(nColor)
			{
				var len = colors.length - 1;
				var cColor = colors[randomize(0, len)];
				while (nColor == cColor) {
					cColor = colors[randomize(0, len)];
				}
				return cColor;
			}

			function getRandomContent()
			{
				var len = content.length - 1;
				val = content[randomize(0, len)];
				var idx = aContent.indexOf(val);
				if(idx < 0)
				{
					aContent.push(val);
				}
				else
				{
					while(aContent.indexOf(val) >= 0)
					{
						val = content[randomize(0, len-1)];
					}
					aContent.push(val);
				}
				return val;
			}

			function getRandomDuration(min, max)
			{
				return randomize(min, max);
			}

			function assignContent(obj, ct)
			{
				var oCt = obj.data("value");
				obj.data("value", ct);
				obj.find("a").attr("href", ct[1]);
				removeContent(oCt);
				slowType(obj, ct[0], 0);
			}

			function removeContent(val)
			{
				var idx = aContent.indexOf(val);
				aContent.splice(idx, 1);
			}

			function run(obj) {
				var _display = obj.find(".card-display")
				var _hidden = obj.find(".card-hidden")
				var dir = obj.data("direction");
				var nColor = _hidden.attr("class").split(' ').pop();
				var cColor;
				var bid = obj.data("id")
				var m, sH, fD;
				var n = {};
				var o = {};
				switch (dir) {
					case "right":
						m = "left";
						sH = "-100%";
						fD = "100%";
						n["left"] = fD;
						o["left"] = 0;
						break;
					case "left":
						m = "left";
						sH = "100%";
						fD = "-100%";
						n["left"] = fD;
						o["left"] = 0;
						break;
					case "bottom":
						m = "top";
						sH = "-100%";
						fD = "100%";
						n["top"] = fD;
						o["top"] = 0;
						break;
					case "top":
						m = "top";
						sH = "100%";
						fD = "-100%";
						n["top"] = fD;
						o["top"] = 0;
						break;
					default:
						alert("An error has occured");
						break;	
				}
				_hidden.css(m, sH);
				_display.css(m, "0");
				_display.animate(
					n, {
					duration: 400,
					queue: false,
					complete: function() {
						obj.find(".card-text-container").css("font-size", "40px")
						_display.attr("class", "card-display").addClass(nColor);
						_display.find(".card-text").empty();
						_display.css(m, "0");
						assignContent(obj, getRandomContent());
						var dur = (obj.data("value")[0].length * 200) + 2500;
						timeouts[bid] = setTimeout(function() {
							// var d =  (obj.data("value")[0].length * 200) + 2500;
							// obj.data("duration", d);
							obj.data("direction", getRandomDirection());
							clearTimeout(repeater[bid]);
							clearTimeout(timeouts[bid]);
							run(obj);
						}, dur)
					}
				});
				obj.find(".card-hidden").animate(
					o, {
					duration: 400,
					queue: false,
					complete: function() {
						cColor = getRandomColor(nColor);
						_hidden.removeClass().addClass("card-hidden").addClass(cColor);
					}
				});
			}
		</script>
<!-- 
		<script src="assets/js/bootstrap.min.js" type="text/javascript"> </script>
		 -->
	</body>
</html>