<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container my-5 mx-5">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add Employee
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New Employee</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--form-->
                        <div class="container">
                            <div class="card">
                                <div class="card-body">
                                    <form action="add.php" method="post">

                                        <div class="mb-3">
                                            <label for="text" class="form-label">name</label>
                                            <input type="text" class="form-control" name="name" require>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" name="email_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="mb-3 ">
                                            <label for="text" class="form-label">Mobile number</label>
                                            <input type="tel" class="form-control" name="mobile_no" require>

                                        </div>
                                        <div class="mb-3 ">
                                            <label for="text" class="form-label">Address</label>
                                            <textarea require type="text" class="form-control" name="address"></textarea>
                                            <label class="form-check-label" for="exampleCheck1"></label>
                                        </div>
                                        <label for="text" class="form-label">State</label>
                                        <select class="form-select mb-3 form-select-sm" aria-label=".form-select-sm example" name="state" require>
                                            <option selected>Open this select menu</option>
                                           <?php
                                            $conn = mysqli_connect("localhost","root","","employee") or die("connection error");
                                            $sql1 = "SELECT * FROM state ";
                                            $res1 = mysqli_query($conn,$sql1) or die("Query error");
                                            while($row1 = mysqli_fetch_assoc($res1)){
                                           ?>

                                            <option value="<?php echo $row1['sid']?>"><?php echo $row1['state_name']?></option>
                                        
                                            <?php 
                                            }
                                            ?>
                                        </select>

                                        <label for="text" class="form-label">City</label>
                                        <select class="form-select mb-3 form-select-sm" aria-label=".form-select-sm example" name="city" require>
                                            <option selected>Open this select menu</option>
                                           <?php
                                            $conn = mysqli_connect("localhost","root","","employee") or die("connection error");
                                            $sql1 = "SELECT * FROM city ";
                                            $res1 = mysqli_query($conn,$sql1) or die("Query error");
                                            while($row1 = mysqli_fetch_assoc($res1)){
                                           ?>

                                            <option value="<?php echo $row1['cid']?>"><?php echo $row1['city_name']?></option>
                                        
                                            <?php 
                                            }
                                            ?>
                                        </select>
                                       


                                        <div class="mb-3 ">
                                            <label for="text" class="form-label">DOB</label>
                                            <input type="date" class="form-control" name="dob" require>

                                        </div>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--        table     -->

    <div class="container-flex my-5 mx-5">
        <div class="card">
            <div class="card-body">
<div class="table-responsive">
                <table class="table">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "employee") or die("connection error");

                    $sql = "SELECT * FROM tbl_employee JOIN state  ON tbl_employee.sno = state.sid JOIN city ON tbl_employee.cno = city.cid ";
                    $res = mysqli_query($conn, $sql) or die("query unsuccesfull");
                    if (mysqli_num_rows($res) > 0) {
                       

                    ?>
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">State</th>
                                    <th scope="col">City</th>
                                    <th scope="col">DOB</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 while ($row = mysqli_fetch_assoc($res)) {
                                ?>

                                <tr>
                                    <th scope="row"><?php echo $row['id']; ?></th>
                                    <td ><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email_id']; ?></td>
                                    <td><?php echo $row['mobile_no']; ?></td>
                                    <td>
                                    <div class="col">
                                    <?php echo $row['address']; ?>
                                    </div>
                                
                                </td>
                                    <td><?php echo $row['state_name']; ?></td>
                                    <td><?php echo $row['city_name']; ?></td>
                                    <td><?php echo $row['dob']; ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-success">Edit</a>
                                        <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>


                                    </td>
                                </tr>

                        <?php
                        }
                    } else {
                        echo "no data found";
                    }

                    mysqli_close($conn);
                        ?>


                </table>
                </div>

            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>