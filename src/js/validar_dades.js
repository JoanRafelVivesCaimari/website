function validar_dades(){
    var correcte = true;

    if(document.getElementById("direccioID").value.length > 31){
        correcte = false;
        alert("La població no pot tenir més de 30 digits");
    }

    if(document.getElementById("localidadID").value.length > 31){
        correcte = false;
        alert("La localidad no pot tenir més de 30 digits");
    }

    if(document.getElementById("codigo_postalID").value.length > 6 || document.getElementById("codigo_postalID").value.length < 4 ){
        correcte = false;
        alert("El codi postal ha de tenir 5 digits.");
    }

    return correcte;
}

