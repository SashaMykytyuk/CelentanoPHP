<?php

$errors = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'connectDB.php';

    $lastname;
    if (isset($_POST['lastName']) and !empty($_POST['lastName'])) {
        $lastname = $_POST['lastName'];
    } else
        $errors['lastName'] = "Last name is empty";

    $firstname;
    if (isset($_POST['firstName']) and !empty($_POST['firstName'])) {
        $firstname = $_POST['firstName'];
    } else
        $errors['firstName'] = "First name is empty";

    $email;
    if (isset($_POST['email']) and !empty($_POST['email'])) {
        $email = $_POST['email'];
    } else
        $errors['email'] = "Email is empty";


    echo "$firstname";
    if (count($errors) == 0) {
        $query = "INSERT INTO `tblusers`(`email`, `firstName`, `lastName`, `password`) 
VALUES ('{$email}','{$firstname}', '{$lastname}', '123456')";
        $result = $connect->query($query);
        $linkIndex = "/index.php";
        header("Location: {$linkIndex}");
        exit;
    }

}


?>




<?php include_once "_header.php"; ?>



<?php

?>
<div class="container">

    <h1>Додати нового користувача</h1>


    <form method="post" action="createNewUser.php">
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
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>


<?php include_once "_footer.php"; ?>
