var p1 = document.getElementById("sayHello");


var i = 0;
let text1 = "HELLO ! ! !";
var speed = 500;


setInterval(function(){
    if(i<text1.length){
        p1.append(text1[i]);
        i++;
    }
    
},speed);
