<?php
require('dbconnect.php');

if(isset($_GET['email']) && isset($_GET['v_code']))
{
    $query = "SELECT * FROM `users` WHERE `email`= '$_GET[email]' AND `verification_code`= '$_GET[v_code]'";
    $result = mysqli_query($conn,$query);
    if($result){

        if(mysqli_num_rows($result)==1){

            $result_fetch = mysqli_fetch_assoc($result);
            if($result_fetch['is_verified']==0)
            {
                $update = "UPDATE `users` SET `is_verified`='1' WHERE `email` = '$result_fetch[email]'";
                if(mysqli_query($conn,$update)){

                    echo"<script>
                    alert('Email Verification Successful');
                    window.location.href='index.php';
                    </script>
                    ";
                }
                else{

                    echo"<script>
                    alert('SERVER ERROR');
                    window.location.href='index.php';
                    </script>
                    ";
                }
            } 
            else{
                echo"<script>
                    alert('E-Mail already registered');
                    window.location.href='index.php';
                    </script>
                    ";
    
            
        }


    }
    else{ 
        echo"<script>
                    alert('Cannot Run Query');
                    window.location.href='index.php';
                    </script>
                    ";
    }
}
else{ 
    echo"<script>
                alert('Cannot Run Query');
                window.location.href='index.php';
                </script>
                ";
}
}else{ 
    echo"<script>
                alert('Cannot Run Query');
                window.location.href='index.php';
                </script>
                ";
}




?>