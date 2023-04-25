<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games Revievs</title>
    
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">
    <style>
        body {
          background-color: #D7CECE;
          color: black;
          font-family: "Lato", sans-serif;
        }
    </style>
</head>
<body>
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
    <div class="shop" id="games" style="grid-template-columns:none">
        <div id=<?php echo e($game->id); ?> class="item">
            <img width="220" src="/img/<?php echo e($game->img); ?>" alt="<?php echo e($game->name); ?>">
            <div class="details">
                <h3><?php echo e($game->name); ?></h3>
            </div>
        </div>
    </div>
    <section >
        <div class="container my-5 py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <div class="card" style="background: none">
                        <div class="card-body">
                            <div class="d-flex flex-start align-items-center">
                                <div>
                                    <h6 class="fw-bold text-primary mb-1">Lily Coleman</h6>
                                    <p class="text-muted small mb-0">
                                      Shared publicly - Jan 2020
                                    </p>
                                </div>
                            </div>

                            <p class="mt-3 mb-4 pb-2">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
                            </p>

                            <div class="small d-flex justify-content-start">
                                <!--<a href="#!" class="d-flex align-items-center me-3">
                                  <i class="far fa-thumbs-up me-2"></i>
                                  <p class="mb-0">Like</p>
                                </a>-->
                            </div>
                        </div>
                        <div class="card-footer py-3 border-0" ">
                            <div class="d-flex flex-start w-100">
                                <div class="form-outline w-100">
                                    <textarea class="form-control" id="textAreaExample" rows="4"
                                      style="color: #040404; background-color: #bdbcc1;"></textarea>
                                </div>
                            </div>
                            <div class="float-end mt-2 pt-1">
                                <button type="button" class="btn btn-primary btn-sm">Post comment</button>
                                <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="/js/slideOutMenu.js"></script>
<script src="/js/darkmode.js"></script>
</html><?php /**PATH A:\XAMPP\htdocs\Projekt\resources\views/comments.blade.php ENDPATH**/ ?>