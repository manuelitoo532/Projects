let pagina = 1;
const btnAnterior = document.getElementById("btnAnterior");
const btnSiguiente = document.getElementById("btnSiguiente");

btnSiguiente.addEventListener("click", () =>{

    if(pagina < 20){
        console.log(pagina += 1)
        pagina += 1;
        morfy();
    }
})
btnAnterior.addEventListener("click", () =>{
    if(pagina > 1){
        pagina -= 1;
        morfy();
    }
})

const morfy = async ()=>{
    let res = await fetch(`https://rickandmortyapi.com/api/character/?page=${pagina}`);
    console.log(res);

    if(res.status === 200){
        let datos = await res.json();
        console.log(datos.results);

        let episode = "";
        datos.results.forEach(element => {
            // console.log(element.image)
            episode += `
                <div class="pelicula">
                    <img class='poster' src='https://rickandmortyapi.com/api/character/avatar/362.jpeg'>
                </div>
                <h3>${element.name}</h3>
            `;
        });
        document.getElementById("contenedor").innerHTML = episode;
    }else{
        console.log("Error" + res.status);
    }
}

morfy();

