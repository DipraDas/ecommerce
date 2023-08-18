<?php
include('./includes/connect.php');
include('./functions/common_function.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- First Child  -->
    <div class="container-fluid">
        <!-- Navbar  -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/index.php">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="display_all.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_items()?></sup></a>
                        </li>
                        <li class="nav-item nav-link">Total Price: <?php totalCartPrice()?></li>
                    </ul>
                    <form class="d-flex" method="get" action="search_product.php">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <input type="submit" value="Search" name="search_data_product">
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <?php addToCart() ?>
    <!-- Second Child  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Welcome Bruh!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Third Child  -->
    <div class="bg-light">
        <h3 class="text-center">Hidden Store</h3>
        <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium soluta quo, ratione architecto aspernatur repellat.</p>
    </div>
    <!-- Forth Child  -->
    <div class="row container mx-auto">
        <div class="col-md-10">
            <h4>Product</h4>
            <div class="row">
                <?php
                viewProductDetails();
                getUniqueCategories();
                getUniqueBrands();
                ?>
            </div>
        </div>
        <div class="col-md-2 bg-secondary p-0">
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="" class="nav-link text-light">
                        <h4>Delivery Brands</h4>
                    </a>
                </li>
                <?php
                showBrand();
                ?>
                <li class="nav-item bg-info">
                    <a href="" class="nav-link text-light">
                        <h4>Categories</h4>
                    </a>
                </li>
                <?php
                showCategories();
                ?>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>