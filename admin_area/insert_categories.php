<?php
    include(../includes/connect.php);
?>

<form class="m-5 w-50 mx-auto" action="" method="post">
    <label for="categories" class="form-label">Insert Categories</label>
    <input type="text" class="form-control mb-2" id="cat_title" aria-describedby="emailHelp" name="cat_title" placeholder="Enter Category Title">
    <input type="submit" class="form-control bg-info" id="cat_title" aria-describedby="emailHelp" name="cat_insert" value="Insert Categiries">
</form>