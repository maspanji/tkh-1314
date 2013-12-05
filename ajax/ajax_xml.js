/* 
 * File : ajax_xml.js
 * Deskripsi : ajax untuk membaca file XML
 */
var xmlhttp;
function ajaxget(){
    xmlhttp = createXHR();
    if (xmlhttp==null)
    {
        alert ("Your browser does not support AJAX!");
        return;
    }
    xmlhttp.onreadystatechange=stateChanged;
    var url = "buku.xml";
    xmlhttp.open("GET",url,true);
    xmlhttp.send(null);
}

function stateChanged(){
    if (xmlhttp.readyState==4)
    {   
        var xmlRoot = xmlhttp.responseXML.documentElement;
        //dapatkan elemen berdasarkan tag judul  
        arrayBuku = xmlRoot.getElementsByTagName('judul');
        var buku = '';
        for(var i=0;i<arrayBuku.length;i++){
            buku+= arrayBuku.item(i).firstChild.data+'<br />';
        }
        document.getElementById('targetDiv').innerHTML=buku;
    }
}


