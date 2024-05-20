<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

</head>

<body>
    <form style="width: 80%; margin:0 auto;" action="" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Имя пользователя</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="feedback" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile" name="picture">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>


<?php




if (isset($_POST) && !empty($_POST)) {
    if ($_POST['picture']) {
        $file_name = basename($_POST['picture']);
        $file_name_no_extension = preg_replace("/\.[^.]+$/", "", $file_name);

        $target_file = __DIR__ . '\\' . basename($_POST['picture']);
        file_put_contents($file_name_no_extension, $target_file);
    }
    echo '<script>alert("успех")</script>';
    header("Location:first.php");
}
?>
