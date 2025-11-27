<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>ข้อมูลนักศึกษา</title>
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
</style>
</head>
<body>

<div class="box">
    <img src="PIC/aa.jpg" alt="profile">

    <h2>ข้อมูลนักศึกษา</h2>

    <ul>
        <li><b>ชื่อ–นามสกุล:</b> <?php echo "นางสาว จิตรสุภา สีหา"; ?></li>
        <li><b>รหัสนักศึกษา:</b> <?php echo "67040233127"; ?></li>
        <li><b>คณะ:</b> <?php echo "วิทยาศาสตร์ สาขาเทคโนโลยีสารสนเทศ"; ?></li>
        <li><b>ปีการศึกษา:</b> <?php echo "ปี 2"; ?></li>
        <li><b>ความสนใจ:</b> <?php echo "อ่านนิยาย ดูหนัง ตัดต่อ"; ?></li>
    </ul>
</div>
<br><br><br><br>

<a href="loop.php">loop⏩⏩</a>

</body>
</html>
