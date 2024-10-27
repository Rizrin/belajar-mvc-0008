<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Background PHP</title>
    <style>
body {
    background-color: #f0f0f0; /* Warna latar belakang */
    background-image: url('totoro.png'); /* Ganti dengan path gambar Anda */
    background-size: 150%; /* Mengubah ukuran gambar */
    background-position: center; /* Memusatkan gambar */
    position: relative; /* Atur posisi relatif untuk pseudo-elemen */
    font-family: Arial, sans-serif;
    color: white; /* Mengubah warna teks */
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7); /* Menambahkan bayangan pada teks */
}

table {
    background-color: rgba(255, 255, 255, 0.8); /* Latar belakang semi-transparan */
    color: black; /* Warna teks */
    border-radius: 15px; /* Melengkungkan sudut tabel */
    border-collapse: separate; /* Pastikan border-radius terlihat */
    border-spacing: 0; /* Menghilangkan jarak antar sel */
    box-shadow: none; /* Menghilangkan shadow */
    padding: 10px; /* Menambahkan jarak di dalam tabel agar tidak terlalu rapat */
}

th, td {
    padding: 15px 10px; /* Menambah padding pada header dan isi tabel */
}

button {
    text-shadow: none; /* Menghapus bayangan teks dari tombol */
}
    </style>
</head>
<body>
    
</body>
</html>

<?php
require_once 'config/database.php';
require_once 'app/controllers/usercontroller.php';

// Connect to the database
$dbconnection = getdbconnection();

// Get the action parameter from the URL
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

// Create an instance of usercontroller
$controller = new usercontroller($dbconnection);

// Switch between different actions
switch ($action) {
    case 'detail':
        $controller->show($id);
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    case 'index':
    default:
        $controller->index();
        break;
}
?>
