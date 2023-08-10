<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid align-items-center">
            <a class="navbar-brand">Admin</a>
            <p>Welcome Guest</p>
        </div>
    </nav>
    <!-- second -->
    <div class="text-center">
        <h2>Manage Details</h2>
    </div>
    <!-- third  -->
    <div class="bg-secondary">
        <div class="row align-items-center">
            <div class="col-md-1 text-center">
                <h4 class="text-white">Dipra</h4>
            </div>
            <div class="col-md-11">
                <div class="d-flex">
                    <div class="me-2 bg-info text-white p-2"><a href="index.php?insert_product" class="text-white text-decoration-none">Insert Product</a></div>
                    <div class="me-2 bg-info text-white p-2"><a href="" class="text-white text-decoration-none">View Product</a></div>
                    <div class="me-2 bg-info text-white p-2"><a href="index.php?insert_category" class="text-white text-decoration-none">Insert Categories</a></div>
                    <div class="me-2 bg-info text-white p-2"><a href="" class="text-white text-decoration-none">View Categories</a></div>
                    <div class="me-2 bg-info text-white p-2"><a href="index.php?insert_brand" class="text-white text-decoration-none">Insert Brands</a></div>
                    <div class="me-2 bg-info text-white p-2"><a href="" class="text-white text-decoration-none">View Brands</a></div>
                    <div class="me-2 bg-info text-white p-2"><a href="" class="text-white text-decoration-none">All Orders</a></div>
                    <div class="me-2 bg-info text-white p-2"><a href="" class="text-white text-decoration-none">All Payments</a></div>
                    <div class="me-2 bg-info text-white p-2"><a href="" class="text-white text-decoration-none">List Users</a></div>
                    <div class="me-2 bg-info text-white p-2"><a href="" class="text-white text-decoration-none">Logout</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- forth  -->
    <div class="container">
        <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
            }
            if(isset($_GET['insert_product'])){
                include('insert_product.php');
            }
        ?>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>