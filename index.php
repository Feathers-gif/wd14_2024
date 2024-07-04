<pre>
<?php
$file = fopen("./file.txt", "w+");
fwrite($file, "Новый текст для записи");
fclose($file);