<?php include '../layout/header.php'; ?>

<div class="h-screen flex items-center">
    <div class="min-h-96 border-2 rounded-lg shadow-lg m-auto p-8">
        <h1 class="text-2xl font-bold text-center text-slate-700">Register</h1>
        <form action="" method="post" class="mt-4">
            <div class="flex gap-5">
                <div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama anda disini">
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="tel" class="form-control" id="telepon" name="telepon" placeholder="Masukkan telepon anda disini">
                    </div>
                </div>
                <div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username anda disini">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="relative">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password anda disini">
                            <label for="eye" class="absolute right-3 top-[7px] cursor-pointer"><i data-feather="eye"></i></label>
                            <input type="checkbox" class="hidden" id="eye">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control resize-none" id="alamat" name="alamat" placeholder="Masukkan alamat anda disini" rows="4"></textarea>
            </div>
            <div class="w-full flex justify-center">
                <button type="submit" class="py-2 px-5 rounded-lg shadow-md bg-red-500 text-slate-100 font-bold">Register</button>
            </div>
        </form>
        <p class="text-sm text-center mt-4">Sudah punya akun? <a href="/home/registration/login.php" class="text-sky-600">Login sekarang!</a></p>
    </div>
</div>

<?php include '../layout/footer.php'; ?>