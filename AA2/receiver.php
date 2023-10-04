<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landbankers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/spaced" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/bebas-neue" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
  .box{
            background-color: rgba(0, 0, 0, 0.5);
            padding: 15px;
            border-radius: 10px;
            color:white;
            font-family: 'Bebas Neue', sans-serif;
            font-weight: 300;
            letter-spacing: 1.5px;
        }
</style>
  </head>
<body>

    <div class="container mt-3 col-sm-4">
        <div class="row">
        <div class="col-sm-12">
            <br>
        <h1>Login</h1>
        <hr>
        <div class="box">
    <p>Your name is: <?php echo $_POST["name"]; ?><br></p>
    <p>Your email is: <?php echo $_POST["email"]; ?><br></p>
    <p>Your password is: <?php echo $_POST["password"]; ?><br></p>
    </div>
    <br>
    </div>
        </div>
    </div>
    <footer class="bg-transparent text-center text-white fixed-bottom">
        <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.4);">
            <div class="col-auto">
                <p class="pt-2 ">Cooked by: the capsaicin incorporated!
                </p>
                Â© Copyright: 2023 PSHS-CLC
            </div>
        </div>
    </footer>
