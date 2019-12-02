<!DOCTYPE html>
<html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styleTry.css" />

<body>
    
    <!- This block contains code for the returning user sign-in page ->
    <center>
        <strong><h1>MeTime</h1></strong>
            <h2>Sign in</h2>
			<div id="frm">
			<form action="process.php" method="POST">
			<p>
				<label>Username:</label>
				<input type="text" id="user" name="user" />
			</p>
			<p>
				<label>Password:</label>
				<input type="password" id="pass" name="pass" />
			</p>
			<p>
                <p><u>Forgot Password?</u></p>
                <input type="submit" id="btn" value="Login">  
			</form>
			</div>
        
        <!- Background image source ->
        <img src="https://media.istockphoto.com/photos/close-up-of-meditation-in-park-at-sunrise-picture-id1039533792" alt="Pic 1" style="width:500px;height:600px;">
        <img src="https://media.istockphoto.com/vectors/cute-sloth-sitting-in-lotus-yoga-pose-cartoon-sloth-bear-vector-vector-id1076571820" alt="Pic 2" style="width:500px;height:600px;">
    </center>
</body>
</html>
