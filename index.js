

document.querySelector('#año_auto').addEventListener('click', traerDatos);

function traerDatos(){
    console.log('dentro de la funcion');
    const http = new XMLHttpRequest();

    http.open('GET', 'https://us-central1-cardb-sj.cloudfunctions.net/car-master-api/models?year=2021&brand=Audi', true);
     
    http.send();
    
    http.onreadystatechange = function() {
        if(this.readyState==4 && this.status == 200) {

            let data= JSON.parse(this.responseText);
            let respuesta= document.querySelector('#respuesta');

            for(let item of data) {
                console.log(item.year);
                respuesta.innerHTML += `
                  <tr>
                       <td>${item.years}</td>
                  </tr>
                `
            }
        }
    }
};