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
<body id="marine2">
<div class="mainWrapper marine" style="width:930px;height:746px;">
	<div class="fancyboxWrapper">
    	<div class="title blue">SPO around the world</div>
        <div class="selectWrapper clearfix">
        	<div class="btnWrapper"><a href="javascript:;" id="north_america" class="btn">North<br>America</a></div>
        	<div class="btnWrapper"><a href="javascript:;" id="south_america" class="btn">South<br>America</a></div>
        	<div class="btnWrapper"><a href="javascript:;" id="africa" class="btn">Africa</a></div>
			<div class="btnWrapper"><a href="javascript:;" id="europe" class="btn">Europe</a></div>
        	<div class="btnWrapper"><a href="javascript:;" id="middle_east" class="btn">Middle<br>East</a></div>
        	<div class="btnWrapper"><a href="javascript:;" id="asia" class="btn">Asia</a></div>
        	<div class="btnWrapper"><a href="javascript:;" id="australia" class="btn">Australia</a></div>
        </div>
        <div class="mapWrapper">
        	<a href="javascript:backToWorld();" id="worldMapBtn"><img src="../images/businesses/world_map_btn.png"></a>
        	<div id="world_map" class="map"><img src="../images/businesses/marine/animation2_map_world.png"></div>
        	<div id="north_america" class="map resize"><img src="../images/businesses/marine/animation2_map_north_america.png"></div>
        	<div id="south_america" class="map resize"><img src="../images/businesses/marine/animation2_map_south_america.png"></div>
        	<div id="africa" class="map resize"><img src="../images/businesses/marine/animation2_map_africa.png"></div>
            <div id="europe" class="map resize"><img src="../images/businesses/marine/animation2_map_europe.png"></div>
            <div id="middle_east" class="map resize"><img src="../images/businesses/marine/animation2_map_middle_east.png"></div>
        	<div id="asia" class="map resize"><img src="../images/businesses/marine/animation2_map_asia.png"></div>
        	<div id="australia" class="map resize"><img src="../images/businesses/marine/animation2_map_australia.png"></div>
        </div>
        <ul class="legend clearfix">
        	<li class="blue"><span>Office</span></li>
		</ul>
    </div>
</div>
</body>
</html>