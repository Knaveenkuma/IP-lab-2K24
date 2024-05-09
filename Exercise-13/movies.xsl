<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

<xsl:template match="/">
    <html>
        <head>
            <title>Movies List</title>
        </head>
        <body>
            <h1>Movies List</h1>
            <ul>
                <xsl:apply-templates select="movies/movie"/>
            </ul>
        </body>
    </html>
</xsl:template>

<xsl:template match="movie">
    <li>
        <xsl:value-of select="title"/>
        <ul>
            <li><strong>Director:</strong> <xsl:value-of select="director"/></li>
            <li><strong>Year:</strong> <xsl:value-of select="year"/></li>
        </ul>
    </li>
</xsl:template>

</xsl:stylesheet>

