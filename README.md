# php_function
this file I just test for make php function that like php framework to build html graphic interface
and I want to combined html and php into php code for make a new feeling of coding with my function thanks!
I think a adventage of my function that it can make you more comfort if you use php in html
I will show about new feeling of my function when you want to make some website with php

Old:
<html>
  <body class="body">
    1 2 3 4 5 6 7 8 9 10 11 12
  </body>
</html>

My function:
<?php
  html();
    body('class="body"');
      for($i=1;$i<=12;$i++)
        show($i.' ');
    body_end();
  html_end();
?>
