<?php
    include("Includes\Include-top.php");
?>
.menu-div{
    margin-left: 1%;
    width: 15%;
    height: auto;
    background-color: orange;
    border: 2px red solid;
    border-radius: 10px;
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table  style=" width: 100%;">
        <tr>
            <td>
                <div class="main-top-div">
        		    <div class="subdiv-left">
		    	        <a href="index.php" class="underline" >Home</a>
			            <a href="Games.php" class="underline" >Games</a>
    			        <a href="#" class="underline" style="background-color: orange; border-radius: 5px;" >Acount</a>
	    		        <a href="Wallet.php" class="underline" >Wallet</a>
		            </div>
		            <div class="subdiv">
			            <div class="triangle-down"></div>
    		        </div>
	    	        <div class="subdiv-right">
		    	        <a href="login.php" class="underline" style="float: none;" >Signin/Login</a>
    		        </div>
	            </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: center; padding-top: 20px; font-family: 'Segoe UI'; font-size: 40px;">
                <?php
                    session_start();
                    if(isset($_SESSION['IsLogined'])){
                        if($_SESSION['IsLogined'] === true){
                            echo("Welcome ". $_SESSION['Name']);
                ?>
                    <tr>
                        <td>
                            <div class="menu-div" style="text-align: center;">
                                <a href="Acount/reset-password.php" style="font-family: 'Segoe UI'; font-size: 25px; text-decoration: none; color: white;">Change password</a>
                            </div>
                            <!-- <div class="menu-div" style="text-align: center;">
                                <a href="Acount/reset-password.php" style="font-family: 'Segoe UI'; font-size: 25px; text-decoration: none; color: white;">Change password</a>
                            </div> -->
                        </td>
                    </tr>
                <?php
                        }
                    }
                    if(!isset($_SESSION['IsLogined'])){
                        echo("Login first😊");
                    }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>