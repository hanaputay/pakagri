<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Lupa Password? | PakAgri</title>
</head>
<body>

    <!-- Main Container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!-- Login Container -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!-- Left Box -->
            <div class="col-md-6 rounded-5 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-image mb-10">
                    <img src="images/tani.png" class="img-fluid" style="width: 500px; border-radius: 20px;">
                </div>
            </div>

            <!-- Right Box -->
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Lupa Password?</h2>
                        <p>Masukkan informasi berikut untuk mereset password Anda.</p>
                    </div>
                    <form method="post" action="process_forgot_password.php">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email" name="email" required>
                        </div>
                        <!-- Additional fields for password reset may be added here -->

                        <div class="input-group mb-1">
                            <button type="submit" name="submit" class="btn btn-lg btn-success w-100 fs-6">Reset Password</button>
                        </div>
                        <p class="SignIn-register-text">Ingat password Anda? <a href="SignIn.php">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
