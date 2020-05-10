<!DOCTYPE html>
<html>
<head>
	<title>Novo Modal Fock</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style-page.css">
</head>
<body>
	<div class="container" id="focus">
		<div class="content">
			<h2>A Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.</h2>
			<div class="img-box">
				<img src="img/img-test.jpg">
			</div>
			<a href="#" onclick="act()">Sobre</a>
		</div>
	</div>
	<div id="modal">
		<h2>Contrary to popular belief, Lorem Ipsum?</h2>
		<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word</p>
		<a href="#" onclick="act()">Fechar</a>
	</div>
	<script type="text/javascript">
		function act() {
			let focus = document.getElementById('focus');
			focus.classList.toggle('active');
			let modal = document.getElementById('modal');
			modal.classList.toggle('active');
		}
	</script>
	<script type="text/javascript" src="js/jscript.js"></script>
</body>
</html>