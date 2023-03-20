<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/MuIyr8Ej74CrXhJDQy37RPBe/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-rxGZvg8Gdn3mgkwZjiW/lYDbAOnTpSluTNQ2InCrzanOoXT6H/CMKNjLfpfo7x0s"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="pageLoginStyle.css">
   
    <title>Login</title>
</head>


<body>

    <div class="wrapper">
        <div class="form-box Login">
            <h2>Login</h2>

            <form action="../trainingIT/validasiLogin.php" method="post">
                <!--Input email-->
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="text" id="inputNRP" required>
                    <label>NRP</label>
                </div>

                <!--input Password-->
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="text" id="inputPassword" required>
                    <label>Password</label>
                </div>


                <div class="remember-forgot">
                    <label><input type="checkbox">
                    I'am not a robot</label>
                    <a href="#">Forgot Password?</a>
                </div>
                
                <button class="btn">Login</button>
            </form>

        </div>
    </div>

    
</body>
</html>