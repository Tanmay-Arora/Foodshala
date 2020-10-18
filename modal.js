var modal = document.getElementsByClassName('modal');
var modalBtn = document.getElementsByClassName('modalBtn');
var span = document.getElementsByClassName('close');
var shift = document.getElementsByClassName('shiftModal')
var mobilBtn = document.getElementsByClassName('mobilBtn');

modalBtn[1].onclick = function(){
    modal[0].style.display = "block";
    modal[1].style.display = "none";
}



modalBtn[0].onclick = function(){
   modal[1].style.display = "block";
   modal[0].style.display = "none";
}



span[0].onclick = function(){
    modal[0].style.display = "none";
}

span[1].onclick = function(){
    modal[1].style.display = "none";
}

shift[0].onclick = function(){
    modal[1].style.display = "block";
    modal[0].style.display = "none";
}

shift[1].onclick = function(){
    modal[0].style.display = "block";
    modal[1].style.display = "none";
}


mobilBtn[1].onclick = function(){
    modal[0].style.display = "block";
    modal[1].style.display = "none";
}

mobilBtn[0].onclick = function(){
    modal[1].style.display = "block";
    modal[0].style.display = "none";
 }
