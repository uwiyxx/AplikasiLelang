<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-image: url('/image/perpus.jpg'); /* Background perpustakaan */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background-color: rgba(255, 255, 255, 0.9); /* Transparansi background form */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            width: 350px;
            text-align: center;
        }

        .login-box img {
            width: 80px;
            margin-bottom: 20px;
        }

        .form-control {
            margin-bottom: 20px;
        }

        .btn-masuk {
            background-color: #e74c3c; 
            color: white;
        }

        .navbar {
            position: absolute;
            top: 0;
            width: 100%;
            background-color: #e91e63;
        }

        .navbar-brand img {
            width: 30px;
            height: 30px;
        }

        .navbar .navbar-toggler-icon {
            background-color: white;
        }

    </style>
</head>
<body>

    <!-- Login Box -->
    <div class="login-box">
        <h2>Login</h2>
        <form action="" method="post">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="username" name="username"><i class="bi bi-person"></i></span>
                <input type="username" class="form-control" id="username" name="username" placeholder="Username">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="password" ><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            
            <button class="btn btn-masuk w-100">Masuk</button>
        </form>
    </div>
    <script>
        document.querySelector("i.bi-eye-slash").addEventListener("click",()=>{
            let pw = document.getElementById('password')
            if(pw.type == "password"){
                pw.type ="text"
            }else{
                pw.type = "password"
            }
        })
      </script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>