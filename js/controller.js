
jQuery(document).ready(function($){
	var link = "http://localhost/wp-test/sample-page/";
	
	$('a').bind('click', function(){
		if($(this).attr('href') == link){
			$('#myModal').reveal();
		}
	});	
	
});
