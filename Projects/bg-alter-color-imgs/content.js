// console.log("cabecalho")
var imageCount = 0;
var currentImage = 0;
var images = new Array();

const bodytag = document.querySelector("body")
bodytag.classList.add("transit")

images[0] = 'https://img.elo7.com.br/product/zoom/29C1895/tecido-degrade-conjunto-unicornio-45-x-90-cm-un02-tema-de-festa-infantil.jpg';
images[1] = 'https://img.elo7.com.br/product/zoom/29BC26D/tecido-degrade-azul-liso-sublimado-180-cm-x-40-cm-estampa-saia-vestido-infantil.jpg';
images[2] = 'https://i.pinimg.com/originals/88/86/ec/8886eccdc86ca03e1456ecac4cbe6594.jpg';
images[3] = 'https://i.pinimg.com/originals/e0/55/a9/e055a9df06f399e820b39c7ea113b2f2.jpg';
images[4] = 'https://grafica.design/forum/wp-content/uploads/sites/61/2019/01/degrade.png';

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
		const bodytag = document.querySelector("body")
		bodytag.classList.add("transit")
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
		setTimeout('startSlideShow()', 8000);
	}
}
startSlideShow();