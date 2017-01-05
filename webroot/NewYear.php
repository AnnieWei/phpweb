<?php

?>

<meta charset='utf-8'>
<form
action="/NewYear.php"
method="post"
>

名稱<input name="name" value="<?= $_POST['name'] ?>">
</br></br>
留言<input name="message" value="<?= $_POST['message'] ?>">

<button>送出</button>

