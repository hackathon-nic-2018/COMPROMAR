function cerrarSesion(){
      var pregunta = confirm('Esta seguro de cerrar la sesion?');
      if (pregunta) {

        $(location).attr('href','../desconectar.php');
      }
}