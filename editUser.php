<?php require_once 'connectDB.php' ?>


<?php include_once "_header.php"; ?>



<?php

if(isset($_GET["id"])){
    $_id = $_GET["id"];
    $resault = $connect->query("SELECT id,firstName,lastName,email from tblusers where id == _id");

            echo $resault['firstName'];
}


?>





    <div class="container">

        <h1>Edit user</h1>


        <form method="post" action="editUser.php">
            <div class="form-group row">
                <label for="firstName" class="col-sm-2 col-form-label">First name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="firstName"
                           id="firstName" placeholder="First name">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastName" class="col-sm-2 col-form-label">Last name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="lastName"
                           id="lastName" placeholder="Last name">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="submit" class="btn btn-primary">Delete</button>
        </form>
    </div>







<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>