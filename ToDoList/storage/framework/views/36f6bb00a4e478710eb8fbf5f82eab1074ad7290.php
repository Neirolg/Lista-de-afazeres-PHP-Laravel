<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="<?php echo e(asset('/css/app.css')); ?>" rel="stylesheet" />
    <title><?php echo $__env->yieldContent('title', 'Turma PHP Entra21-22'); ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-4">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('home.index')); ?>"><?php echo $__env->yieldContent('title', 'teste de titulo'); ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="<?php echo e(route('home.about')); ?>">About</a>
                </div>
            </div>
        </div>
    </nav>

  <div class="container my-4">
    <?php echo $__env->yieldContent('content'); ?>
  </div>

  <!-- footer -->
  <div class="copyright py-4 text-center text-white">
    <div class="container">
      <small>
        Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
          href="http://proway.com.br">
          Adriano Machado
        </a> 
      </small>
    </div>
  </div>
  <!-- footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
</body>
</html>
<?php /**PATH /Users/adrianarocha/Documents/GitHub/ProjetoPHPgrupo3/ToDoList/resources/views/layouts/app.blade.php ENDPATH**/ ?>