<html>
<head>
  <title>hello
</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<table width="100%" border="1" id="printTable">
    <tr><td>Code</td><td>xxxxx</td></tr>
    <tr bgcolor="#CCCCCC"><td>Student Name</td><td>XXXX</td></tr>
    <tr><td>Student Email</td><td>xxxx</td></tr>
</table>
<br>
    <button class="btn btn-primary" id="print">Print</button>
  </body>
</html>

<script>
    function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$("#print").on('click',function(){
printData();
})
    </script>
