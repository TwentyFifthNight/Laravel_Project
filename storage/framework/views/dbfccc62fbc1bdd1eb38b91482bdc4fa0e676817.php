<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games Revievs</title>
    
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/darkmode.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">-->
    
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
    
    <div class="itemsSet" id="games" style="grid-template-columns:none">
        <div id=<?php echo e($game->id); ?> class="item" style="border: none">
            <img width="220" src="/img/<?php echo e($game->img); ?>" alt="<?php echo e($game->name); ?>">
            <div class="details w3-center">
                <h3><?php echo e($game->name); ?></h3>
            </div>
        </div>
    </div>
    
    <section >
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <div class="card" style="background: #2d3138; border: 1px solid rgba(0,0,0,10);">
                        <?php $__empty_1 = true; $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="card-body my-2 mx-2 dark-mode" style="border-radius: 15px;">
                                <div>
                                    <?php if(auth()->guard()->check()): ?>
                                        <?php if($review->user_id == \Auth::user()->id): ?>
                                        <a href="<?php echo e(route('delete',$review->id)); ?>">
                                        <i class="fa fa-times w3-right w3-button"></i>
                                        </a>
                                        <?php endif; ?>
                                        <a href="<?php echo e(route('like',$review->id)); ?>">
                                            <i class="fa fa-heart w3-right w3-button"></i>
                                        </a>
                                    <?php endif; ?>
                                    <p class="w3-right px-1 py-md-1">
                                        Likes&nbsp; <?php echo e($review->likes->count()); ?>

                                    </p>
                                    <h6 class="fw-bold text-primary mb-1"><?php echo e($review->user->name); ?></h6>
                                    
                                    <p class="text-muted small mb-0">
                                      Shared publicly - <?php echo e($review->updated_at->format('M o')); ?>

                                    </p>
                                </div>

                            <p class="mt-3 mb-4 pb-2">
                                <?php echo e($review->message); ?>

                            </p>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="card-body">
                            <p class="mt-3 mb-4 pb-2 w3-center">
                                Brak komentarzy
                            </p>
                        </div>
                        <?php endif; ?>
                        <?php if(auth()->guard()->check()): ?>
                        <div class="card-footer py-3">
                            <form action="<?php echo e(route('save',$game->id)); ?>" id="revForm" method="post"
                                  enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group<?php echo e($errors->has('message')?'has-error':''); ?>" id="rolesBox">
                                    <input type="hidden" id="game_id" name="game_id" value="<?php echo e($game->id); ?>">
                                    <textarea class="form-control" id="textArea" name="textArea" rows ="4"
                                              style="color: #040404; background-color: #bdbcc1;" required></textarea>
                                </div>
                                <div class="float-end mt-2 pt-1">
                                    <button type="submit" class="btn btn-primary btn-sm">Post comment</button>
                                    <button type="button" id="cancel" class="btn btn-outline-primary btn-sm">Cancel</button>
                                </div>
                            </form>
                        </div>
                        <?php endif; ?>
                        <?php if(auth()->guard()->guest()): ?>
                        <div class="card-footer py-3">
                            <p class="mt-3 mb-4 pb-2 w3-center">
                                Zaloguj się, aby dodawać komentarze
                            </p>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
   
<script src="/js/DropDownNavigation.js"></script>
<script src="/js/darkmode.js"></script>
<script src="/js/clearText.js"></script>
</body>
</html><?php /**PATH C:\Users\Damian\Desktop\Projekt\resources\views/reviews.blade.php ENDPATH**/ ?>