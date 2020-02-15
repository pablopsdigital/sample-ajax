<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat sample</title>

    <script type="text/javascript">

        function chatWindow(option) {

            var xmlhttp;
            var fetchUnixTimestamp;
            var timestamp

            //Check content option
            if (option == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }

            //Check old web navigator support
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            //Create timestamp for convert a Time in a String
            fetchUnixTimestamp=function(){
                return parseInt (new Date().getTime().toString().substring(0, 10));
            }
            timestamp = fetchUnixTimestamp();

            //If state is ok load response in html
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("chatWindow").innerHTML = xmlhttp.responseText;
                    //Execute function chatWindow() for each second
                    setTimeout('chatWindow()', 1000);
                }
            }

            //Throw asynchronous request to server
            xmlhttp.open('GET', 'database_read_messages.php' + '?time=' + timestamp, true);
            xmlhttp.send(null); //No data is sent in the request

            //Whenever the window is loaded, the startrefrech() function is executed
            window.onload = function startrefrech(){
                //Message delivery time
                setTimeout('chatWindow()',1000);
            }

        }
    </script>
</head>
<body>

    <form action="database_insert_messages.php" method="GET">
        <input type="text" name="message" id="sendmessage">
        <input type="submit">
    </form>
    <div id="chatWindow" style="width: 600px; height: 200px; border: 1px solid black; overflow: hidden;">
        <script type="text/javascript">
            chatWindow();
        </script>
    </div>
    
</body>
</html>