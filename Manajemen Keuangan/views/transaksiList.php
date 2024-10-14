<section class="glassmorphism p-9 mb-9 rounded-lg shadow-lg max-w-6xl mx-auto mt-10">
    <h2 class="text-2xl font-bold text-center mb-4">Riwayat Transaksi</h2>
    <table class="w-full border-collapse shadow-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 text-left">Tanggal</th>
                <th class="px-4 py-2 text-left">Kategori</th>
                <th class="px-4 py-2 text-left">Jenis</th>
                <th class="px-4 py-2 text-left">Jumlah</th>
                <th class="px-4 py-2 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transaksi as $index => $transaksi): ?>
                <tr class="hover:bg-gray-100">
                    <td class="border px-4 py-2"><?= $transaksi['date']; ?></td>
                    <td class="border px-4 py-2"><?= $transaksi['category']; ?></td>
                    <td class="border px-4 py-2"><?= $transaksi['type'] === 'income' ? 'Pemasukan' : 'Pengeluaran'; ?></td>
                    <td class="border px-4 py-2">Rp<?= number_format($transaksi['amount'], 0, ',', '.'); ?></td>
                    <td class="border px-4 py-2">
                        <form action="index.php?page=deleteTransaksi" method="POST" style="display:inline;">
                            <input type="hidden" name="index" value="<?= $index; ?>">
                            <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Anda yakin ingin menghapus transaksi ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
