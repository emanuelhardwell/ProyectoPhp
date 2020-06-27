<?php 

$dia= 'miercoles';

switch ($dia) {
    case 'lunes':
        echo 'Hoy lunes tienes clase de DISOR';
        break;
        case 'martes':
            echo 'Hoy martes tienes clase de PLF';
            break;
            case 'miercoles':
                echo 'Hoy miercoles tienes clase de DESOS';
                break;
                case 'jueves':
                    echo 'Hoy jueves tienes clase de ASSAMBLER';
                    break;    
    
    default:
        echo 'No se encontro el dia requerido';
        break;
}

?>