<div class="container-fluid mt-5" id="content">
  <div class="row">

    <?php foreach ($posts as $post) {
    ?>
    <div class="col-md-3 content-card">
      <div class="card" style="width: 18rem;">
        <img class="card-image-top" src="assets/posts/<?php echo $post['image'];?>" alt="Card Image Top">
        <div class="card-body">
          <h5 class="card-title"><?php echo $post['title'];?></h5>
          <p class="card-text">
           <?php echo substr($post['description'], 0,200);?>
          </p>
          <div class="bt-group">
           <a href="index.php?page=detail&id=<?php echo $post['id'];?>" class="card-btn">View More</a>
          </div>
        </div>
      </div> 
    </div>
    <?php 
    }
    ?>
  
  </div>
</div>