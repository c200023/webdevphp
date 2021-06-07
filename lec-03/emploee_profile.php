<?php
$profile = [];
$profile["id"] = "00011";
$profile["name"] = "田中一郎";
$profile["department"] = "人事部";
$profile["qualification"] = "基本情報技術者";
$profile["birthplace"] = "鹿児島県";
echo "社員ID:{$profile["id"]}<br>";
echo "社員氏名:{$profile["name"]}<br>";
echo "所属部署:{$profile["department"]}<br>";
echo "取得資格:{$profile["qualification"]}<br>";
echo "出身地:{$profile["birthplace"]}<br>";
?>