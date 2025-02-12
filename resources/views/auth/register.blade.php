<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Palatino';
            background-image: url('../images/mobil1.jpg'); 
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Warna latar belakang transparan (hitam dengan opasitas 0.5) */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content {
            text-align: center;
            color: rgb(90, 90, 90);
        }

        .warnabtn {
            color: rgb(60, 63, 66);
            background-color: rgb(187, 90, 174);
            font-size: 120%; /* Ukuran tombol 150% dari ukuran teks biasa */
            padding: 10px 20px; /* Penyesuaian padding untuk tombol yang lebih besar */
        }

        .btn:hover {
            background-color: rgb(187, 90, 174);
            color: rgb(121, 123, 124);
        }

        h1 {
            font-size: 350%; /* Ukuran teks h1 300% dari ukuran teks biasa */
            /* text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5); Bayangan teks */
            color: rgb(187, 90, 174);
        }

        h1 span {
            display: inline-block;
            /* -webkit-text-stroke: 1px black;  */
            color: rgb(241, 202, 116);
        }

        p {
            color: #3f3f3f;
        }

        .register-form {
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 20px;
            border-radius: 10px;
            width: 400px;
        }

        .register-form input[type="text"],
        .register-form input[type="password"],
        .register-form input[type="email"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <div class="content">
            
            <div class="register-form mt-3">
                <h1>Register</h1>
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Nama" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password" required>
                    </div>
                    <button type="submit" class="btn warnabtn btn-block">Daftar</button>
                </form>
                <p class="mt-3">Sudah punya akun? <a href="{{ url('/login') }}">Login sekarang</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
