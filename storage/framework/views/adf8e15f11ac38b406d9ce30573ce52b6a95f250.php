<nav class="w3-top">
    <div class="w3-bar w3-black">
        
        <!-- Hidden Element Of Navbar For Small Screen-->
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" 
           href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
           
        <!-- Left Side Of Navbar -->
        <a href="<?php echo e(route('home')); ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large">Home</a>
        <a href="<?php echo e(route('games')); ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Games</a>
        
        <!-- Right Side Of Navbar -->
        <!-- Slider For Dark-Light Mode-->
        <div class="w3-bar-item w3-button w3-padding-large w3-right">
            <label class="switch">
                <input type="checkbox" id="mode">
                <span class="slider round"></span>
            </label>
        </div>
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
<?php /**PATH A:\XAMPP\htdocs\Projekt\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>