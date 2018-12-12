<?php require_once 'connectDB.php' ?>


<?php include_once "_header.php"; ?>


    <main role="main">
        <div class="container">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">FName</th>
                    <th scope="col">LName</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $resault = $connect->query("SELECT id,firstName,lastName,email from tblusers");
                //$res=$connect->query("SELECT id,email,firstname,lastname FROM tblusers");
                $num = 1;
                while ($row = $resault->fetch_assoc()) {
                    echo "<tr>"
                        . "<td>{$num}</td>"
                        . "<td>" . $row['firstName'] . "</td>"
                        . "<td>" . $row['lastName'] . "</td>"
                        . "<td>" . $row['email'] . "</td>"
                        . "</tr>";
                    $num++;
                }
                ?>
                </tbody>
            </table>
            <a href="createNewUser.php" class="btn btn-success">Add user</a>
        </div>

    </main>


<?php include_once "_footer.php"; ?>