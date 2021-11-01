<?php include 'session.php'?>
<?php include 'admin_header.php'?>
<?php
require 'config.php';

if(isset($_POST['add_category'])){
   $category_name = $_POST['category_name'];

   $query = "INSERT INTO category(category_name) VALUES('$category_name')";
   $result = mysqli_query($con, $query);

   if($result){
      $success = "Added";
   }else{
      $success = "Can not Added ";
   }
}

?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <form action = "" method = "POST" class="needs-validation" novalidate="">
                            <div class="card-header">
                            <h4>Add Category</h4>
                            </div>
                            <div class="card-body">
                            <label><?phpif(isset($success)){echo $success;}?></label>
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" class="form-control" name = "category_name" required="">
                                <div class="invalid-feedback">
                                Enter Category Name
                                </div>
                            </div>
                            </div>
                            <div class="card-footer text-left">
                            <button class="btn btn-primary" name = "add_category">Submit</button>
                        </div>
                        </form>
                </div>
              </div>
            </div>
        </div>
    </section>
        <!-- Sidebar Setting Theme -->
        <?php include 'side_setting_panel.php'?>
</div>



<?php include 'admin_footer.php'?>