 <?php
$isPost = $_SERVER["REQUEST_METHOD"] === "POST";
if ($isPost) {
    $name = $_POST['student_name'];
    $mark = $_POST['mark'];
    
    $result = ($mark >= 40) ? 'Pass Mark' : 'Failed';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <h2>Mark Calculator</h2>
    <div>
        <form method="get">
            <label>Student Name <input type="text" name='student_name'><label>
            <label>Mark <input type="number" name='mark'></label>
            <input type='submit'>
        </form>
    </div>
    <?php if ($isPost): ?>
        <p>You got <?=$result?> in your Test</p>
    <?php endif; ?>
</body>
</html>