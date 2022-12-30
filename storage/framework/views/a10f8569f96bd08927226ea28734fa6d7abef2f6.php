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

<div class="container">
    <div class="card justify-content-center" style="max-width: 800px; margin: 75px">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="<?php echo e(asset($cart->image)); ?>" class="img-fluid rounded-start" alt="clothes">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><strong><?php echo e($cart->name); ?></strong></h5>
                <p class="card-text w-full"><?php echo e($cart->price); ?></p>
              <hr>
              <h5 class="card-title">Product Detail</h5>
              <p class="card-text">Unisex</p>
              <hr style="border-width:10px">
              <div class="d-grid gap-2 d-md-block">
                <p class="card-text">Qty: 1</p>
                <div class="row mb-3">
                    <button class="btn btn-white" type="button" data-toggle="collapse">1</button>
                    <button class="btn btn-success mb-2 btn-block" type="button" data-toggle="collapse">Update Cart</button>
                </div>
                    <a href="<?php echo e(url('cart', $cart->id)); ?>" class="btn btn-danger"> Back</a>
                
                
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Binus\Chapter 5\Webprog\FinalProjectLab-main\resources\views/detail_cart.blade.php ENDPATH**/ ?>