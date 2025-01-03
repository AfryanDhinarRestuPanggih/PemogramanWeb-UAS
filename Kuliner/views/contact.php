<?php
// Jika form disubmit, lakukan pemrosesan pesan
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // Proses pengiriman email atau simpan pesan ke database (misalnya)
    // Di sini, kita hanya akan menunjukkan pesan terima kasih setelah pengiriman.
    // Anda bisa mengganti ini dengan kode untuk pengiriman email atau penyimpanan data.

    $to = "admin@example.com"; // Ganti dengan email tujuan
    $subject = "Pesan dari Kontak Form";
    $message = "Nama: $nama\nEmail: $email\nPesan: $pesan";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Pesan berhasil dikirim!');</script>";
    } else {
        echo "<script>alert('Gagal mengirim pesan. Coba lagi nanti.');</script>";
    }
}
?>

<div class="container py-5" style="background-color: #FFA500; border-radius: 15px;">
    <div class="row">
        <div class="col-lg-6">
            <h2 class="fw-bold text-white">Kontak Kami</h2>
            <p class="text-white">Jika Anda memiliki pertanyaan atau ingin menghubungi kami, silakan kirim pesan melalui form di bawah ini.</p>

            <!-- Form Kontak -->
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="nama" class="form-label text-white">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-white">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label text-white">Pesan</label>
                    <textarea class="form-control" id="pesan" name="pesan" rows="4" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-light">Kirim Pesan</button>
            </form>
        </div>

        <div class="col-lg-6">
            <h3 class="fw-bold text-white">Alamat Kami</h3>
            <p class="text-white">Jika Anda ingin datang langsung, berikut adalah alamat kantor kami:</p>
            <p class="text-white"><strong>Alamat:</strong> Jalan Raya No 19, Cikarang Selatan, Indonesia</p>
            <p class="text-white"><strong>Email:</strong> kulineran@gmail.com</p>
            <p class="text-white"><strong>Telepon:</strong> +62 123 456 7890</p>

            <!-- Anda bisa menambahkan peta atau info kontak lainnya di sini -->
        </div>
    </div>
</div>
