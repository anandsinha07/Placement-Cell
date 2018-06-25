<!Doctype Html>
<html>
    <head>
        <title>PICT Placement Cell-Home</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <style type="text/css"></style>
        
    </head>
    <body>
        
        <!-------Nav bar--->
            
        <nav id="navbar-tp" class="navbar navbar-expand-lg navbar-light">
            
            <a class="navbar-brand" href="#">
                <img src="../assets/pict.png" width="30" height="30" class="d-inline-block align-top" alt="">
            <b>PICT PLACEMENT CELL</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-         controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../Home/index.html" style="color: white;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Activities/index.html" style="color: white;">Activities</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">Report</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../PlacementReport/index.php">Placement Report</a>
                        <a class="dropdown-item" href="../TrainingReport/index.php">Training Report</a>  
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Contact/index.html" style="color: white;">Contact us</a> 
                </li>
                <li class="nav item">
                    <a class="nav-link" href="../Admin/index.html" style="color: white;">Admin</a>
                </li>
                <li class="nav item">
                    <a class="nav-link" href="../Student/index.html" style="color: white;">Student</a>
                </li>
                
                <li class="nav item">
                    <a class="nav-link" href="../Notice/index.php" style="color: white;">Notice</a>
                </li>
            </ul>
            </div>
        </nav>
        
       <!-------Nav bar closed-----> 
        
        
        <div id="id1" class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4"><u>TRAINING REPORT</u></h1>
            </div>
        </div>
        
        <div class="container">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">YEAR</th>
                  <th scope="col">REPORT</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $con = mysqli_connect("127.0.0.1", "root", "newpassword", "mydb");
                  
                  $query = "select * from trainingReports";
                  $rs = $con->query($query);
                  $i=1;
                  while($row=$rs->fetch_assoc()){
                    echo "<tr>
                      <th scope='row'>".$i."</th>
                      <td>".$row["year"]."</td>
                      <td> <a href='".$row["path"]."'>Click here to download report</a></td>
                    </tr>";
                        $i++;
                  }
                
                $con->close();
                ?>
              </tbody>
            </table>

        </div>
        <script src="../Dist/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        </script>
        
        
    </body>
</html>