//Referente ao javascript do index
//var timer=0;
//Função para introduzir um gif (logo do DoIn) por um tempo determinado (3.5s) ao abrir o index do site
$(document).ready(function(){

    /* Por um tempo determinado (3.5s), irá mostrar os elementos da <div> com class="preload" e,
    após passado o tempo definido, irá escurecer/se apagar aos poucos (efeito "fadeOut") por 0.5s
    fazendo uma transição do gif mostrado ao index do site */
    setTimeout('$(".preload").fadeOut(250)', 4000);
    //clearTimeout(timer);
});