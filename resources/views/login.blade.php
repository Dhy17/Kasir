<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col items-center justify-center h-screen">
    <div class="border border-1 w-full max-w-xl rounded-xl p-4 bg-white text-black">
        <div class="text-center">
            <h1 class="text-3xl font-bold py-4">
                Login
            </h1>
            <p> Masukkan detile akun anda untuk memulai</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold pt-4 py-2">Email</h2>
            <input type="Email" placeholder="masukan email anda" class="input input-bordered w-full max-w-xl"></input>
        </div>

        <div>
            <h2 class="text-xl font-semibold py-2 pt-2">Password</h2>
            <input type="password" placeholder="Masukkan Passworad"
                class="input input-bordered bg-rose-400 w-full max-w-xl"></input>
        </div>

        <div class="py-2">
            <h3><button class="btn center w-full max-w-xl">Masuk</button></h3>
        </div>
    </div>
</body>

</html>
