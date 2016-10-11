/*
    Funções de teste
 */

/*
    Retira os espaços do início e do fim de uma string
*/
function trim(str){
    //substitui os espaços de uma string por nada

    /* Significado de /^\s+|\s+$/g
        /  = dá início à expressão
        ^  = corresponde ao INÍCIO da linha
        \s = corresponde ao espaço
        +  = um ou mais
        |  = OU
        \s = corresponde ao espaço
        +  = um ou mais
        $  = até ao FIM da linha
        /  = termina a expressão
        g  = GLOBAL (para que percorra toda a expressão, senão termina logo que encontre o primeiro espaço)
    */
    return str.replace(/^\s+|\s+$/g,'');
}

function campoVazio(formElement, message) {
    formElement.value = trim(formElement.value);

    _isEmpty = false;
    
    if (formElement.value == '') {
            _isEmpty = true;
            alert(message);
            formElement.focus();
    }

    return _isEmpty;
}


/*
    Verifica se o campo está vazio e qual a mensagem de erro
    através da função campoVazio ...
 */
function verificaPreenchimentoADM(){   
    with (window.document.frmADM) { 
        if (campoVazio(sist_nome, 'Indique o nome da Empresa.')){
            return false;
            }
        else if (campoVazio(sist_password, 'Indique a palavra chave')) {
                return false;
            }
    }
}