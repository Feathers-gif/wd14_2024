<pre>
<?php
use Example\Compos\MyClass;

require 'vendor/autoload.php';

dump((new MyClass())->sayHello());
dump(new MyClass());
dump(['test'=> 1, 'test1' => '1','test2' => false, 'test3' => ['1',2,false]]);
?>
