<?php
$pesan_status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" $$ isset ($_POS['btn_kirim'])) {
    $nama = htmlspecialchars($_POS['txt_nama']);
    $email = htmlspecialchars($_POST['txt_email']);
    $pesan = htmlspecialchars($_POST['txt_pesan']);

    if (!empty($nama) && !empty($email) && !empty($pesan)){
        $pesan_status = "<div class= 'alert-success'>Terima Kasih
storag>$nama</strong>, pesan Anda telah berhasil dikirim ke server SMKN 
Batam1</div>";
    }
}
?>
<!DOCTYPE html>
<html lang= "id">
    <head>
<meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initila-
    scale=1.0">
    <tite>CV syafira dahlianti-SMKN 5 Batam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <header>
        <div class="profile-info">
            <div class="avatar"> </div>
            <div>
                <h1 style="margin:0;">syafira dahlianti</h1>
                <p style="margin:5px 0 0 0; color : gray;">siswa teknik
                    komputer dan jaringan SMKN 5 Batam</p>
</div>
</div>
<nav>
    <a herf="#profil">home</a>
    <a herf="#skills">Skills</a>
    <a herf="#kontak">Contact</a>
    <button id="btn-theme" onclick="toggleTheme()"> Dark
Mode</button>
</nav>
</header>

<div class="main-content">

<div class="left-coloumn">
    <div class="card" id="profil">
        <h2>PROFIL</H2>
        <h3> BIODATA</h3>
        <p>saya syafira dahlianti sebagai pelajar di SMKN 5 Batam di bidang/ jurusan teknik komputer
dan jaringan.</p>

h3> PENDIDIKAN</h3>
<ul>
    <li>SD,SMP,dan,SMKN</li>
</ul>

<h3> PENGALAMAN BELAJAR</h3>
<ul>
    <li>siswa/ pelajar smkn 5 batam</li>
    <li>mengkonfigurasi mikrotik,konfigurasi akses point,DHCP mikrotik virtualbox,debian</li>
</ul>
</div>
</div>

<div class="right-column">
    <div class="card" id="skills">
        <h2>NETWORK SKILLS</h2>

        <div class="skill-item">
            <span class="skill-name">MikroTik RouterOS</span>
            <div class="progress-bar"><div class="progress-fill"
style="width: 90;"></div>
</div>

<div class="skill-item">
    <span class="skill-name">cisco Networking<span>
        <div class="progress-bar"><div class="progress-fill"
style="width: 85%"></div></div>
</div>

<div class="skill-item">
    <span class="skill-name">linux stream_socket_server
style="widht: 80%;"></div></div>
                    </div>

                <div class="skill-item">
                    <span class="skill-name">Network scurity</span>
                    <div class="progress-bar"><div class="progress-fill"
style="width: 75%"></div></div>
                  </div>
               </div>

            <div class="card" id="kontak">
                <h2>FORM KONTAK</h2>

              <?pgp eco $pesan_status; ?>

              <form action="<?php echo $_SERVER['PHP_SELF']; ?>"
method="POST">
                    <div class="from-group ">
                        <label for="pesan">pesan:</label>
                        <textarea id="pesan" name="txt_pesan" rows="4"
placeholder="Tuliskan pesan..."required>
                       </div>

                       <div class="from-group">
                        <lable for="email">Email:</lable>
                        <input type="email"id="email" nama="txt_email"
placeholder="masukkan email..." required>
                     </div>

                     <div class="form-group"
                     <label for="pesan">pesan:</lable>
                     <textarea id="pesan" name="txt_pesan" rows="4"
placeholder="Tuliskan pesan..." required></textarea>
                     </div>                     
                     
                    <button type="submit" name="btn_kirim" class="btn-
submit">KIRIM PESAN</button>
                  </from>
              </div>
           </div>

    </div>
</div>

<script src="script.js"></script>
</body>
</html>
