/* 
 * File         :ajax_get.js
 * Deskripsi    :ajax untuk menangani get request
 */

function ajax_request(){
    //buat objek XHR
    var xhr = createXHR();
    //apakah browser support XHR ?
    if(xhr == null) {
        alert("your browser doesn't support ajax");
    }
    //set response text 
    xhr.onreadystatechange = function(){
        if (xhr.readyState == 4) {
            document.getElementById("display_name").innerHTML = xhr.responseText;
        }
    }
    var vname = document.getElementById("name").value;
    var url = "display_name_get.php?name=" + vname;
    //send request
    xhr.open("GET", url, true);
    xhr.send(null);
}
