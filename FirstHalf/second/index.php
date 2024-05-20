<!DOCTYPE html>
<html>
<head>
    <title>Upload and Display CSV Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Upload CSV File</h1>
        <form action="read_csv.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="csv_file" accept=".csv" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Upload CSV</button>
        </form>
    </div>
</body>
</html>