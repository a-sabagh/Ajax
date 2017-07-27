<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>onreadystatechange</title>
    </head>
    <body>
        <p id="content"></p>
        <button type="button" onclick="runAjax()">click</button>
        <script type="text/javascript">
            function runAjax() {
                if (window.XMLHttpRequest) {
                    var xhr = new XMLHttpRequest();
                    if (!xhr) {
                        alert(":( cannot create XMLHttpRequest instanse");
                        return false;
                    }
                    xhr.open('GET', 'file.txt');
                    xhr.send();
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState = XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                document.getElementById("content").textContent = xhr.responseText;
                            } else {
                                alert("ConnectionFail -> xhr.status: " + xhr.status);
                            }//xhr.status
                        } else {
                            alert("ConnectionFail -> xhr.readyState: " + xhr.readyState);
                        }//XMLHttpRequest.DONE
                    }//onreadystatechange
                }//window.XMLHttpRequest
            }//click
        </script>
    </body>
</html>