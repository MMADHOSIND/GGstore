<?php   
    session_start();
    $bool = false;
    function redirect($url)
    {
        if (!headers_sent()){
            header("Location: $url");
        }
        else{
            echo "<script type='text/javascript'>window.location.href='$url'</script>";
            echo "<noscript><meta http-equiv='refresh' content='0;url=$url'/></noscript>";
        }
    exit;
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashd_pass = password_hash($password,PASSWORD_DEFAULT);
    //DATABASE
    $conn = new mysqli("localhost", "root", "", "SchoolProject");
    $sql = "Select  Password, Username, ID, Name, Email, Wallet, StrHash From Users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
      while($row = $result->fetch_assoc())
        {
            $hash_Username = $username. $row["StrHash"];
            $hash_Password = $password. $row["StrHash"];
            $hash_Password = hash('sha256',$hash_Password);
            $hash_Username = hash('sha256',$hash_Username);
            if (hash_equals($hash_Password, $row["Password"]) && hash_equals($hash_Username, $row["Username"])) {
            // if ("12345678" === $row["Password"] && "12345678" === $row["Username"]) 
                $bool = true;
                $_SESSION['IsLogined'] = true;
                $_SESSION['ID'] = $row["ID"];
                $_SESSION['Name'] = $row["Name"];
                $_SESSION['Email'] = $row["Email"];
                $_SESSION['Wallet'] = $row["Wallet"];
                $_SESSION['Username'] = $username;
                $_SESSION['Password'] = $password;
            }
        }
    }
    if($bool === false){
        redirect("http://localhost/SchoolProject/login.php");
        ?>
        <script>
            window.alert("username or password dont match");
        </script>
        <?php
    }
    else{
        redirect("http://localhost/SchoolProject/Index.php");
        ?>
            <script>
                window.alert("Login was successful");
            </script>
        <?php
    }
?>