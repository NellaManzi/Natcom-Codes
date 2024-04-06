<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>
<body>

    

    <div class="container">
        <p>
            Total Movies: 
            <?php
                $conn = mysqli_connect("localhost", "root", "", "moviesConn");
                $sql = "SELECT COUNT(*) as total_movies FROM movies";
                $res = mysqli_query($conn, $sql);
                $num = mysqli_fetch_assoc($res);
                echo $num['total_movies'];
            ?>
        </p>

        <h2>Upload new Movie</h2>
        <div class="upload w-50">
            <form action="includes/upload.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nameInput" class="form-label">Movie Name</label>
                    <input type="text" name="name" class="form-control" id="nameInput">
                </div>
                <div class="mb-3">
                    <label for="descInput" class="form-label">Description</label>
                    <input type="text" name="desc" class="form-control" id="descInput">
                </div>
                <div class="mb-3">
                    <label for="fileInput" class="form-label">Image</label>
                    <input type="file" name="img" class="form-control" id="fileInput">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>