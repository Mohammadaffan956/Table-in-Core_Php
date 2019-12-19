<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
    </head>
    <body>
    	<style>
    		.form input {
    			font: 16px arial;
    			color: grey;
    			background-color: white;
    			padding: 10px 20px;
    			border-radius: 3px;
    			border: 1px solid black;
    			box-sizing: border-box;
    			margin: 10px;
    		}
    	</style>
    	<div class="form">
        <form action="view.php" method="post">
    		<input type="text" placeholder="First Name" name="first"><br>
    		<input type="text" placeholder="Last Name" name="sur"><br>
    		<input type="text" placeholder="Mbile Number or Email Address" name="email"><br>
    		<input type="password" placeholder="New Password" name="pass"><br>
        	<button>Click Me</button>
        </form>
        </div>
        <?php

         ?>
    </body>
</html>