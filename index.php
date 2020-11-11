<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once "process.php"; ?>
    <h1>To Do List</h1>

    <form action="process.php" method="POST">
        <label for="title">Enter to do list item</label>
        <input type="text" name="title">

    </form>

    <?php
        
    ?>

</body>
</html>