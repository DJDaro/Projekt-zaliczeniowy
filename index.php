<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Serwis urządzeń elektronicznych</title>
</head>
<body>



    <div id="menu">
        <a href="index.html"><div id="logo"><img src="obrazy/logo.png" alt="logo" width="100%" height="100%" style="border-radius: 10px;"></div></a>
        
        <ul id="ulul">
            <a href="#fmzg"><li class="list" id="list1">Zgłoś usterkę</li></a>
            <a href="#fmzg1"><li class="list" id="list2">O nas</li></a>
            <a href="#fmzg2"><li class="list" id="list3">Kontakt</li></a>
        </ul>
      
    <div id="rozwmenu" onclick="zniknijf();">
                <a href="#fmzg"><div id="pp">Zgłoś usterkę</div></a>
                <a href="#fmzg1"><div id="pp">O nas</div></a>
                <a href="#fmzg2"><div id="pp">Kontakt</div></a>
        </div>    

    </div>
    <div id="hamburger" onclick="wysunmenu();" ><p>Menu</p></div>
    
    <!--<div id="pauza"></div>-->
   <div id="bloktla">
    
    <div id="blokzdj">
        <div id="opis"><p id="spop">Serwis urządzeń elektronicznych</p><p id="spop1">Horniczak & Gał</p></div>
        <div id="zdj1"><img src="obrazy/npp.png" width="100%" height="100%" id="zdd"></div>
    </div>
   </div>

   <marquee id="mq">Naprawiamy: laptopy, komputery stacjonarne, smartfony, tablety, montujemy systemy monitoringu. Zapraszamy do skorzystania z naszych usług!</marquee>
   
<div id="tlo1">>
    <div id="formzg1"><p id="fmzg">Formularz zgłoszeniowy</p>
    <form action="index2.php" method="post">
    <span id="sptpurz">Typ urządzienia: </span><input type="text" class="tpurz" name="typ" id="nn1"><br><br>
    <span id="sptpurz">Imię i nazwisko: </span><input type="text" class="tpurz" width="600px" name="imie" id="nn2"><br><br>
    <span id="sptpurz">Miejscowość: </span><input type="text" class="tpurz" name="miejscowosc" id="nn3"><br><br>
    <span id="sptpurz">Ulica: </span><input type="text" class="tpurz" name="ulica" id="nn4"><br><br>
    <span id="sptpurz">Numer domu: </span><input type="text" class="tpurz" name="nrdomu" id="nn5"><br><br>
    <span id="sptpurz">Kod pocztowy: </span><input type="text" class="tpurz" name="kod" id="nn6"><br><br>
    <span id="sptpurz">E-mail: </span><input type="text" class="tpurz" name="email" id="nn7"><br><br>
    <span id="sptpurz">Tel: </span><input type="text" class="tpurz" name="tel" id="nn8"><br><br>
    <span id="sptpurz">Ogólny opis usterki: </span><textarea id="tpurz9" name="opis" id="nn9" style="font-size: 20px"></textarea>
    <div id="przyciskwl"><input type="submit" name="przyc" value="Wyślij formularz" id="cyken" onclick="sprawd();"></div>
    
</form>
   
    </div>
</div>


<div id="tlo2">
    <div id="formzg2"><p id="fmzg1">O nas</p>
    <p id="my2">Wiesław Horniczak</p>
    <p id="my3">Technik ekonomista</p>
    <span id="my4">Z zamiłowania elektronik! Zacząłem od naprawiania urządzeń elektrycznych w domu sześć lat temu i od wtedy nabieram doświadczenia. Dzięki dużemu doświadczeniu mogę naprawić wszelkiego rodzaju usterki. </span>

    <p id="my2">Dariusz Gał</p>
    <p id="my3">Technik informatyk</p>
    <span id="my4">Sprzęt elektroniczny to moja pasja! Jego naprawa i przywrócenie do działania daje mi wielką satysfację. Dwa lata doświadczenia pozwalają na szybkie znalezienie usterki i usunięcie jej, przez co klient nie musi długo czekać na swoje urządzenie.</span>
    </div>
</div>
    

<div id="tlo3">
    <div id="formzg3"><p id="fmzg2">Kontakt</p>
    <p id="tel">tel. 000-000-000</p>
    <p id="tel">tel. 000-000-000</p>
    <p id="tel">e-mail: serwiselektroniki@gmail.com</p>
    <span id="wiad">Wyślij wiadomość:</span><br>
    <textarea type="text" id="putwiad" style="font-size: 20px"></textarea>
    <div id="przycwiad" onclick="info1();"><p id="pwiad">Wyślij</p></div>
    </div>
</div>

<script src="script.js"></script>




</body>
</html>