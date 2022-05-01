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
           <div class="col-6 my-3">
            <a href="<?php echo url("/products/create"); ?>" class="btn btn-primary">Create</a>
           </div>
           <div class="col-6 my-3">
                <form class="row">
                    <div class="col-auto">
                        <input type="search" name="search" value="<?php echo $_GET['search'] ?? ''; ?>" class="form-control" placeholder="Search..">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Search</button>
                    </div>
                </form>
           </div>
           <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Created Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($products as $product): ?>
                        <tr>
                            <td><?php echo $product['id']; ?></td>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo $product['price']; ?></td>
                            <td><?php echo $product['created_date']; ?></td>
                            <td>
                                <a href="<?php echo url("/products/detail?id=" . $product['id']); ?>" class="btn btn-info">View</a>
                                <a href="<?php echo url("/products/edit?id=" . $product['id']); ?>" class="btn btn-success">Edit</a>
                                <a onclick="return confirm('Are you sure to delete?')" href="<?php echo url("/products/delete?id=" . $product['id']); ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
           </div>
       </div>
   </div>
</body>
</html>



