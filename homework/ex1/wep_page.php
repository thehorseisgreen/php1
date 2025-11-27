<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ข้อมูลส่วนแนะนำตัว</title>
    <style>
        body {
            font-family: Tahoma;
            background: #f0f8ff;
            padding: 20px;
        }
        .container {
            width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px #bcd;
        }
        h2 {
            color: #0077cc;
            border-left: 6px solid #4da6ff;
            padding-left: 10px;
        }
        ul {
            font-size: 18px;
            line-height: 1.8;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>1. ส่วนแนะนำตัว (Introduction / Profile)</h2>

    <?php
        $fullname = "นางสาว จิตรวสุภา สีหา";
        $student_id = "67040233127";
        $faculty = "วิทยาศาสตร์ มหาวิทยาลัยราชภัฏอุดรธานี";
        $major = "เทคโนโลยีสารสนเทศ";
        $year = "นักศึกษาปี 2";
        $interest = "อ่านนิยาย";  // ถ้ายังไม่มีให้ปล่อยว่างไว้ก่อน
    ?>

    <ul>
        <li><b>ชื่อ-นามสกุล :</b> <?php echo $fullname; ?></li>
        <li><b>รหัสนักศึกษา :</b> <?php echo $student_id; ?></li>
        <li><b>คณะ :</b> <?php echo $faculty; ?> สาขา: <?php echo $major; ?></li>
        <li><b>ปีการศึกษา :</b> <?php echo $year; ?></li>
        <li><b>ความสนใจพิเศษ :</b> <?php echo $interest; ?></li>
    </ul>

</div>

</body>
</html>
