$(document).ready(function()
{
	$("#btn").on("click", function(ev)
	{
		ev.preventDefault();
		$.ajax({
			url:'rpc/rpc.php',
			type:'post',
			data:{
				nombre:$("#nombre").val()
		},
	})
		.done(function(msg)
		{
			$("#mensaje").html(msg);
		})
		.fail(function(jHttp, textStatus,errorThrow)
		{
			$("#mensaje").html("Error: "+textStatus+"errorThrow");

		})
		.always(function()
		{
			console.log("Completo");
		});
	})
})