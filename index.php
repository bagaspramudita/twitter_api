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
		<div class="row">
			<div class="card">
				<div class="card-display">
					<div class="card-content">
						<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
						<span class="card-volume"></span>
					</div>
				</div>
				<div class="card-hidden">
				</div>
			</div>
			<div class="card">
				<div class="card-display">
					<div class="card-content">
						<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
						<span class="card-volume"></span>
					</div>
				</div>
				<div class="card-hidden">
				</div>
			</div>
			<div class="card">
				<div class="card-display">
					<div class="card-content">
						<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
						<span class="card-volume"></span>
					</div>
				</div>
				<div class="card-hidden">
				</div>
			</div>
			<div class="card">
				<div class="card-display">
					<div class="card-content">
						<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
						<span class="card-volume"></span>
					</div>
				</div>
				<div class="card-hidden">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card">
				<div class="card-display">
					<div class="card-content">
						<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
						<span class="card-volume"></span>
					</div>
				</div>
				<div class="card-hidden">
				</div>
			</div>
			<div class="card">
				<div class="card-display">
					<div class="card-content">
						<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
						<span class="card-volume"></span>
					</div>
				</div>
				<div class="card-hidden">
				</div>
			</div>
			<div class="card">
				<div class="card-display">
					<div class="card-content">
						<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
						<span class="card-volume"></span>
					</div>
				</div>
				<div class="card-hidden">
				</div>
			</div>
			<div class="card">
				<div class="card-display">
					<div class="card-content">
						<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
						<span class="card-volume"></span>
					</div>
				</div>
				<div class="card-hidden">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card">
				<div class="card-display">
					<div class="card-content">
						<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
						<span class="card-volume"></span>
					</div>
				</div>
				<div class="card-hidden">
				</div>
			</div>
			<div class="card">
				<div class="card-display">
					<div class="card-content">
						<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
						<span class="card-volume"></span>
					</div>
				</div>
				<div class="card-hidden">
				</div>
			</div>
			<div class="card">
				<div class="card-display">
					<div class="card-content">
						<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
						<span class="card-volume"></span>
					</div>
				</div>
				<div class="card-hidden">
				</div>
			</div>
			<div class="card">
				<div class="card-display">
					<div class="card-content">
						<div class="card-text-container"><span class="card-text"></span><span class="typer">|</span><a href="" target="_blank"> </a></div>
						<span class="card-volume"></span>
					</div>
				</div>
				<div class="card-hidden">
				</div>
			</div>
		</div>
		<div class="region-select-container">
			<div class="region-select-center">
				Now Trending in 
				<span class="region-display toggle-region">Indonesia</span>
				<ul class="region-select">
					<li class="dropdown-header">Negara</li>
					<li><a href="javascript:void(0);" data-woeid="23424846" class="indonesia">Indonesia</a></li>
					<li><a href="javascript:void(0);" data-woeid="2459115">United States</a></li>
					<li><a href="javascript:void(0);" data-woeid="23424975">Inggris</a></li>
					<li><a href="javascript:void(0);" data-woeid="23424901">Malaysia</a></li>
					<li><a href="javascript:void(0);" data-woeid="1225448">Thailand</a></li>
					<!-- <li><a href="javascript:void(0);" data-woeid="2151330">China</a></li> -->
					<li class="divider"></li>
					<li class="dropdown-header">Kota</li>
					<li><a href="javascript:void(0);" data-woeid="1047378" class="kota">DKI Jakarta</a></li>
					<li><a href="javascript:void(0);" data-woeid="1047180" class="kota">Bandung</a></li>
					<li><a href="javascript:void(0);" data-woeid="1030077" class="kota">Bekasi</a></li>
				</ul>
			</div>
			<div class="region-select-right">
				Source: 
				<span class="source-display toggle-source">Twitter</span>
				<ul class="source-select">
					<li><a href="javascript:void(0)" data-source="twitter">Twitter</a></li>
					<!-- <li><a href="javascript:void(0)" data-source="google">Google</a></li> -->
				</ul>
			</div>
			<div class="region-select-left">
				Last updated: <span class="last-update"></span>
			</div>
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
				overflow: hidden;
			}
			a
			{
				text-decoration: none!important;
				color: inherit!important;
			}
			.row:first-child
			{
				margin-top: 60px;
			}
			.row
			{
				height: calc((100vh - 60px) / 3);
				background-color: white;
				margin: 0;
				padding:  0
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
			.card-content
			{
				position: absolute;
				top: 50%;
				-webkit-transform: translate(0, -50%);
				transform: translate(0, -50%);
			}
			.card .card-display .card-text-container
			{
				position: relative;
				max-width: 100%;
				font-size: 48px;
				padding: 0 12px;
				overflow: visible;
				white-space: nowrap;
				box-sizing: border-box;
			}
			.card-volume
			{
				display: none;
				padding: 0 12px;
				font-size: 23px;
			}
			.card .card-display .card-text-container .card-text, .card .card-display .card-volume
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
				left: 0;
				right: 0;
				top: 0;
				background-color: #f7f7f7;
				height: 60px;
			    color: #205066;
				box-shadow: 0 3px 5px rgba(0,0,0,0.2);
				font-size: 27px;
				line-height: 60px;
				z-index: 99;
			}
			.region-select-center
			{
				position: absolute;
				top: 0;
				bottom: 0;
				left: 50%;
				color: #205066;
				-webkit-transform: translate(-50%, 0);
				transform: translate(-50%, 0);
			}
			.region-display
			{
				font-size: 27px;
			    font-weight: 700;
			    cursor: pointer;
			}
			.region-display:hover, .region-display.active, .source-display:hover, .source-display.active
			{
				border-bottom: 1px dashed #205066;
			}
			.source-display
			{
				text-transform: capitalize;
				font-weight: 700;
				cursor: pointer;
			}
			.region-select, .source-select
			{
				display: none;
				right: 0;
				top: 60px;
				position: absolute;
			    background: #fff;
			    border-radius: 4px;
			    border: 1px solid #aaa;
			    list-style: none;
			    -webkit-appearance: none;
			    padding: 8px 0;
			    margin: 0;
			    color: #205066;
			    width: auto;
			    line-height: 28px;
			    font-size: 16px;
			    outline: transparent;
			    max-height: 250px;
			    overflow: auto;
			}
			.region-select::-webkit-scrollbar, .source-select::-webkit-scrollbar
			{
			    width: 8px;
			    border-radius: 2px;
			}
			 
			.region-select::-webkit-scrollbar-track, .source-select::-webkit-scrollbar-track
			{
			    border-radius: 2px;
			    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
			}
			 
			.region-select::-webkit-scrollbar-thumb, .source-select::-webkit-scrollbar-thumb
			{
			   	border-radius: 2px;
			  	background-color: rgba(0,0,0,0.25);
			  	outline: none;
			}
			.region-select li a, .source-select li a
			{
				display: block;
				padding: 0 18px;
				width: 100%;
			}
			.region-select .dropdown-header, .source-select .dropdown-header
			{
				font-size: 14px;
				color: #999;
				padding: 0 20px 4px;
			}
			.region-select li:not(.divider) a:hover, .region-select li a.active, .source-select li:not(.divider) a:hover, .source-select li a.active
			{
				background-color: rgba(0,0,0,0.08)
			}
			li.dropdown-header a
			{
				background-color: transparent!important;
			}
			.divider
			{
			    height: 1px;
    			margin: 12px 0;
			    overflow: hidden;
			    background-color: #e5e5e5;
			}
			.region-select-right
			{
				position: absolute;
				font-size: 17px;
				right: 30px;
			}
			.region-select-right .source-display, .last-update
			{
				text-decoration: none;
				color: #205066;
				font-weight: 700;
			}
			.region-select-left
			{
				position: absolute;
				font-size: 17px;
				left: 30px;
			}
			.region-select option
			{
				font-size: 14px;
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
			@media(min-width: 1441px){
				.card .card-display .card-text-container
				{
					font-size: 56px
				}
			}
		</style>
		<script>
			<?php
				$datatrends;
				if(!isset($_GET['source']) || $_GET['source'] == "twitter")
				{
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
					$datatrends = $trends[0];
				}
				else if(isset($_GET['source']) && $_GET['source'] == "google")
				{
					$trends = file_get_contents("https://nulis.babe.news/api/gtrend");
					$datatrends = json_decode($trends);
				}
			?>
			var currId = "23424846";
			var currReg = "Indonesia";
			var currSource = "twitter";
			var colors = ["color1", "color2", "color3", "color4", "color5", "color6"];
			var directions = ["right", "left", "bottom", "top"];
			var origFont = window.innerWidth < 1441 ? "48px" : "56px";
			var split = window.location.href.split("?");
			if(typeof split[1] != "undefined")
			{
				split = split[1].split("&");
				var ln = split.length;
				for (var q = 0; q < ln; q++)
				{
					var array = split[q].split("=")
					var key = array[0];
					var value = array[1];
					if(key == "woeid")
					{
						currId = value;
						var currReg = $(".region-select").find("[data-woeid='" + currId + "']")
						$(".region-display").html(currReg.html());
						currReg.addClass("active");
						if(currReg.hasClass("kota"))
						{
							$(".indonesia").addClass("active");
						}
					}
					else if (key == "source")
					{
						currSource = value;
						$(".source-select").find("[data-source='" + currSource + "']").addClass("active");
						$(".source-display").html(currSource);
					}
				}
			}
			else
			{
				$(".indonesia").addClass("active");
			}
			var date = new Date("<?php echo $datatrends->created_at ?>");
			var month = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "December"]
			var aContent = [];
			var repeater = [];
			var timeouts = [];
			var isType = true;
			var id = 0;
			var content = [];
			<?php foreach($datatrends->trends as $data_trends): ?>
				content.push(["<?php echo $data_trends->name ?>" , "<?php echo $data_trends->url ?>", "<?php echo isset($data_trends->tweet_volume) ? $data_trends->tweet_volume : '' ?>"])
			<?php endforeach; ?>
			$(function() {
				$(".card").each(function() {
					var _this = $(this);
					var _display = _this.find(".card-display");
					var _hidden = _this.find(".card-hidden");
					var _volume = _this.find(".card-volume");
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
					if(ct[2].length > 0)
					{
						_volume.html(String(ct[2]).replace(/(.)(?=(\d{3})+$)/g,'$1,') + " orang membicarakan ini");
						_volume.fadeIn(600);
					}
					else
					{
						_volume.hide()
						_volume.empty();
					}
					slowType(_this, ct[0], 0);
					timeouts[id] = setTimeout(function() {
						run(_this)
					}, dur);
					id+=1;
				})

				$(window).on("click", function(e){
					if($(".toggle-source").hasClass("active"))
					{
						if(!$(e.target.offsetParent).hasClass("source-select") && !$(e.target).hasClass("source-select") && !$(e.target).hasClass("toggle-source"))
						{
							$(".source-select").hide();
							$(".toggle-source").toggleClass("active")
						}
					}
					if($(".toggle-region").hasClass("active"))
					{
						if(!$(e.target.offsetParent).hasClass("region-select") && !$(e.target).hasClass("region-select") && !$(e.target).hasClass("toggle-region"))
						{
							$(".region-select").hide();
							$(".toggle-region").toggleClass("active")
						}
					}
				})

				$(".toggle-region").on("click", function(){
					$(".region-select").toggle();
					$(this).toggleClass("active")
				})
				$(".toggle-source").on("click", function(){
					$(".source-select").toggle();
					$(this).toggleClass("active")
				})
				$(".region-select a").on("click", function()
				{
					var reg = $(this).data("woeid");
					window.location.href = window.location.origin + window.location.pathname + "?woeid=" + reg + "&source=" + currSource;
				})
				$(".source-select a").on("click", function()
				{
					var source = $(this).data("source");
					window.location.href = window.location.origin + window.location.pathname + "?woeid=" + currId + "&source=" + source;
				})

				setTimeout(function(){
					window.location.href = window.location.href;
				}, 300000)

				$(".last-update").html((date.getHours() >= 10 ? date.getHours() : "0"+date.getHours()) + ":" + (date.getMinutes() >= 10 ? date.getMinutes() : "0"+date.getMinutes()) + " WIB, " + date.getDate() + " " +month[date.getMonth()] + " " + date.getFullYear())
				
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
				while(el.innerWidth() > el.closest(".card-display").innerWidth())
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
				var _volume = obj.find(".card-volume")
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
				_volume.fadeOut(400);
				_display.animate(
					n, {
					duration: 400,
					queue: false,
					complete: function() {
						obj.find(".card-text-container").css("font-size", origFont)
						_display.attr("class", "card-display").addClass(nColor);
						_display.find(".card-text").empty();
						_display.css(m, "0");
						assignContent(obj, getRandomContent());
						if(obj.data("value")[2].length > 0)
						{
							_volume.html(String(obj.data("value")[2]).replace(/(.)(?=(\d{3})+$)/g,'$1,') + " orang membicarakan ini");
							_volume.fadeIn(600);
						}
						else
						{
							_volume.empty();
						}
						var dur = (obj.data("value")[0].length * 200) + 2500;
						timeouts[bid] = setTimeout(function() {
							obj.data("direction", getRandomDirection());
							clearTimeout(repeater[bid]);
							clearTimeout(timeouts[bid]);
							run(obj);
						}, dur)
					}
				});
				_hidden.animate(
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