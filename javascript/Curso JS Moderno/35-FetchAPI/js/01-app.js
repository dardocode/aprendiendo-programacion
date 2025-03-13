const cargarTxtBtn = document.querySelector('#cargarTxt');
cargarTxtBtn.addEventListener('click', obtenerDatos);

function obtenerDatos(){
    const url= 'data/datos.txt';

    fetch(url)
        .then(data => {
            console.log(data);
            console.log(data.ok);
            console.log(data.statusText);
            console.log(data.url);
            console.log(data.type);

            return data.text();
        })
        .then(datos => {
            console.log(datos);
        })
        .thencatch( error => {
            console.log(error);
        })
}