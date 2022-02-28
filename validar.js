var nome = document.getElementById("inputNome");
var email = document.getElementById("inputEmail");
var mensagem = document.getElementById("Textarea");
var nomeid = document.getElementById("nomeid");
var emailid = document.getElementById("emailid");
var atextid = document.getElementById("atextid");

function validar_nome() {
    if (nome.value == "") {
        nomeid.textContent = "Campo nome obrigatório";
        nomeid.style.color = "red";
        nomeid.style.fontSize = "medium";
        nome.style.border='1px solid red';
    } else {
        nome.style.border='1px solid green';
    }
} 
 
function validar_email() {
    if (email.value == "") {
        emailid.textContent = "Campo email obrigatório";
        emailid.style.color = "red";
        emailid.style.fontSize = "medium";
        email.style.border='1px solid red';
    } else {
            email.style.border='1px solid green';
    }
}

function validar_texto() {
    if (mensagem.value == "") {
        atextid.textContent = "Campo mensagem obrigatório";
        atextid.style.color = "red";
        atextid.style.fontSize = "medium";
        mensagem.style.border='1px solid red';
    } else {
        mensagem.style.border='1px solid green';
    }
}