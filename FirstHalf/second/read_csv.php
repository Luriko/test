<!DOCTYPE html>
<html>
<head>
    <title>CSV Data Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>CSV Data Table</h1>
        <table class="table">
            <tbody>
                <?php
                $uploaded_file = $_FILES['csv_file']['tmp_name'];
                $csv = array_map('str_getcsv', file($uploaded_file));
                array_shift($csv);
                
                foreach ($csv as $row) {
                    echo '<tr>';
                    foreach ($row as $cell) {
                        echo '<td>' . htmlspecialchars($cell) . '</td>';
                    }
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>