<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>Loop (PHP)</title>
<style>
    body { font-family: Arial; padding: 20px; background:#eaf4ff; }
    .box { background: #fff; padding: 15px; margin-bottom: 20px; border-radius:10px; }
    pre { background:#f4f8ff; padding:10px; border-radius:5px; }
</style>
</head>
<body>

<h1>Loop</h1>

<div class="box">
    <h2>1) For Loop – ดาวเพิ่ม</h2>
    <pre>
<?php
// 1) For Loop – ดาวเพิ่ม
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}
?>
    </pre>
</div>

<div class="box">
    <h2>2) While Loop – ตัวเลขซ้ำ</h2>
    <pre>
<?php
// 2) While Loop – ตัวเลขซ้ำ
$a = 1;
while ($a <= 3) {
    $j = 1;
    while ($j <= 4) {
        echo $a . " ";
        $j++;
    }
    echo "\n";
    $a++;
}
?>
    </pre>
</div>

<div class="box">
    <h2>3) Do While – ตัวเลขตามบรรทัด</h2>
    <pre>
<?php
// 3) Do While – ตัวเลขตามบรรทัด
$b = 1;
do {
    $j = 1;
    while ($j <= $b) {
        echo $b . " ";
        $j++;
    }
    echo "\n";
    $b++;
} while ($b <= 3);
?>
    </pre>
</div>

<a href="wep_page.php">กลับหน้าแรก ⏪⏪</a>

</body>
</html>
