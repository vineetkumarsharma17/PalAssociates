<!DOCTYPE html>
<html>

<head>
    <title>Excel Uploading PHP</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h1>CSV Upload1</h1>
        <form method="POST" action="excelUpload.php" enctype="multipart/form-data">
        <div class="form-group">
                <label>Enter title</label>
                <input type="text" name="title" class="form-control">
            </div>

        <form method="POST" action="excelUpload.php" enctype="multipart/form-data">
            <div class="form-group">
                <label>Upload CSV File</label>
                <input type="file" name="file" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" name="Submit" value="submit" class="btn btn-success">Upload</button>
            </div>
           
        </form>
    </div>


</body>

</html>