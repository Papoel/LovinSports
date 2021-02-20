<?php
    include("../../utile/formatage.php");
    include("../../utile/config.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lov'In Sports</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../../css/main.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
  <div class='container p-0 mt-2 rounded perso_shadow'>
    <!-- Header du site -->
    <header class='bg-dark perso_ColorBleuLogo rounded-top perso_policeTitre'>
      <div class='row align-items-center'>
        <div class='col-3 col-lg-3 p-2 ms-3 text-center'>
          <a href='../global/index.php'>
          <!-- Logo du site-->
            <img
              src='../../sources/images/logo.jpg'
              class='rounded-circle img-fluid perso_logoSize me-1'
              alt='logo du site'
            />
          </a>
            <span class="m-0 p-0 mx-auto">
                Lov<span class="text-warning">'</span>In Sports
            </span>
        </div>
        <div class='col-6 col-lg-8'>
          <?php include("../communs/menu.php") ?>
        </div>
 <!--       <div class='col-4 col-lg-2 text-right pt-1 pr-4'>
          LOV'IN <br /> Sports
        </div>-->
      </div>
    </header>
    <!-- Contenu du site -->
    <div class='border p-1 px-5'>