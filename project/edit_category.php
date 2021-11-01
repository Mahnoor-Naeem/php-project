<?php include 'session.php'?>
<?php include 'admin_header.php'?>
<?php require 'config.php'?>

<?php
$id = $_GET['id'];

    $query = "SELECT * FROM category WHERE category_id = '$id'";
    $result = mysqli_query($con, $query);

    foreach($result as $val) { 
        $category_id = $val['category_id'];
        $category_name = $val['category_name'];
    }
?>
<?php
if(isset($_POST['updt_category'])){
    $cat_id = $_POST['category_id'];
    $cat_name = $_POST['category_name'];

   $query = "UPDATE category SET category_name = '$cat_name' WHERE category_id = '$cat_id'";
   $result = mysqli_query($con, $query);

   if($result){
    //   $success = "Updated";
      header('location: all_category.php');
   }else{
      $success = "Can not Update";
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
                    <strong><?php if(isset($success)){ echo $success; } ?></strong>
                        <form action = "" method = "POST" class="needs-validation" novalidate="">
                            <div class="card-header">
                            <h4>Update Category</h4>
                            </div>
                            <div class="card-body">
                            
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="hidden" class="form-control" name = "category_id" value = "<?php echo $category_id ?>" required="">

                                <input type="text" class="form-control" name = "category_name" value = "<?php echo $category_name ?>" required="">
                                <div class="invalid-feedback">
                                Please Update Category Name
                                </div>
                            </div>
                            </div>
                            <div class="card-footer text-left">
                            <button class="btn btn-primary" name = "updt_category">Update</button>
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