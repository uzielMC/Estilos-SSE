function validacion(question, obj) {
    limite = 5; //Limite de checks a seleccionar.
    cont = 0;
    for(i=0; i < document.getElementById(question).children.length; i++){
        tam = document.getElementById(question).children[i].children.length;
        if(tam == 2){
            ele = document.getElementById(question).children[i].children[0].children[0];
            if(ele.checked)
                cont++;
        }
        else{
            for(j=0; j < tam; j++ ){
                ele = document.getElementById(question).children[i].children[j].children[0].children[0];
                if(ele.checked)
                    cont++;
            }   
        }
    }
    if(cont>limite)
        obj.checked = false;
}