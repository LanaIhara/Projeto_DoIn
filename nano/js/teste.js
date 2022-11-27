/*document.addEventListener('DOMContentLoaded', function () {
    var checkbox = document.querySelector('input[type="checkbox"]');
  
    checkbox.addEventListener('change', function () {
      if (checkbox.checked) {
        // do this
        console.log('Checked');
      } else {
        // do that
        console.log('Not checked');
      }
    });
  });
  function getValue() {
    var isChecked = document.getElementById("myCheckBox").checked;
     
    if(isChecked){
      console.log("Input is checked");
    } else {
      console.log("Input is NOT checked");
    }
 }*/

localStorage.setItem('theme', 'dark'); 

//acessado o tema da maquina do usuário
//localStorage.getItem('theme'); 

const toggle = document.getElementById("myCheckBox");
const theme = window.localStorage.getItem("theme");

/* verifica se o tema armazenado no localStorage é escuro
se sim aplica o tema escuro ao body */
//if (theme === "dark") document.body.classList.add("dark");

// event listener para quando o botão de alterar o tema for clicado
toggle.addEventListener("click", () => {
    document.body.classList.toggle("dark");
    if (theme === "dark") {
        window.localStorage.setItem("theme", "light");
    } else window.localStorage.setItem("theme", "dark");
});

/*import { theme } from "teste.js"; 
if (theme === "dark") {
    window.localStorage.setItem("theme", "light");
} else window.localStorage.setItem("theme", "dark");*/