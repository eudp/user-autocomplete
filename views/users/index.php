<html>
<head>
	<title>Vamos</title>

	<script
	  src="https://code.jquery.com/jquery-3.2.1.js"
	  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	  crossorigin="anonymous"></script>
</head>
<body>

	<input type="text" id="search-field">
	<div id="users"></div>
	
	<script>
		$(document).ready(function(){
			$("#search-field").keyup(function(){
				$.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>" + "index.php/users/get_all",
				data:'keyword='+$(this).val(),
				success: function(data){
					$("#users").show();
					$("#users").html(data);
				}
				});
			});
		});

		function showInfo(id) {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>" + "index.php/users/get_one",
				data:'user='+id,
				success: function(data){
					$("#users").show();
					$("#users").html(data);
				}
			});
		}
	</script>

</body>
</html>