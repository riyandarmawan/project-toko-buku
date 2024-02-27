<?php

session_start();

if (isset($_POST['submit'])) {
    include '../../koneksi_database.php';

    $sql = 'SELECT * FROM kasir WHERE username="' . $_POST['username'] . '"';
    $result = $conn->query($sql)->fetch_assoc();

    if ($result['username'] == $_POST['username'] && $result['password'] == $_POST['password']) {
        // if (password_verify($password, $result['password'])) {
        $_SESSION['login'] = $result['username'];
        $sql = 'UPDATE kasir SET status="online" WHERE username="' . $_POST['username'] . '"';
        $conn->query($sql);
        header('Location: /');
        // }
    }
}

include '../layout/header.php';

?>

<div class="h-screen flex items-center">
    <div class="w-96 min-h-96 border-2 rounded-lg shadow-lg m-auto p-8">
        <h1 class="text-2xl font-bold text-center text-slate-700">Login</h1>
        <form action="" method="post" class="mt-4">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="tel" class="form-control" id="username" name="username" placeholder="Masukkan username anda disini" autocomplete="off" autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="relative">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password anda disini">
                    <label for="eye" class="absolute right-3 top-[7px] cursor-pointer"><i data-feather="eye"></i></label>
                    <input type="checkbox" class="hidden" id="eye">
                </div>
            </div>
            <div class="w-full flex justify-center">
                <button type="submit" name="submit" class="py-2 px-3 rounded-lg shadow-md bg-red-500 text-slate-100 font-bold">Login</button>
            </div>
        </form>
        <p class="text-sm text-center mt-4">Belum punya akun? <a href="/home/registration/register.php" class="text-sky-600">Register sekarang!</a></p>
    </div>
</div>

<!-- password js -->
<script src="/assets/js/password.js"></script>

<?php include '../layout/footer.php'; ?>