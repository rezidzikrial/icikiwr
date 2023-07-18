<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>tentang kami</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>tentang kami</h3>
   <p> <a href="home.php">home</a> / tentang kami </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Kenapa harus pilih kami?</h3>
         <p>Kepuasan pelanggan adalah prioritas utama kami. Kami memahami bahwa membeli produk elektronik merupakan investasi penting, oleh karena itu, kami berkomitmen untuk menyediakan pengalaman berbelanja yang menyenangkan, aman, dan transparan. Layanan pelanggan kami yang ramah dan responsif akan siap membantu Anda dengan segala pertanyaan atau bantuan yang Anda butuhkan.</p>
         <p>Kami percaya bahwa teknologi dapat memberikan kemudahan dan meningkatkan kualitas hidup kita. Dengan [Nama Toko Elektronik], kami berharap dapat menjadi mitra Anda dalam menjelajahi dunia elektronik yang canggih dan menghadirkan inovasi terbaru ke dalam kehidupan Anda.</p>
         <a href="contact.php" class="btn">pesan/masukan</a>
      </div>

   </div>

</section>



<section class="authors">

   <h1 class="title">pilihan admin</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="https://www.instagram.com/rchmrove/" class="fab fa-instagram"></a>
            <a href="https://wa.me/6281218824083" class="fab fa-whatsapp"></a>
         
         </div>
         <h3>Putra</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="https://www.instagram.com//" class="fab fa-instagram"></a>
            <a href="https://wa.me/6282117894109" class="fab fa-whatsapp"></a>
         
         </div>
         <h3>Nia</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="https://www.instagram.com/sousagewd/" class="fab fa-instagram" target="_blank"></a>
            <a href="https://wa.me/6281218824083" class="fab fa-whatsapp" target="_blank"></a>
         
         </div>
         <h3>Zaldi</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="https://www.instagram.com//" class="fab fa-instagram"></a>
            <a href="https://wa.me/6281548283102" class="fab fa-whatsapp"></a>
         
         </div>
         <h3>Feranti</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="https://www.instagram.com/rezidzikri/" class="fab fa-instagram"></a>
            <a href="https://wa.me/6281211801713" class="fab fa-whatsapp"></a>
         
         </div>
         <h3>Rezi</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>