<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>jasa editing foto/video</h3>
      <p>Bersiaplah untuk hal baru yang luar biasa dengan jasa editing dari jasa editing online kami..</p>
      <a href="about.php" class="white-btn">temukan lebih banyak</a>
   </div>

</section>

<section class="products">

   <h1 class="title">jasa kami</h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="tambah keranjang" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">more</a>
   </div>

</section>

<section class="about">

   <div class="flex">

   <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>      

      <div class="content">
         <h3>tentang kami</h3>
         <p>Selamat datang di di toko kelompok icikiwir, Kami adalah destinasi online yang didedikasikan untuk menyediakan solusi elektronik terbaik bagi Anda. Di toko kami, kami mengerti bahwa dunia teknologi terus berkembang, dan kami berkomitmen untuk memastikan Anda tetap terhubung dengan perangkat terbaru dan terbaik yang memenuhi kebutuhan dan gaya hidup modern Anda.
            Kami menyediakan berbagai produk elektronik berkualitas tinggi, mulai dari smartphone, laptop, kamera, peralatan rumah tangga pintar, aksesori, dan banyak lagi. Setiap produk yang kami tawarkan dipilih dengan hati-hati dari merek-merek terkemuka yang terkenal akan inovasi, kualitas, dan keandalannya.
            Tim kami terdiri dari individu yang bersemangat tentang teknologi dan selalu berusaha memberikan pilihan terbaik kepada pelanggan kami. Kami terus memantau tren terbaru dalam industri ini dan selalu berupaya menjaga portofolio produk kami tetap segar dan terkini.</p>
         <a href="about.php" class="btn">lihat lebih</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>punya pesan/masukan?</h3>
      <p>kirimkan kepada kami</p>
      <a href="contact.php" class="white-btn">pesan/masukan</a>
   </div>

</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>