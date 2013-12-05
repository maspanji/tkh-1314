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
        var wait_img = "<img src='loadinfo.gif' width='50' height='50' /> ";
        var disp_img = "<img src='http://www.newyorker.com/online/blogs/photobooth/NASAEarth-01.jpg' width='300' height='300' />";
        var video = "<video width='320' height='240' controls> <source src='http://www.w3schools.com/html/movie.mp4' type='video/mp4'></video>";
        if(xhr.readyState != 4){
            document.getElementById("display_image").innerHTML = wait_img;
            document.getElementById("display_video").innerHTML = wait_img;            
        }else if (xhr.readyState == 4) {
            document.getElementById("display_image").innerHTML = disp_img;
            document.getElementById("display_video").innerHTML = video;
        }
    }
    var url = "#";
    //send request
    xhr.open("GET", url, true);
    xhr.send(null);
}
