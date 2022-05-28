<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="Fig4Aperisushi.php">
            <img src="./images/LG.png" alt="" width="150" height="120">
            Fig4hperiSushi
          </a>  
          <?php
          $id=$_COOKIE["codTavolo"];
          echo "<p style='color:white;'>$id</p>";
          ?>
        </div>
    </nav>
    

<div class="container">
  
  <div class="card" style="width: 18rem;">
    <img src="./images/california.png" class="card-img-top" class="w-25">
    <div class="card-body">
      <h5 class="card-title">Fig4hfornia</h5>
      <button type="submit" class="btn btn-outline-dark" id="caliPlus">+</button>
      <button type="submit" class="btn btn-outline-dark">-</button>
      <p class="card-text" id="caliQnt">0</p>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="./images/rainbow.png" class="card-img-top" class="w-25">
    <div class="card-body">
      <h5 class="card-title">Arcobaleeeeenoooo</h5>
      <button type="submit" class="btn btn-outline-dark">+</button>
      <button type="submit" class="btn btn-outline-dark">-</button>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="./images/shrimp.png" class="card-img-top" class="w-25">
    <div class="card-body">
      <h5 class="card-title">Are you a SIMP?</h5>
      <button type="submit" class="btn btn-outline-dark">+</button>
      <button type="submit" class="btn btn-outline-dark">-</button>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="./images/philadelphia.png" class="card-img-top" class="w-25">
    <div class="card-body">
      <h5 class="card-title">Phigadelphia</h5>
      <button type="submit" class="btn btn-outline-dark">+</button>
      <button type="submit" class="btn btn-outline-dark">-</button>
    </div>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
<script src="Script.js"></script>
</body>
</html>