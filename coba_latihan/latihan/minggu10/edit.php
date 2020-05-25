<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Crud OOP</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">PHP OOP CRUD</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php

                include 'model.php';
                $model = new Model();
               $id = $_REQUEST['id'];
               $row = $model->edit($id);

                     if (isset($_POST['update'])){
              if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['hp']) && isset($_POST['address'])) {
                if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['hp']) && !empty($_POST['address'])) {

                  $data['id'] = $id;  
                  $data['name'] = $_POST['name'];
                  $data['hp'] = $_POST['hp'];
                  $data['email'] = $_POST['email'];
                  $data['address'] = $_POST['address'];

                  $update = $model->update($data);

                  if($update){
                    echo "<script>alert('records update successfully');</script>";
                    echo "<script>window.location.href = 'records.php;</script>";
                }else{
                  echo "<script>alert('records update failed');</script>";
                  echo "<script>window.location.href = 'records.php;</script>";
                 }


                }else{
                  echo "<script>alert('empty');</script>";
                  header("Location: edit.php?id=$id");
                }
              }
            }


          ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name"  value="<?php echo $row['name'];?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" value="<?php echo $row['email'];?>"class="form-control">
            </div>
            <div class="form-group">
              <label for="">No. Hp</label>
              <input type="text" name="mobile" value="<?php echo $row['mobile'];?>"class="form-control">
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <textarea name="address" id="" cols="" rows="3" class="form-control"><?php echo $row['address'];?></textarea>
            </div>
            <div class="form-group">
              <button type="update" name="update" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>