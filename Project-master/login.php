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
            <form action="Actions\actionLogin.php" method="post" style="width: 49%;">
                <h4 style="float: left;">username</h4><input type="text" name="username" class="InputText">
                <br>
                <h4 style="float: left;">password</h4><input type="password" name="password"  class="InputText">
                <br>
                <a href="Signin.php" style="text-decoration: none; color: orange; font-size: large;">Register</a>
                <input type="submit">
            </form>
            </td>
        </tr>
    </table>
</body>
</html>