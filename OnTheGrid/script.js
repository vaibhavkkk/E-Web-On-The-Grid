
var user =1;
$(document).ready(function(){
	$('.button').click(function()
	{
		
		var a=document.form1.text1.value;
		$('.footer').append(a);
		$('.footer').append('  - posted by user '+user)
		user=user+1;
		$('.footer').append('<br><hr/>');
		
		/*$.post('http://aaronestone2012.esy.es/data_entry.php?',{'data':a});
		form1.reset();)*/
		$("form")[0].reset();
	});
});
