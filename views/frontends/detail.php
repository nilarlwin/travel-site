<div class="container-fluid mt-5" id="content">
  
    <div class="col-md-6 offset-md-3 content-card">
      <div class="card">
        <img class="card-image-top" src="assets/posts/<?php echo $post['image'];?>" alt="Card Image Top" style="height: 300px;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $post['title'];?></h5>
          <p class="card-text">
           <?php echo $post['description'];?>
          </p>
        </div>
      </div> 
    </div>
  
</div>