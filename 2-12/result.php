<?php
  $my_name = $_POST["my_name"];
  $password = $_POST["password"];
  $sex = $_POST["sex"];
  $hidden_param = $POST["hidden_param"];
  $age = $POST["age"];
?>
<p>私の名前は<?php echo $my_name; ?>です。</p>
<p>パスワードは<?php echo $password; ?>です。</p>
<p>私は<?PHP echo $sex; ?>です。</p>
<p>性別は<?PHP echo $hidden_param; ?>です。</p>
<p>年齢は<?php echo $age; ?>です。</p>


<!-- 課題 -->
<h1>・課題</h1>
<?php
  $myName = $_POST["myName"];
  $freebie = $_POST["freebie"];
  $quantity = $_POST["quantity"];



?>
<p>お名前：<?php echo $myName; ?></p>
<p>ご希望景品<?php echo $freebie; ?></p>
<p>個数：<?php echo $quantity; ?></p>