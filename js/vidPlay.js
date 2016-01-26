

$(document).ready(function() {
	var ua = navigator.userAgent;
    function is_touch_device() { 
        try {  
            document.createEvent("TouchEvent");  
            return true;  
        } catch (e) {  
            return false;  
        }  
    }

	if ($("#maker-video").length > 0) {
		$("#play").click(function() {
			$("#video-container").html("<iframe src=\"http://player.vimeo.com/video/"+videoToPlay+"?api=1&amp;autoplay=1&amp;player_id=full-video\" webkitAllowFullScreen mozallowfullscreen allowFullScreen id=\"full-video\" frameborder=\"0\"></iframe>", function() {
			});
			$("#video-container").show();
		});
		
	}
});