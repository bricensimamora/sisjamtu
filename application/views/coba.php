<html>
<head>
	<title>
		Menu
	</title>
	<style>
		ul{float: left; list-style: none;}
		ul li{float: left; margin-left: 20px;}
		ul li a{color: #fff; text-decoration: none; font-family: sans-serif; padding: 6px 10px; background: #0080cd;}
		.active {background-color: #ff0000;}
	</style>
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('ul li a').click(function(){
				$('li a').removeClass("active");
				$(this).addClass("active");
			});
		});
	</script>
</head>
<body>
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">menu</a></li>
		<li><a href="#">about</a></li>
		<li><a href="#">service</a></li>
	</ul>	
