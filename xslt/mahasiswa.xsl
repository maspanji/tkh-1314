<?xml version="1.0" encoding="UTF-8"?>
<!--
    Document   : mahasiswa.xsl
    Description: mentransformasikan dokumen mahasiswa.xml
-->
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="/">
        <html>
            <body>
                <p>Nama : <xsl:value-of select="/mahasiswa/nama" /></p>
                <p>Alamat : <xsl:value-of select="/mahasiswa/alamat" /></p>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>