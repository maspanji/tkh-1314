/* 
 * File         : xhr_creater.js
 * Deskripsi    : file untuk membuat objek XHR
 */

function createXHR(){
    var xhr = null;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xhr;
}