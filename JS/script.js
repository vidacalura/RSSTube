const dropwdownIcon = document.getElementById("menu-icon");
const dropwdownMenu = document.getElementById("ul-dropdown");
let justClicked;

document.addEventListener("click", menuHide);
dropwdownIcon.addEventListener("click", menuDrop);


function menuDrop(){

    dropwdownMenu.className = "dropdown-user block absolute overflow-hidden right-0 top-5 \
    w-40 bg-gray-400 rounded-b shadow-2xl";
    /* 
      Evita que o menuHide() seja ativado no mesmo clique 
      que o menuDrop(), pois ambos são lidos simultâneamente
      quando o dropDownIcon é clicado
    */
    justClicked = true;

}

function menuHide(){

    if ( justClicked == false){
        dropwdownMenu.className = "dropdown-user hidden absolute overflow-hidden right-0 top-5 \
        w-40 bg-gray-400 rounded-b shadow-2xl";
    }
    else{

        justClicked = false;

    }

}