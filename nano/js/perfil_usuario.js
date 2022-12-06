const collection = document.getElementsByClassName("info");
const appearence = document.getElementsByClassName("div_cont_all");

function select_perfil(){
    // referencia o primeiro 'h1' do layout html
    //const div = document.getElementsByTagName('button')[0];
    //div.style.color = 'blue';
    
    /*const div = document.getElementById('perfil');
    
    div.style.backgroundColor = 'white'; */
    collection[0].style.backgroundColor = "pink";
    collection[1].style.backgroundColor = "red";
    collection[2].style.backgroundColor = "red";

    appearence[0].style.display = "inline";
    appearence[1].style.display = "none";
    appearence[2].style.display = "none";
}

function select_product(){

    collection[0].style.backgroundColor = "red";
    collection[1].style.backgroundColor = "pink";
    collection[2].style.backgroundColor = "red";

    appearence[0].style.display = "none";
    appearence[1].style.display = "inline";
    appearence[2].style.display = "none";
}

function select_config(){

    collection[0].style.backgroundColor = "red";
    collection[1].style.backgroundColor = "red";
    collection[2].style.backgroundColor = "pink";

    appearence[0].style.display = "none";
    appearence[1].style.display = "none";
    appearence[2].style.display = "inline";
}

/* https://pt.stackoverflow.com/questions/379973/alterar-a-cor-do-texto-ao-clicar-em-um-bot%C3%A3o */
