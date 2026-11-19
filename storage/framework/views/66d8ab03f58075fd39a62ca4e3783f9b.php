
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo e($errors->first()); ?>

        </div>
    <?php endif; ?>

    <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded position-absolute top-50 start-50 translate-middle"
        style="width: 25rem;">

        <div class="card-body">
            <h5 class="card-title text-center">LOGIN</h5>

            <form method="post" action="<?php echo e(route('proses_login')); ?>">
                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control"
                        id="exampleInputPassword1">
                </div>

                <button class="btn btn-primary" type="submit">Masuk</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\project-yaya-laravel13\resources\views/auth/login.blade.php ENDPATH**/ ?>