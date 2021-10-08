<?xml version="1.0" encoding="iso-8859-1"?><!-- DWXMLSource="Crypto.xml" -->
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
<title>Crypto Wallet</title>
</head>
<div class="header">
  <h1><font color="#FFFFFF" size="+4">Binance Crypto Exchange</font></h1>
</div>
 <center><img src="btc.svg" width="500" height="400"/></center>
<body>
 <h2 align="center"><font><u><b>Raj's Wallet Details</b></u></font></h2>
   <table align="center" border="1" bordercolor="#000099">
   <tr>
    <th >Currency Name</th>
    <th >Price</th>
    <th >Tokens</th>
    <th >Total</th>
   </tr>
    <xsl:for-each select="/Trader/currency">
    <xsl:sort select="cname"/>
      <tr>
        <td ><xsl:value-of select="cname"/></td>
        <td ><xsl:value-of select="price"/></td>
        <td ><xsl:value-of select="token"/></td>
        <td ><xsl:value-of select="total"/></td>
      </tr>
    </xsl:for-each>
    </table>
</body>
</html>

</xsl:template>
</xsl:stylesheet>