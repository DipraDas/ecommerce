<?php
include('./includes/connect.php');
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
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </div>
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
        $select_query = "SELECT * FROM `products` ORDER BY rand() LIMIT 0,9";
        $result_query = mysqli_query($connection, $select_query);
        while ($row = mysqli_fetch_assoc($result_query)) {
          $product_title = $row['product_name'];
          $product_description = $row['product_description'];
          $product_keywords = $row['product_keywords'];
          $product_category = $row['product_category'];
          $product_brand = $row['product_brand'];
          $product_price = $row['product_price'];
          $product_image = $row['product_image1'];
          echo "
          <div class='col-md-4'>
          <div class='card'>
            <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>$product_title</h5>
              <p class='card-text'>$product_description</p>
              <a href='#' class='btn btn-info'>Add to cart</a>
              <a href='#' class='btn btn-secondary'>View More</a>
            </div>
          </div>
        </div>
          ";
        }
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
        $selectBrand = "SELECT * FROM `brand`";
        $result_brand = mysqli_query($connection, $selectBrand);
        while ($row_data = mysqli_fetch_assoc($result_brand)) {
          $brand_id = $row_data['brand_id'];
          $brand_name = $row_data['brand_name'];
          echo " <li class='nav-item bg-secondary'>
            <a href='index.php?brand=$brand_id``~' class='nav-link text-light'>$brand_name</a>
          </li>";
        }
        ?>
        <li class="nav-item bg-info">
          <a href="" class="nav-link text-light">
            <h4>Categories</h4>
          </a>
        </li>
        <?php
        $selectCategory = "SELECT * FROM `category`";
        $result_category = mysqli_query($connection, $selectCategory);
        while ($row_data = mysqli_fetch_assoc($result_category)) {
          $category_id = $row_data['category_id'];
          $category_name = $row_data['category_name'];
          echo " <li class='nav-item bg-secondary'>
            <a href='index.php?category=$category_id' class='nav-link text-light'>$category_name</a>
          </li>";
        }
        ?>
      </ul>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>