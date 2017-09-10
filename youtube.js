function main(id, start, end, lang) {
		
	  lang = lang || 'en_US'; // default value (makes `lang` optional)

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function foo() { //onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '360',//'720',
          width: '640', //'1280',
          videoId: id, 
		  
		  playerVars: {
			'controls': 0, // hide progress bar - can't click outside the video clip
			'disablekb': 1, // disable keyboard, which MIGHT be used to skip outside the segment
			'rel': 0, // hide related content at end of video (irrelevant with onPlayerStateChange())
			//'vq': 720, // actually, youtube highest quality is currently 480p?
			
			'hl': lang, // changes subtitle (and controls) language
			'cc_load_policy': 1, // force-display subtitles	
			
			//'autoplay': 1, // off by default; ENABLED to minimize chances of seeing Youtube link?
			//'showinfo': 0, // moves lecture title/link (top-left) into YouTube logo (bottom-right)...
			'modestbranding': 1, 'autohide': 1, // irrelevant with controls=0
			
			'start': start,
			'end': end			
		  },
          events: {
            //'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }
	  foo(); // onYouTubeIframeAPIReady() used from html instead
	  
	  //iframe = player.getIframe();
	  
	  

      // 4. The API will call this function when the video player is ready.
      //function onPlayerReady(event) {
      //  event.target.playVideo();
      //}

      // 5. The API calls this function when the player's state changes.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.ENDED && !done) {
		  var player = document.getElementById("player"); //.style.display = 'none';
		  
		  var replay = document.createElement("h1");
		  replay.innerHTML = "To watch again, please reload the page.";
		  replay.style.color = 'yellow';
		  
		  //player.parentNode.replaceChild(replay, player);
          done = true;
        }
      }
	  
}
