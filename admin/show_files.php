<?php 

    include "config.php"; 

    if (isset($_GET['id'])) {

        $applicant_directory = $_GET['id'];

        $sql = "SELECT * FROM `form` WHERE `id`='$applicant_directory'";

        $result = $conn->query($sql);

        if ($result == TRUE) {

            $msg = '';
            if ($handle = opendir($applicant_directory . "/")) {
                while (false !== ($file = readdir($handle))) {
                    if (($file != '.')&&($file != '..')) {
        
                        $msg .= '<li><a href="'.$applicant_directory.'/'.$file.'">'.$file.'</a></li>';
                    }
                }
                closedir($handle);
            }

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>list of files in <?php echo $applicant_directory ?></h2>
    <ul>
        <p><?php echo $msg ?></p>
    </ul>
</body>
</html>