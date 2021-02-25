<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= base_url('/favicon.ico') ?>" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700&display=swap" rel="stylesheet"> 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet" />
    <title><?= SITE_NAME.'-'.$title; ?></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light header">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url('/') ?>">
          <img class="navbar-brand brand-logo" src="<?= base_url('assets/images/bmkg.png')?>">
          <span class="d-xs-none">Logbook Digital</span>
        </a>
        </div>
      </div>
    </nav>

    <?= $this->renderSection('konten'); ?>

    <div class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <small class="text-center">Copyright &copy; 2021 - Balai Besar MKG Wilayah II-Tangerang Selatan</small>
          </div>
        </div>
      </div>
    </div>
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
        $('.collapse').collapse();
        $('#myCollapsible').collapse({
          toggle: true
        });
      });
    </script>
  </body>
</html>