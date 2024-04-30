<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styling.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="heading">
    <h1>UGANDA REVENUE AUTHORITY</h1>
    <img src="pic.JPG" alt="" srcset="" width="100" height="100">
    </div>    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="ElectronicDatafetch.php">ELETRONICS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Automotive_Datafetch.php">AUTO-MOTIVES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="HousingDatafetch.php">HOUSING</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="funitureDatafetch.php">FUNITURE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="OtherAssetsDatafetch.php">OTHERS</a>
        </li>       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- the end of navigation bar -->

<div class="chart">
    <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
    <div class="progress-bar bg-success" style="width: 25%">25%</div>
    </div>
    <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
    <div class="progress-bar bg-info text-dark" style="width: 50%">50%</div>
    </div>
    <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
    <div class="progress-bar bg-warning text-dark" style="width: 75%">75%</div>
    </div>
    <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
    <div class="progress-bar bg-danger" style="width: 100%">100%</div>
    </div>
</div>
</body>
</html>