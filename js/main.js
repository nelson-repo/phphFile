


$(document).ready(function() {

  $('#enviar').click(function() {
    var nombre = document.getElementById('nombre').value;
    console.log(nombre);
    var sele = document.getElementById('inputGroupSelect04').value;
    console.log(sele);
    if(nombre===null || nombre==="" || sele==="..."){
      alert('No se puede');
      window.location.href="converter/cargar.html";
    }
  });
});
