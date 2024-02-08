let burger = document.querySelector('#burger');
let lines = document.querySelectorAll('.lines');
let menu = document.querySelector('#menu')

burger.addEventListener('click', (event) =>{
    if(lines[0].attributes[0].value != "checked"){
        lines[0].attributes[0].value = "checked";
        lines[1].attributes[0].value = "checked";
        lines[2].attributes[0].value = "checked"; 
        menu.attributes[0].value = "checked";
    }else{
        lines[0].attributes[0].value = "";
        lines[1].attributes[0].value = "";
        lines[2].attributes[0].value = ""; 
        menu.attributes[0].value = "";
    }
});


 