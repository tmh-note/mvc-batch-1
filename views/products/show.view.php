<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <div class="container mt-5">
       <div class="row">
           <div class="col-12">
            <h1>Products List</h1>
           </div>
           <div class="col-12 my-3">
            <a href="<?php echo url('/products/list'); ?>" class="btn btn-primary">Back</a>
           </div>
           <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <p>Name: <?php echo $product['name']; ?></p>
                        <p>Price: <?php echo $product['price']; ?></p>
                        <p>Created Date: <?php echo $product['created_date']; ?></p>
                    </div>
                </div>
           </div>
       </div>
   </div>
</body>
</html>



