<!-- 
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Mai Boutique</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
   -->

  <?php $__env->startSection('container'); ?>
  <h1 class="text-center">Find Your Best Clothes Here!</h1>

  
  <div class="row">
    <?php $__currentLoopData = $homes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $home): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-3 mb-3 order-1">
      <div class="card">
      <img src="<?php echo e(asset($home->image)); ?>" class="card-img-top" alt="clothes">
          <div class="card-body">
              <h5 class="card-title"><strong><?php echo e($home->name); ?></strong></h5>
              <p class="card-text w-full"><?php echo e($home->price); ?></p>
              <a href="<?php echo e(url('detail_product', $home->id)); ?>" class="btn btn-primary"> More Detail</a>
          </div>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>


  

  

  <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
      <li class="page-item active" aria-current="page">
        <span class="page-link">1</span>
      </li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
    </ul>
  </nav>

  <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Binus\Chapter 5\Webprog\FinalProjectLab-main\resources\views/home.blade.php ENDPATH**/ ?>