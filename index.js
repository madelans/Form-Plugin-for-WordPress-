

document.querySelector('#año_auto').addEventListener('click', traerDatos);

function traerDatos(){
    console.log('dentro de la funcion');
    const http = new XMLHttpRequest();

    http.open('get', 'http://us-central1-cardb-sj.cloudfunctions.net/car-master-api/years', true);

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