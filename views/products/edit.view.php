<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <div class="container mt-5">
       <div class="row">
           <div class="col-12">
            <h1>Edit Product</h1>
           </div>
           <div class="col-12 my-3">
            <a href="<?php echo url('/products/list'); ?>" class="btn btn-outline-secondary">Back</a>
           </div>
           <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <form method="post">
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" value="<?php echo $product['name']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Price</label>
                                <input type="text" name="price" value="<?php echo $product['price']; ?>" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
           </div>
       </div>
   </div>
</body>
</html>



