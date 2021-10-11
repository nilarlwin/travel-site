<div class="col-md-6 offset-md-3">
   <h2 class="mt-5 user-head"><i class="fas fa-users"></i> Post Lists</h2>
               <?php
                 if(isset($_SESSION['expire'])){
                  $diff=time()-$_SESSION['expire'];
                  if ($diff>2) {
                     unset($_SESSION['status']);
                     unset($_SESSION['expire']);
                  }
                }
                ?>

             <?php
               if(isset($_SESSION['status'])){?>

               <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <?php echo $_SESSION['status'];?>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
                 </div>
                <?php }?>
   <table class="table mt-4">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

   <?php 
    $no=1;
    foreach($posts as $post){?>
    <tr>
      <th scope="row"><?php echo $no;?></th>
      <td><?php echo $post['title'];?></td>
      <td>
      	<a href="admin.php?page=postedit&id=<?php echo $post['id'];?>" class="text-success"><i class="fas fa-user-edit"></i></a>
      	<a href="../../controller/PostController.php?action=delete&id=<?php echo $post['id'];?>" class="text-danger"><i class="fas fa-user-minus"></i></a>
      </td>
    </tr>
    <?php $no++; }?>

  </tbody>
</table>

</div>