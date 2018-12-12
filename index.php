<?php require_once 'connectDB.php'?>


<?php include_once "_header.php"; ?>


<main role="main">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $resault = $connect->query("SELECT id,"  )
        ?>
        </tbody>
    </table>


</main>


<?php include_once "_footer.php" ; ?>