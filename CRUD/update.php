<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM bookshop WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $name = $data['name'];
        $price = $data['price'];
        $image = $data['image'];
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
<html>
    <head>
        <title>Edit Product</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }     
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='images/<?php echo $image ?>' alt="<?php echo $name ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td><input class="form-control" type="text"  name="name" placeholder ="Product Name" value="<?php echo $name ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class="form-control" type= "number" name="price" step="any"  placeholder="Price" value ="<?php echo $price ?>" /></td>
                    </tr>
                    <tr>
                        <th>image</th>
                        <td><input class="form-control" type="file" name= "image" /><?php ?></td>
                    </tr>
                    <tr>
                        <th>short description</th>
                        <td><input class="form-control" type="text" name= "short_description" /> <?php ?></td>
                    </tr>
                    <tr>
                        <th>type</th>
                        <td><input class="form-control" type="text" name= "type" /> <?php ?></td>
                    </tr>
                    <tr>
                        <th>author first name</th>
                        <td><input class="form-control" type="text" name= "author_first_name" /> <?php ?></td>
                    </tr>
                    <tr>
                        <th>author last name</th>
                        <td><input class="form-control" type="text" name= "author_last_name" /> <?php ?></td>
                    </tr>
                    <tr>
                        <th>publisher name</th>
                        <td><input class="form-control" type="text" name= "publisher_name" /> <?php ?></td>
                    </tr>
                    <tr>
                        <th>publisher address</th>
                        <td><input class="form-control" type="text" name= "publisher_address" /> <?php ?></td>
                    </tr><tr>
                        <th>publish_date</th>
                        <td><input class="form-control" type="date" name= "publish_date" /> <?php ?></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "image" value= "<?php echo $data['image'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>