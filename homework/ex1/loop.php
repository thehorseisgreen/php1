<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>Loop</title>
<style>
    body { font-family: Arial; padding: 20px; background:#eaf4ff; }
    .box { background: #fff; padding: 15px; margin-bottom: 20px; border-radius:10px; }
    pre { background:#f4f8ff; padding:10px; border-radius:5px; }
</style>
</head>
<body>

<h1> Loop </h1>

<div class="box">
    <h2>1) For Loop – ดาวเพิ่ม</h2>
    <pre id="p1"></pre>
</div>

<div class="box">
    <h2>2) While Loop – ตัวเลขซ้ำ</h2>
    <pre id="p2"></pre>
</div>

<div class="box">
    <h2>3) Do While Loop – ตัวเลขเพิ่มทีละบรรทัด</h2>
    <pre id="p3"></pre>
</div>

<script>

// 1) For Loop – ดาวเพิ่ม
let p1 = "";
for (let i = 1; i <= 4; i++) {
    for (let j = 1; j <= i; j++) {
        p1 += "*";
    }
    p1 += "\n";
}
document.getElementById("p1").textContent = p1;


// 2) While Loop – ตัวเลขซ้ำ
let p2 = "";
let a = 1;
while (a <= 3) {
    let j = 1;
    while (j <= 4) {
        p2 += a + " ";
        j++;
    }
    p2 += "\n";
    a++;
}
document.getElementById("p2").textContent = p2;


// 3) Do While – ตัวเลขตามบรรทัด
let p3 = "";
let b = 1;
do {
    let j = 1;
    while (j <= b) {
        p3 += b + " ";
        j++;
    }
    p3 += "\n";
    b++;
} while (b <= 3);
document.getElementById("p3").textContent = p3;

</script>
<a href="wep_page.html">กลับหน้าแรก⏪⏪</a>
</body>
</html>
