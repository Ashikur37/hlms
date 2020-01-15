<!-- Navbar -->
<?php
 include_once("layout/header.php");
 include_once("layout/sidebar.php");
 $getId=$_SESSION["user"]["id"];
 ?>

<!-- Main Sidebar Container -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">My borrow</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">book</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Book_title</th>
                    <th>Borrow Date</th>
                    <th>Return Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
      include_once('../db/run.php');
      $sql="SELECT b.book_name,bs.issue_date,bs.return_date,bs.status
      FROM book_issue as bs INNER JOIN books as b
      on bs.book_id=b.id
      ";
      $query=mysqli_query($con,$sql);
   
                if($query== true){
                while($info=mysqli_fetch_array($query)){ ?>
                <tr>
                    <td><?php echo $info['book_name']?></td>
                    <td><?php echo $info['issue_date']?></td>
                    <td><?php
                    if($info['return_date']==null){
                        echo 'Not return';
                    }else{
                        echo $info['return_date'];
                    }?> </td>
                    <td><?php
                    if($info['status']==0){
                        echo 'pending';
                    }elseif($info['status']==1){
                        echo 'successful';
                    }?></td>
                </tr>
                </tr>
                <?php }
      }
      
    
      ?>
            </tbody>
        </table>
    </section>

</div>

<?php
 include_once('layout/footer.php');
 ?>
<script>
let btn = document.getElementById('bor')
btn.addEventListener("click", function() {
    btn.innerHTML = 'Panding'
})
</script>