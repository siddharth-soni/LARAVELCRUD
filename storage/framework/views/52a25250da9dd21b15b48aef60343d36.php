<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      border-radius: 16px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    }
    .form-label {
      font-weight: 500;
    }
    .btn-primary {
      padding: 10px 30px;
      font-weight: 500;
      border-radius: 8px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card p-4">
          <h3 class="text-center mb-4 text-primary">Edit User Information</h3>

          <form action="<?php echo e(route('updateuser', $data->id)); ?>" method="post">
            <?php echo csrf_field(); ?>

            <!-- Name -->
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" name="name" value="<?php echo e($data->name); ?>" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" value="<?php echo e($data->email); ?>" required>
            </div>

            <!-- Password -->
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" value="<?php echo e($data->password); ?>" required>
            </div>

            <!-- City -->
            <div class="mb-3">
              <label for="city" class="form-label">City</label>
              <input type="text" class="form-control" id="city" name="city" value="<?php echo e($data->city); ?>" required>
            </div>

            <!-- Address -->
            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" name="address" value="<?php echo e($data->address); ?>" required>
            </div>

            <!-- Phone -->
            <div class="mb-4">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="phone" name="phone" value="<?php echo e($data->phone); ?>">
            </div>

            <!-- Submit -->
            <div class="text-center">
              <button type="submit" class="btn btn-primary w-50">Update User</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\wamp64\www\PROJECTS\LARAVEL_11\crud11\resources\views/edituserview.blade.php ENDPATH**/ ?>