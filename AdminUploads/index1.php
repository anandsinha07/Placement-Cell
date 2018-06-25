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
                <h1 class="display-4"><u>UPLOAD TRAINING REPORT</u></h1>
            </div>
        </div>
        
        <div class="container">
                <?php

                    if(isset($_FILES['filefield']))
                    {
                        $file=$_FILES['filefield'];
                        $upload_directory='../assets/';
                        $ext_str = "gif,jpg,jpeg,mp3,tiff,bmp,doc,docx,ppt,pptx,txt,pdf";
                        $allowed_extensions=explode(',',$ext_str);
                        $max_file_size = 10485760;//10 mb remember 1024bytes =1kbytes /* check allowed extensions here */
                        $ext = substr($file['name'], strrpos($file['name'], '.') + 1); //get file extension from last sub string from last . character
                        if (!in_array($ext, $allowed_extensions) ) {
                        echo "only".$ext_str." files allowed to upload"; // exit the script by warning

                    } /* check file size of the file if it exceeds the specified size warn user */

                    if($file['size']>=$max_file_size)
                    {

                    echo "only the file less than ".$max_file_size."mb  allowed to upload"; // exit the script by warning

                    }

                    //if(!move_uploaded_file($file['tmp_name'],$upload_directory.$file['name'])){

                    $path=$upload_directory.$file["name"];

                    if(move_uploaded_file($file['tmp_name'],$upload_directory.$path))
                    {

                    $con = mysqli_connect("127.0.0.1:3306", "root", "newpassword", "mydb");

                    echo "Your File Successfully Uploaded";

                    mysqli_query($con, "INSERT INTO trainingReports VALUES ('2017-2018', '$path')");

                    }

                    else{

                    echo "The file cant moved to target directory."; //file can't moved with unknown reasons likr cleaning of server temperory files cleaning

                    }

                    }




                    /*

                    Hurrey we uploaded a file to server successfully.

                    */

                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                    <label><b>Upload Report</b>

                    <input id="filefield" type="file" name="filefield" />

                    </label>

                    <label>

                    <input id="Upload" type="submit" name="Upload" value="Upload" />

                    <!-- This hidden input will force the  PHP max upload size. it may work on all servers. -->

                    <input type="hidden" name="MAX_FILE_SIZE" value="100000" />

                    </label></form>
            
        
    </div>


        
        <script src="../Dist/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        </script>
        
        
    </body>
</html>