const colorDiv = document.querySelector('.change-color');
let counter = 0;

const colorArr = ['red', 'yellow']

setInterval(
	()=> {
		counter++
		
		if (counter == colorArr.length) {
			counter = 0
		}
		
		colorDiv.style.background = colorArr[counter];
	}, 1000
)