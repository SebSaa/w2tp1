"use strict";
const contenedor = document.querySelector("#edicion");
document.querySelectorAll(".js-editando").forEach(b=> 
    b.addEventListener("click",
        function (event){
            event.preventDefault();
            const url = this.getAttribute("href"); 
            fetch(url).then(x=>x.text()).then(texto=>
                contenedor.innerHTML = texto
                );
            history.pushState({},"Detalle Tarea", url);
        }

    )
)

const contenedorprod = document.querySelector("#edicionprod");

document.querySelectorAll(".js-editandoprod").forEach(b=> 
    b.addEventListener("click",
        function (eventp){
            eventp.preventDefault();
            const urlp = this.getAttribute("href"); 
            fetch(urlp).then(x=>x.text()).then(texto=>
                contenedorprod.innerHTML = texto
                );
            history.pushState({},"Detalle Tarea", url);
        }

    )
)