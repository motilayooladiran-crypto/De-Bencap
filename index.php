<?php
//
$pageUrl=parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
switch ($pageUrl) {
    case '/':
    case '/home':
         include __DIR__."/main/home.php";
        break;
    case '/contact':
         include __DIR__."/main/contact.php";
        break;
     case '/rooms':
        include __DIR__."/main/room.php";
        break; 
        case '/amenties':
            include __DIR__."/main/amenties.php";
            break; 
            case '/dining':
                include __DIR__."main/dining.php";
                break; 
    
    default:
        # code...
        break;
}
?>