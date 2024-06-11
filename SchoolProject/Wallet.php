<?php
    include("Includes\Include-top.php");
?>
.top-main-div{
    width: 100%;
    height: auto;
}

.top-sub-div{
    width: 20%;
    margin-right: 1%;
    margin-left: 1%;
    margin-top: 1%;
    height: auto;
    padding-top: 15px;
    padding-bottom: 15px;
    background-color: orange;
    border-radius: 10px;
    border: 2px solid red;
    float: left;
    text-align: left;
    padding-left: 10px;
    font-family: 'Segoe UI';
}

.body-div{
    width: 64%;
    height: 460px;
    background-color: orange;
    float: left;
    border-radius: 10px;
    border: 2px solid red;
    margin-left: 1%;
    margin-top: 1%;
}

input{
    width: 300px;
    height: 30px;
    border-radius: 12px;
    border: none;
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
	    		        <a href="#" class="underline" style="background-color: orange; border-radius: 5px;" >Wallet</a>
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
            <td>
                <h5 style="font-family: 'Segoe UI'; margin-top: 2%; margin-left: 1%;">Wallet over view</h5>
                <!-- mainDiv -->
                <div class="top-main-div">

                    <div class="top-sub-div">
                        <p style="font-size: 30px;">Balance</p>
                        <p style="font-size: 30px;">3600$</p>
                    </div>

                    <div class="top-sub-div">
                        <p style="font-size: 30px;">Last Transaction</p>
                        <p style="font-size: 30px;">-100$</p>
                    </div>

                    <div class="top-sub-div">
                        <p style="font-size: 30px;">Last Transaction</p>
                        <p style="font-size: 30px;">-100$</p>
                    </div>

                    
                </div>
                <div class="top-main-div">
                    <div class="body-div">
                    </div>
                </div>
                <div class="top-sub-div">
                    <p style="font-size: 30px;">Gift</p>
                    <form action="">
                        <p style="font-size: 20px;">Receiver</p>
                        <input type="text">
                        <p style="font-size: 20px;">Amount</p>
                        <input type="text">
                        <input type="submit" value="Send">
                    </form>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>