<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin</title>
</head>
<body>
    
    <?php 
        $name = $_POST['name'];
        $diachi = $_POST['diachi'];
        $SDT = $_POST['SDT'];
        $ghichu =$_POST['comment'];
        
        $gioitinh="";
        if(isset($_POST['radGT'])&&$_POST['radGT']=='Nữ') {
            $gioitinh="Nữ";
        }  
        else $gioitinh="Nam";

        $quoctich="";
        if(isset($_POST['quoctich'])&&$_POST['quoctich']=='VN') {
            $quoctich="Việt Nam";
        }  
        else $quoctich="Mỹ";

    ?>
    <form action="" method="post">
        <table>
            <h2>Bạn đã đăng nhập thành công, dưới đây là những thông tin bạn nhập:</h2>
            <tr>
                <td>Họ Tên:<?php echo $name;?></td>               
            </tr>
            <tr>
                <td>Giới Tính:<?php echo $gioitinh;?></td>
            </tr>
            <tr>
                <td>Địa Chỉ:<?php echo $diachi;?></td>
            </tr>
            <tr>
                <td>SĐT:<?php echo $SDT;?></td>
            </tr>
            <tr>
                <td>Quốc Tịch:<?php echo $quoctich; ?></td>
            </tr>
            <tr>
                <td>Ghi Chú:<?php echo $ghichu; ?></td>
            </tr>
            <tr>
            <td align="center"><a href="javascript:window.history.back(-1);">Quay Lại Trang Trước</a></td>
        </tr>
        </table>
    </form>

</body>
</html>