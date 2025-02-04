let menu = document.getElementById('menu');
let divmenu = document.getElementById('divmenu');
let nav =document.getElementById('nav')

let i = 0
menu.onclick = function on() {
    if(i==0){
        start()
    }
    else if (i==1){
        end()
    }
    i= i+1
    if(i==2){
        i=0
    }
}

function start(){
    nav.style.display ='flex';
    nav.style.flexDirection = 'column';
    nav.style.background = '#f1faeeff';
    nav.style.width ='200px';
    nav.style.padding='3px';
    nav.style.position ='absolute';
    nav.style.top = '60px';
    nav.style.right= '15px';
    
}
function end(){
    nav.style.display='none';
    
}




   
