<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>
<body>
    <div id="app">
        <nav class="w3-top">
    <div class="w3-bar w3-black">
        
        <!-- Hidden Element Of Navbar For Small Screen-->
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" 
           href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
           
        <!-- Left Side Of Navbar -->
        <a href="<?php echo e(route('home')); ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large">Home</a>
        <a href="<?php echo e(route('games')); ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Games</a>
        
        <!-- Right Side Of Navbar -->
        <?php if(auth()->guard()->guest()): ?>
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
            <?php if(Route::has('register')): ?>
                <a class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
            <?php endif; ?>
            <?php else: ?>
            <div class="w3-hide-small w3-right">
                <label class="w3-padding-large w3-btn" style="cursor: default">
                    <?php echo e(Auth::user()->name); ?> 
                </label>
                <a class="w3-button w3-padding-large" href="<?php echo e(route('logout')); ?>"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?> </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>"
                method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
                </form>
            </div>
        <?php endif; ?>
    </div>
</nav>

<!-- Element Of Drop-down Navbar For Small Screen-->
<nav id='DropDownNav' class='w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top' style='margin-top:46px'>
    <a href="<?php echo e(route('home')); ?>" class='w3-bar-item w3-button w3-padding-large' onclick='myFunction()'>HOME</a>
    <a href="<?php echo e(route('games')); ?>" class='w3-bar-item w3-button w3-padding-large' onclick='myFunction()'>Games</a>
    <?php if(auth()->guard()->guest()): ?>
            <a class="w3-bar-item w3-button w3-padding-large" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
            <?php if(Route::has('register')): ?>
                <a class="w3-bar-item w3-button w3-padding-large" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
            <?php endif; ?>
            <?php else: ?>
                <a class="w3-bar-item w3-button w3-padding-large" href="<?php echo e(route('logout')); ?>"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?> </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>"
                method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
                </form>
    <?php endif; ?>       
</nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Damian\Desktop\Projekt\resources\views/layouts/app.blade.php ENDPATH**/ ?>