             <?php
             session_start();
             include "header.php";
             if (isset($_SESSION['auth'])) {
                header("location: admin.php");
             }
              ?>

            <div class="col-md-6 offset-md-3 mt-5 form-container">
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
               <h2 class="mt-5"><i class="fas fa-sign-in-alt"></i> Please Login</h2>
               <form class="mt-5" action="../../controller/loginController.php" method="post"> 
               <div class="form-group">
                  <div class="row">
                <label for="email" class="col-md-4">Email:</label>
                <input type="email" name="email" class="form-control col-md-8" id="email" placeholder="Enter Your Email">
                <?php
                if(isset($_SESSION['email'])){?>
                  <p class="text-danger offset-4">
                     <?php echo $_SESSION['email'];?>
                  </p>
                 <?php
                }
                ?>
                </div>
               </div>
               <div class="form-group">
                  <div class="row">
                <label for="password" class="col-md-4">Password:</label>
                <input type="password" name="password" class="form-control col-md-8" id="password" placeholder="**********">
                <?php
                if(isset($_SESSION['password'])){?>
                  <p class="text-danger offset-4">
                     <?php echo $_SESSION['password'];?>
                  </p>
                 <?php
                }
                ?>
                </div>
               </div>
               <input type="hidden" name="action" value="add">
               <div class="form-btn text-center">
                <button type="submit" class="btn btn-outline-success"><i class="fas fa-plus-circle"></i> Login
                </button>
                <button type="reset" class="btn btn-outline-danger"><i class="fas fa-eraser"></i> Reset
                </button>
               </div>
            </form>
           </div>
           <?php
           include "footer.php";
           ?>