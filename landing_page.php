<?php
//vedo cosa mi arriva dal form per via del metodo POST
 var_dump($_POST);

 //isset ed empty sono 2 metodi che restituiscono un booleano, uno mi dice se esiste e l'altro se è vuoto un determinato valore
 var_dump(isset($_POST['bad_word']));
 var_dump(empty($_POST['bad_word']));
 
 //iniziamo a vedere le condizioni in php

  $bad_word = $_POST['bad_word'];
  $paragrafo = $_POST['paragraph'];

  if(empty($_POST['bad_word'])){
    $bad_word = '';
  } else {
    $bad_word = $_POST['bad_word'];
  }
 
  if(empty($_POST['paragraph'])){
    $paragrafo = '';
  } else {
    $paragrafo = $_POST['paragraph'];
  }

  if (isset($bad_word)) {
    
    $paragrafo_con_censura = str_replace($_POST['bad_word'], '<strong>Bobba</strong>', $_POST['paragraph']);
  } else {
    $paragrafo_con_censura = $_POST['paragraph'];
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad Words</title>
</head>
<body>
  
  <div class="container my-5">
    <h1>Bad Words</h1>
    <h2>Paragrafo inserito</h2>
    <p><?php echo $paragrafo ?></p>
    <h3>Questo paragrafo è lungo <?php echo strlen($paragrafo)?></h3>
    <h2>Paragrafo epurato</h2>
    <p><?php echo $paragrafo_con_censura ?></p>
    <h3>Questo paragrafo è lungo <?php echo strlen($paragrafo_con_censura)?> <= NB la lunghezza è maggiore perche conta anche i caratteri di sostituzione inseriti come tag html 'strong'</h3>
  </div>
</body>
</html>