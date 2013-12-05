/* 
 * File         :ajax_post.js
 * Deskripsi    :ajax untuk menangani post request
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
    var url = "display_name_post.php";
    //send request
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send("name="+vname);
}
