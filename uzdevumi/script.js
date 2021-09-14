let name, bildes;
//name=dokument.getElementById('upe').innerHTML;
namePlus=document.getElementById('upe');
bildes=document.getElementsByClassName('z');

let daugavaimg=document.getElementsByClassName('daugavaimg');
let x=0,
    max=daugavaimg.length;

for (var i = 0; i < max; i++) {
    if (i>2) {
        daugavaimg[i].style.display="none";
    }
}

function left() {
    if (x+3<max) {
        console.log(1);
        daugavaimg[x].style.display="none";
        daugavaimg[x+3].style.display="block";
        x++;
    }
}

function right() {
    if (x>0) {
        daugavaimg[x+2].style.display="none";
        daugavaimg[x-1].style.display="block";
        x--;
    }
}

function show() {

}
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



