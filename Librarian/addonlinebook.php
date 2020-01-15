 <!-- Navbar -->
 <?php
 include_once("layout/header.php");
 include_once("layout/sidebar.php");
 include_once("../db/run.php");
 ?>
<?php
if(isset($_REQUEST['action'])){
  if($_REQUEST['action']=='success'){ ?>
  <script>
    alert("Data Inserted Sucessfully")
  </script>
  <?php }
}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Online Book</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">book</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
       <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">book</h3>
              </div>
              <!-- form start -->
              <form role="form" method="POST" action="addonliebook_core.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                  <label for="exampleInputdetname">Book Title</label>
                    <input type="text" id="exampleInputdetname" name="name" class="form-control" placeholder="Enter Book Title ">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputdetnamee">Author Name</label>
                    <input name="authname" id="exampleInputdetnamee" type="text" class="form-control"  placeholder="Enter Author Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile5">Book file</label>
                    <input type="file" name="bpp" class="form-control-file" id="exampleInputFile5">
                  </div>
                 
                   <div class="form-group">
                    <label for="exampleInputFile">Cover Photo</label>
                    <input type="file" name="ppp" class="form-control-file" id="exampleInputFile">
                  </div>
                  <div class="form-group">
                  <button type="submit" class="btn btn-primary" name="btn_sub">Submit</button>
                  </div>
              </form>
            </div>
    </section>
  </div>
 <?php
 include_once('layout/footer.php');
 ?>

 