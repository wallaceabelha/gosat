function mascaraCpf(num){
    var cpf = num.value;
   
    if(isNaN(cpf[cpf.length-1])){ 
        num.value = cpf.substring(0, cpf.length-1);
        return;
    }
    
    num.setAttribute("maxlength", "14");
    if (cpf.length == 3 || cpf.length == 7) num.value += ".";
    if (cpf.length == 11) num.value += "-";
}