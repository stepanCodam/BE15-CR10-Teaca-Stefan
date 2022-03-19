<?php 
require_once 'actions/db_connect.php';


    if ($_GET['id']) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM bookshop WHERE id = $id";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) == 1) {
            $data = mysqli_fetch_assoc($result);
            $name = $data['name'];
            $price = $data['price'];
            $image = $data['image'];
            $type = $data['type'];
            $short_description = $data['short_description'];
            $author_first_name = $data['author_first_name'];
            $author_last_name = $data['author_last_name'];
            $publisher_name = $data['publisher_name'];
            $publisher_address = $data['publisher_address'];
            $publish_date = $data['publish_date'];
           
        } else {
            header("location: error.php");
        }
        mysqli_close($connect);
    } else {
        header("location: error.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Restaurant</title>
        <?php require_once 'components/boot.php'?>
        <style type="text/css">
            .manageProduct {           
                margin: auto;
            }
            .img-thumbnail {
                width: 70px !important;
                height: 70px !important;
            }
            td {          
                text-align: center;
                vertical-align: middle;
            }
            tr {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="manageProduct w-75 mt-3">    
            
            <div class="card" style="width: 18rem;">
  <img src='images/<?php echo $image ?>' class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title border border-secondary">The price : <?php echo $price ?></h5>
    <p class="card-text border border-secondary"> About : <?php echo $short_description ?> </p>
    <p class="card-text border border-secondary"> Type : <?php echo $type ?> </p>
    <p class="card-text border border-secondary">Author first name : <?php echo $author_first_name ?> </p>
    <p class="card-text border border-secondary "> Author last name :<?php echo $author_last_name ?> </p>
    <p class="card-text border border-secondary">Publisher's name : <?php echo $publisher_name ?> </p>
    <p class="card-text border border-secondary"> Publisher's address<?php echo $publisher_address ?> </p>
    <p class="card-text border border-secondary">Publish date: <?php echo $publish_date ?> </p>
   
   
    <a href="index.php" class="btn btn-success">Home</a>
  </div>
</div>   
                
           
        </div>
    </body>
</html>