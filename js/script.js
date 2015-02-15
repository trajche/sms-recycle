/* 
** Made for SMS Recycle 
** http://github.com/trajche 
** v1.0
*/

//Ajax call for messages
function showMessages(number) {
    if (number == "") {
        document.getElementById("messageContent").innerHTML = "Please select a number.";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("messageContent").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","api/get-messages.php?phone="+number,true);
        xmlhttp.send();
    }
}