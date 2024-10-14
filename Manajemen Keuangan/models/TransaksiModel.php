<?php

class TransaksiModel {
    private $transaksi = [];

    public function __construct() {
        if (isset($_SESSION['transaksi'])) {
            $this->transaksi = $_SESSION['transaksi'];
        }
    }

    public function getTransaksi() {
        return $this->transaksi;
    }

    public function addTransaksi($data) {
        $this->transaksi[] = $data; // Menambahkan transaksi baru ke array
        $_SESSION['transaksi'] = $this->transaksi; // Simpan di session
    }
    

    public function getRingkasan() {
        $ringkasan = ['income' => 0, 'expense' => 0, 'balance' => 0];
        foreach ($this->transaksi as $transaksi) {
            if ($transaksi['type'] === 'income') {
                $ringkasan['income'] += $transaksi['amount'];
            } else {
                $ringkasan['expense'] += $transaksi['amount'];
            }
        }
        $ringkasan['balance'] = $ringkasan['income'] - $ringkasan['expense'];
        return $ringkasan;
    }

    public function deleteTransaksi($index) {
        if (isset($this->transaksi[$index])) {
            unset($this->transaksi[$index]); // Hapus transaksi berdasarkan indeks
            $_SESSION['transaksi'] = array_values($this->transaksi); // Reset indeks setelah penghapusan
        }
    }
    
}
?>
