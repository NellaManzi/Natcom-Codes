<?php include 'header.php' ?>



<div class="container">
    <h2>Latest Movies</h2>
    <div class="movies d-flex flex-wrap gap-5">

    <?php
        $conn = mysqli_connect("localhost", "root", "", "moviesConn");
        $sql = "SELECT * FROM movies";
        $res = mysqli_query($conn, $sql);
        while($movie = mysqli_fetch_assoc($res)){
            echo '

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./images/' . $movie['img'] . '" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">' . $movie['name'] . '</h5>
                    <p class="card-text">' . $movie['description'] . '</p>
                    <a href="movie.php?id=' . $movie['id'] . '" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            
            ';
        }

    ?>
        
       

    </div>



</div>



<?php include 'footer.php' ?>