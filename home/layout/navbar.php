<?php
if (isset($_SESSION['login'])) {
    $sql = 'SELECT * FROM kasir WHERE telepon="' . $_SESSION['login'] . '"';
    $result = $conn->query($sql)->fetch_assoc();
}
?>

<header class="bg-red-600 w-full h-16 py-4 px-20 text-slate-100 flex justify-between items-center shadow-lg static top-0 right-0 left-0">
    <a href="/" class="text-2xl font-bold">
        Readers
    </a>
    <nav class="flex gap-3">
        <a href="#">Beranda</a>
        <a href="#">Buku</a>
    </nav>
    <div class="flex items-center <?= isset($result['username']) ? 'gap-1' : 'gap-3' ?> relative">
        <?php if (isset($_SESSION['login'])) : ?>
            <p class="active:text-slate-200 font-semibold"><?= $result['username'] ?></p>
            <i data-feather="chevron-down" class="w-5 cursor-pointer" id="dropdown-login"></i>
            <div id="dropdown-menu" class="w-56 p-3 bg-slate-200 text-slate-800 shadow-md rounded-xl border-slate-700 absolute top-7 right-0 hidden">
                <h4 class="text-center text-xl mb-2"><?= $result['nama'] ?></h4>
                <hr>
                <a href="/dashboard/" class="flex gap-2 mb-3 mt-3 hover:bg-slate-300 p-2 rounded-md active:bg-slate-400"><i data-feather="layout"></i>Dashboard</a>
                <a href="/home/registration/logout.php" class="flex gap-2 my-2 hover:bg-slate-300 p-2 rounded-md active:bg-slate-400"><i data-feather="log-out"></i>Logout</a>
            </div>
        <?php else :  ?>
            <a href="/home/registration/login.php" class="py-2 px-3 rounded-full active:bg-red-700 focus:bg-red-700 focus:ring focus:ring-red-500 font-semibold">Login</a>
            <a href="home/registration/register.php" class="py-2 px-3 bg-slate-100 text-red-600 rounded-full hover:bg-slate-200 active:bg-slate-300 font-semibold focus:ring focus:ring-red-400">Register</a>
        <?php endif; ?>
    </div>
</header>