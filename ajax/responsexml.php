<!--
    File : ajax_readXML.php
    Desc : ajax membaca dokumen XML
-->
<html>
    <head>
        <title>Read Data Ajax</title>
        <script type="text/JavaScript" src="xhr_creator.js"></script>
        <script type="text/JavaScript" src="ajax_xml.js"></script>
    </head>
    <body>
        <h2>Klik untuk menampilkan seluruh buku dalam buku.xml</h2>
        <form><input type="button" value="tampilkan buku" onclick="ajaxget()"></form>
        <div id="targetDiv">
        </div>
    </body>
</html>