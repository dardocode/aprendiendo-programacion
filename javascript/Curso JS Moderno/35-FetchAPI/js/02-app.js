const cargarJSONBtn = document.querySelector('#cargarJSON');
cargarJSONBtn.addEventListener('click',obtenerDatos);

function obtenerDatos(){
    const url = 'data/empleado.json';
    fetch(url)
    .then( respuesta => respuesta.json())
    .then( resultado => {mostrarHTML(resultado),console.log(resultado.nombre)});
};


function mostrarHTML({empresa, id, nombre, trabajo}){
    const contenido = document.querySelector('.contenido');

    contenido.innerHTML=`
    <p> Empleado: ${nombre}</p>
    `;
}