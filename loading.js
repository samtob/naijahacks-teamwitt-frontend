

            var a= document.createElement("h1");
var b = document.createTextNode("We are loading the page for you. Please wait...")
var c = a.appendChild(b);
var i = 0;
var txt = b;
var speed = 500;
if (i < txt.length) {
document.getElementById("demo").innerHTML += txt.charAt(i);
i++; o
setTimeout(function(){}, speed);
}
