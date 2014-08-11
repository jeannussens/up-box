$(document).ready(function() {
	$("#btn").on('click',function(e){
		
		var options = {
			success : response
		};
	
		$('#imgForm').ajaxForm(options); 
	});
	function response(responseText)
	{
		$('#targetResult').fadeIn('fast').html(responseText);
		setInterval(function (){redirect();}, 2000);
	}
	function redirect()
	{
		window.location = "index.html";
	}
});