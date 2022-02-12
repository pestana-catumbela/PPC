function validacao(frm){
    if(frm.nome.value == "" || frm.nome.value == null || frm.nome.value.length < 1){
        alert("O Seu Nome É Obrigatório!");
        frm.nome.focus();
        return false;
    }

    if(frm.email.value.indexOf("@") == -1 || frm.email.value.indexOf(".") == -1 || frm.email.value == "" || frm.email == null){
        alert("O Seu E-mail É Obrigatório!");
        frm.email.focus();
        return false;
    }

    if(frm.assunto.value == "" || frm.assunto.value == null){
        alert("O Seu Assunto É Obrigatório!");
        frm.assunto.focus();
        return false;
    }

    if(frm.mensagem.value == "" || frm.mensagem.value == null){
        alert("A Sua Mensagem É Obrigatória");
        frm.mensagem.focus();
        return false;
    }
}
