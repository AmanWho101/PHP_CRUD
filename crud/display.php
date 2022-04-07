<?php 
include 'connect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD Operation</title>
</head>

<body>

    <div class="container">

        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light" >Add User</a>
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php 
                

                $sql = "select * from `crudt`";
                $rslt = mysqli_query($con, $sql);
                if($rslt){
                    
                    while($row = mysqli_fetch_assoc($rslt)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];

                        echo '
                        <tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$password.'</td>
                    <td>
                    <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">edit</a></button>
                    <button class="btn btn-warning"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                    </td>
                        ';

                    }
                }

                ?>
                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>01</td>
                    <td>21</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>01</td>
                    <td>21</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td >Larry the Bird</td>
                    <td>an</td>
                    <td>an</td>
                    <td>@twitter</td>
                    <td>01</td>
                    
                    
                    
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Larry the Bird</td>
                    <td>an</td>
                    <td>an</td>
                    <td>@twitter</td>
                    <td>21</td>
                    
                    
                </tr> -->
            </tbody>
        </table>
    </div>


</body>

</html>