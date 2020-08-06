// console.log("cabecalho")

const grupo = "PROCESSOS E QUALIDADE";

const interval = setInterval(() => {
	const headertag = document.querySelector(".cabecalho")
	const bodytag = document.querySelector("body")
	if (headertag) {

		clearInterval(interval)

		const buttonColor = document.createElement("button")
		const buttonGroup = document.createElement("button")

		buttonColor.innerHTML = "BG-Color"
		buttonColor.classList.add('button-style')
		buttonGroup.innerHTML = "Qualidade"
		buttonGroup.classList.add('quality-style')

		buttonColor.addEventListener("click", () => {
			bodytag.classList.add("body-style")
		})

		buttonGroup.addEventListener("click", () => {
			window.document.getElementById("filtro_grupo").value = grupo
		})

		headertag.appendChild(buttonColor)
		headertag.appendChild(buttonGroup)
	}
}, 1000)



var intervalo = window.setInterval(function() {
    // corpo da funcao
}, 50);

window.setTimeout(function() {
    clearInterval(intervalo);
}, 3000);