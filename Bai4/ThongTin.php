<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập Thông Tin </title>


</head>
<body>
    
    <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = '';
            $diachi = '';
            $SDT = '';

        }
    ?>

<form action="xulyThongTin.php" method="post">
    <fieldset><legend>Enter your information:</legend>

    <p><b>Họ Tên:</b> <input type="text" name="name"  value="<?php if (isset($name)) echo $name; ?>" /></p>

    <p><b>Địa Chỉ:</b> <input type="text" name="diachi" value="<?php if (isset($diachi)) echo $diachi; ?>" /></p>

    <p><b>Số Điện Thoại:</b> <input type="text" name="SDT"  value="<?php if (isset($SDT)) echo $SDT; ?>" /></p>

    <p><b>Giới Tính:</b> 
        <input type="radio" name="radGT" value="Nam"
        <?php if(isset($_POST['radGT'])&&$_POST['radGT']=='Nam') echo 'checked="checked"';?> checked/>Nam
	    <input type="radio" name="radGT" value="Nu" 
        <?php if(isset($_POST['radGT'])&&$_POST['radGT']=='Nu') echo 'checked="checked"';?>/>Nữ

    </p>

    <p><b>Quốc Tịch:</b> 
        <select name="quoctich">
			<option value="VN" <?php if(isset($_POST['quoctich'])&& $_POST['quoctich']=='VN') echo 'selected';?>>
				Việt Nam
			</option>
			<option value="My" <?php if(isset($_POST['quoctich'])&& $_POST['quoctich']=='My') echo 'selected';?>>
				Mỹ
			</option>
		</select>
    </p>

    <p><b>Các Môn Đã Học:</b> 
        <input type="checkbox" name="chk1" value="php" 
		    <?php if(isset($_POST['chk1'])&& $_POST['chk1']=='php') echo 'checked'; else echo ""?>/>PHP 
	    <input type="checkbox" name="chk2" value="mysql"
		    <?php if(isset($_POST['chk2'])&& $_POST['chk2']=='mysql') echo 'checked'; else echo ""?>/>MySQL
        <input type="checkbox" name="chk3" value="c#"
		    <?php if(isset($_POST['chk3'])&& $_POST['chk3']=='c#') echo 'checked'; else echo ""?>/>C#
        <input type="checkbox" name="chk4" value="xml"
		    <?php if(isset($_POST['chk4'])&& $_POST['chk4']=='xml') echo 'checked'; else echo ""?>/>XML
        <input type="checkbox" name="chk5" value="python"
		    <?php if(isset($_POST['chk5'])&& $_POST['chk5']=='python') echo 'checked'; else echo ""?>/>Python
    </p>

    <p><b>Ghi Chú:</b> <textarea name="comment" rows="3" cols="40"><?php if(isset($_POST['comment'])) echo $_POST['comment']; ?></textarea></p>
    <input type="submit" name="submit" value="Gửi"> 
    <input type="submit" name="submit" value="Hủy"> 
  </fieldset>
</body>
</html>