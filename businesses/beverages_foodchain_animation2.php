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
<body id="beverages2">
<div class="mainWrapper" style="width:930px;height:746px;">
	<div class="fancyboxWrapper">
    	<div class="title green">Finlays around the world</div>
        <div class="selectWrapper clearfix">
        	<div class="btnWrapper"><a href="javascript:;" id="finlay_africa" class="btn">Africa</a></div>
        	<div class="btnWrapper"><a href="javascript:;" id="finlay_asia" class="btn">Asia</a></div>
        	<div class="btnWrapper"><a href="javascript:;" id="finlay_europe" class="btn">Europe</a></div>
        	<div class="btnWrapper"><a href="javascript:;" id="finlay_north_america" class="btn">North America</a></div>
        	<div class="btnWrapper"><a href="javascript:;" id="finlay_south_america" class="btn">South America</a></div>
        </div>
        <div class="mapWrapper white">
        	<a href="javascript:backToWorld();" id="worldMapBtn"><img src="../images/businesses/world_map_btn.png"></a>
        	<div id="world_map" class="map"><img src="../images/businesses/beverages/animation2_map_full.png"></div>
        	<div id="finlay_north_america" class="map resize"><img src="../images/businesses/beverages/animation2_map_north_america.png"></div>
        	<div id="finlay_south_america" class="map resize"><img src="../images/businesses/beverages/animation2_map_south_america.png"></div>
        	<div id="finlay_africa" class="map resize"><img src="../images/businesses/beverages/animation2_map_africa.png"></div>
        	<div id="finlay_europe" class="map resize"><img src="../images/businesses/beverages/animation2_map_europe.png"></div>
        	<div id="finlay_asia" class="map resize"><img src="../images/businesses/beverages/animation2_map_asia.png"></div>
        </div>
        <div class="legend clearfix" style="font-family:Ubuntu,sans-serif; text-align:center;">
            <span style="color:#67327B">&#9679;</span>&nbsp;Blending&nbsp;&nbsp;&nbsp;
        	<span style="color:#CE0F49">&#9679;</span>&nbsp;Manufacturing sites&nbsp;&nbsp;&nbsp;
        	<span style="color:#004EA8">&#9679;</span>&nbsp;Packing facilities&nbsp;&nbsp;&nbsp;
        	<span style="color:#00843D">&#9679;</span>&nbsp;Tea estates&nbsp;&nbsp;&nbsp;
        	<span style="color:#EAAA00">&#9679;</span>&nbsp;Trading/sales offices
		</div>
    </div>
</div>
</body>
</html>