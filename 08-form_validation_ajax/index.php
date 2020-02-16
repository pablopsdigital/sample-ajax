<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample form validation with ajax</title>

    <script type="text/javascript">
        function checkUser(textInput) {

            var xmlhttp;

            //Check content
            if (textInput == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }

            //Check old web navigator support
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            //If state is ok load response in html
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                }
            }

            //Throw asynchronous request to server
            xmlhttp.open('GET', 'checkuser.php?textInput=' + textInput, true);
            xmlhttp.send();

        }
    </script>

    <style>
        .default {
            border: 2px solid #625c63;
            background: rgba(255, 255, 255, 0.95);
            padding: 15px 20px;
            border-radius: 15px;
        }

        .user_true {
            border: 2px solid #16a085;
            background: rgba(255, 255, 255, 0.95);
            padding: 15px 20px;
            border-radius: 10px;
            background-color: #16a085;
            width: 20px;
            height: 100px;
        }

        .user_false {
            border: 2px solid #ff3300;
            background: rgba(255, 255, 255, 0.95);
            padding: 15px 20px;
            border-radius: 10px;
            background-color: #ff3300;
            width: 20px;
            height: 100px;
        }
    </style>

</head>

<body>

    <h2>Sample form validation with ajax</h2>
    <form action="">
        <p>User:</p>
        <!--Send data to the server for verification by calling the checkUser function-->
        <input name="user_name" type="text" id="user_name" onkeyup="checkUser(this.value)" class="default">
    </form>
    <div id="txtHint"></div>

</body>

</html>