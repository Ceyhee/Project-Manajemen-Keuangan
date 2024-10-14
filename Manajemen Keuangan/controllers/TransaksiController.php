<?php
require_once 'models/TransaksiModel.php';

class TransaksiController {
    private $model;

    public function __construct() {
        $this->model = new TransaksiModel();
    }

    public function showDashboard() {
        include 'views/header.php';
        include 'views/dashboard.php';
        include 'views/footer.php';
    }

    public function showTransaksiForm() {
        include 'views/header.php';
        include 'views/transaksiForm.php';
        include 'views/footer.php';
    }

    public function showTransaksiList() {
        $transaksi = $this->model->getTransaksi();
        include 'views/header.php';
        include 'views/transaksiList.php';
        include 'views/footer.php';
    }

    public function showRingkasan() {
        $transaksiRingkasan = $this->model->getRingkasan();
        include 'views/header.php';
        include 'views/transaksiRingkasan.php';
        include 'views/footer.php';
    }

    public function addTransaksi($data) {
        // Hapus titik (.) dari input amount
        $amount = str_replace('.', '', $data['amount']);
    
        $transaksi = [
            'date' => $data['date'],
            'category' => $data['category'],
            'type' => $data['type'],
            'amount' => (float)$amount // Konversi menjadi angka
        ];
    
        // Panggil fungsi model untuk menambah transaksi
        $this->model->addTransaksi($transaksi);
    
        // Setelah transaksi disimpan, redirect ke daftar transaksi
        header("Location: index.php?page=list");
        exit(); // Pastikan untuk menghentikan eksekusi lebih lanjut
    }
    

    public function deleteTransaksi($index) {
        $this->model->deleteTransaksi($index);
        header("Location: index.php?page=list");
        exit(); // Pastikan menghentikan eksekusi setelah redirect
    }
    
    
}
?>
