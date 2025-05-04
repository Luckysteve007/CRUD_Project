<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="display.css">
</head>
<body>
<div class="btn">
  <a href="user.php">
    <button>
      <span>Add User</span>
    </button>
  </a>
</div>

<div class="table-container">
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">S.no</th>
          <th scope="col">Name</th>
          <th scope="col">Username/Email</th>
          <th scope="col">Password</th>
          <th scope="col">Description</th>
          <th scope="col">Operation</th>

        </tr>
      </thead>
      <tbody>
        <?php
        $sql="Select * from `todolist`";
        $result=mysqli_query($conn,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['S.No'];
                $name=$row['Name'];
                $email=$row['Username/Email'];
                $password=$row['Password'];
                $desc=$row['description'];

                echo'<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$password.'</td>
                <td>'.$desc.'</td>
                <td>
                <div class="btn"> <a href="delete.php? deleteid='.$id.'"> <button> <span>Delete</span> </button> </a> </div>
                </td>
                </tr>';
            }
        }

        ?>

      </tbody>
    </table>
  </div>

    

</body>
</html>