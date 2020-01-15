<!-- Navbar -->
<?php
 include_once("layout/header.php");
 include_once("layout/sidebar.php");
 ?>

<!-- Main Sidebar Container -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">BookList</h1>
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
                    <th style='width:75px'>Cover_photo</th>
                    <th>Authors</th>
                    <th>Category</th>
                    <th>Edition</th>
                    <th>Shelf</th>
                    <th>Quantity</th>
                    <th>Page</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
      include_once('../db/run.php');
      $sql="select b.id,b.pending,b.book_name,b.cover_photo,b.writters,c.category_name,b.edition,b.shelf,b.quantity,b.pages from books as b inner join category as c on b.book_type=c.id";
      $query=mysqli_query($con,$sql);

      if($query== true){
        while($info=mysqli_fetch_array($query)){ ?>
                <tr>
                    <td><?php echo $info['book_name']?></td>
                    <td><img style='width:150px;height:100px'
                            src="../Librarian/avater/<?php echo $info['cover_photo']?>" alt="">
                    </td>
                    <td><?php echo $info['writters']?></td>
                    <td><?php echo $info['category_name']?></td>
                    <td><?php echo $info['edition']?></td>
                    <td><?php echo $info['shelf']?></td>
                    <td><?php echo $info['quantity']?></td>
                    <td><?php echo $info['pages']?></td>
                    <td><?php
                    if($info['pending']==1){
                        echo 'Pending';
                    }else{ ?>
                        <a class='btn btn-info' href="borrow.php?bookid=<?php echo $info['id']?>"><span>Borrow
                        </span></a>
                    <?php }?> </td>
                    
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