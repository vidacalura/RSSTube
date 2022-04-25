const dropwdownIcon = document.getElementById("menu-icon");
const dropwdownMenu = document.getElementById("ul-dropdown");
const editChannels = document.getElementById("edit-channel");
let justClicked;

document.addEventListener("click", menuHide);
dropwdownIcon.addEventListener("click", menuDrop);
editChannels.addEventListener("click", createChannelForm);


function menuDrop(){

    dropwdownMenu.classList.remove("hidden");
    dropwdownMenu.classList.add("block");
    /* 
      Evita que o menuHide() seja ativado no mesmo clique 
      que o menuDrop(), pois ambos são lidos simultâneamente
      quando o dropDownIcon é clicado
    */
    justClicked = true;

}

function menuHide(){

    if (justClicked == false){
        dropwdownMenu.classList.remove("block");
        dropwdownMenu.classList.add("hidden");
    }
    else{

        justClicked = false;

    }

}

function createChannelForm(){

    

}