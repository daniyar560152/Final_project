<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>
<script type="text/javascript" src="../../js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../../js/map.js"></script>
<script src="https://use.typekit.net/ril7sms.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='../css/map.css' rel='stylesheet' type='text/css'>
<style>
	.btn { width:80px; height:80px; }
</style>
<body id="marine1">
<div class="mainWrapper marine" style="width:930px;height:650px;">
	<div class="fancyboxWrapper">
    	<div class="title blue">CNCo around the world</div>
		<p>&nbsp;</p>
		<!--
        <div class="selectWrapper clearfix">
        	<div class="btnWrapper"><a href="javascript:;" id="asia1" class="btn">Asia</a></div>
        	<div class="btnWrapper"><a href="javascript:;" id="australia1" class="btn">Australia, <nobr>New Zealand </nobr><br/><nobr>& others</nobr></a></div>
        	<div class="btnWrapper"><a href="javascript:;" id="north_america1" class="btn">North<br>America</a></div>
			<div class="btnWrapper"><a href="javascript:;" id="europe1" class="btn">Europe</a></div>
        </div>
		-->
        <div class="mapWrapper">
        	<a href="javascript:backToWorld();" id="worldMapBtn"><img src="../images/businesses/world_map_btn.png"></a>
        	<div id="world_map" class="map"><img src="../images/businesses/marine/marine-zoom-out.jpg"></div>
        	<div id="asia1" class="map resize"><img src="../images/businesses/marine/Marine-Services-map.png"></div>
        	<div id="australia1" class="map resize"><img src="../images/businesses/marine/Marine-Services-map.png"></div>
        	<div id="north_america1" class="map resize"><img src="../images/businesses/marine/Marine-Services-map.png"> </div>
			<div id="europe1" class="map resize"><img src="../images/businesses/marine/Marine-Services-map.png"></div>
        </div>
        <ul class="legend clearfix">
        	<li class="dash-shipping"><span>ARJ Shipping</span></li>
			<li class="dash-bulk"><span>ARJ Bulk</span></li>
			<li style="color:#000000;"><span>Office</span></li>
		</ul>
    </div>
</div>
</body>
</html>