<?php
include('../includes/connect.php');
if (isset($_POST['cat_insert'])) {
    $category_title = $_POST['cat_title'];

    $select_query = "SELECT * FROM category WHERE category_name = '$category_title'";
    $result_search = mysqli_query($connection, $select_query);
    $number = mysqli_num_rows($result_search);
    if ($number > 0) {
        echo "<script>alert('This category is present in database')</script>";
    } else {
        $insert_query = "INSERT into category (category_name) VALUES ('$category_title')";
        $result_insert = mysqli_query($connection, $insert_query);
        if ($result_insert) {
            echo "<script>alert('Inserted Successfully')</script>";
        }
    }
}
?>

<form class="m-5 w-50 mx-auto" action="" method="post">
    <label for="categories" class="form-label">Insert Categories</label>
    <input type="text" class="form-control mb-2" id="cat_title" aria-describedby="emailHelp" name="cat_title" placeholder="Enter Category Title">
    <input type="submit" class="form-control bg-info" id="cat_title" aria-describedby="emailHelp" name="cat_insert" value="Insert Categiries">
</form>