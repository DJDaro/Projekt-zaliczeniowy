var r = 0
var g = 0
var b = 0
var b1 = 0
var g1 = 0
var b1 = 0



function zmianatla(){
r = Math.floor(Math.random()*256)
g = Math.floor(Math.random()*256)
b = Math.floor(Math.random()*256)

r1 = Math.floor(Math.random()*256)
g2 = Math.floor(Math.random()*256)
b3 = Math.floor(Math.random()*256)

mq.style.backgroundColor= 'rgb(' + r + ',' + g + ',' + b + ')';
mq.style.color= 'rgb(' + r1 + ',' + g2 + ',' + b3 + ')';
}
setInterval(zmianatla, 2000)

function info(){
    alert("Formularz zgłoszeniowy został wysłany!");
}

function info1(){
    alert("Wiadomość została wysłana!");
}

var a = 2;

function wysunmenu(){
    if (a%2==0){
        rozwmenu = document.querySelector('#rozwmenu');
        rozwmenu.style.visibility = 'visible';
    }else{
        rozwmenu = document.querySelector('#rozwmenu');
        rozwmenu.style.visibility = 'hidden';
    }
    a++;
}

function zniknijf(){
    rozwmenu.style.visibility = 'hidden';
}

function logowanie1(){
    var warl = lgg.value
    var warh = passs.value
    if (warl == "serwisanci" && warh == 12345678){
        logowanie.style.visibility = "hidden"
        tabela.style.visibility = "visible"
    }else{
        alert("Niepoprawne dane")
    }
        
}

function sprawd(){
    var c1 = nn1.value 
    var c2 = nn2.value
    var c3 = nn3.value
    var c4 = nn4.value
    var c5 = nn5.value
    var c6 = nn6.value
    var c7 = nn7.value
    var c8 = nn8.value
    var c9 = nn9.value
    if (c1 == "" || c2 == "" || c3 == "" || c4 == "" || c5 == "" || c6 == "" || c7 == "" || c8 == "" || c9 == ""){
        alert("Wypełnij dane!")
    }
}