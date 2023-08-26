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
    <div class="bg-gray-300 mx-auto w-1/2 my-10 p-5 rounded-xl">
        <h2 class="text-center text-3xl">Form Pendaftaran Siswa</h2>
        <div>
            <form action="" method="post">
                <fieldset class="flex gap-2 flex-col p-10">
                    <label for="nama">Nama Siswa: </label>
                    <input type="text" id="nama" name="nama">
                    <label for="alamat">Alamat: </label>
                    <input type="text" id="alamat" name="alamat">
                    <div>
                        <p>Jenis Kelamin :</p>
                        <input type="radio" id="laki" name="sex" value="laki-laki">
                        <label for="laki">Laki-laki</label>
                        <input type="radio" id="perempuan" name="sex" value="perempuan">
                        <label for="perempuan">Perempuan</label>
                    </div>
                    <label for="agama">Agama: </label>
                    <select name="agama" id="agama">
                        <option value="islam">Islam</option>
                        <option value="hindu">Hindu</option>
                        <option value="kristen">Kristen</option>
                        <option value="katholik">Katholik</option>
                        <option value="budha">Budha</option>
                    </select>
                    <button type="submit" class="w-20 bg-sky-500 rounded-md px-5 py-2">Daftar</button>
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>