document.addEventListener("DOMContentLoaded", function(e) {

//Declara Variaveis
	const problema = document.getElementById("problema");
	const contrato = document.getElementById("contrato");
	const geral = document.getElementById("geral");
	const pbx = document.getElementById("pbx");
	const completamento = document.getElementById("completamento");
	const outro = document.getElementById("outro");
	const salvar = document.getElementById("salvar");
	const naofaz = document.getElementById("completamento-nao-faz");

//Elementos iniciados hidden
	problema.style.visibility = "hidden";
	geral.style.visibility = "hidden";
	pbx.style.visibility = "hidden";
	completamento.style.visibility = "hidden";
	outro.style.visibility = "hidden";
	salvar.style.visibility = "hidden";
	naofaz.style.visibility = "hidden";

//Evento Seleciona tipo de contrato
	contrato.addEventListener("change", (event) => {
	
		contrato_value = contrato.value;

		if(contrato_value == "Contrato") {
			problema.style.visibility = "hidden";
			geral.style.visibility = "hidden";
			pbx.style.visibility = "hidden";
		        completamento.style.visibility = "hidden";
			naofaz.style.visibility = "hidden";
                        outro.style.visibility = "hidden";
			salvar.style.visibility = "hidden";


		}
		else if(contrato_value == "fone"){
			problema.style.visibility = "visible";
			geral.style.visibility = "visible";
			pbx.style.visibility = "hidden";


		}
		else if (contrato_value == "uniq" || contrato_value == "ddr"){
			 problema.style.visibility = "visible";
			 geral.style.visibility = "visible";
		 	 pbx.style.visibility = "visible";
		}
		else {
		geral.style.visibility = "visible";	
		problema.style.visibility = "visible";
		pbx.style.visibility = "hidden"
		}
	});


//Evento Seleciona tipo de Problema 
	
        problema.addEventListener("change", (event) => {

                problema_value = problema.value;

                if(problema_value == "Problema") {
                        geral.style.visibility = "hidden";
			pbx.style.visibility = "hidden";
			completamento.style.visibility = "hidden";
			naofaz.style.visibility = "hidden";
			outro.style.visibility = "hidden";
			salvar.style.visibility = "hidden";
                }
		else if (problema_value == "naorecebe" ){
			geral.style.visibility = "visible";
			completamento.style.visibility = "visible";
			naofaz.style.visibility = "hidden";
			outro.style.visibility = "hidden";
			salvar.style.visibility = "visible";
		}
		else if (problema_value == "naofaz") {
                        geral.style.visibility = "visible";
                        completamento.style.visibility = "visible";
                        naofaz.style.visibility = "visible";
                        outro.style.visibility = "hidden";
                        salvar.style.visibility = "visible";
		}

		else if (problema_value == "outro" ){
                        geral.style.visibility = "visible";
                        completamento.style.visibility = "hidden";
			naofaz.style.visibility = "hidden";
                        outro.style.visibility = "visible";
			salvar.style.visibility = "visible";
		}
                else {

                geral.style.visibility = "visible";
                }

        });

});

async function copy() {
  var text = document.getElementById("result").value;

	try {
		await navigator.clipboard.writeText(text);

	} catch (error) {
		console.log(error.message);

	}
}
