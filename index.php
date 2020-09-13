<!DOCTYPE html>
<html>
<head>
    <title>Upload de Ficheiros</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>UPLOAD DE FICHEIROS</h1>

	<form method="POST" action="mover.php" enctype="multipart/form-data">
        <div class="form-group">
            <label>Insira o arquivo a ser movido:</label>
            <input type="file" name="arquivo" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" name="Submit" class="btn btn-success">Upload</button>
        </div>
    </form>
</div>
</body>
</html>