<?php include "includes/admin_header.php";
?>
    <div id="wrapper">

<?php
        include "includes/admin_navigation.php";
        ?>      
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Author</small>
                        </h1>
                           
                           <div class="col-xs-6">
                           
                            <?php 
                                   insert_categories();
                               ?>                           
                           <form action="" method="post">
                               <div class="form-group">
                                   <label for="cat-title">Add Category</label>
                               <input type="text" class="form-control" name="cat_title">
                               </div>
                                    <div class="form-group">
                               <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
                               </div>
                           
                           </form>               
                    </div>

         
                     
                    <div class="col-xs-6">
                    <table class="table table-bordered table-hover">    
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
<?php //FIND ALL QUERIES HERE
   findAllCategories();
?>
<?php //DELETE CATEGORY
        delete_categories();
?>
                    </tbody>
                    </table>
                    </div>
<?php 
  if(isset($_GET['edit']))
  {
   $cat_id=$_GET['edit'];
      include "includes/update.php";
  }
?>                   
    
                
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
            
        <!-- /#page-wrapper -->
<?php include "includes/admin_footer.php";
?>
  