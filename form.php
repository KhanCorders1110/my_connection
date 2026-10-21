<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form!</title>
</head>
<link rel="stylesheet" href="../shooping_project/public/css/bootstrap.min.css">

<body>
    <div style="width: 300px; margin: 50px;">
        <form action="sende_data.php" method="post">
            <label>Name</label>
            <input type="text" name="name" class="form-control">

            <label>Fname</label>
            <input type="text" name="fname" class="form-control">

            <label>Age</label>
            <input type="number" name="age" class="form-control">

            <label>Adders</label>
            <input type="text" name="adders" class="form-control">

            <label>Marks</label>
            <input type="number" name="marks" class="form-control">

            <button type="submit" class="btn btn success" style="margin: 20px;">Submit</button>
        </form>
    </div>
</body>

</html>