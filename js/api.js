function getDatos(){
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let objeto = JSON.parse(this.responseText);
            console.log(objeto.fecha);
            let indicadores="<p>INDICADORES ECON&Oacute;MICOS >>> " + 
                            " FECHA: "+convertirFecha(objeto.fecha).toUpperCase()+
                            " - UF: "+objeto.uf.valor.toLocaleString()+
                            " - DOLAR: "+objeto.dolar.valor.toLocaleString()+
                            " - EURO: "+objeto.euro.valor.toLocaleString()+
                            " - IPC: "+objeto.ipc.valor+"%" + 
                            " - UTM: "+objeto.utm.valor.toLocaleString()+"</p>";


            document.getElementById("test").innerHTML = indicadores;
        }
    }
    xhttp.open("GET","https://mindicador.cl/api",true);
    xhttp.send();
}

function convertirFecha(fechaIngresada){
    var fecha = new Date(fechaIngresada);
    var formato = { day: 'numeric', month: 'long', year: 'numeric' };
    var fechaFormateada = fecha.toLocaleDateString('es-ES', formato);
    return fechaFormateada;
  }