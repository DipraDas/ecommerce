<?php
include("./includes/connect.php");

function getProducts()
{
    global $connection;
    if (!isset($_GET['category'])) {
        if (!isset($_GET['brand'])) {
            $select_query = "SELECT * FROM `products` ORDER BY rand() LIMIT 0,3";
            $result_query = mysqli_query($connection, $select_query);
            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_price = $row['product_price'];
                $product_image = $row['product_image1'];
                echo "
                <div class='col-md-4'>
                    <div class='card'>
                        <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_description</p>
                            <p class='card-text'>$product_price</p>
                            <a href='#' class='btn btn-info'>Add to cart</a>
                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                        </div>
                    </div>
                </div>
            ";
            }
        }
    }
};
function getAllProducts()
{
    global $connection;
    if (!isset($_GET['category'])) {
        if (!isset($_GET['brand'])) {
            $select_query = "SELECT * FROM `products`";
            $result_query = mysqli_query($connection, $select_query);
            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_price = $row['product_price'];
                $product_image = $row['product_image1'];
                echo "
                <div class='col-md-4'>
                    <div class='card'>
                        <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_description</p>
                            <p class='card-text'>$product_price</p>
                            <a href='#' class='btn btn-info'>Add to cart</a>
                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                        </div>
                    </div>
                </div>
            ";
            }
        }
    }
};
function getUniqueCategories()
{
    global $connection;
    if (isset($_GET['category'])) {
        $id = $_GET['category'];
        $select_query = "SELECT * FROM `products` WHERE category_id=$id";
        $result_query = mysqli_query($connection, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows == 0) {
            echo "No product found in this category.";
        }
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_price = $row['product_price'];
            $product_image = $row['product_image1'];
            echo "
                <div class='col-md-4'>
                    <div class='card'>
                        <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_description</p>
                            <p class='card-text'>$product_price</p>
                            <a href='#' class='btn btn-info'>Add to cart</a>
                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                        </div>
                    </div>
                </div>
            ";
        }
    }
};
function getUniqueBrands()
{
    global $connection;
    if (isset($_GET['brand'])) {
        $id = $_GET['brand'];
        $select_query = "SELECT * FROM `products` WHERE brand_id=$id";
        $result_query = mysqli_query($connection, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows == 0) {
            echo "No product found in this brand.";
        }
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_price = $row['product_price'];
            $product_image = $row['product_image1'];
            echo "
                <div class='col-md-4'>
                    <div class='card'>
                        <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_description</p>
                            <p class='card-text'>$product_price</p>
                            <a href='#' class='btn btn-info'>Add to cart</a>
                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                        </div>
                    </div>
                </div>
            ";
        }
    }
};

function searchProduct()
{
    global $connection;
    if (isset($_GET['search_data_product'])) {
        $search_data_value = $_GET['search_data'];
        $select_query = "SELECT * FROM `products` WHERE product_title LIKE '%$search_data_value%'";
        $result_query = mysqli_query($connection, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows == 0) {
            echo "No product found.";
        }
    }
    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_price = $row['product_price'];
        $product_image = $row['product_image1'];
        echo "
                <div class='col-md-4'>
                    <div class='card'>
                        <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_description</p>
                            <p class='card-text'>$product_price</p>
                            <a href='#' class='btn btn-info'>Add to cart</a>
                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                        </div>
                    </div>
                </div>
            ";
    }
}

function showBrand()
{
    global $connection;
    $selectBrand = "SELECT * FROM `brand`";
    $result_brand = mysqli_query($connection, $selectBrand);
    while ($row_data = mysqli_fetch_assoc($result_brand)) {
        $brand_id = $row_data['brand_id'];
        $brand_name = $row_data['brand_name'];
        echo " <li class='nav-item bg-secondary'>
        <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_name</a>
    </li>";
    }
};

function showCategories()
{
    global $connection;
    $selectCategory = "SELECT * FROM `category`";
    $result_category = mysqli_query($connection, $selectCategory);
    while ($row_data = mysqli_fetch_assoc($result_category)) {
        $category_id = $row_data['category_id'];
        $category_name = $row_data['category_name'];
        echo " <li class='nav-item bg-secondary'>
            <a href='index.php?category=$category_id' class='nav-link text-light'>$category_name</a>
        </li>";
    }
}
