<?php
session_start();
include 'koneksi_database.php';

include 'layout/header.php';
include 'layout/navbar.php';
?>

<div class="w-full h-screen px-20 flex items-center gap-8">
    <div class="w-1/2 translate-y-3">
        <h2 class="text-slate-900 text-4xl font-bold mb-3">Halo, Selamat datang di <span class="text-red-600">Readers</span></h2>
        <p class="text-slate-700 font-normal my-2">Tempat di mana kamu akan mendapatkan banyak informasi!</p>
        <a href="#" class="font-medium py-2 px-3 bg-red-600 text-slate-200 hover:bg-red-700 hover:text-slate-100 active:bg-red-800 active:text-slate-50 focus:bg-red-700 focus:ring focus:ring-red-500 rounded-full shadow-md my-2 inline-block">Baca lebih lanjut</a>
    </div>

    <div class="translate-y-3 bg-contain bg-no-repeat h-56 w-1/2 bg-center" style="background-image: url(/assets/img/books-home.png);"></div>
</div>

<?php include 'layout/footer.php'; ?>