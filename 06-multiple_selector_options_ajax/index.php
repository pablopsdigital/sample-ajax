<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple selectors options</title>

    <script type="text/javascript">
        // Function to create the second select from the option selected in the first
        function showSelect(option) {

            var xmlhttp;

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

            //If state is ok load response in html
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("selectOptions").innerHTML = xmlhttp.responseText;
                }
            }

            //Throw asynchronous request to server
            xmlhttp.open('GET', 'loadOptionsSecondSelect.php?typeselected=' + option, true);
            xmlhttp.send();

        }
    </script>

</head>

<body>
    <h2>Example multiple selectors update multiple options</h2>

    <form action="">
        <select name="selectValues" onchange="showSelect(this.value)">
            <!--Create first select database options-->
            <?php include "loadOptions.php" ?>
        </select>
    </form>
    <div id="selectOptions">
        <select name="1"></select>
    </div>
</body>

</html>