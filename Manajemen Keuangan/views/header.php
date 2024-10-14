<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Keuangan</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Efek Glassmorphism dengan gradasi */
        .glass {
            background: linear-gradient(145deg, #CDC1FF, #A594F9, #F5EFFF, #E5D9F2);
            backdrop-filter: blur(10px); /* Efek blur */
            border-radius: 10px; /* Border radius */
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); /* Bayangan */
        }


        .text-outline {
        position: relative; /* Agar bisa menggunakan text-shadow */
        color: #FFFF; /* Warna teks */
        text-shadow: 
        -1px -1px 0 #A594F9,  
        1px -1px 0 #A594F9,
        -1px 1px 0 #A594F9,
        1px 1px 0 #A594F9; /* Outline menggunakan shadow di sekeliling teks */
}


        /* Gaya untuk sidebar */
        #sidebar {
            display: none;
            position: fixed; /* Memastikan sidebar tetap di kiri */
            top: 64px; /* Di bawah header */
            left: 0; 
            height: calc(100% - 64px); /* Menyesuaikan tinggi sidebar */
            background-color: rgba(255, 255, 255, 0.1); /* Latar belakang semi-transparan */
            padding: 20px;
            z-index: 10; /* Pastikan sidebar di atas konten */
            transform: translateX(-100%); /* Mulai dari luar layar */
            transition: transform 0.3s ease; /* Transisi untuk sidebar */
        }

        /* Gaya untuk menu sidebar */
        .sidebar-menu a {
            padding: 10px 15px;
            display: flex;
            align-items: center;
            border-radius: 5px;
            color: white;
            text-decoration: none;
        }

        /* Warna saat hover dan aktif */
        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background-color: rgba(255, 255, 255, 0.2); /* Warna latar belakang saat hover */
        }

        /* Warna untuk tombol menu */
        #toggleSidebar {
            color: white; /* Warna teks tombol */
        }

        #toggleSidebar:hover {
            background-color: #E5D9F2; /* Warna saat hover pada tombol menu */
        }

        /* Gaya untuk ikon */
        .sidebar-menu i {
            margin-right: 10px; /* Spasi antara ikon dan teks */
        }
    </style>
</head>
<body class="bg-gray-200">

    <div class="flex">
        <!-- Sidebar -->
        <nav id="sidebar" class="glass">
            <ul class="space-y-2 sidebar-menu">
                <li>
                    <a href="index.php?page=dashboard" class="block py-2 rounded hover:bg-indigo-600">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="index.php?page=form" class="block py-2 rounded hover:bg-indigo-600">
                        <i class="fas fa-plus-circle"></i> Catat Transaksi
                    </a>
                </li>
                <li>
                    <a href="index.php?page=list" class="block py-2 rounded hover:bg-indigo-600">
                        <i class="fas fa-history"></i> Riwayat Transaksi
                    </a>
                </li>
                <li>
                    <a href="index.php?page=ringkasan" class="block py-2 rounded hover:bg-indigo-600">
                        <i class="fas fa-chart-pie"></i> Ringkasan
                    </a>
                </li>
            </ul>
        </nav>

        <header class="glass text-white p-3 flex items-center fixed w-full z-20 bg-opacity-70">
            <button id="toggleSidebar" class="px-3 py-1 rounded mr-2">
                <i class="fas fa-bars fa-2x"></i>
            </button>
            <a href="index.php"><h1 class="text-4xl font-bold text-outline">Manajemen Keuangan</h1></a>
        </header>

        <!-- Main Content -->
        <main class="flex-1 p-6 ml-0 transition-all duration-300">
            <!-- Konten utama akan ditampilkan di sini -->
        </main>
    </div>

    <script>
        const toggleSidebar = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');

        toggleSidebar.addEventListener('click', () => {
            if (sidebar.style.display === "none" || sidebar.style.display === "") {
                sidebar.style.display = "block"; // Tampilkan sidebar
                setTimeout(() => {
                    sidebar.style.transform = "translateX(0)"; // Geser masuk ke layar
                }, 10); // Delay kecil agar transisi berjalan
            } else {
                sidebar.style.transform = "translateX(-100%)"; // Geser keluar dari layar
                setTimeout(() => {
                    sidebar.style.display = "none"; // Sembunyikan setelah animasi selesai
                }, 300); // Sesuaikan dengan durasi animasi
            }
        });
    </script>

</body>
</html>
