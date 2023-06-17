<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Employ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-flex my-5 mx-5">
                            <div class="card">
                                <div class="card-body">
<?php
 $conn = mysqli_connect("localhost", "root", "", "employee") or die("connection error");
$id=$_GET['id'];
 $sql = "SELECT * FROM tbl_employee WHERE id='$id'";
 $res = mysqli_query($conn, $sql) or die("query unsuccesfull");
 if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
?>

                                    <form action="update.php" method="post"> 

                                        <div class="mb-3">
                                            <label for="text" class="form-label">name</label>
                                            <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>" require>
                                            <input type="text" class="form-control" name="name"  value="<?php echo $row['name'];?>" require>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" name="email_id" class="form-control"  value="<?php echo $row['email_id'];?>" id="exampleInputEmail1" aria-describedby="emailHelp" require>
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="mb-3 ">
                                            <label for="text" class="form-label">Mobile number</label>
                                            <input type="tel" class="form-control"  value="<?php echo $row['mobile_no'];?>" name="mobile_no" require>

                                        </div>
                                        <div class="mb-3 ">
                                            <label for="text" class="form-label">Address</label>
                                            <input value="<?php echo $row['address'];?>" require type="text"  class="form-control" name="address">
                                            <label class="form-check-label" for="exampleCheck1"></label>
                                        </div>

                                        <label for="text" class="form-label">State</label>
                                        
<?php 

 $sql1 = "SELECT * FROM state";
 $res1 = mysqli_query($conn, $sql1) or die("query unsuccesfull");
 if (mysqli_num_rows($res1) > 0) {
echo '<select class="form-select mb-3 form-select-sm" aria-label=".form-select-sm example" name="state">
        <option value="" selected disabled>Select State</option>';

    while($row1 = mysqli_fetch_assoc($res1)){
        if($row['sno'] == $row1['sid']){
            $select = "selected";
        }else{
            $select="";
        }

echo "<option {$select} value='{$row1['sid']}'>{$row1['state_name']}</option>";

    }
echo "</select>";
}
?>
                   
                   <label for="text" class="form-label">City</label>
<?php 

 $sql2 = "SELECT * FROM city";
 $res2 = mysqli_query($conn, $sql2) or die("query unsuccesfull");
 if (mysqli_num_rows($res2) > 0) {
echo '<select class="form-select mb-3 form-select-sm" aria-label=".form-select-sm example" name="city">
        <option value="" selected disabled>Select State</option>';

    while($row2 = mysqli_fetch_assoc($res2)){
        if($row['cno'] == $row2['cid']){
            $select = "selected";
        }else{
            $select="";
        }

echo "<option {$select} value='{$row2['cid']}'>{$row2['city_name']}</option>";

    }
echo "</select>";
}
?>
                            

                                       


                                        <div class="mb-3 ">
                                            <label for="text" class="form-label">DOB</label>
                                            <input  value="<?php echo $row['dob'];?>" type="date" class="form-control" name="dob" require>

                                        </div>


                                        <div class="modal-footer">
                                            <
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>

                                    </form>
                                    <?php
                                    }
                                }
                                    ?>
                                </div>
                            </div>
                        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>