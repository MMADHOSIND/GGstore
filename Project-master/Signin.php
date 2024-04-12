<?php
    include("Includes\Include-top.php");
?>
.InputText{
    width: 300px;
    height: 30px;
    border-radius: 12px;
    padding-left: 7px;
    padding-right: 7px;
    margin-left: 30px;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
   <body style="background-image: url(Images/art-7737624_1920.jpg);">
</head>
<body>
    <table  style=" width: 100%;">
        <tr>
            <td>
                <div class="main-top-div">
        		    <div class="subdiv-left">
		    	        <a href="index.php" class="underline" >Home</a>
			            <a href="Games.php" class="underline" >Games</a>
    			        <a href="Account.php" class="underline" >Acount</a>
	    		        <a href="Wallet.php" class="underline" >Wallet</a>
		            </div>
		            <div class="subdiv">
			            <div class="triangle-down"></div>
    		        </div>
	    	        <div class="subdiv-right">
		    	        <a href="#" class="underline" style="background-color: orange; border-radius: 5px;" class="underline" >Signin/Login</a>
    		        </div>
	            </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="fdiv">
                    <form action="Actions\actionSignin.php" method="POST" name="form">
                        <!-- <div class="title">Sign in</div> -->
                        <div>
                            <h4 style="float: left;">Name</h4>
                            <input type="text" name="Name" minlength="2" maxlength="20" required class="InputText">
                            <br>
                            <h4 style="float: left;">Username</h4>
                            <input type="text" name="UserName"  maxlength="20" required class="InputText">                            
                            <br>
                            <h4 style="float: left;">Password</h4>
                            <input type="password" name="Pass" minlength="8" maxlength="20" required class="InputText">
                            <br>
                            <h4 style="float: left;">Email</h4>
                            <input type="Email" name="Email" class="InputText">
                            <br>
                            <h4 style="float: left;">Password</h4>
                            <input type="text" name="GmailPassword" minlength="2" maxlength="20" required class="InputText">
                        </div>
                        <button type="submit" >Next Step</button>
                    </form>
                </div>            
            </td>
        </tr>
    </table>












    
</body>
</html>