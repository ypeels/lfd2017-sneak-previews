<HTML>
<HEAD>
<META name="resource-type" value="document">
<META name="description" value="Learning From Data">
<META name="keywords" value="machine learning, Yaser S. Abu-Mostafa,Malik Magdon-Ismail,Hsuan-Tien Lin, textbook, data mining, statistical learning, computational learning">
<META name="distribution" value="global">
<TITLE>Learning From Data - Occam's Razor</TITLE>

<style>.ytp-watermark { display: none !important; }</style>

<script type="text/javascript" src="youtube.js"></script>

</HEAD>
<BODY bgcolor="007755" text="black" link="#E02010" vlink="#651000">
<span style="color:yellow"><H1>Occam's Razor (sneak preview)</H1></span>

<p></p>

<noscript><span style="color:yellow"><center><H1>This page requires JavaScript.</H1></span></center></noscript>

<!--
<object width="1280" height="720">
  <param name="movie"
         value="http://www.youtube.com/v/EZBUDG12Nr0?version=3&start=384&end=602&autoplay=0&vq=hd720"></param>
  <param name="allowScriptAccess" value="always"></param>
  <embed src="http://www.youtube.com/v/EZBUDG12Nr0?start=384&end=602&autoplay=0&vq=hd720"
         allowfullscreen="true"
         allowscriptaccess="always"
         width="1280" height="720"></embed>
		 
<!--version=3& 
	type="application/x-shockwave-flash"
         -->
		 
<!-- 
https://developers.google.com/youtube/player_parameters
https://developers.google.com/youtube/iframe_api_reference
-->
		 
<!--<iframe width="560" height="315" src="https://www.youtube.com/embed/EZBUDG12Nr0?rel=0&controls=0&start=384&end=387&showinfo=0&hl=pt_BR&cc_load_policy=1;fs=1" frameborder="0" allowfullscreen></iframe>-->

<!--
<object width="640" height="360">
  <param name="movie"
         value="http://www.youtube.com/v/EZBUDG12Nr0?controls=0&rel=0&showinfo=0&start=384&end=387"></param>  
  <param name="allownetworking" value="internal"></param>
  <embed src="http://www.youtube.com/v/EZBUDG12Nr0?version=3&controls=0&rel=0&showinfo=0&start=384&end=387"
	     type="application/x-shockwave-flash"
         allowfullscreen="true"
         allowscriptaccess="always"
		 allownetworking="internal"
         width="640" height="360"></embed>
</object>
-->

<br/>

<!--
<object width="1280" height="720">
  <param name="movie"
         value="http://www.youtube.com/v/EZBUDG12Nr0?start=384&end=602&autoplay=0&vq=hd720"></param>
  <param name="allowScriptAccess" value="always"></param>
  <embed src="http://www.youtube.com/v/EZBUDG12Nr0?start=384&end=602&autoplay=0&vq=hd720"
         type="application/x-shockwave-flash"
         allowfullscreen="true"
         allowscriptaccess="always"
		 allownetworking="internal"
         width="1280" height="720"></embed>
</object>
-->
		 
<!--<embed width="640" height="385" type="application/x-shockwave-flash" src="http://www.youtube.com/v/EZBUDG12Nr0?controls=0&rel=0&showinfo=0&start=384&end=387&hl=pt_BR;fs=1" allowfullscreen="true" allowscriptaccess="always" allownetworking="internal"></embed>-->

<p></p>

<!-- https://developers.google.com/youtube/iframe_api_reference -->
<!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <div id="player"></div>

    <script type="text/javascript">
	
	  // TODO: move this into youtube.js somehow (avoid copy/pasting into html files)
	  // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	  
	  ////////////////////////
	  /// 2.5 USER OPTIONS ///
	  ////////////////////////
	  //var id = 'EZBUDG12Nr0', start = 384, end = 387, lang = 'pt_BR'; // testing
	  //var id = 'EZBUDG12Nr0', start = 384, end = 602, lang = 'en_US'; // Occam's Razor
	  
	  //alert('calling main');
	  function onYouTubeIframeAPIReady() {
		main('EZBUDG12Nr0', 384, 387); //, 'pt_BR'); // testing
	  }
	  
	  
      
    </script>


<p><A href="https://courses.edx.org/courses/course-v1:CaltechX+CS1156x+3T2017/info"><H2><span style="color:yellow">Back to the edX course page</span></H2></A></p>

</BODY>
</HTML>
