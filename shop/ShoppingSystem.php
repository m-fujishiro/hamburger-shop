<html>
<head><title>ショッピングカート</title></head>
<body>

<?php
  session_start();// セッション開始
  $total = 0;

  /* ハンバーガー */
  $hamburger = isset($_SESSION["save_nH"]) ? $_SESSION["save_nH"] : 0; 
  $dbBurger = isset($_SESSION["save_dH"]) ? $_SESSION["save_dH"] : 0;
  $cheese = isset($_SESSION["save_cH"]) ? $_SESSION["save_cH"] : 0;
  $fish = isset($_SESSION["save_fH"]) ? $_SESSION["save_fH"] : 0;
  switch($_POST["hamburger"]){
    case "ハンバーガー"      :$hamburger += $_POST["hcount"];break;
    case "ダブルバーガー"    : $dbBurger += $_POST["hcount"];break;
    case "チーズバーガー"    :   $cheese += $_POST["hcount"];break;
    case "フィッシュバーガー":     $fish += $_POST["hcount"];break;
  }
  // 変数をセッションに保存する
  $_SESSION["save_nH"] = $hamburger;
  $_SESSION["save_dH"] = $dbBurger;
  $_SESSION["save_cH"] = $cheese;
  $_SESSION["save_fH"] = $fish;
  $total += $hamburger*100 + $cheese*120 + $fish*110 + $dbBurger*150;

  /* サイドメニュー */
  $potatoS = isset($_SESSION["save_pS"]) ? $_SESSION["save_pS"] : 0;
  $potatoM = isset($_SESSION["save_pM"]) ? $_SESSION["save_pM"] : 0;
  $potatoL = isset($_SESSION["save_pL"]) ? $_SESSION["save_pL"] : 0;
  $nuggetS = isset($_SESSION["save_nS"]) ? $_SESSION["save_nS"] : 0;
  $nuggetM = isset($_SESSION["save_nM"]) ? $_SESSION["save_nM"] : 0;
  $nuggetL = isset($_SESSION["save_nL"]) ? $_SESSION["save_nL"] : 0;
  switch($_POST["side"]){
    case "ポテト" :
      switch($_POST["ssize"]){
        case "S" : $potatoS += $_POST["scount"];break;
        case "M" : $potatoM += $_POST["scount"];break;
        case "L" : $potatoL += $_POST["scount"];break;
      } break;
    case "チキンナゲット" : 
      switch($_POST["ssize"]){
        case "S" : $nuggetS += $_POST["scount"];break;
        case "M" : $nuggetM += $_POST["scount"];break;
        case "L" : $nuggetL += $_POST["scount"];break;
      } break;
  }	
  $potatoM += $_POST["addPotato"];
  $_SESSION["save_pS"] = $potatoS;
  $_SESSION["save_pM"] = $potatoM;
  $_SESSION["save_pL"] = $potatoL;
  $_SESSION["save_nS"] = $nuggetS;
  $_SESSION["save_nM"] = $nuggetM;
  $_SESSION["save_nL"] = $nuggetL;
  $total += $potatoS*120 + $potatoM*150 + $potatoL*180;
  $total += $nuggetS*120 + $nuggetM*150 + $nuggetL*180;  

  /* お飲み物 */
  $cokeS = isset($_SESSION["save_ckS"]) ? $_SESSION["save_ckS"] : 0;
  $cokeM = isset($_SESSION["save_ckM"]) ? $_SESSION["save_ckM"] : 0;
  $cokeL = isset($_SESSION["save_ckL"]) ? $_SESSION["save_ckL"] : 0;
  $coffeeS = isset($_SESSION["save_cfS"]) ? $_SESSION["save_cfS"] : 0;
  $coffeeM = isset($_SESSION["save_cfM"]) ? $_SESSION["save_cfM"] : 0;
  $coffeeL = isset($_SESSION["save_cfL"]) ? $_SESSION["save_cfL"] : 0;
  $soupS = isset($_SESSION["save_sS"]) ? $_SESSION["save_sS"] : 0;
  $soupM = isset($_SESSION["save_sM"]) ? $_SESSION["save_sM"] : 0;
  $soupL = isset($_SESSION["save_sL"]) ? $_SESSION["save_sL"] : 0;
  switch($_POST["drink"]){
    case "コーラ" :
      switch($_POST["dsize"]){
        case "S" : $cokeS += $_POST["dcount"];break;
        case "M" : $cokeM += $_POST["dcount"];break;
        case "L" : $cokeL += $_POST["dcount"];break;
      } break;
    case "コーヒー" : 
      switch($_POST["dsize"]){
        case "S" : $coffeeS += $_POST["dcount"];break;
        case "M" : $coffeeM += $_POST["dcount"];break;
        case "L" : $coffeeL += $_POST["dcount"];break;
      } break;
    case "スープ" : 
      switch($_POST["dsize"]){
        case "S" : $soupS += $_POST["dcount"];break;
        case "M" : $soupM += $_POST["dcount"];break;
        case "L" : $soupL += $_POST["dcount"];break;
      } break;
  }	
  $_SESSION["save_ckS"] = $cokeS;
  $_SESSION["save_ckM"] = $cokeM;
  $_SESSION["save_ckL"] = $cokeL;
  $_SESSION["save_cfS"] = $coffeeS;
  $_SESSION["save_cfM"] = $coffeeM;
  $_SESSION["save_cfL"] = $coffeeL;
  $_SESSION["save_sS"] = $soupS;
  $_SESSION["save_sM"] = $soupM;
  $_SESSION["save_sL"] = $soupL;
  $total += $cokeS*150 + $cokeM*200 + $cokeL*250;
  $total += $coffeeS*100 + $coffeeM*120 + $coffeeL*150;
  $total += $soupS*120 + $soupM*150 + $soupL*180;
?>

<div style="text-align : center">
<h1>カートの中身</h1>
<?php echo "合計金額 : ".round($total*1.08)."円";?>
<p><a href="Shop.php">→メニュー</a></p>
</div>

<div style="display: flex; justify-content: space-between;">
 
<div style="float:left">
  <table border="1">
  <tr><th>品物</th><th>個数</th></tr>
<?php 
  print "<td>"."ハンバーガー"."</td>";
  print	"<td>".$hamburger."</td><tr>";
  print "<td>"."チーズバーガー"."</td>";
  print	"<td>".$cheese."</td><tr>";
  print "<td>"."ダブルバーガー"."</td>";
  print	"<td>".$dbBurger."</td><tr>";
  print "<td>"."フィッシュバーガー"."</td>";
  print	"<td>".$fish."</td>";
?>
  </table>
 </div>

 <div style="float:none">
  <table border="1">
  <tr><th>品物</th><th>サイズ</th><th>個数</th></tr>
<?php 
  print "<td rowspan='3'>"."ポテト"."</td>";
  print "<td>"."S"."</td>";
  print	"<td>".$potatoS."</td><tr>";
  print "<td>"."M"."</td>";
  print	"<td>".$potatoM."</td><tr>";
  print "<td>"."L"."</td>";
  print	"<td>".$potatoL."</td><tr>";
  print "<td rowspan='3'>"."チキンナゲット"."</td>";
  print "<td>"."S"."</td>";
  print	"<td>".$nuggetS."</td><tr>";
  print "<td>"."M"."</td>";
  print	"<td>".$nuggetM."</td><tr>";
  print "<td>"."L"."</td>";
  print	"<td>".$nuggetL."</td><tr>";
?>
  </table>
 </div>

 <div style="float:right">
<table border="1">
  <tr><th>品物</th><th>サイズ</th><th>個数</th></tr>
<?php 
  print "<td rowspan='3'>"."コーラ"."</td>";
  print "<td>"."S"."</td>";
  print	"<td>".$cokeS."</td><tr>";
  print "<td>"."M"."</td>";
  print	"<td>".$cokeM."</td><tr>";
  print "<td>"."L"."</td>";
  print	"<td>".$cokeL."</td><tr>";
  print "<td rowspan='3'>"."コーヒー"."</td>";
  print "<td>"."S"."</td>";
  print	"<td>".$coffeeS."</td><tr>";
  print "<td>"."M"."</td>";
  print	"<td>".$coffeeM."</td><tr>";
  print "<td>"."L"."</td>";
  print	"<td>".$coffeeL."</td><tr>";
  print "<td rowspan='3'>"."スープ"."</td>";
  print "<td>"."S"."</td>";
  print	"<td>".$soupS."</td><tr>";
  print "<td>"."M"."</td>";
  print	"<td>".$soupM."</td><tr>";
  print "<td>"."L"."</td>";
  print	"<td>".$soupL."</td><tr>";
?>
 </div>
</div>

</body>
</html>