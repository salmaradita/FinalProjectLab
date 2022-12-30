<?php $__env->startSection('container'); ?>
<style>
  body{
    background-image: url('img/welcomepict.jpg');
  }
  .hero{
        text-align: center;
        color: white;
        backdrop-filter: blur(10px);
        margin-top: 12em;
    }
</style>
<body>
    <div class="container">
        <div class="hero">
            <br>
            <h1 class="title">Welcome to Maiboutique</h1>
        <h4>Online Boutique that Provides You with Various Clothes to Suit Your Various Activities</h4>
        <a class="btn btn-primary btn-lg" href="/login" role="button">Sing Up Now</a>
        <br><br>
        </div>      
    </div>     
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Binus\Chapter 5\Webprog\FinalProjectLab-main\resources\views/landing.blade.php ENDPATH**/ ?>