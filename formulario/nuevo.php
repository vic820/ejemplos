<?
// Las funciones son las acciones que quieres realizar
function registra(){
  if(!empty($_POST)){ // Si se us� el formulario, deberia haber algo recibido por POST
    $name = $_POST['nombre'];
    echo "Hola $name.";
 }else
   echo 'No se detecta ning�n nombre...'; 
}

//Este se podr�a considerar el men� principal, la acci�n enviada por GET determina que se hace
switch($_GET['accion']){
  case 'registra':
    registra(); // A mi no me esta dando problema esta funci�n aqu�
    break;

  default:
    echo 'Error, accion no valida.'; 
}
?>

