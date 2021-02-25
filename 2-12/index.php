<form action="result.php" method="post">
  <table border="0.5">
  <tr>
    <td align="right"><b>私の名前：</b></td>
    <td><input type="text" name="my_name" size="30" maxlength="30"></td>
  </tr>

  <tr>
    <td align="right"><b>パスワード：</b></td>
    <td><input type="password" name="password" size="30" maxlength="30"></td>
  </tr>

  <tr>
    <td align="right"><b>性別：</b></td>
    <td>
      <input type="radio" name="sex" value="男性">男性
      <input type="radio" name="sex" value="女性">女性
      <input type="radio" name="sex" value="その他">その他
    </td>
  </tr>

  <tr>
    <td>
      <input type="hidden" name="hidden_param" value="隠しパラメーターから">
    </td>
  </tr>

  <tr>
    <td align="right"><b>年齢：</b></td>
    <td>
      <select name="age">
        <?php for($age=20; $age<=100; $age++) { ?>
        <option value="<?php echo $age; ?>">
          <?php echo $age; ?>
        </option>
        <?php } ?>
      </select>
    </td>
  </tr>
  
  <tr>
    <td></td>
    <td>
      <input type="submit" value="送信するよ！">
      <input type="reset" value="リセットするよ！">
    </td>
  </tr>

  </table>
</form>

<br><br><br>

<!-- 課題 -->
<h1>・課題</h1>
<form action="result.php" method="post">
  <table>
  <tr>
    <td align="right"><b>お名前：</b></td>
    <td><input type="text" name="myName"></td>
  </tr>
  <tr>
    <td align="right"><b>ご希望商品：</b></td>
    <td>
    <input type="radio" name="freebie" value="A賞">A賞
    <input type="radio" name="freebie" value="B賞">B賞
    <input type="radio" name="freebie" value="C賞">C賞
    </td>
  </tr>

  <tr>
    <td align="right"><b>個数：</b></td>
    <td>
      <select name="quantity">
        <?php for($i=0; $i<=10; $i++) { ?>
          <option value="<?php echo $i;?>">
            <?php echo $i; ?>
          </option>
       <?php } ?>
      </select>
    </td>
  </tr>

  <tr>
    <td></td>
    <td><input type="submit" value="申込"></td>
  </tr>

  </table>
</form>
<br><br>


<h1>・IT用語</h1>
<h4>・モジュール</h4>
<p>システム全体のなかの1つの機能、もしくは1つの要素のこと。<br>「部品」と表される。</p>

<h4>・バージョン管理システム</h4>
<p>ファイルの変更履歴の保存・管理を行うソフトウェア。</p>

<h4>・サブクエリ</h4>
<p>クエリ内のクエリのこと。<br>SQL文の結果を使ったSQL文。</p>

