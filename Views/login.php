<?php
session_start();
?> 

<html>

<head lang="en">
    <title>Medical Inventory Login</title>
    <style type="text/css">
        body {
            background-color: lightblue;
        }

        #header {
            background-color: darkblue;
        }

        #footer {
            text-align: left;
            border-top: dashed;
        }

        h1 {
            text-align: center;
        }

        label {
            width: 150px;
            display: block;
            float: left;
            margin: auto;
        }

        input[type=button] {
            background-color: darkblue;
            font-family: serif;
            color: azure;
            width: 16%;
            float: inherit;
            margin: auto;
        }
    </style>
</head>

<body>
    <div id="header">
        <h1>Medical Inventory Login</h1>
    </div>

    <div id="registrationform">
        <h2>Login to your account</h2>
		<?php
			if(isset($_SESSION['error'])) 
			{ 
				echo '<div id="error">'.$_SESSION['error'].'</div>';
				unset($_SESSION['error']);
			}
		?>
        <form action="verifylogin.php" method="post" name="loginform">
            <input type="hidden" name="action" value="register">
            <ul class="nobullet">
                <li>
                    <label for="username"> user name</label>
                    <input type="text" id="username" name="username" value="">
                    <span id="usermessage"></span>
                </li>
                <li>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" value="">
                    <span id="passwordmessage"></span>
                </li>
            </ul>
            <input type="submit" alt="login" name="login" value="Login" id="submit_btn">
        </form>

    </div>

    <div id="footer">
        <span> Please Contact Us anytime.</span>
			<a href="view inventory.php">Inventory</a>
	<a href="logout.php">Logout</a>
    </div>
    <div class="profile-picture"> </div>
</body>

</html>

