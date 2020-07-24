<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title>Testes</title>
	<link rel="shortcut icon" href="img/c++.png">

	<script src="js/jquery-3.3.1.min.js"></script> <!-- essa <link> traz o JS do JQuery para esta página -->
	<style type="text/css">
		body{
			background-color: #FFDAB9;
			transition: 0.5s;
		};
	</style>
</head>

<body >
	<h1>ISR</h1>
	<p >
		<span> AAA</span>
	</p>

		<script> // seta ordenadamente cores am uma lista de cores o background.
		// $(document).ready(function(){
		// 	let i = 1;
		// 	var body = document.getElementsByTagName('body')[0];

		// 	setTimeout(function change() {
		// 		// console.log(i);
		// 		// body.style.background = "#8B0000"

		// 		let counter = 0;
		// 		const colorArr = ['blue', 'black','green']
		// 		setInterval(
		// 			()=> {

		// 				if (counter == colorArr.length) {
		// 					counter = 0
		// 				}
		// 				body.style.background = colorArr[counter++];
		// 				if (counter == 1) {
		// 					body.style.color = 'white'
		// 				}
		// 			}, 1000)
		// 		// i++;
		// 		setTimeout(change, 3000);

		// 	}, 3000)

		// })

		var imageCount = 0;
		var currentImage = 0;
		var images = new Array();

		images[0] = 'bgimgs/Amin.jpg';
		images[1] = 'bgimgs/BlueSkies.jpg';
		images[2] = 'bgimgs/CosmicFusion.jpg';
		images[3] = 'bgimgs/LoveandLiberty.jpg';
		images[4] = 'bgimgs/Netflix.jpg';

		var preLoadImages = new Array();
		for (var i = 0; i < images.length; i++)
		{
			if (images[i] == "")
				break;

			preLoadImages[i] = new Image();
			preLoadImages[i].src = images[i];
			imageCount++;
		}

		function startSlideShow()
		{
			if (document.body && imageCount > 0)
			{
				document.body.style.backgroundImage = "url("+images[currentImage]+")";    
				document.body.style.backgroundAttachment = "fixed";
				document.body.style.backgroundRepeat = "no-repeat";
				document.body.style.backgroundPosition = "center";
				document.body.style.backgroundSize = "100% 100%";

				currentImage = currentImage + 1;
				if (currentImage > (imageCount-1))
				{ 
					currentImage = 0;
				}
				setTimeout('startSlideShow()', 3000);
			}
		}
		startSlideShow();
	</script>
</body>
</html>
<!-- body.style.background = "#8B0000"; -->