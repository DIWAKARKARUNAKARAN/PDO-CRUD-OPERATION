<?php
session_start();
include('PDODB.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
    <title>PDO FETCH</title>
</head>
<body>
    <div class="conainer">
        <div class="row">
            <div class="col-md-12 mt-4">
                <?php if(isset($_session['message'])):?>
                    <h5 class="alert alert-success"><?=$_session['message'];?></h5>
                    <?php
                    unset($_session['message']);
                endif;
                ?>
                <div class="card">
                    <div class="card-header">
                       <h3> <a href="PDOINS.php"clss="btn btn-primary float-end">DD STUDENT</a>
                       </h3>
                    </div>
                  <div class="card-body">
                    <table class="table tabe-bordered table-stripped">
                        <thead>
                            <tr>               
                                <th>NAMES</th>
                                <th>EMAIL</th>
                                <th>CONTACT NO</th>
                                <th>GENDER</th>
                                <th>QUALIFICATION</th>
                                <th>ADDRESS</th>
                            </tr>
                        </thead>
                         <tbody>
                            <?php
                                $query="select * from diwa1";
                                $statement=$con->prepare($query);
                                $statement->execute();
                                $statement->setFETCHMODE(PDO::FETCH_ASSOC);
                                $result=$statement->fetchAll();
                                if($result)
                                {
                                    foreach($result as $row)
                                    {
                                        ?>
                                        <tr>
                                            <td><?=$row['names'];?></td>
                                            <td><?=$row['email'];?></td>
                                            <td><?=$row['contactno'];?></td>
                                            <td><?=$row['gender'];?></td>
                                            <td><?=$row['qualification'];?></td>
                                            <td><?=$row['adress'];?></td>
                                            <td>
                                                <a href="PDOUPD.php?names=<?= $row['names'];  ?>"class="btn btn-primary">UPDATE</a>
                                    </tr>
                                    <?php
                                    }

                                }
                                else{
                                    ?>
                                    <tr>
                                        <td colspan="5">NO RECORD FOUND</td>
                                </tr>
                                <?php
                                }
                                ?>
                             <tr>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>