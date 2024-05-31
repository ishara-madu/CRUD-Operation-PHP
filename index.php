<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include 'db.con.php';
    ?>
    <form method="post">
        <div class="btn">
            <input type="number" name="id" id="" placeholder="Enter ID">
            <input type="text" name="name" id="" placeholder="Enter Name">
        </div>

        <div class="btn">
            <input type="submit" name="insert" value="Insert">
            <input type="submit" name="update" value="Update">
            <input type="submit" name="delete" value="Delete">
        </div>


        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `user`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </form>
    <?php
    if (isset($_POST['insert'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $sql = "INSERT INTO `user` (id, name) VALUES ('$id', '$name')";
        mysqli_query($conn, $sql);
        header("Refresh:0");
    }
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $sql = "UPDATE user SET name = '$name' WHERE id = '$id'";
        mysqli_query($conn, $sql);
        header("Refresh:0");
    }
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM user WHERE id = '$id'";
        mysqli_query($conn, $sql);
        header("Refresh:0");
    }

    ?>
</body>

</html>