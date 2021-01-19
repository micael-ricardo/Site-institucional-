/*Programação front-end da pagina.*/

function desabilitar(){
	    alert ("Esta função está desabilitada.")
	    return false
}
document.oncontextmenu=desabilitar


function validar(){
	var nome 	 =   frmenviarEmail.nome.value;
	var email 	 =   frmenviarEmail.email.value;
	var assunto  =   frmenviarEmail.assunto.value;
	var mensagem =	 frmenviarEmail.mensagem.value;

	if (nome == "") {

		alert("O campo nome é obrigatório");
		frmenviarEmail.nome.focus();
		document.getElementById("enviarNome").style.color = "red";
		return false;
	}

	if(email == "" || email.indexOf('@')==-1){
		alert('O campo e-mail é obrigatório');
		frmenviarEmail.email.focus();
		return false;
	}

	if(assunto == ""){
		alert("O campo assunto é obrigatório");
		frmenviarEmail.assunto.focus();
		return false;
	}

	if (mensagem == "") {
		alert("O campo mensagem é obrigatório");
		frmenviarEmail.mensagem.focus();
		return false;
	}
}