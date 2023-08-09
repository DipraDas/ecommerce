<?php
include('../includes/connect.php');
if (isset($_POST['brand_insert'])) {
    $brand_title = $_POST['brand_title'];

    $select_query = "SELECT * FROM brand WHERE brand_name = '$brand_title'";
    $result_search = mysqli_query($connection, $select_query);
    $number = mysqli_num_rows($result_search);
    if ($number > 0) {
        echo "<script>alert('This brand is present in database')</script>";
    } else {
        $insert_query = "INSERT into brand (brand_name) VALUES ('$brand_title')";
        $result_insert = mysqli_query($connection, $insert_query);
        if ($result_insert) {
            echo "<script>alert('Inserted Successfully')</script>";
        }
    }
}
?>

<form class="m-5 w-50 mx-auto" action="" method="post">
    <label for="categories" class="form-label">Insert Brands</label>
    <input type="text" class="form-control mb-2" id="brand_title" aria-describedby="" name="brand_title" placeholder="Enter Brand Title">
    <input type="submit" class="form-control bg-info" id="brand_title" aria-describedby="" name="brand_insert" value="Insert Brand">
</form>