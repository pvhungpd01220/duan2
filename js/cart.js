$(document).ready(function(){
	$('.soluong').change(function(){
		var soluongmoi = $(this).val();
		var id = $(this).attr("data-id");


		$.ajax({
			url: "xuligiohang.php",
			type: "POST",
			data: "soluongmoi="+soluongmoi+"&id="+id,
			async: true,
			success:function(data){
				location.reload();
			}

		});
	})
})