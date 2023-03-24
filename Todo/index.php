<?php
    $isPost = $_SERVER["REQUEST_METHOD"] === "POST";
    if ($isPost) {
        $name = $_POST['todo-name'];
        $description = $_POST['todo-description'];

        $file = scandir(__DIR__ . '/database/');
        unset($file[0], $file[1]);

        $arData = ['id' => $id, 'name' => $name, 'description' => $description];
        file_put_contents(__DIR__ . '/database/todo-data.json', json_encode($arData));
    }

    $jsonData = file_get_contents(__DIR__ . '/database/todo-data.json');
    $todoData = json_decode($jsonData, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Name</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="heading p10">
        <header>Website Name</header>
    </div>
    <div class="main p10">
        <h1>Todo List</h1>
        <div>
            <form id="todo-form" class="p10" method="POST">
                <label>Todo Name: <input type="text" name="todo-name"></label>
                <label>Description: <input type="text" name="todo-description"></label>
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="todo-list-table">
            <table border="1">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td><?=$todoData['name']?></td>
                    <td><?=$todoData['description']?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="footer p10">
        <span>&copy; copyright Website Name</span>
    </div>
</body>
</html>