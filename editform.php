<?php include "connect.php" ?>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username=?");
    $stmt->bindParam(1,$_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
?>

<html>
<head><meta charset = "utf-8"></head>
<body>
    <form action = "edit-member.php" method = "post">
        Username: <input type = "hidden" name = "username" value = "<?=$row["username"]?>"><br><br>
        รหัสผ่าน: <input type = "text" name = "password" value = "<?=$row["username"]?>"><br><br>
        ชื่อ: <input type = "text" name = "name" value = "<?=$row["username"]?>"><br><br>
        ที่อยู่: <textarea name="address" rows="3" cols="40"><?=$row["address"]?></textarea><br><br>
        เบอร์โทร: <input type = "text" name = "mobile" pattern = "[0-9][0-9][0-9]-[0-9][0-9][0-9][0-9][0-9][0-9][0-9]" title = "Please try again" 
        value = "<?=$row["mobile"]?>"><br><br>
        อีเมล: <input type = "text" name = "email" value = "<?=$row["username"]?>"><br><br>
        <input type = "submit" value="แก้ไขสมาชิก">
</form>
</body>
</html>