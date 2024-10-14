<section class="glassmorphism p-6 mb-4 rounded-lg shadow-lg max-w-md mx-auto mt-20"> 
    <h2 class="text-2xl font-bold text-center mb-4">Catat Transaksi</h2>
    <form action="index.php?page=addTransaksi" method="POST" class="space-y-4">
        <div>
            <label for="date" class="block font-semibold">Tanggal:</label>
            <input type="date" name="date" required class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-purple-500">
        </div>

        <div>
            <label for="category" class="block font-semibold">Kategori:</label>
            <select name="category" required class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-purple-500">
                <option value="Makanan">Makanan</option>
                <option value="Transportasi">Transportasi</option>
                <option value="Gaji">Gaji</option>
                <option value="Menabung">Menabung</option> <!-- Kategori Menabung ditambahkan -->
                <option value="Lainnya">Lainnya</option> <!-- Kategori Lainnya ditambahkan -->
            </select>
        </div>

        <div>
            <label for="type" class="block font-semibold">Jenis:</label>
            <select name="type" required class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-purple-500">
                <option value="income">Pemasukan</option>
                <option value="expense">Pengeluaran</option>
            </select>
        </div>

        <div>
            <label for="amount" class="block font-semibold">Jumlah:</label>
            <input type="text" id="amount" name="amount" required oninput="formatRupiah(this)" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-purple-500">
        </div>
        
        <button type="submit" class="w-full bg-purple-400 text-white p-2 rounded hover:bg-purple-800 transition">Simpan</button>
    </form>
</section>

<script>
    function formatRupiah(input) {
        let value = input.value.replace(/[^,\d]/g, '').toString();
        let split = value.split(',');
        let sisa = split[0].length % 3;
        let rupiah = split[0].substr(0, sisa);
        let ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            let separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        input.value = rupiah + (split[1] !== undefined ? ',' + split[1] : '');
    }
</script>
