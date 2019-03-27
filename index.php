<?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");

 ?>
 <!DOCTYPE html>
<html>
<head>

  <title>MY BLOG</title>
</head>

   <body  style="background: pink">
   <link rel="stylesheet" type="text/css" href="style1.css">
</head>
  <header>
    
  <h1>Assalamualaikum Selamat Datang :)</h1>
  
  </header>
  
  <h4> DaftarMenu</h4>
  <nav>
    <ul>
      <li><a href="register.php">add post</a></li>
      <li><a href="log.php">baca post</a></li>
    </ul>
  </nav>
  
  
  <?php if(isset($_GET['status'])): ?>
  <p>
    <?php
      if($_GET['status'] == 'sukses'){
        echo "Pendaftaran  berhasil!";
      } else {
        echo "Pendaftaran gagal!";
      }
    ?>
  </p>
  <?php endif; ?>
  
    <!DOCTYPE html>
<html>
<head>

   <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<form id="form-container" class="form-container">
   
<!--Element-elemen tag <body> tulis disini-->
<header> <!--Section HEADER-->

<center>
       <div class="menu">
     
			<ul>
			
        <label for="input">Wikipedia :</label>
        <input type="text" id="input" value="">
        <button id="submit-btn">submit</button>
					
			</ul>
			
		</div>
		</center>
  </header>

</header>
 <li class="wikipedia-container">
        <h3 id="wikipedia-header">alamat link wikipedia dari hasil pencarian</h3>
        <ul id="wikipedia-links">Type in an address above and find relevant Wikipedia articles here!</ul>
    </li>
    
    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/docs.min.js"></script>


      </body>
</html>

    