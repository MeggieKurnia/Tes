<html>
<head>
<link rel="stylesheet" href="style.css"/>
</head>
<body>


<form action="" method="post" id="frm">
	<table align="center">
		<tr>
			<td>Variable a</td>
			<td><input type="text" name="a" id="a" placeholder="Please Input Number.."></td>
		</tr>
		<tr>
			<td>Variable b</td>
			<td><input type="text" name="b" id="b" placeholder="Please Input Number.."></td>
		</tr>
		<tr>
			<td><input type="submit" name="sub"></td>
		</tr>
	</table>
</form>				
<div id="ra"></div>
<script src="jquery-1.4.3.min.js"></script>
<script>
	$('document').ready(function(){
		$('#a').focus();
		$("#ra").hide();
		$('#frm').submit(function(){
			var a = $("#a").val();
			var b = $("#b").val();
			if(a == "" || b == ""){
				alert("Variable a OR b required");
				return false;
			}
			if(isNaN(a) || isNaN(b) ){
				if(isNaN(a)){
					$("#a").val("");
					$("#a").focus();
					alert('Error Your Input');
					return false;
				}else{
					$("#b").val("");
					$("#b").focus();
					alert('Error Your Input');
					return false;
				}
			}
			$.ajax({
				url:"proses.php",
				type:"post",
				dataType:"html",
				data:$(this).serialize(),
				success:
					function(data){
						$("#ra").html(data).fadeIn(2000);
						$("#frm").get(0).reset();
					}
			});
			return false;
		});
	});
</script>
</body>
</html>