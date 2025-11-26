<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ข้อมูลนักศึกษา</title>
    <style>
        body {
            font-family: Tahoma;
            background: #ebf6a2ff;
            padding: 40px;
        }
        .card {
            background: white;
            padding: 20px;
            width: 400px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px #efe093ff;
        }
        h2 { text-align: center; }
    </style>
</head>
<body>

<div class="card">
    <h2>ข้อมูลนักศึกษา</h2>

    <?php
        // กำหนดตัวแปรสำหรับข้อมูลนักศึกษา
        $university = "มหาวิทยาลัยตัวอย่าง";
        $faculty = "คณะเทคโนโลยีสารสนเทศ";
        $major = "สาขาวิทยาการคอมพิวเตอร์";

        $name = "นายสมชาย ใจดี";
        $info = "ชอบเขียนโปรแกรมและเล่นกีฬา";
    ?>

    <!-- แสดงผลข้อมูล -->
    <p><b>มหาวิทยาลัย:</b> <?= $university ?></p>
    <p><b>คณะ:</b> <?= $faculty ?></p>
    <p><b>สาขา:</b> <?= $major ?></p>
    <hr>
    <p><b>ชื่อ–สกุล:</b> <?= $name ?></p>
    <p><b>ข้อมูลแนะนำตัว:</b> <?= $info ?></p>
</div>

</body>
</html>
