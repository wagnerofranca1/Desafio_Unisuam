

    const $arr_repete = [];
    for(i=0; i<=9; i++) $arr_repete[i] = (""+i).padStart(11, i );    
    
    function ValidaCPF(cpf) {
        cpf = cpf.replace(/[^\d]+/g, '');
        if (cpf == '') return false;
        if (cpf.length != 11 || $arr_repete.includes(cpf)) return false;
        add = 0;
        for (i = 0; i < 9; i++) add += parseInt(cpf.charAt(i)) * (10 - i);
        rev = 11 - (add % 11);
        if (rev == 10 || rev == 11) rev = 0;
        if (rev != parseInt(cpf.charAt(9))) return false;
        add = 0;
        for (i = 0; i < 10; i++) add += parseInt(cpf.charAt(i)) * (11 - i);
        rev = 11 - (add % 11);
        if (rev == 10 || rev == 11) rev = 0;
        if (rev != parseInt(cpf.charAt(10)))
        return false;
        return true;
    }  

    const CPF = document.getElementById("cpf");

    CPF.addEventListener('keypress', (e)=>{
        mascara((e.target), '###.###.###-##');
    });

    CPF.addEventListener('blur', (e)=>{
        let bool_cpf = ValidaCPF(e.target.value);
        if(!bool_cpf) alert('CPF INVALIDO');        
    });


    function mascara(src, mask){
        var i = src.value.length;
        var saida = mask.substring(0,1);
        var texto = mask.substring(i)
        if (texto.substring(0,1) != saida){
            src.value += texto.substring(0,1);
        }
    }    
    