<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Image Carousel</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>

<nav class="nav-bar">
    <div class="navigation-1">
      <h1 class="logo">SHOPINGO</h1>
      <ul class="nav-items">
        <li class="nav-item">
          <a href="#" class="nav-links">Home</a>
          <a href="#" class="nav-links">About</a>
          <a href="#" class="nav-links">Contact</a>
        </li>
      </ul>
    </div>
    <div class="nav-2">
      <a href="#" class="nav-links">Account</a>
    </div>
  </nav>



<!--- Slider Start--->

<?php
            $result = mysqli_query($conn, "SELECT * FROM carousel_section");
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
            ?>

  <div class="mySlides fade">
      <div class=" slider">
        <div class="content-left">
          
          <h4 class="sale-text"><?php echo $row['header_1']; ?></h4>
          <h3 class="sale-heading"><?php echo $row['header_2']; ?></h3>
          <p class="sale-details"><?php echo $row['descr']; ?></p>
          <button class="header-btn">Shop Now</button>
        </div>
        <div class="content-right">
          <img
            src="./admin/admin/<?php echo $row['image']; ?>"
            alt="header-image"
          />
        </div>
      </div>
    </div>

    <?php
            }
                ?>
  <!--- Slider End--->

    
  

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
        <div class="dot-box" style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
  </div>

  

  <section class="container content-section">
  <?php
            $result = mysqli_query($conn, "SELECT * FROM product");
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
            ?>
    <h2 class="section-header">PRODUCTS</h2>
    <div class="shop-items">
        <div class="shop-item">
            <span class="shop-item-title"><?php echo $row['name']; ?></span>
            <img class="shop-item-image" src="./admin/admin/<?php echo $row['image']; ?>">
            <div class="shop-item-details">
                <span class="shop-item-price">$<?php echo $row['price']; ?></span>
                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
            </div>
        </div>
      
       <?php
            }
            ?>
       
    </div>
</section>


<!--- Fashion Sector Start -->
<?php
            $result = mysqli_query($conn, "SELECT * FROM fashion");
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
            ?>
<section class="container content-section">
    <h2 class="section-header">Mens Fashion</h2>
    <div class="shop-items">
        <div class="shop-item">
            <span class="shop-item-title"><?php echo $row['name']; ?></span>
            <img class="shop-item-image" src="./admin/admin/<?php echo $row['image']; ?>">
            <div class="shop-item-details">
                <span class="shop-item-price">$<?php echo $row['price']; ?></span>
                <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
            </div>
        </div>
        
    </div>
</section>
<?php
            }
            ?>
<!--- Fashion Sector End -->

<section class="container content-section">
    <h2 class="section-header">CART</h2>
    <div class="cart-row">
        <span class="cart-item cart-header cart-column">ITEM</span>
        <span class="cart-price cart-header cart-column">PRICE</span>
        <span class="cart-quantity cart-header cart-column">QUANTITY</span>
    </div>
    <div class="cart-items">
    </div>
    <div class="cart-total">
        <strong class="cart-total-title">Total</strong>
        <span class="cart-total-price">$0</span>
    </div>
    <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
</section>
<footer class="main-footer">
    <div class="container main-footer-container">
        <h3 class="band-name">Shoppingo</h3>
        <ul class="nav footer-nav">
            <li>
                <a href="https://www.youtube.com" target="_blank">
                    <img src="Images/Youtube Logo.png">
                </a>
            </li>
            <li>
                <a href="https://www.spotify.com" target="_blank">
                    <img src="Images/Spotify Logo.png">
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com" target="_blank">
                    <img src="Images/Facebook Logo.png">
                </a>
            </li>
        </ul>
    </div>
</footer>



  <script  src="index.js"></script> 


</body>
</html>

