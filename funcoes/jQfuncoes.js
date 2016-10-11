$(document).ready(function(){
        /* criação de efeito sobre os submenus */                    
        $('.menuVer li').hover(
            function () { //aparece quando o rato estiver por cima
                $('ul', this).fadeIn();
            },
            function () { //desaparece quando o rato sair de cima
                $('ul', this).fadeOut();
            }
        );


        // Expressões regulares
        $.tools.validator.localize("en", {
            '*'                     : 'Corrija o valor introduzido',
            ':email'                : 'Insira um email válido',
            ':number'               : 'Insira um valor numérico',
            ':url'                  : 'Insira um URL válido',
            '[type=time]'           : 'Insira uma hora válida',
            '[equals]'              : 'O valor não é igual ao campo $1',
            '[max]'                 : 'Insira uma valor menor que $1',
            '[min]'                 : 'Insira uma valor maior que $1',
            '[required]'            : 'Complete os campos vazios'
            });

        $("#myform").validator({
            position: 'top left',
            offset: [-7, 10], //altura, esquerda da caixa de erro
            message: '<div><em/></div>' // seta da caixa de erro                
        }); 
    });    