<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>

  <title>Bad Words</title>
</head>
<body>

  <div class="container my-5">
    <form action="./landing_page.php" method="POST">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Parola da censurare</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="bad_word" placeholder="scrivi parola">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Testo</label>
        <textarea class="form-control" name="paragraph" id="exampleFormControlTextarea1" rows="3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis vel officiis iste hic dolorem maiores sit eum voluptate animi unde, saepe consequatur. Perferendis, id earum? Beatae aut illum tempore consectetur.</textarea>
      </div>

      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
  </div>
  
</body>
</html>