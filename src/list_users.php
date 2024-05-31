<?php require('../config/database.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Pets | list users</title>
</head>
<body>
    <center><h1>LIST USERS</h1></center>
    <table class="table table-dark table-striped">
        <tr>
            <th>fullname</th>
            <th>Email</th>
            <th>Status</th>
            <th>Photo</th>
            <th>....</th>
        </tr>
        <?php
            $query_users = "
                SELECT 
                    id,
                    fullname,
                    email,
                    CASE 
                        WHEN status = true THEN  'Active' ELSE 'Inactive'
                    END as Status
                FROM 
                    users
            ";
            $result = pg_query($conn,$query_users);
            while($row = pg_fetch_assoc($result)){
                echo "<tr>";
                    echo"<td>". $row['fullname'] ."</td>";
                    echo"<td>". $row['email'] ."</td>";
                    echo"<td>". $row['status'] ."</td>";
                    echo"<td><img src='photos/User_dafault.png' width='30'></td>";
                    echo"<td>
                    </a><a href='#'><img src='iconos/update.png' width='30'>
                    <a href='delete_user.php?id=" . $row['id'] . "' onclick='return confirm(\"¿Estás seguro de eliminar este usuario?\")'>
                    <img src='iconos/delete.png' width='20'>
                    </td>";
                echo"</tr>";
            }
        ?>
    </table>
</body>
</html>