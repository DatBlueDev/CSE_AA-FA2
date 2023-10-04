<!DOCTYPE html>
<html>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="styles.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tinos&display=swap" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>

    h1 {
        font-family: 'Dela Gothic One', cursive;
    }
    h3 {
        font-family: 'Tinos', serif;
        font-size: 15px;
    }
    p {
        font-family: 'Tinos', serif;
        font-size: 20px;
    }
    body{
        background-color: #2a344c;
    }
    form {
        border: 10px;
        border-radius: 25px;
        padding: 15px;
        background: gray;
    }
 </style>
<body>

<div class="container-fluid p-5 text-white text-center" style="background-color: #8d0d1b">
    <h1 style="font-size: 80px; ">Capsaicin</h1> <h1 style="font-family: 'Tinos', serif;"><i>Ensuring your source of social media<i></h1>
    <h3>...is a bit spicier</h3>
</div>

<div class="container mt-5">
  <div class="row">
  <div class="col-sm-6 mx-auto">
    <form action="receiver.php" method="post" style="padding-10px;">
    <input type="text" class="form-control" name="name" required placeholder="Name">
    <br>
    <input type="text" class="form-control" name="email" required placeholder="Email">
    <br>
    <input type="text" class="form-control" name="password" required placeholder="Password">
    <br>
<button  type="submit" class="btn text-white" style="background-color: #ec4153">Submit</button>
<button  type="reset" class="btn text-white" style="background-color: #ec4153">Clear</button>
</div>

</form>
</div>
</div>
</div>




</body>
</html>