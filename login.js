$(document).ready(function(){

    //Login Function

    $("#login").click(function(){
        var uname = document.getElementById("uname").value;
        var pwd = document.getElementById("pwd").value;

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var reply = JSON.parse(this.responseText);
                
                console.log(reply);
                if (reply == "clear")
                    window.location.replace("home.php");
                else
                    alert("Invalid credentials");
            }
            
        };
        xmlhttp.open("POST", "validate.php"  , true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        var data = JSON.stringify({ "uname" :  uname , "pwd" : pwd });						
        xmlhttp.send("x=" + data);
    });
});