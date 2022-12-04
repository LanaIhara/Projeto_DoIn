/*var largura = window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth;

console.log(largura);*/



//const yea = document.getElementById("yeah");

/*function myFunction() {
    
    document.getElementById("animation_1").style.display = "none";
    document.getElementById("animation_2").style.display = "flex";
}*/

let width;

/*while (document.redyState === "complete");
do {
    width = screen.width;

    cont_1 = document.getElementById("animation_1");
    cont_2 = document.getElementById("animation_2");
    cont_3 = document.getElementById("animation_3");
    cont_4 = document.getElementById("animation_4");
    cont_5 = document.getElementById("animation_5");
    cont_6 = document.getElementById("animation_6");

    if (width >= 1300) {
        document.getElementsByClassName("carrossel_category");
    }

    else {
        if (width >= 1100) {

            if (window.getComputedStyle(cont_2).display === "none") {
                cont_1.style.display = "flex";
                cont_3.style.display = "flex";
                cont_4.style.display = "flex";
                cont_2.style.display = "none";
                cont_5.style.display = "none";
                cont_6.style.display = "none";
            }

            else {
                cont_2.style.display = "flex";
                cont_5.style.display = "flex";
                cont_6.style.display = "flex";
                cont_1.style.display = "none";
                cont_3.style.display = "none";
                cont_4.style.display = "none";
            }
        }

        else {

            if (window.getComputedStyle(cont_2).display === "none") {
                cont_1.style.display = "flex";

                cont_2.style.display = "none";
                cont_5.style.display = "none";
                cont_6.style.display = "none";
                
                if (window.getComputedStyle(cont_3).display === "none") {
                    cont_4.style.display = "flex";
                }

                else {
                    cont_3.style.display = "flex";
                }
            }

            else {
                cont_2.style.display = "flex";

                cont_1.style.display = "none";
                cont_3.style.display = "none";
                cont_4.style.display = "none";
                
                if (window.getComputedStyle(cont_5).display === "none") {
                    cont_6.style.display = "flex";
                }

                else {
                    cont_5.style.display = "flex";
                }
            }
        }
    }
}*/



function set_Left() {
    
    var cont_1 = document.getElementById("animation_1");
    var cont_2 = document.getElementById("animation_2");
    var cont_3 = document.getElementById("animation_3");
    var cont_4 = document.getElementById("animation_4");
    var cont_5 = document.getElementById("animation_5");
    var cont_6 = document.getElementById("animation_6");

    if (window.getComputedStyle(cont_2).display === "none") {

        if (window.getComputedStyle(cont_3).display === "none") {

            //Portanto, o cont_4 == "flex" (precisa ir ao 3)
            cont_3.style.display = "flex";
            cont_4.style.display = "none";
            //cont_3.classList.add('animate__animated animate__bounce');
        }

        else {

            if (window.getComputedStyle(cont_4).display === "none") {
                //Portanto, o cont_3 == "flex" (precisa ir ao 5)
                cont_6.style.display = "flex";
                cont_2.style.display = "flex";
                cont_5.style.display = "none";
                cont_3.style.display = "none";
                cont_1.style.display = "none";
            }

            else {
                //Portanto, o cont_1 == "flex" (precisa ir ao 2)
                cont_2.style.display = "flex";
                cont_1.style.display = "none";
            }
        }
    }

    else { //cont_2 = "flex"

        if (window.getComputedStyle(cont_5).display === "none") {
            //Portanto, o cont_6 == "flex" (precisa ir ao 5)
            cont_5.style.display = "flex";
            cont_6.style.display = "none";
        }

        else {

            if (window.getComputedStyle(cont_6).display === "none") {
                //Portanto, o cont_5 == "flex" (precisa ir ao 4)
                cont_4.style.display = "flex";
                cont_1.style.display = "flex";
                cont_3.style.display = "none";
                cont_5.style.display = "none";
                cont_2.style.display = "none";
            }

            else {
                //Portanto, o cont_2 == "flex" (precisa ir ao 1)
                cont_1.style.display = "flex";
                cont_2.style.display = "none";
            }
        }
    }
    //.style.display = "flex";
    // Fonte: https://www.w3schools.com/howto/howto_js_check_hidden.asp
}