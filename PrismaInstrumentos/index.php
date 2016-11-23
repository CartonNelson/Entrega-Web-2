<?php
include_once 'sql/config.php';

 require_once('controllers/ADM_controller.php');
 require_once('controllers/user_controller.php');
 require_once('controllers/login_controller.php');
 require_once('config/configApp.php');

$ADM_controller =new ADM_controller();
$user_controller =new user_controller();
$login_controller=new login_controller();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $user_controller->iniciar();
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_INICIAR_ADM:
    $ADM_controller->iniciar_ADM();


      break;
  case ConfigApp::$ACTION_AGREGAR_PRODUCTO:
    $ADM_controller->agregarProducto();
    break;
  case ConfigApp::$ACTION_MOSTRAR_PRODUCTOS:

    $ADM_controller->mostrarProductos();

      break;
      case ConfigApp::$ACTION_ELIMINAR_PRODDUCTO:
        $ADM_controller->eliminarProducto();
          break;
          case ConfigApp::$ACTION_AGREGAR_CATEGORIA:
            $ADM_controller->agregaCat();
            break;
            case ConfigApp::$ACTION_ELIMINAR_CATEGORIA:
              $ADM_controller->eliminarCategoria();
                break;
                case ConfigApp::$ACTION_MOSTRAR_CATEGORIAS:

                $ADM_controller->mostrarCategorias();

                    break;
                    case ConfigApp::$ACTION_EDITAR_CATEGORIA:
                    $ADM_controller->editarCategoria();

                        break;
                        case ConfigApp::$ACTION_EDITAR_STOCK:
                        $ADM_controller->editarStock();

                            break;
                            case ConfigApp::$ACTION_MOSTRAR_INST:

                              $ADM_controller->mostrarInst();

                                break;
                                case ConfigApp::$ACTION_ENVIAR_CONTACTO:
                              $ADM_controller->enviarContacto();
                              break;

                                    case ConfigApp::$ACTION_EDITAR_PRODUCTO:
                                      $ADM_controller->editarProducto();
                                        break;

                                        case ConfigApp::$ACTION_LOGIN:
                                          $login_controller->login();
                                            break;
                                            case ConfigApp::$ACTION_REGISTRARSE:
                                              $login_controller->registrarse();
                                                break;
                                                case ConfigApp::$ACTION_LOGOUT:
                                                  $login_controller->logout();
                                                    break;
                                                    case ConfigApp::$ACTION_DAR_PERMISO:
                                                      $ADM_controller->darPermiso();
                                                        break;
                                                        case ConfigApp::$ACTION_AGREGAR_IMAGENES:
                                                          $ADM_controller->agregarImagenes();
                                                            break;

}
 ?>
