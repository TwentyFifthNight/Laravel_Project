<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beer Online</title>
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="w3-top">
            <div class="w3-bar w3-black w3-card">
                    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                    <a href="index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
                    <a href="shop.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SKLEP</a>
                    <a href="dane.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">DANE</a>
                    <a href="cart.html" class="w3-hover-red w3-hide-small w3-right" style="margin: 0 40px 0 0;">
                            <div class="cart">
                                    <img src="images/basket.svg" alt="basket">
                                    <div id="cartAmount" class="cartAmount">0</div>
                            </div>
                    </a>
                    <div class="w3-hide-small w3-right" style="margin: 10px 60px;">
                            <label class="switch">
                                    <input type="checkbox" id="mode">
                                    <span class="slider round"></span>
                            </label>
                    </div>
            </div>
    </div>

    <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
    <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
      <a href="shop.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">SKLEP</a>
      <a href="dane.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">DANE</a>
      <a href="cart.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">KOSZYK</a>
    </div>
    <?php if(auth()->guard()->check()): ?>
        <div id="label" class="text-center"></div>
        <div class="shopping-cart" id="shopping-cart"></div>
    <?php endif; ?>
    <?php if(auth()->guard()->guest()): ?>
        <div class="text-center">
            <h2>Zaloguj się aby przeglądać koszyk</h2>
            <a href="shop.html">
              <button class="HomeBtn">Powrót do sklepu</button>
            </a>
        </div>
    <?php endif; ?> 
</body>
<script src="/js/w3.js"></script>
<script src="/js/Data.js"></script>
<script src="/js/cart.js"></script>

</html><?php /**PATH A:\XAMPP\htdocs\Projekt\resources\views/cart.blade.php ENDPATH**/ ?>