<?php
include("./includes/connect.php");

function getProducts()
{
    global $connection;
    $select_query = "SELECT * FROM `products` ORDER BY rand() LIMIT 0,9";
    $result_query = mysqli_query($connection, $select_query);
    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_title = $row['product_name'];
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
            <a href='#' class='btn btn-secondary'>View More</a>
            </div>
        </div>
        </div>
    ";
    }
}
