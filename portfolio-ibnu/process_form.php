<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "youremail@example.com";  // Ganti dengan email tujuan
    $subject = "Pesan dari Portofolio";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Gagal mengirim pesan.";
    }
} else {
    echo "Akses ditolak!";
}
?>
