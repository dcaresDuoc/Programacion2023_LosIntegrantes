
var btn = document.getElementById('ingresar');
var clave = document.getElementById('clave');
var usuario = document.getElementById('usuario');

btn.addEventListener('click', function(evt){

      if(clave.value === ''){
        
          label('el campo contraseña es obligatorio')
          evt.preventDefault();
          return false;
      
      }else if(usuario.value === ''){
      
      console.log('el campo de usuario es obligatorio')
          evt.preventDefault();
          return false;
      
      }else if(usuario.value.length > 30){
      
        label('El nombre del usuario es demasiado largo')
          evt.preventDefault();
          return false;
      
      }
    
  


});