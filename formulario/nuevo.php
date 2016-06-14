<?
// Las funciones son las acciones que quieres realizar
function registra(){
  if(!empty($_POST)){ // Si se usó el formulario, deberia haber algo recibido por POST
    $name = $_POST['nombre'];
    echo "Hola $name.";
 }else
   echo 'No se detecta ningún nombre...'; 
}

//Este se podría considerar el menú principal, la acción enviada por GET determina que se hace
switch($_GET['accion']){
  case 'registra':
    registra(); // A mi no me esta dando problema esta función aquí
    break;

  default:
    echo 'Error, accion no valida.'; 
}
?>

