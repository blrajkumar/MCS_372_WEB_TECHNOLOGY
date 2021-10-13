<?xml version="1.0" encoding="iso-8859-1"?><!-- DWXMLSource="Christ.xml" -->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
table {
  border-collapse: collapse;
  width: 80%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #FFFFFF}

th {
  background-color: #000;
  color: white;
}
h1 {
  font-family: Trattatello, fantasy;
  
}
.header {
  background-color: #000;
  text-align: center;
  margin-top: 50px;
  margin-left: 180px;
  margin-right: 180px;
  padding:inherit;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>Christ Gateways 2021</title>
</head>
<div class="header">
  <h1><font color="#FFFFFF" size="+4">Christ Gateways 2021</font></h1>
</div>
 <center><img src="logo.png" width="500" height="400"/></center>
<body>
 <h2 align="center"><font><u><b>Students Registeration Details</b></u></font></h2>
   <table align="center" border="1" bordercolor="#000099">
   <tr>
    <th >Student Name</th>
    <th >Branch</th>
    <th >Collage Name</th>
    <th >Email</th>
   </tr>
    <xsl:for-each select="/Christ/cs">
    <xsl:sort select="sname"/>
      <tr>
        <td ><xsl:value-of select="sname"/></td>
        <td ><xsl:value-of select="sbranch"/></td>
        <td ><xsl:value-of select="scollage"/></td>
        <td ><xsl:value-of select="semail"/></td>
      </tr>
    </xsl:for-each>
    </table>
</body>
</html>

</xsl:template>
</xsl:stylesheet>