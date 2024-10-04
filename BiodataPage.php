<?php
class BiodataPage {
    private $nama;
    private $nim;
    private $ttl;
    private $jenis_kelamin;
    private $agama;
    private $kewarganegaraan;
    private $no_telepon;
    private $email;
    private $alamat;

    public function __construct($nama, $nim, $ttl, $jenis_kelamin, $agama, $kewarganegaraan, $no_telepon, $email, $alamat) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->ttl = $ttl;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->agama = $agama;
        $this->kewarganegaraan = $kewarganegaraan;
        $this->no_telepon = $no_telepon;
        $this->email = $email;
        $this->alamat = $alamat;
    }

    public function render() {
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Biodata Muhammad Bayu Andika Putra</title>
            <style>
                body {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    flex-direction: column;
                    margin: 0;
                    background-color: #e6e6e6;
                    font-family: Arial, sans-serif;
                }
                .biodata-container {
                    background-color: white;
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    width: 400px;
                }
                h2 {
                    margin-bottom: 20px;
                    text-align: center;
                }
                p {
                    margin: 10px 0;
                }
                .label {
                    font-weight: bold;
                }
                .button {
                    font-size: 18px;
                    padding: 10px 20px;
                    background-color: #007bff;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    text-decoration: none;
                }
                .button:hover {
                    background-color: #0056b3;
                }
            </style>
        </head>
        <body>
            <div class="biodata-container">
                <h2>Biodata Muhammad Bayu Andika Putra</h2>
                <p><span class="label">Nama:</span> ' . htmlspecialchars($this->nama) . '</p>
                <p><span class="label">Nim:</span> ' . htmlspecialchars($this->nim) . '</p>
                <p><span class="label">Tempat dan Tanggal Lahir:</span> ' . htmlspecialchars($this->ttl) . '</p>
                <p><span class="label">Jenis Kelamin:</span> ' . htmlspecialchars($this->jenis_kelamin) . '</p>
                <p><span class="label">Agama:</span> ' . htmlspecialchars($this->agama) . '</p>
                <p><span class="label">Kewarganegaraan:</span> ' . htmlspecialchars($this->kewarganegaraan) . '</p>
                <p><span class="label">No Telepon:</span> ' . htmlspecialchars($this->no_telepon) . '</p>
                <p><span class="label">Email:</span> ' . htmlspecialchars($this->email) . '</p>
                <p><span class="label">Alamat rumah:</span> ' . htmlspecialchars($this->alamat) . '</p>
            </div>
            <a href="berita.php" class="button">halaman berita</a>
            <a href="beranda.php" class="button">halaman beranda</a>
        </body>
        </html>';
    }
}
?>
