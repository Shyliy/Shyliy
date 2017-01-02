<?php

  for($x=1;$x<10;$x++)
  {
    for($y=1;$y<=$x;$y++)
	{
	  echo $y."x".$x."=".($y*$x)."\t";
	}
	echo "<br />";
  } 
?>
<script>

 for(var x=1;x<10;x++)
 {
   for(var y=1;y<=x;y++)
   {
     document.write(y+"x"+x+"="+(x*y)+"\t");
   }
   document.write("<br />");
 }

</script>