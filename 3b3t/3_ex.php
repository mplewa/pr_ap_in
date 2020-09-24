<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      p {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <p>Dane kontaktowe<br></p>
    <?php
      echo 'Imie: ';
      include 'imie.php';

      echo '<br>Nazwisko: ';
      include 'nazwisko.php';
      echo '<hr>';
     ?>
  </body>
</html>
