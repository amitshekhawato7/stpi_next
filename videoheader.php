<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- Warming Up -->
<link href='http://fonts.googleapis.com/css?family=Buenard:700' rel='stylesheet' type='text/css'>
<script src="http://pupunzi.com/mb.components/mb.YTPlayer/demo/inc/jquery.mb.YTPlayer.js"></script>
<style>
.video-section .pattern-overlay {
background-color: rgba(71, 71, 71, 0.59);
padding: 110px 0 32px;
min-height: 496px; 
/* Incase of overlay problems just increase the min-height*/
}
.video-section h1, .video-section h3{
text-align:center;
color:#fff;
}
.video-section h1{
font-size:110px;
font-family: 'Buenard', serif;
font-weight:bold;
text-transform: uppercase;
margin: 40px auto 0px;
text-shadow: 1px 1px 1px #000;
-webkit-text-shadow: 1px 1px 1px #000;
-moz-text-shadow: 1px 1px 1px #000;
}
.video-section h3{
font-size: 25px;
font-weight:lighter;
margin: 0px auto 15px;
}
.video-section .buttonBar{display:none;}
.player {font-size: 1px;}
</style>
<!--Video Section-->
<section class="content-section video-section">
  <div class="pattern-overlay">
  <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=hMy5za-m5Ew', containment:'.video-section', quality:'large', autoPlay:true, mute:false, opacity:1}">bg</a>
   <!-- <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <h1>Full Width Video</h1>  
        <h3>Enjoy Adding Full Screen Videos to your Page Sections</h3>
	   </div>
      </div>
    </div>-->
  </div>
</section>
<script>
$(document).ready(function () {

    $(".player").mb_YTPlayer();

});
</script>
<!--Video Section Ends Here-->

