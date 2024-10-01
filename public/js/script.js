var googleIconsSharp = document.createElement("link");
googleIconsSharp.rel = "stylesheet";
googleIconsSharp.href = "https://fonts.googleapis.com/icon?family=Material+Icons+Sharp";

var googleIconsSymbols = document.createElement("link");
googleIconsSymbols.rel = "stylesheet";
googleIconsSymbols.href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,700,1,200";

var jQuery = document.createElement("script");
jQuery.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js";

let title = document.createElement("title");
title.innerHTML = "Comdata";


document.getElementsByTagName("head")[0].appendChild(googleIconsSharp);
document.getElementsByTagName("head")[0].appendChild(googleIconsSymbols);
document.getElementsByTagName("head")[0].appendChild(jQuery);
document.getElementsByTagName("head")[0].appendChild(title);

function redirect(path){
    
    location.href = path
}

function showHide(toHide, toShow, display = "block"){

    document.querySelector("#" + toHide).style.display = "none";
    document.querySelector("#" + toShow).style.display = display;
}

function submitForm(formId){

    document.querySelector("#"+formId).submit();
}

function popup(id, display){
        
    if(display != "none"){
        
        document.querySelector(".popup-binder").style.display = "flex";
    }else{

        document.querySelector(".popup-binder").style.display = "none";
    }
    document.querySelector("#" + id).style.display = display;
}