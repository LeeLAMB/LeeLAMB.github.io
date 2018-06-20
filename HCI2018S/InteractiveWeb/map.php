<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://spreadsheets.google.com/feeds/cells/1fImbr5ovXR07P7NxYKqU6FsYKsHHaonZV9PmDnjt_T8/2/public/basic?alt=json-in-script&callback=onDataLoaded"></script>
  <script src="app.js"></script>
  <script src="footer.js"></script>
  <link href="style.css" rel="stylesheet">
</head>

<body>
<div class="home">

  <div class="console-container">
    <span id="text"></span>
    <div class="console-underscore" id="console">&#95;</div>
  </div>

  <div class="container">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </div>

</div>



<div class="menu">
      
  <!-- Menu icon -->
  <button class="back"><span>Back</span></button>
  
  <!-- Menu -->
  <button id="temp" onClick="reply_temp()" class="snip1535">Temperature</button>
  <button id="wind" onClick="reply_wind()" class="snip1535">Wind</button>
  <button id ="micro" onClick="reply_micro()" class="snip1535">Finedust</button>
  <a href="http://www.weather.go.kr/weather/forecast/timeseries.jsp" target="_blank"><button id="cont" class="snip1535">Contact</button></a>
</div>


<!-- Main body -->
<div id="mainBox">

  <div id="mapBox">
    <?php include 'mapBox.php'; ?>
  </div>

	<div id="tempContentBox">
    <!--<p> This is information about temperature.</p>-->
    <div id="tempBox">
      <div id="greeting"></div>
      <img id="greetingImg" src="img/sun.png"></img>
      <div id="today">Today is</div>
    </div>
		<div id="tempInfoBox">
      <!--<<p> This is information box. </p>-->
      <div id="time"></div>
      </br></br>
      <div id="temper"></div>
      <div id="humidity"></div>
      <div id="sky"></div>
      <div id="rain"></div>
      <div id="wind1"></div>
      <div id="wind2"></div>
    </div>
  </div>
       
	<div id="windContentBox">
		<div id="firstImageBox" class="imgBox">
			<img id="img1" src="img/1-1.png" height = 350 class="img"/>
      <img id="img2" src="img/1-2.png" height = 350 class="img"/>
      <img id="img3" src="img/1-3.png" height = 350 class="img"/>
      <img id="img4" src="img/1-4.png" height = 350 class="img"/>
      <img id="img5" src="img/1-5.png" height = 350 class="img"/>
      <img id="img6" src="img/1-4.png" height = 350 class="img"/>
      <img id="img7" src="img/1-3.png" height = 350 class="img"/>
      <img id="img8" src="img/1-2.png" height = 350 class="img"/>
		</div>

    <div id="secondImageBox" class="imgBox">
      <img id="img1" src="img/2-1.png" height = 350 class="img"/>
      <img id="img2" src="img/2-2.png" height = 350 class="img"/>
    </div>

    <div id="thridImageBox" class="imgBox">
      <img id="img1" src="img/3-1.png" height = 350 class="img"/>
      <img id="img2" src="img/3-2.png" height = 350 class="img"/>
      <img id="img3" src="img/3-3.png" height = 350 class="img"/>
      <img id="img4" src="img/3-4.png" height = 350 class="img"/>
      <img id="img5" src="img/3-5.png" height = 350 class="img"/>
      <img id="img6" src="img/3-4.png" height = 350 class="img"/>
      <img id="img7" src="img/3-3.png" height = 350 class="img"/>
      <img id="img8" src="img/3-2.png" height = 350 class="img"/>
    </div>

    <div id="fourthImageBox" class="imgBox">
      <img id="img1" src="img/4-1.png" height = 350 class="img"/>
      <img id="img2" src="img/4-2.png" height = 350 class="img"/>
      <img id="img3" src="img/4-3.png" height = 350 class="img"/>
      <img id="img4" src="img/4-4.png" height = 350 class="img"/>
      <img id="img5" src="img/4-3.png" height = 350 class="img"/>
      <img id="img6" src="img/4-2.png" height = 350 class="img"/>
    </div>

    <div id="fifthImageBox" class="imgBox">
      <img id="img1" src="img/5-1.png" height = 350 class="img"/>
      <img id="img2" src="img/5-2.png" height = 350 class="img"/>
      <img id="img3" src="img/5-3.png" height = 350 class="img"/>
      <img id="img4" src="img/5-4.png" height = 350 class="img"/>
      <img id="img5" src="img/5-5.png" height = 350 class="img"/>
      <img id="img6" src="img/5-4.png" height = 350 class="img"/>
      <img id="img7" src="img/5-3.png" height = 350 class="img"/>
      <img id="img8" src="img/5-2.png" height = 350 class="img"/>
    </div>

		<div id="textBox"><p> New heading </p></div>
		<div id="windInfoBox">
			<p id="p1"> Title </p>
      <p id="p2"> Summary </p>
      <p id="p3"> body </p>
		</div>
	</div>
	<div id="microContentBox">
        <!--<p> This is information about temperature.</p>-->
        <div id="microTitle"> Finedust level is </div>
        <img id="microImg" src="img/nolevel.png"></img>
        <div id="microLevel"></div>
	    <div id="microInfoBox">
            <div id="dust"></div> 
        </div>
    </div>
          
</div>


</body>
<script src="https://spreadsheets.google.com/feeds/cells/1fImbr5ovXR07P7NxYKqU6FsYKsHHaonZV9PmDnjt_T8/2/public/basic?alt=json-in-script&callback=onDataLoaded"></script>
</html>

