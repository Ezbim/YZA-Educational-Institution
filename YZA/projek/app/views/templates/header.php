<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Halaman <?= $data['judul']; ?></title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
  
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white" >
    <div class="container d-flex justify-content-between">

      <div class="left_nav">
        <img src="<?= BASEURL; ?>/img/contohLogo.png" alt="Logo" width="50" class="rounded-circle" id="logo">
        <a class="navbar-brand ml-2 text-white" href="<?= BASEURL; ?>">YZA Educational Institution</a>
      </div>
      
      <div class="right_nav d-flex justify-content-around" >
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link text-white" href="<?= BASEURL; ?>"  data-target=".navbar-collapse.show">Home</a>
            <a class="nav-item nav-link text-white" href="<?= BASEURL; ?>/pendaftaran"  data-target=".navbar-collapse.show">Pendaftaran</a>
            <a class="nav-item nav-link text-white" href="<?= BASEURL; ?>/about"  data-target=".navbar-collapse.show">About</a>
          </div>
        </div>
        

      </div>



    </div>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  </nav> 