<?php
require('controllers/controller.php');
require('config/configApp.php');

$controller =new controller();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $controller->iniciar();
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_INICIAR_ADM:
    $controller->iniciar_ADM();

      break;
  case ConfigApp::$ACTION_AGREGAR_PRODUCTO:
    $controller->agregarProducto();
    break;
  case ConfigApp::$ACTION_MOSTRAR_PRODUCTOS:
    $controller->mostrarProductos();

      break;
      case ConfigApp::$ACTION_ELIMINAR_PRODDUCTO:
        $controller->eliminarProducto();
          break;
          case ConfigApp::$ACTION_AGREGAR_CATEGORIA:
            $controller->agregaCat();
            break;
            case ConfigApp::$ACTION_ELIMINAR_CATEGORIA:
              $controller->eliminarCategoria();
                break;
                case ConfigApp::$ACTION_MOSTRAR_CATEGORIAS:
                $controller->mostrarCategorias();

                    break;
                    case ConfigApp::$ACTION_EDITAR_CATEGORIA:
                    $controller->editarCategoria();

                        break;
                        case ConfigApp::$ACTION_EDITAR_PRODUCTO:
                        $controller->editarProducto();

                            break;
                            case ConfigApp::$ACTION_MOSTRAR_INST:
                              $controller->mostrarInst();

                                break;
                                case ConfigApp::$ACTION_ENVIAR_CONTACTO:
                              $controller->enviarContacto();
                              break;


}
 ?>
