<?php
session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Teman Kuliah</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('https://wallpapercave.com/wp/wp4718065.png');
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        form {
            background-color: #D0A2F7;
            padding: 20px;
            border-radius: 5px;
            width: 515px;
            margin-top: 10px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #163020;
        }

        select {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #392467;
            border-radius: 10px;
            outline: none;
            text-align: center;
        }

        input {
            width: calc(100% - 15px);
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #392467;
            border-radius: 10px;
            outline: none;
        }

        input[type="submit"] {
            background-color: #313866;
            color: white;
            cursor: pointer;
            border: none;
            border: 2px solid #cccc
        }

        input[type="submit"]:hover {
            background-color: #67729D;
        }

        .output {
            padding: 5px;
            border: 1px solid gray;
            border-radius: 10px;
            background-color: teal;
        }

        .hidden {
            display: none;
        }

        .menuu {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 500px;
            margin-top: 15px;
            padding: 30px;
            background-color: #D0A2F7;
            border-radius: 5px;
        }

        .button {
            background-color: #313866;
            border-radius: 100px;
            color: white;
            cursor: pointer;
            display: inline-block;
            font-family: CerebriSans-Regular, -apple-system, system-ui, Roboto, sans-serif;
            padding: 7px 20px;
            text-align: center;
            text-decoration: none;
            transition: all 250ms;
            border: 1px solid #cccc
            font-size: 16px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button:hover {
            box-shadow: #67729D;
        }

        .button:active {
            box-shadow: #3c4fe0 0 3px 7px inset;
            transform: translateY(2px);
        }

        .logout-button {
            background-color: #313866;
            border-radius: 5px;
            border: 1px solid #cccc;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: Inter, -apple-system, system-ui, Roboto, "Helvetica Neue", Arial, sans-serif;
            height: 40px;
            line-height: 40px;
            outline: 0;
            overflow: hidden;
            padding: 0 20px;
            pointer-events: auto;
            position: relative;
            text-align: center;
            touch-action: manipulation;
            user-select: none;
            -webkit-user-select: none;
            vertical-align: top;
            white-space: nowrap;
            width: 100%;
            z-index: 9;
        }

        .logout-button:hover {
            opacity: .7;
            background-color: #67729D;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 150%;
            border-collapse: collapse;
        }
        
        td {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #9D76C1;
            color: black;
        }

        td {
            background-color: #FFFBF5;
        }

        .tabel {
            width: 65%;
            overflow: auto;
            max-height: 500px; 
            margin: 20px;
            margin-top: 5px;
        }

        .pilprod {
            width: 550px;
            margin-top: 15px;
        }

        .radio-container {
            display: flex;
            gap: 10px;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        input[type="radio"] {
            display: none;
        }

        input[type="radio"]+label {
            position: relative;
            padding-left: 30px;
            cursor: pointer;
            line-height: 20px;
            display: inline-block;
        }

        input[type="radio"]+label:before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            border: 2px solid #313866;
            border-radius: 50%;
            background-color: #fff;
        }

        input[type="radio"]:checked+label:before {
            background-color: #313866;
            border-color: #313866;
        }

        .checkbox-container {
            display: center;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 15px;
            -webkit-columns: 50px 4;
        }

        input[type="checkbox"] {
            display: none;
        }

        input[type="checkbox"]+label {
            position: relative;
            padding-left: 30px;
            cursor: pointer;
            line-height: 20px;
            display: inline-block;
        }

        input[type="checkbox"]+label:before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            border: 2px solid #313866;
            border-radius: 4px;
            background-color: #fff;
        }

        input[type="checkbox"]:checked+label:before {
            background-color: #313866;
            border-color: #313866;
        }
    </style>
</head>

<body>
    <div class="menuu">
        <h2 style="margin:0px; margin-bottom:15px;">Daftar Teman Kuliah</h2>
        <div style="display: flex; gap: 20px;">
            <button class="button" onclick="formTambah()">Tambah</button>
            <button class="button" onclick="formEdit()">Edit</button>
            <button class="button" onclick="formHapus()">Hapus</button>
        </div>
    </div>

    <form class="hidden tambah-data" action="tambahdata.php" method="post">
        <h2>Tambah Data</h2>
        <label for="nim">NIM :</label>
        <input type="text" name="nim" required>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" required>
        <label for="gender">Jenis Kelamin :</label>
        <div class="radio-container">
            <input type="radio" id="Laki" name="gender" value="Laki">
            <label for="Laki">Laki-Laki</label>
            <input type="radio" id="Perempuan" name="gender" value="Perempuan">
            <label for="Perempuan">Perempuan</label>
        </div>
        <label for="prodi">Program Studi:</label>
        <select name="prodi" id="prodi">
            <option disabled selected>-- prodi --</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Matematika">Matematika</option>
            <option value="Kimia">Kimia</option>
        </select>
        <label for="sifat">Sifat :</label>
        <div class="checkbox-container">
            <input type="checkbox" id="sifat1" name="sifat[]" value="Baik">
            <label for="sifat1"> Baik</label>
            <input type="checkbox" id="sifat2" name="sifat[]" value="Cantik">
            <label for="sifat2"> Cantik</label>
            <input type="checkbox" id="sifat3" name="sifat[]" value="Ganteng">
            <label for="sifat3"> Ganteng</label>
            <input type="checkbox" id="sifat4" name="sifat[]" value="Ceria">
            <label for="sifat4"> Ceria</label>
            <input type="checkbox" id="sifat5" name="sifat[]" value="Pendiam">
            <label for="sifat5"> Pendiam</label>
            <input type="checkbox" id="sifat6" name="sifat[]" value="Perhatian">
            <label for="sifat6"> Perhatian</label>
            <input type="checkbox" id="sifat7" name="sifat[]" value="Penyabar">
            <label for="sifat7"> Penyabar</label>
            <input type="checkbox" id="sifat8" name="sifat[]" value="Humoris">
            <label for="sifat8"> Humoris</label>
        </div>
        <input type="submit" value="Tambahkan">
    </form>

    <form class="hidden edit-data" action="editdata.php" method="post">
        <h2>Edit Data</h2>
        <label for="nim">NIM :</label>
        <input type="text" name="nim" required>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" required>
        <label for="gender">Jenis Kelamin :</label>
        <div class="radio-container">
            <input type="radio" id="Laki-edit" name="gender" value="Laki">
            <label for="Laki-edit">Laki-Laki</label>
            <input type="radio" id="Perempuan-edit" name="gender" value="Perempuan">
            <label for="Perempuan-edit">Perempuan</label>
        </div>
        <label for="prodi">Program Studi:</label>
        <select name="prodi" id="prodi">
            <option disabled selected>-- prodi --</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Matematika">Matematika</option>
            <option value="Kimia">Kimia</option>
        </select>
        <label for="sifat">Sifat :</label>
        <div class="checkbox-container">
            <input type="checkbox" id="sifat1-edit" name="sifat[]" value="Baik">
            <label for="sifat1-edit"> Baik</label>
            <input type="checkbox" id="sifat2-edit" name="sifat[]" value="Cantik">
            <label for="sifat2-edit"> Cantik</label>
            <input type="checkbox" id="sifat3-edit" name="sifat[]" value="Ganteng">
            <label for="sifat3-edit"> Ganteng</label>
            <input type="checkbox" id="sifat4-edit" name="sifat[]" value="Ceria">
            <label for="sifat4-edit"> Ceria</label>
            <input type="checkbox" id="sifat5-edit" name="sifat[]" value="Pendiam">
            <label for="sifat5-edit"> Pendiam</label>
            <input type="checkbox" id="sifat6-edit" name="sifat[]" value="Perhatian">
            <label for="sifat6-edit"> Perhatian</label>
            <input type="checkbox" id="sifat7-edit" name="sifat[]" value="Penyabar">
            <label for="sifat7-edit"> Penyabar</label>
            <input type="checkbox" id="sifat8-edit" name="sifat[]" value="Humoris">
            <label for="sifat8-edit"> Humoris</label>
        </div>
        <input type="submit" value="Edit">
    </form>

    <form class="hidden hapus-data" style="margin-bottom:50px;" action="hapusdata.php" method="get">
        <h2>Hapus Data</h2>
        <label for="del">NIM :</label>
        <input type="text" name="del" required>
        <input class="hapus" type="submit" value="Hapus">
    </form>

    <select class="pilprod" onchange="cariData()">
        <option value="">-- prodi --</option>
        <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Matematika">Matematika</option>
            <option value="Kimia">Kimia</option>
    </select>

    <div class="tabel">
    <table>
        <thead>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Program Studi</th>
            <th>Sifat</th>
        </thead>
        <tbody class="tabel-body">
        </tbody>
    </table>
    <div>

    <div style="position: fixed; top: 10px; right: 10px;">
        <a href="index.php">
            <button class="logout-button" onclick={logout()}>Logout</button>
        </a>
    </div>

    <script>
        function checkCookie() {
            var userIdCookie = getCookie('user_id');
            if (!userIdCookie) {
                window.location.href = 'index.php';
            }
        }

        function getCookie(name) {
                    var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
                    return match ? match[2] : null;
                }

        let formActiveNow;
        cariData();
        checkCookie();

        function logout() {
            document.cookie = 'user_id=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
            window.location.href = 'index.php';
        }

        function cariData() {
            const pilprod = document.querySelector('.pilprod').value;

            const fetchUrl = pilprod ? `caridata.php?prodi=${encodeURIComponent(pilprod)}` : 'caridata.php';

            fetch(fetchUrl)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    displayData(data);
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        }

        function displayData(data) {
            const tabelBody = document.querySelector('.tabel-body');
            tabelBody.innerHTML = '';
            
            if(data.length!=0){
                data.forEach(row => {
                const tr = `<tr><td>${row.nim}</td><td>${row.nama}</td><td>${row.gender}</td><td>${row.prodi}</td><td>${row.sifat}</td></tr>`
                tabelBody.innerHTML+=tr;
            });
            }else{
                tabelBody.innerHTML+=`<tr><td colspan="5">Data Tidak Ditemukan</td></tr>`
            }
            
        }

        function formTambah() {
            if (!formActiveNow) {
                document.querySelector(".tambah-data").classList.remove("hidden");
                formActiveNow = document.querySelector(".tambah-data");
            }
            else if (formActiveNow != document.querySelector(".tambah-data")) {
                document.querySelector(".tambah-data").classList.remove("hidden");
                formActiveNow.classList.add("hidden");
                formActiveNow = document.querySelector(".tambah-data");
            } else {
                formActiveNow.classList.add("hidden");
                formActiveNow = null;
            }
        }

        function formEdit() {
            if (!formActiveNow) {
                document.querySelector(".edit-data").classList.remove("hidden");
                formActiveNow = document.querySelector(".edit-data");
            }
            else if (formActiveNow != document.querySelector(".edit-data")) {
                document.querySelector(".edit-data").classList.remove("hidden");
                formActiveNow.classList.add("hidden");
                formActiveNow = document.querySelector(".edit-data");
            } else {
                formActiveNow.classList.add("hidden");
                formActiveNow = null;
            }
        }

        function formHapus() {
            if (!formActiveNow) {
                document.querySelector(".hapus-data").classList.remove("hidden");
                formActiveNow = document.querySelector(".hapus-data");
            }
            else if (formActiveNow != document.querySelector(".hapus-data")) {
                document.querySelector(".hapus-data").classList.remove("hidden");
                formActiveNow.classList.add("hidden");
                formActiveNow = document.querySelector(".hapus-data");
            } else {
                formActiveNow.classList.add("hidden");
                formActiveNow = null;
            }
        }
        function validasiForm() {
            var nim = document.getElementsByName("id")[0].value;
            var nama = document.getElementsByName("nama")[0].value;
            var gender = document.querySelector('input[name="gender"]:checked');
            var prodi = document.getElementById("prodi").value;
            var sifat = document.querySelectorAll('input[name="sifat[]"]:checked');

            if (nim.trim() === "") {
                alert("NIM harus diisi");
                return false;
            }

            if (nama.trim() === "") {
                alert("Nama harus diisi");
                return false;
            }

            if (!gender) {
                alert("Jenis Kelamin harus dipilih");
                return false;
            }

            if (prodi === "-- Pilih --") {
                alert("Program Studi harus dipilih");
                return false;
            }

            if (sifat.length === 0) {
                alert("Minimal pilih satu sifat teman");
                return false;
            }
            return true;
        }


    </script>
</body>

</html>

<?php
if (isset($_SESSION["output1"]) || isset($_SESSION["output2"]) || isset($_SESSION["output3"]) || isset($_SESSION["output4"]) || isset($_SESSION["output5"])) {
    if (basename($_SERVER['PHP_SELF']) != $_SESSION["output1"] || basename($_SERVER['PHP_SELF']) != $_SESSION["output2"] || basename($_SERVER['PHP_SELF']) != $_SESSION["output3"] || basename($_SERVER['PHP_SELF']) != $_SESSION["output4"] || basename($_SERVER['PHP_SELF']) != $_SESSION["output5"]) {
        session_destroy();
    }
}
?>