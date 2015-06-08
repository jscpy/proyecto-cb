function showReticula(carrera) {

  xmlhttp = new XMLHttpRequest();

  if (carrera=="") {
    
    document.getElementById("fk_reticula").value="";
    return;
  }

  xmlhttp.onreadystatechange=function() {
  
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      
        document.getElementById("fk_reticula").value=xmlhttp.responseText;
    }
  }
  
  xmlhttp.open("GET","/asignatura/reticula/"+carrera,true);
  
  xmlhttp.send();
}