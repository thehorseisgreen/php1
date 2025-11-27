<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>Loop Patterns (PHP)</title>
<style>
    body { font-family: monospace; padding: 20px; background: #eaf4ff; }
    .box { background: #fff; padding: 15px; margin-bottom: 20px; border-radius: 10px; }
    pre { background: #f4f8ff; padding: 10px; border-radius: 5px; }
</style>
</head>
<body>

<h1>Loop php</h1>

<div class="box">
    <pre>
<?php

// For Loop ทั้งหมด
echo "+=== For Loop ===+\n\n";

// 1) ดาวเพิ่ม
echo "1) ดาวเพิ่ม\n";
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}
echo "\n";

// 2) ตัวเลขซ้ำ
echo "2) ตัวเลขซ้ำ\n";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 4; $j++) {
        echo $i . " ";
    }
    echo "\n";
}
echo "\n";

// 3) ตัวเลขเพิ่มทีละบรรทัด
echo "3) ตัวเลขเพิ่มทีละบรรทัด\n";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i . " ";
    }
    echo "\n";
}
echo "\n";

// 4) กรอบดาว
echo "4) กรอบดาว\n";
$rows = 5; $cols = 6;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $cols; $j++) {
        if ($i==1 || $i==$rows || $j==1 || $j==$cols) echo "* ";
        else echo ($i-1)." ";
    }
    echo "\n";
}
echo "\n";

// 5) ตัวเลขลดลง
echo "5) ตัวเลขลดลง\n";
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i . " ";
    }
    echo "\n";
}
echo "\n";

// While Loop ทั้งหมด

echo "++=== While Loop ===++\n\n";

// 1) ดาวเพิ่ม
echo "1) ดาวเพิ่ม\n";
$i = 1;
while ($i <= 4) {
    $j = 1;
    while ($j <= $i) {
        echo "*";
        $j++;
    }
    echo "\n";
    $i++;
}
echo "\n";

// 2) ตัวเลขซ้ำ
echo "2) ตัวเลขซ้ำ\n";
$i = 1;
while ($i <= 3) {
    $j = 1;
    while ($j <= 4) {
        echo $i . " ";
        $j++;
    }
    echo "\n";
    $i++;
}
echo "\n";

// 3) ตัวเลขเพิ่มทีละบรรทัด
echo "3) ตัวเลขเพิ่มทีละบรรทัด\n";
$i = 1;
while ($i <= 3) {
    $j = 1;
    while ($j <= $i) {
        echo $i . " ";
        $j++;
    }
    echo "\n";
    $i++;
}
echo "\n";

// 4) กรอบดาว
echo "4) กรอบดาว\n";
$i = 1;
while ($i <= 5) {
    $j = 1;
    while ($j <= 6) {
        if ($i==1 || $i==5 || $j==1 || $j==6) echo "* ";
        else echo ($i-1)." ";
        $j++;
    }
    echo "\n";
    $i++;
}
echo "\n";

// 5) ตัวเลขลดลง
echo "5) ตัวเลขลดลง\n";
$i = 3;
while ($i >= 1) {
    $j = 1;
    while ($j <= $i) {
        echo $i . " ";
        $j++;
    }
    echo "\n";
    $i--;
}
echo "\n";

// Do While Loop ทั้งหมด
echo "+++=== Do While Loop ===+++\n\n";

// 1) ดาวเพิ่ม
echo "1) ดาวเพิ่ม\n";
$i = 1;
do {
    $j = 1;
    do {
        echo "*";
        $j++;
    } while ($j <= $i);
    echo "\n";
    $i++;
} while ($i <= 4);
echo "\n";

// 2) ตัวเลขซ้ำ
echo "2) ตัวเลขซ้ำ\n";
$i = 1;
do {
    $j = 1;
    do {
        echo $i . " ";
        $j++;
    } while ($j <= 4);
    echo "\n";
    $i++;
} while ($i <= 3);
echo "\n";

// 3) ตัวเลขเพิ่มทีละบรรทัด
echo "3) ตัวเลขเพิ่มทีละบรรทัด\n";
$i = 1;
do {
    $j = 1;
    do {
        echo $i . " ";
        $j++;
    } while ($j <= $i);
    echo "\n";
    $i++;
} while ($i <= 3);
echo "\n";

// 4) กรอบดาว
echo "4) กรอบดาว\n";
$i = 1;
do {
    $j = 1;
    do {
        if ($i==1 || $i==5 || $j==1 || $j==6) echo "* ";
        else echo ($i-1)." ";
        $j++;
    } while ($j <= 6);
    echo "\n";
    $i++;
} while ($i <= 5);
echo "\n";

// 5) ตัวเลขลดลง
echo "5) ตัวเลขลดลง\n";
$i = 3;
do {
    $j = 1;
    do {
        echo $i . " ";
        $j++;
    } while ($j <= $i);
    echo "\n";
    $i--;
} while ($i >= 1);

?>
    </pre>
</div>
<a href="wep_page.php">กลับหน้าแรก ⏪⏪</a>
</body>
</html> 