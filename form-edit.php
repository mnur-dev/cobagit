<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-slate-600">
    <!-- Wrapper -->
    <div class="bg-gray-300 w-full mx-auto py-10 px-10 my-10 rounded-xl">
        <div class="">
            <h2 class=" text-2xl mb-10">Daftar Calon Siswa</h2>
            <button class="bg-blue-500 py-1 px-3 mb-3 rounded-md">
                <a href="form-daftar.php">Tambah siswa Baru</a>
            </button>
        </div>
        <!-- Menampilkan data Siswa -->
        <div>
            <table class="table-auto border-collapse">
                <thead>
                    <tr class="bg-gray-400">
                        <th class="border border-slate-300 px-3 py-1">Nama</th>
                        <th class="border border-slate-300 px-3 py-1">Alamat</th>
                        <th class="border border-slate-300 px-3 py-1">Jenis Kelamin</th>
                        <th class="border border-slate-300 px-3 py-1">Agama</th>
                        <th class="border border-slate-300 px-3 py-1">To do</th>
                    </tr>
                </thead>
                <tr>
                    <td class="border border-slate-400 px-3 py-1">Joko kristianto</td>
                    <td class="border border-slate-400 px-3 py-1">Pendem Jarum</td>
                    <td class="border border-slate-400 px-3 py-1">Laki-laki</td>
                    <td class="border border-slate-400 px-3 py-1">Islam</td>
                    <td class="border border-slate-400 px-3 py-1">
                        <a href="#" class="text-blue-500">Update </a> | <a href="#" class="text-red-600">Cancel </a>
                    </td>
                </tr>
            </table>
        </div>
        <!-- Menampilkan data siswa End -->
    </div>
    <!-- Wrapper End -->
</body>
</html>