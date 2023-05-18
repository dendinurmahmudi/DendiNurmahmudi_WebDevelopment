<!DOCTYPE html>
<html>
<head>
    <title>Landing Page Tiket Konser</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="top-bar">
        <a id="myModalogin" class="login-button">Login</a>
    </div>
    <div class="container">
        <h1>Selamat Datang di Konser XYZ</h1>
        <p>Tiket konser tersedia sekarang! Dapatkan pengalaman konser yang tak terlupakan.</p>
        <a id="modalButton" class="btn">Pesan Tiket Sekarang</a>
    </div>
    <div id="myModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Form pesan Tiket</h2>
        <div class="vertical-form">
            <label>NIK:</label>
            <input type="text" name="" value="" placeholder="NIK">
            <label>Nama:</label>
            <input type="text" name="" value="" placeholder="Nama">
            <label>Alamat:</label>
            <input type="text" name="" value="" placeholder="Alamat">
            <label>No HP:</label>
            <input type="text" name="" value="" placeholder="No HP">
        </div>
        <a id="modalButton" class="btn">Simpan</a>
    </div>
</div>
<div id="myModalogin" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Form pesan Tiket</h2>
        <div class="vertical-form">
            <label>Username:</label>
            <input type="text" name="" value="" placeholder="NIK">
            <label>Password:</label>
            <input type="password" name="" value="" placeholder="Nama">
            
        </div>
        <a id="modalButton" class="btn">Simpan</a>
    </div>
</div>
</body>
</html>
<script>
    var modal = document.getElementById('myModal');
    var modalButton = document.getElementById('modalButton');
    var closeSpan = document.getElementsByClassName('close')[0];

    modalButton.onclick = function() {
        modal.style.display = 'block';
    }

    closeSpan.onclick = function() {
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
</script>