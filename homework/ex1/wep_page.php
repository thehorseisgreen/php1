<?php
// ข้อมูลนักศึกษาเก็บในตัวแปร PHP
$name = "นางสาว จิตรสุภา สีหา";
$studentID = "67040233127";
$faculty = "วิทยาศาสตร์ สาขาเทคโนโลยีสารสนเทศ";
$year = "ปี 2";
$interest = "อ่านนิยาย ดูหนัง ตัดต่อ";
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ข้อมูลนักศึกษา (PHP)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f8ff;
            text-align: center;
            padding: 30px;
        }
        .box {
            background: white;
            width: 350px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
        }
        img {
            width: 120px;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        ul {
            text-align: left;
            list-style: none;
            padding: 0;
        }
        ul li {
            padding: 8px 0;
        }
        b {
            color: #0055aa;
        }
        a {
            display: inline-block;
            margin: 10px;
            padding: 8px 15px;
            background: #1b71d1;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="box">
        <img src="PIC/aa.jpg" alt="profile">

        <h2>ข้อมูลนักศึกษา</h2>

        <ul>
            <li><b>ชื่อ–นามสกุล:</b> <?php echo $name; ?></li>
            <li><b>รหัสนักศึกษา:</b> <?php echo $studentID; ?></li>
            <li><b>คณะ:</b> <?php echo $faculty; ?></li>
            <li><b>ปีการศึกษา:</b> <?php echo $year; ?></li>
            <li><b>ความสนใจ:</b> <?php echo $interest; ?></li>
        </ul>
    </div>

    <a href="loop.php">Loop🐔⏩⏩</a>
   

</body>
</html>
