<!DOCTYPE html>

<html>
    <head>
        <title>Lesson Planner</title>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="w3.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="login.js"></script>
    </head>
    <body>
        <div class="w3-main w3-center">
            <h1>Welcome to Lesson Planner</h1><br>
            <div class="w3-container w3-panel">
                <center>
                <table class="w3-border w3-teal w3-card-2" width="350px" >
                    <tr>
                        <td align="right"><label for="uname">Username:</label></td>
                        <td align="right"><input type="text" id="uname" class="w3-input size" name="uname" ></td>
                    </tr>
                    <tr>
                        <td align="right"><label for="uname">Password:</label></td>
                        <td align="right"><input type="password" name="pwd" id="pwd" class="w3-input size"></td>
                    </tr>
                </table>
                </center> <br>
            <input class="w3-button w3-green w3-card-2" type="Submit" id="login" value="Login">
            </div>
            

        </div>
    </body>
</html>