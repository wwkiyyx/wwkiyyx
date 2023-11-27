<!DOCTYPE html>
<html>
<body>

<?php
move_uploaded_file($_FILES["file"]["tmp_name"], "xiaomi/" . $_FILES["file"]["name"]);
echo "我的第一段 PHP 脚本！";
?>

</body>
</html>


<!DOCTYPE html>
<html>
<body>

<?php
move_uploaded_file($_FILES["file"]["tmp_name"], "xiaomi/" . date("Y_m_d_H_i_s") . ".jpg");
echo "我的第一段 PHP 脚本！";
?>

</body>
</html>










<!DOCTYPE html>
<html>
<body>

<?php
echo "我的第一段 PHP 脚本！";
?>

<form action="xiaomi.php" method="post"  enctype="multipart/form-data">

            <label for="file">Filename:</label>

            <input type="file" name="file" id="file" /> 

            <br />

            <input type="submit" name="submit" value="Submit" />

        </form>

</body>
</html>





