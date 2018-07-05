function hideForm(){
	$(".question__label").click(function(){
		$(".hidden_form").show();
		
	});
}
$(document).ready(function(){
	hideForm();
});


jQuery(document).ready(function() {
	jQuery("#sender_q").bind("submit", function() {
		var request = $.ajax({
			url: "scripts/sender.php",
			type: "POST",
			data: $(this).serialize(),
			dataType: "json",
			success: function(result) {
					if (result.corect == 'ok'){
						swal({
						  title: "Дякую!",
						  text: "З вами зв'яжуться наші менеджери!",
						  timer: 1500,
						  icon: "success",
						  button: false,
						  dangerMode: true,
						});
						$('#sender_q').trigger('reset');
						var url = "http://vobu.ua";
						$(location).attr('href',url);
				}else{
					console.log("error");
				}
				return false;
			}
		});
		return false;
	});
});