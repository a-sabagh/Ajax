<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>onreadystatechange</title>
    </head>
    <body>
        <form action="" method="post">
            Username: <input type="text" id="username" onblur="runPostAjax();" ><span id="content"></span><br>
            Password: <input type="password" name="password" ><br>
            <input type="submit" name="login" value="login">
        </form>
        <script type="text/javascript">
            function runPostAjax(){
                var username = document.getElementById("username").value;
                if(window.XMLHttpRequest){
                    var xhr = new XMLHttpRequest();
                    if(!xhr){
                        alert("can not create xmlhttprequest instanse");
                        return false;
                    }
                    xhr.open('POST' , 'ajax.php');
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.send("username=" + username);
                    xhr.onreadystatechange = function(){
                        if(this.readyState === XMLHttpRequest.DONE){
                            if(this.status === 200){
                                document.getElementById("content").textContent = xhr.responseText;
                            }else{
                                alert("ConnectionFail -> xhr.status: " + xhr.status);
                            }//status
                        }//readystate done
                    }//onreadystatechange
                }else{
                    alert("Browser Does'nt Support XMLHttpRequest");
                }//window.xmlhttprequest
            }//click
        </script>
    </body>
</html>