// console.log("cabecalho")

let counter = 0;
const colorArr = ['#7200E4', '#F31AB9'];
// const bodytag = document.querySelector("body")
const tbodytag = document.querySelector("tbody")

function startAlert()
{

	tbodytag.classList.add("transit");

	document.body.classList.add('body-style');
	

	setInterval(
		()=> {
			counter++

			if (counter == colorArr.length) {
				counter = 0
			}

			tbodytag.style.background = colorArr[counter];
		}, 500
		)


	// setTimeout('startAlert()', 2500);

}
startAlert();