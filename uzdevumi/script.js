let name, bildes;
//name=dokument.getElementById('upe').innerHTML;
namePlus=document.getElementById('upe');
bildes=document.getElementsByClassName('z');


//console.log("1 ", namePlus.innerHTML);
//console.log("upe 2 ",bildes[1].src);

//document.getElementById("upe").innerHTLM="<h1>Bumbulik</h1>>";
//console.log("Tagad= ",document.getElementById('upe').innerHTLM);

    function test(){
        let tmp=bildes[0].src;
        bildes[0].src=bildes[1].src;
        bildes[1].src=tmp;
    namePlus.innerHTML="Bumbulik";
    namePlus.style.color="red";
}