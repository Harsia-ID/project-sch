<?php include("header.php"); ?>
<section>
    <br>
    <div class="container">
        <div class="card blur bg-transparent">
            <div class="card-header">
                <h1 class="text-center">COUNTDOWN BULAN RAMADHAN</h1>
            </div>
            <div class="card-body">
                <div class="countdown" id="countdown">
                    <span id="days">X</span> days
                    <span id="hours">X</span> hours
                    <span id="minutes">X</span> minutes
                    <span id="seconds">X</span> seconds
                </div>
            </div>
            <div class="card-footer">
                <p class="text-center"> Jangan Lupa untuk berpuasa</p>
            </div>
        </div>
    </div>
</section>


<script>
    // Tanggal target countdown (tahun, bulan (0-11), tanggal, jam, menit, detik)
    const targetDate = new Date('Mar 10, 2024').getTime();

    // Memperbarui countdown setiap detik
    const countdownInterval = setInterval(function() {
        // Mendapatkan tanggal dan waktu saat ini
        const now = new Date().getTime();

        // Menghitung selisih waktu antara target dan waktu sekarang
        const timeDifference = targetDate - now;

        // Menghitung waktu yang tersisa dalam hari, jam, menit, dan detik
        const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

        // Menampilkan countdown
        document.getElementById('days').innerHTML = days;
        document.getElementById('hours').innerHTML = hours;
        document.getElementById('minutes').innerHTML = minutes;
        document.getElementById('seconds').innerHTML = seconds;

        // Menghentikan countdown jika waktu target telah tercapai
        if (timeDifference < 0) {
            clearInterval(countdownInterval);
            document.getElementById('countdown').innerHTML = "Waktu sudah habis!";
        }
    }, 1000);
</script>

<?php include_once("footer.php"); ?>