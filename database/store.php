<?php 
// menghubungkan ke file connection.php
include 'connection.php';

// fungsi untuk menambahkan rows ke tabel
function store($name, $email, $message, $number = 'NULL'): void
{
    // untuk mendefinisikan bahwa menggunakan veriabel global $conn dari file connection.php
    global $conn;
    try {
        // melakukan query insert data ke dalam database
        $query = mysqli_query($conn, "INSERT INTO hubungi (`name`, `number`, `email`, `message`) VALUE ('$name', '$number', '$email', '$message')");

        // jika data berhasil akan menampilkan alert dari browser
        echo "<script>
                alert('Terima kasih telah menghubungi kami! Mohon untuk menunggu 1x24 jam balasan melalui Email atau WhatsApp jika menyantumkan nomor WhatsApp.');
                document.location.href = '".BASE_URL."/hubungi';
            </script>";
    } catch (Exception $error) {
        // jika query insert data gagal, maka akan menampilkan alert dari browser
        echo "<script>
                alert('Pesan anda gagal terkirim! Cek kembali input yang anda masukan. Error: " . $error->getMessage() . "');
                document.location.href = '".BASE_URL."/hubungi';
            </script>";
    }
}

// store('Muhammad Ali Mustaqim', 'muhammadali55214@gmail.com', 'Hi Akim!');