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
                            <p class='card-text'>Price - $product_price</p>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
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
                            <p class='card-text'>Price - $product_price</p>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
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
                            <p class='card-text'>Price - $product_price</p>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
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
                            <p class='card-text'>Price - $product_price</p>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
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
                            <p class='card-text'>Price - $product_price</p>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
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


function viewProductDetails()
{
    global $connection;
    if (isset($_GET['product_id'])) {
        $product_id = $_GET['product_id'];
        if (!isset($_GET['category'])) {
            if (!isset($_GET['brand'])) {
                $select_products = " SELECT * FROM `products` WHERE product_id=$product_id";
                $result_products = mysqli_query($connection, $select_products);
                while ($row = mysqli_fetch_assoc($result_products)) {
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_description = $row['product_description'];
                    $product_price = $row['product_price'];
                    $product_image1 = $row['product_image1'];
                    $product_image2 = $row['product_image2'];
                    $product_image3 = $row['product_image3'];
                    $category_id = $row['category_id'];
                    $brand_id = $row['barnd_id'];
                    echo "<div class='col-md-4 mb-4'>
                            <div class='card'>
                                <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                                <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text'>$product_description</p>
                                <p class='card-text'>Price: $product_price/-</p>
                                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                                <a href='index.php' class='btn btn-secondary'>Go to Home</a>
                                </div>
                            </div>
                            </div>
                            <div class='col-md-8'>
                                <h2 class='text-center text-info pb-5'>Related Images</h2>
                                    <div class='row'>
                                        <div class='col-md-6'><img class='card-img-top' src='./admin_area/product_images/$product_image2' alt=''></div>
                                        <div class='col-md-6'><img class='card-img-top' src='./admin_area/product_images/$product_image3' alt=''></div>
                                    </div>
                                
                            </div>";
                }
            }
        }
    }
}

function getIPAddress()
{
    //whether ip is from the share internet  
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from the remote address  
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function addToCart()
{
    global $connection;
    if (isset($_GET['add_to_cart'])) {
        $get_product_id = $_GET['add_to_cart'];
        $get_ip_address = getIPAddress();

        // checking if the product already exist on cart 
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_address' and product_id=$get_product_id";
        $result_products = mysqli_query($connection, $select_query);
        $number = mysqli_num_rows($result_products);
        if ($number > 0) {
            echo "<script>alert('This product is already added to the cart')</script>";
            echo "<script>window.open('index.php','_Self')</script>";
        } else {
            $insert_query = "INSERT into `cart_details` (product_id,ip_address,quantity) values ($get_product_id,'$get_ip_address',1)";
            $result_products = mysqli_query($connection, $insert_query);
            echo "<script>alert('Product is added to the cart')</script>";
            echo "<script>window.open('index.php','_Self')</script>";
        }
    }
}

function cart_items()
{
    global $connection;
    if (isset($_GET['add_to_cart'])) {
        $get_ip_address = getIPAddress();

        // checking if the product already exist on cart 
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_address'";
        $result_products = mysqli_query($connection, $select_query);
        $count_cart_items = mysqli_num_rows($result_products);
    } else {
        $get_ip_address = getIPAddress();

        // checking if the product already exist on cart 
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_address'";
        $result_products = mysqli_query($connection, $select_query);
        $count_cart_items = mysqli_num_rows($result_products);
    }
    echo $count_cart_items;
}

function totalCartPrice()
{
    global $connection;
    $total_price = 0;
    $get_ip_address = getIPAddress();
    $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_address'";
    $result_cart = mysqli_query($connection, $cart_query);
    while ($row_data = mysqli_fetch_array($result_cart)) {
        $product_id = $row_data['product_id'];
        $product_query = "SELECT * FROM `products` WHERE product_id=$product_id";
        $result_products = mysqli_query($connection, $product_query);
        while ($row_product_price = mysqli_fetch_array($result_products)) {
            $product_price = array($row_product_price['product_price']);
            $product_price_sum = array_sum($product_price);
        }
        $total_price += $product_price_sum;
    }
    echo "$total_price";
}
