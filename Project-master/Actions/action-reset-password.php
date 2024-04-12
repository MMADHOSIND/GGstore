<?php
    session_start();
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];
    $NewUsername = $_POST['NewUsername'];
    $NewPassword = $_POST['NewPassword'];
    echo $NewUsername. $NewPassword;
    $ID = $_SESSION['ID'];
    $conn = new mysqli("localhost", "root", "", "SchoolProject");
    $sql = "Select  Email, GmailPassword, StrHash From Users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
      while($row = $result->fetch_assoc()) 
        {
            $hash_Password = $NewPassword. $row["StrHash"];
            $hash_Username = $NewUsername. $row["StrHash"];
            $hashPassword = hash('sha256',$hash_Password);
            $hashUsername = hash('sha256',$hash_Username);
            if ($password === $row["GmailPassword"] && $gmail === $row["Email"]) 
            {
                echo "OK";
                $sql = "UPDATE users SET Password = '$hashPassword', Username = '$hashUsername' WHERE ID = '$ID'";
                if (mysqli_query($conn, $sql) === true)
                {
                    echo "Your password '$NewPassword' and username is '$NewUsername'";
                }
            }
        }
    }
?>