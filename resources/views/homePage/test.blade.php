<!DOCTYPE html>
<html>
<head>
<title>laravel test page</title>
</head>
<body>
<a href= "{{route('test', ['id' => 12, 'name' => 'ekrem'])}}">Anasayfa</a>
<h1>Dene bakalım</h1>
id no {{$id}} <br>
<p>amerikan prensi.</p>
<?php
echo "ID NUMBER:",$id;
echo "<br>İSİM:", $name;
?>
</body>
</html>
