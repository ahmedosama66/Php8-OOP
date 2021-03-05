
<?php
    
if($_SERVER['REQUEST_METHOD'] == "POST"){
  // require_once "Table.php";
  require_once "Form.php";
  $form = new Form($_POST ,$_FILES);
  $error = $form -> formValidate();
  echo $form -> allOk() ?? '' ;

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-8">
                <form method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input value="<?= $_POST['username'] ?? '' ?>" name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-danger"><?php echo $error['username'] ?? '' ?></small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Emai;</label>
                    <input value="<?= $_POST['email'] ?? '' ?>" name="email" type="text" class="form-control" id="exampleInputPassword1">
                    <small id="emailHelp" class="form-text text-danger"><?php echo $error['email'] ?? '' ?></small>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">file input</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    <small id="emailHelp" class="form-text text-danger"><?php echo $error['email'] ?? '' ?></small>
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>