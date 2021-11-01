<?php include 'session.php'?>
<?php include 'admin_header.php'?>
<?php
    require 'config.php';
    // $query = "SELECT * FROM category ORDER BY category_id DESC";
    // $result = mysqli_query($con, $query);
?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Brands</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <!-- <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($result as $val) { ?>
                          <tr>
                            <td><?php echo $val['category_id'];?></td>
                            <td><?php echo $val['category_name'];?></td>
                            <td class="text-center">
                            <a href="edit_category.php?id=<?php echo $val['category_id'];?>"><button type="button" class="btn btn-primary">Edit</button></a>
                            <a href="delete_category.php?id=<?php echo $val['category_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table> -->
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
        </div>
    </section>
        <!-- Sidebar Setting Theme -->
        <?php include 'side_setting_panel.php'?>
</div>



<?php include 'admin_footer.php'?>