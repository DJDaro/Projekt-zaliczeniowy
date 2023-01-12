
function logowanie1(){
    var warl = lgg.value
    var warh = passs.value
    if (warl == "serwisanci" && warh == 12345678){
        logowanie.style.display = "none"
        tabela.style.display = "block"
    }else{
        alert("Niepoprawne dane")
    }
        
}