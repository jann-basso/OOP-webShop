<?php
use App\Autoloader;
use App\Controller\issetSession;
require_once 'classes/autoload.php';
Autoloader::register(); 

session_start(); 
$checkSession = new IssetSession();

if (isset($_GET['action'])) {
    switch($_GET['action']) {
        case 'about':
            require('views/about.php');
            break;
        case 'shop':
            require('views/shop.php');
            break;
        case 'shop-detail':
            require('views/shop-detail.php');
            break;
        case 'cart':
            require('views/cart.php');
            break;
        case 'delete':
            require('views/action_views/delete_action.php');
            break;
        case 'checkout':
            require('views/checkout.php');
            break;
        case 'my-account':
            $checkSession->issetSession(("<script>location.href='index.php?action=register';</script>"));
            require('views/my-account.php');
            break;
        case 'login-security':
            $checkSession->issetSession(("<script>location.href='index.php';</script>"));
            require('views/loginsecurity.php');
            break;
        case 'loginsecurityaction':
            $checkSession->issetSession(("<script>location.href='index.php';</script>"));
            require('views/action_views/loginsecurity_action.php');  
            break;
        case 'wishlist':
            require('views/wishlist.php');
            break;
        case 'gallery':
            require('views/gallery.php');
            break;
        case 'contact-us':
            require('views/contact-us.php');
            break;
        case 'register':
            require('views/register.php');       
            break;
        case 'registeraction':
            require('views/register.php'); 
            require('views/action_views/register_action.php');  
            break; 
        case 'signin':
            require('views/signin.php');
            break;
        case 'signinaction':
            require('views/signin.php');
            require('views/action_views/signin_action.php');
            break;
        case 'logout':
            $checkSession->issetSession(("<script>location.href='index.php';</script>"));
            require('views/home.php');
            session_destroy();
            echo("<script>location.href='index.php';</script>");
            break;
        case 'newsletteraction':
            require('views/action_views/newsletter_action.php');
            break;
        case 'addtocartaction':
            require('views/action_views/addtocart_action.php');
            break;
        case 'test':
            require('views/test.php');
            break;
        default:
            require('views/home.php');
    }
} else {
    require('views/home.php');
}


