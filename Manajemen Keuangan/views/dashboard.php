<section class="glassmorphism p-7 mb-7 rounded-lg shadow-lg max-w-7xl mx-auto mt-10">
    <!-- Kata Sambutan -->
    <h2 class="text-2xl font-bold text-center mb-9">Selamat Datang di Aplikasi Manajemen Keuangan</h2>
    <p class="text-center text-lg mb-9">Kelola keuangan Anda dengan mudah dan efisien</p>

    <!-- Animasi Gelombang -->
    <div class="wave-container">
        <canvas id="waveChart"></canvas>
    </div>
</section>


<!-- Wave Animation Script -->
<script>
    const ctx = document.getElementById('waveChart').getContext('2d');

    let waveData = {
        labels: Array.from({ length: 10 }, (_, i) => i), // Membuat 100 titik untuk grafik
        datasets: [{
            label: 'Gelombang',
            data: Array.from({ length: 10 }, () => Math.random() * 100), // Data acak untuk membuat gelombang
            borderColor: 'rgba(205, 193, 255, 0.5)', // Warna gelombang
            backgroundColor: 'rgba(165, 148, 249, 0.5)',
            fill: true,
            tension: 0.5 // Membuat gelombang lebih halus
        }]
    };

    let config = {
        type: 'line',
        data: waveData,
        options: {
            responsive: true,
            animation: {
                duration: 1000, // Durasi animasi 2 detik
                easing: 'easeInOutSine', // Animasi yang smooth
                loop: true // Animasi bergerak terus-menerus
            },
            scales: {
                x: { display: true }, // Tidak menampilkan sumbu X
                y: { display: true }  // Tidak menampilkan sumbu Y
            },
            plugins: {
                legend: { display: false } // Sembunyikan legenda
            }
        }
    };

    let waveChart = new Chart(ctx, config);

    // Update data gelombang setiap beberapa detik untuk memberikan efek animasi yang berkelanjutan
    setInterval(() => {
        waveChart.data.datasets[0].data = Array.from({ length: 100 }, () => Math.random() * 100); // Data acak baru
        waveChart.update();
    }, 1000); // Update setiap 1 detik
</script>


