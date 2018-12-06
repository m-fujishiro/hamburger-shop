<html>
<head>
<title>ハンバーガーショップ</title>
</head>
<body bgcolor onLoad="functionName()">
<div align="center">
<h1>HAMBURGER SHOP</h1>
<br><br>

注文してください

<form action="ShoppingSystem.php" method="post" onsubmit="addP()">
<!--?php
  session_start();
  $_SESSION = array();
  session_destroy();
--?>

<!--
<h3>品物</h3>
<select>
<option value="ハンバーガー">ハンバーガー</option>
<option value="サイドメニュー">サイドメニュー</option>
<option value="ドリンク">ドリンク</option>
</select>
-->

<caption><h4>ハンバーガー
<details><summary>メニュー</summary>
<table border="1" cellpadding="5" cellspacing="0" style="text-align: center">
  <tr>
    <td>品物</td>
    <td>価格(税抜)</td>
  </tr>
  <tr>
    <td>ハンバーガー(ノーマル)</td>
    <td>100円</td>
  </tr>
  <tr>
    <td>チーズバーガー</td>
    <td>120円</td>
  </tr>
  <tr>
    <td>フィッシュバーガー</td>
    <td>110円</td>
  </tr>
  <tr>
    <td>ダブルバーガー</td>
    <td>150円</td>
  </tr>
</table>
</details>
</caption>

<caption><h4>サイド
<details><summary>メニュー</summary>
<table border="1" cellpadding="5" cellspacing="0" style="text-align: center">
  <tr>
    <td>品物</td>
    <td>Sサイズ</td>
    <td>Mサイズ</td>
    <td>Lサイズ</td>
  </tr>
  <tr>
    <td>ポテト</td>
    <td>120円</td>
    <td>150円</td>
    <td>180円</td>
  </tr>
  <tr>
    <td>チキンナゲット</td>
    <td>120円</td>
    <td>150円</td>
    <td>180円</td>
  </tr>
</table>
</details>
</caption>

<caption><h4>お飲み物
<details><summary>メニュー</summary>
<table border="1" cellpadding="5" cellspacing="0" style="text-align: center">
  <tr>
    <td>品物</td>
    <td>Sサイズ</td>
    <td>Mサイズ</td>
    <td>Lサイズ</td>
  </tr>
  <tr>
    <td>コーラ</td>
    <td>150円</td>
    <td>200円</td>
    <td>250円</td>
  </tr>
  <tr>
    <td>コーヒー</td>
    <td>100円</td>
    <td>120円</td>
    <td>150円</td>
  </tr>
  <tr>
    <td>スープ</td>
    <td>120円</td>
    <td>150円</td>
    <td>180円</td>
  </tr>
</table>
</details>
</caption>

<!-div style=" transform: translateX(−50%);"->
<div style="display: flex; justify-content: space-between;">
<div style="float:left">
<h3>ハンバーガー<br>
<select name="hamburger">
<option value="null">選択してください</option>
<option value="ハンバーガー">ハンバーガー</option>
<option value="チーズバーガー">チーズバーガー</option>
<option value="フィッシュバーガー">フィッシュバーガー</option>
<option value="ダブルバーガー">ダブルバーガー</option>
</select>
<h3>個数<br>
<select name="hcount">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
</select><h3><br><br>
</div>

<div style="float:none">
<h3>サイドメニュー<br>
<select name="side">
<option value="null">選択してください</option>
<option value="ポテト">ポテト</option>
<option value="チキンナゲット">チキンナゲット</option>
</select>
<h3>サイズ<br>
<select name="ssize">
<option value="S">S</option>
<option value="M">M</option>
<option value="L">L</option>
</select>
<h3>個数<br>
<select name="scount">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
</select>
</div>

<div style="float:right">
<h3>お飲み物<br>
<select name="drink">
<option value="null">選択してください</option>
<option value="コーラ">コーラ</option>
<option value="コーヒー">コーヒー</option>
<option value="スープ">スープ</option>
</select>
<h3>サイズ<select name="dsize">
<option value="S">S</option>
<option value="M">M</option>
<option value="L">L</option>
</select>
<h3>個数<select name="dcount">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
</select>
</div>
</div>

<div style="clear:both">
<input type="hidden" name="addPotato" value="">
<input type="submit" value="送信">
</div>

</form>

<script>
function addP(){
	document.forms[0].addPotato.value = confirm('ご一緒にポテトはいかがですか？') ? 1 : 0;
}
</script>