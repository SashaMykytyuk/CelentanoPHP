<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['firstName'])&&!empty($_POST['firstName'])){
        $firstname = $_POST['firstName'];
    }
    echo "$firstname";
}
?>




<?php include_once "_header.php"; ?>



<?php

?>
<div class="container">

    <h1>Додати нового користувача</h1>


    <form method="post" action="createNewUser.php">
        <div class="form-group row">
            <label for="firstname" class="col-sm-2 col-form-label">First name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="firstName"
                       id="firstname" placeholder="First name">
            </div>
        </div>
<!--        <div class="form-group row">-->
<!--            <label for="lastname" class="col-sm-2 col-form-label">Last name</label>-->
<!--            <div class="col-sm-10">-->
<!--                <input type="text" class="form-control" name="lastName"-->
<!--                       id="lastname" placeholder="Last name">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="form-group row">-->
<!--            <label for="email" class="col-sm-2 col-form-label">Email</label>-->
<!--            <div class="col-sm-10">-->
<!--                <input type="text" class="form-control" name="email" id="email" placeholder="Email">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="form-group row">-->
<!--            <label for="password" class="col-sm-2 col-form-label">Password</label>-->
<!--            <div class="col-sm-10">-->
<!--                <input type="password" class="form-control" name="password" id="password" placeholder="Password">-->
<!--            </div>-->
<!--        </div>-->
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>


<?php include_once "_footer.php"; ?>
