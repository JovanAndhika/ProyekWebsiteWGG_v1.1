<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

  <style>
    body{
        display: flex;
        min-height: 100vh;
        background: url("https://rare-gallery.com/uploads/posts/925342-city-night-house-Japan-anime.jpg") no-repeat;
        background-size: cover;
        background-position: center;
    }
  </style>

  <header>
    <h2 class="logo">WGG</h2>
    <div class="buatNgeblur">
      <nav class="navbar">
        <a href="pageLogin.php">Login</a>
        <a href="pagePresensi.php">Presensi</a>
        <a href="#">Info</a>
        <a href="#">Contact</a>
      </nav>
    </div>
  </header>

  <style>
    *{
      margin: 0;
      font-family: 'Poppins', sans-serif;
      padding: 0;
      box-sizing: border-box;
    }

    header{
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      padding: 16px 100px;
      background: transparent;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 99;
    }

    .logo{
      font-size: 2em;
      color:#fff;
      user-select:none;
    }

    .navbar a{
      position: relative;
      color:azure;
      font-size: 1.1em;
      justify-content: space-between;
      text-decoration: none;
      font-weight: 500;
      margin-left: 40px;
    }

    .buatNgeblur{
      backdrop-filter: blur(22px);

    }

    .navbar a::after{
      content: "";
      position: absolute;
      width: 100%;
      height: 3px;
      left:0px;
      bottom: -6px;
      background: azure;
      border-radius: 5px;
      transform-origin: right;
      transform: scaleX(0);
      transition: transform.5s;
    }

    .navbar a:hover::after{
      transform-origin: left;
      transform: scaleX(1);
    }
  </style>


  <img id="gbrW" src="https://gamepress.gg/arknights/sites/arknights/files/2020-05/char_113_cqbw_1.png" style="height: 590px ; width: 590px;">
  <style>
    #gbrW{
        position: fixed;
        top:140px;
        left:180px;
    }
  </style>


  
  <a class="Link_kePage_Selanjutnya" href="./pageLogin.php" target=_self>
    <button id="mainLoginID">Login</button> 
  </a>
  <style>
    #mainLoginID{
      position: fixed;
      top: 160px;
      left: 1010px;
      background: transparent;
      border-color: rgb(46, 46, 46);
      backdrop-filter: blur(3px);
      color: azure;
      padding: auto;
      height: 125px;
      width: 270px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 28px;
      border-radius: 12px;
    }
  </style>


  <button id="infoID">Info</button>
  <style>
    #infoID{
      position: fixed;
      top: 310px;
      left: 930px;
      background: transparent;
      border-color: rgb(46, 46, 46);
      backdrop-filter: blur(3px);
      color: azure;
      padding: auto;
      width: 200px;
      height: 100px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 30px;
      border-radius: 12px;
    }
  </style>

  <a class="Link_kePage_Selanjutnya" href="./pagePresensi.php" target=_self>
    <button id="PresensiID">Presensi</button>
  </a>
  <style>
    #PresensiID{
      position: fixed;
      top:310px;
      left:1160px;
      background: transparent;
      border-color: rgb(46, 46, 46);
      backdrop-filter: blur(3px);
      color: azure;
      padding: auto;
      width: 200px;
      height: 100px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 30px;
      border-radius: 12px;
    }
  </style>


  <button id="contactID">Contact</button>
  <style>
    #contactID{
      position: fixed;
      top: 438px;
      left: 1114px;
      background: transparent;
      border-color: rgb(46, 46, 46);
      backdrop-filter: blur(3px);
      color: azure;
      width: 250px;
      height: 90px;
      padding: auto;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 30px;
      border-radius: 12px;
    }
  </style>
  

</body>
</html>