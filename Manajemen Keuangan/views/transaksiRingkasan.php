<section class="glassmorphism p-9 mb-9 rounded-lg shadow-lg max-w-7xl mx-auto mt-10">
    <h2 class="text-2xl font-bold text-center mb-9">Ringkasan Keuangan</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8"> <!-- Menggunakan gap yang lebih besar untuk spasi yang lebih baik -->
        <div class="ringkasan-item bg-white p-4 rounded-lg shadow">
            <h3 class="text-xl font-semibold text-center">Total Pemasukan</h3>
            <p class="text-center text-2xl text-green-600">Rp <?= number_format($transaksiRingkasan['income'], 0, ',', '.'); ?></p>
        </div>
        <div class="ringkasan-item bg-white p-4 rounded-lg shadow">
            <h3 class="text-xl font-semibold text-center">Total Pengeluaran</h3>
            <p class="text-center text-2xl text-red-600">Rp <?= number_format($transaksiRingkasan['expense'], 0, ',', '.'); ?></p>
        </div>
        <div class="ringkasan-item bg-white p-4 rounded-lg shadow">
            <h3 class="text-xl font-semibold text-center">Saldo Saat Ini</h3>
            <p class="text-center text-2xl text-blue-600">Rp <?= number_format($transaksiRingkasan['balance'], 0, ',', '.'); ?></p>
        </div>
    </div>
</section>
