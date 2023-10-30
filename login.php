<?php
    $conn=mysqli_connect("localhost", "root", "", "aep");
    $utype = $_POST['utype'];
    $uid=$_POST['uid'];
    $pwd=$_POST['pwd'];
    if($utype==0){
        echo '<script>
                window.location.href="login.html";
                alert("Please select User Type!")
              </script>';
        }
    else{
        if(isset($_POST['submit'])){
            $sql="select * from logindetails where userid='$uid' and usertype='$utype' and password='$pwd'";
            $result=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count=mysqli_num_rows($result);
            if($count==1){
                header("Location:txin.html");
            }
            else{
                echo '<script>
                        window.location.href="login.html";
                        alert("Invalid User_Type/UserID/Password!")
                      </script>';
            }
    }
    }
?>