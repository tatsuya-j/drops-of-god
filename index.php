<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">

<!-- Fontawesomeのリンクを下記に１行追加した -->
<script src="https://kit.fontawesome.com/b5ace21384.js" crossorigin="anonymous"></script>
<style>
  .card-img-top{
    max-height:200px;
  }
</style>
<title>Index</title>
</head>
<body>

    <!--navbar-->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">

    <!-- icon "fab fa-envira"がアイコンのキーになってる -->
    <a href="#" class="navbar-brand">
      <i class="fab fa-envira">Drops of God</i>
    </a>
      
    <!-- Button -->
    
    <button class="navbar-toggler" data-toggle="collapse" data-target="#main_nav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links / Menu -->

    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav ">
        <li class="nav-item"><a href="#" class="nav-link">Contuct Us</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Wine Products</a></li>
      </ul>
    </div>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="#" class="nav-link">Sin up</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Favorite</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Cart</a></li>
      </ul>

  </nav>

  <!-- Slider -->
  <div id="example-2" class="carousel slide " data-ride="carousel" style="width:1200px">
    <div class="carousel-inner" style="top:10px; left:150px; height:1000px; width:1200px;">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/slider1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/slider2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/slider3.jpg" alt="Third slide">
      </div>
      <a class="carousel-control-prev" href="#example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  

    <div class="row">
      <div class="col-lg-3 ">
        <div class="card" style="height:450px">
          <img src="images/Cadet Merlot.png" class="card-img-top img-fluid d-flex mx-auto" style="max-width:50px;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Cadet Merlot</h5>
            <p class="card-text">名門バロン・フィリップ・ド・ロスチャイルド社が手がける、南仏ラングドックのデイリーワイン...</p>
            <p>￥1,320</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card" style="height:450px">
          <img src="images/CH.Mont Perat Rouge.png" class="card-img-top img-fluid d-flex mx-auto" style="max-width:50px;" alt="...">
          <div class="card-body">
            <h5 class="card-title">CH.Mont Perat Rouge</h5>
            <p class="card-text">ハイコスパ・ボルドーの代名詞。完熟した黒系果実のアロマに魅了されるスムースでクリーミーな飲み心地...</p>
            <p>￥3,080</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card" style="height:450px">  
          <img src="images/Mouton Cadet Branc.png" class="card-img-top img-fluid d-flex mx-auto" style="max-width:50px;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Mouton Cadet Branc</h5>
            <p class="card-text">格付け1級シャトーが手掛ける、世界で一番愛されるカジュアルなボルドーワイン。柑橘系果実の...</p>
            <p>￥3,080</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card" style="height:450px">
          <img src="images/Montes.png" class="card-img-top img-fluid d-flex mx-auto" style="max-width:50px;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Montes</h5>
            <p class="card-text">世界を魅了するチリ最高峰の造り手、モンテスが生み出すハイコスパデイリーワイン。毎日でも楽しみたい、バランスの良い赤ワイン...</p>
            <p>￥1,650</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>   

    <div class="footer mt-5 bg-dark">
      <div class="footer-content text-center py-5 text-white">
          <h2 class="">Drops of God</h2>
        <div class="social">
            <a href="#"><i class="fab fa-twitter-square text-white"></i></a>
            <a href="#"><i class="fab fa-instagram-square text-white"></i></a>
            <a href="#"><i class="fab fa-facebook-square text-white"></i></a>
        </div>
        <a href="#"class="text-white">Privacy</a>
      </div>
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>