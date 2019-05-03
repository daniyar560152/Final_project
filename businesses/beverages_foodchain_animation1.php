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
<body id="beverages1">
<div class="mainWrapper" style="width:930px;height:746px;">
	<div class="fancyboxWrapper">
    	<div class="title green">USCS Locations</div>
        <div class="selectWrapper clearfix">
        	<div class="btnWrapper"><a href="javascript:;" id="mid_west" class="btn">Midwest</a></div>
        	<div class="btnWrapper"><a href="javascript:;" id="north_east" class="btn">Northeast</a></div>
        	<div class="btnWrapper"><a href="javascript:;" id="south_central" class="btn">South<br>Central</a></div>
        	<div class="btnWrapper"><a href="javascript:;" id="south_east" class="btn">Southeast</a></div>            
        	<div class="btnWrapper"><a href="javascript:;" id="west" class="btn">West</a></div>                        
        </div>
        <div class="mapWrapper white">
        	<a href="javascript:backToWorld();" id="worldMapBtn"><img src="../images/businesses/north_america_map_btn.png"></a>
        	<div id="world_map" class="map"><img src="../images/businesses/beverages/animation1_map_full.png"></div>
        	<div id="mid_west" class="map resize"><img src="../images/businesses/beverages/animation1_map_mid_west.png"></div>
        	<div id="north_east" class="map resize"><img src="../images/businesses/beverages/animation1_map_north_east.png"></div>
        	<div id="south_central" class="map resize"><img src="../images/businesses/beverages/animation1_map_south_central.png"></div>
        	<div id="south_east" class="map resize"><img src="../images/businesses/beverages/animation1_map_south_east.png"></div>
        	<div id="west" class="map resize"><img src="../images/businesses/beverages/animation1_map_west.png"></div>
        </div>
        <ul class="legend clearfix">
        	<li class="black"><span>Head Office</span></li>
            <li class="green"><span>Warehouse</span></li>
            <li class="blue2"><span>Warehouse + Distribution Centre</span></li>
		</ul>
    </div>
</div>
</body>
</html>