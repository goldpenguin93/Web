<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>JavaScript</h1
      <ul>
 <script>
list = new Array("장상협","최진혁","한이람","한이은","이고잉");
i=0;
while(i<list.length) {
  document.write("<li>"+list[i]+"</li>");
  i = i + 1;
}
 </script>
 </ul>
 <h2>PHP</h2>
 <?php
 $list = array("장상협","최진혁","한이람","한이은","이고잉");
 $i = 0;
 while ($i < count($list)) {
   echo "<li>".$list[$i]."</li>";
   $i = $i + 1;
 }
  ?>
  </body>
</html>
