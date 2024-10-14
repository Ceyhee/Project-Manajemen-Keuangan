<?php
session_start(); // Pastikan session dimulai

require_once 'controllers/TransaksiController.php';

$controller = new TransaksiController();

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

switch ($page) {
    case 'form':
        $controller->showTransaksiForm();
        break;
    case 'list':
        $controller->showTransaksiList();
        break;
    case 'ringkasan':
        $controller->showRingkasan();
        break;
    case 'addTransaksi':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->addTransaksi($_POST);
        }
        break;
    default:
        $controller->showDashboard();
        break;

        case 'deleteTransaksi':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $controller->deleteTransaksi($_POST['index']);
            }
            break;
        
}
?>
