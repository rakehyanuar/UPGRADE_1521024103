<?php
$text="RAKIH YANUAR YUNUS";
$a = substr_count($text, "A");
$i = substr_count($text, "I");
$u = substr_count($text, "U");
$e = substr_count($text, "E");
$o = substr_count($text, "O"); 
echo "
<table border=1>
<tr>
<th rowspan=2>INPUT</th>
<th colspan=5>OUTPUT</th>
</tr>
<tr>
<th>A</th>
<th>I</th>
<th>U</th>
<th>E</th>
<th>O</th>
</tr>
<tr>
<td>
$text
</td>
<td>
$a
</td>
<td>
$i
</td>
<td>
$u
</td>
<td>
$e
</td>
<td>
$o
</td>
</tr>
</table>";
 ?>