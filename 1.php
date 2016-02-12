<form action="1.php" method="post">
    Name: <input type="text" name="name" /><br>
    Message: <textarea rows="10" cols="20" name="message"></textarea>
    <input type="submit" value="Загрузить" />
</form>
<?php echo print_r($_POST)
?>
<?php
$all="Name: ".$_POST['name']."\r\n"."Message: ".$_POST['message']."\r\n";
$files="result.txt";
if (!$handle = fopen($files, 'a')) {
    echo "Невозможно открыть файл ($files)";
exit;
}
if (fwrite($handle, $all) === FALSE) {
    echo "Невозможно произвести запись в файл ($files)";
exit;
} else {
    echo "Информация успешно записана в файл!";
}
?>