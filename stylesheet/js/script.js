function clickUser() {
    var dvLogin = document.getElementById('dialogLogin');
    var dvRegis=document.getElementById('dialogRegis');
    if (dvLogin.style.display == 'none') {
        dvRegis.style.display='none';
        dvLogin.style.display = 'block';

    } else {
        dvLogin.style.display = 'none';
        dvRegis.style.display='block';

    }
}
function clickRegis(){
    var dvRegis=document.getElementById('dialogRegis');
    var dvLogin = document.getElementById('dialogLogin');
    if (dvRegis.style.display=='none'){
        dvLogin.style.display = 'none';
        dvRegis.style.display='block';

    }
    else{
        dvRegis.style.display='none';
        dvLogin.style.display = 'block';

    }
}
window.onclick = function(event) {
    var dvLogin = document.getElementById('dialogLogin');
    var dvRegis=document.getElementById('dialogRegis');
    if (event.target == dvLogin||event.target==dvRegis) {

        dvLogin.style.display = 'none';
        dvRegis.style.display='none';
    }
}



window.addEventListener("scroll", function(e){
    requestAnimationFrame(function(){
        var stickymenu = document.getElementById('myHeader');
        var stickymenuoffset = stickymenu.offsetTop;
        if (window.pageYOffset > stickymenuoffset){
            stickymenu.classList.add('sticky')
        }
        else{
            stickymenu.classList.remove('sticky')
        }
    })
})