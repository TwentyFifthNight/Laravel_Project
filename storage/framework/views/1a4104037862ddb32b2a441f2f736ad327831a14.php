<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>>
<head>
    <meta charset = "UTF-8">
    <title>Games Revievs</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/darkmode.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">
</head>
<body>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="w3-center pb-3 mb-5">
    <img src="css/gamePad.svg" width="300" height="300" alt="gaamePad">
</div>
<div class="w3-container w3-center py-5"  id="band">
    <h2 class="w3-wide">GameRev</h2>
    <p class="w3-opacity"><i>We love games</i></p>
    <p class="w3-justify">Stworzyliśmy tą stronę z myślą o ludziach którzy szukają 
        opini na temat gier w które chcieli by zagrać lub je kupić. Jeśli chcesz wyrazić 
        swoją opinię na temat jednej z dostępnych gier możesz sprawdzić, czy znajduje się
        na naszej stronie w zakładce Games. 
    </p>
</div>

<script src="js/DropDownNavigation.js"></script>
<script src="js/darkmode.js"></script>
</body>
</html><?php /**PATH C:\Users\Damian\Desktop\Projekt\resources\views/home.blade.php ENDPATH**/ ?>