<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Toán Trên Hai Số</title>

    <style type="text/css">

        table{
            margin-left: 500px;
            background: AliceBlue;
            border: 0 solid yellow;
        }

        thead{           
            font-style: italic;
            background: PapayaWhip;    
        }

        td {
            color: black;
        }

        h2{
            font-family: "Times New Roman";
            text-align: center;
            /* text-anchor: middle; */
            color: SteelBlue;
            font-size: large;
        }
    </style>
</head>

<body>

    <?php 
        $ketqua = 0;
        $sothunhat = $_POST['sothunhat'];
        $sothunhi = $_POST['sothunhi']; 

        if (is_numeric($sothunhat) && is_numeric($sothunhi)){
            $sothunhat;
            $sothunhi;
        
            if(isset($_POST['pheptinh'])&&$_POST['pheptinh']=='Cộng') {
                $ketqua = $sothunhat + $sothunhi;
                $pheptinh = "Cộng";
            }      
            if(isset($_POST['pheptinh'])&&$_POST['pheptinh']=='Trừ') {
                $ketqua = $sothunhat - $sothunhi;   
                $pheptinh = "Trừ";
            }
           
            if(isset($_POST['pheptinh'])&&$_POST['pheptinh']=='Nhân') {
                $ketqua = $sothunhat * $sothunhi;
                $pheptinh = "Nhân";
            }   
           
            if(isset($_POST['pheptinh'])&&$_POST['pheptinh']=='Chia'){
                $ketqua = $sothunhat / $sothunhi;
                $pheptinh = "Chia";
            }
        }
        else{
            $pheptinh="";
            echo "<font color='red'>Vui lòng nhập vào đúng thông tin</font>"; 
        }        
        
    ?>

<form align="right" action="ketquatinh.php" method="post">
    <table>
        <thead> 
            <th colspan="2" align="center" ><h2>PHÉP TÍNH TRÊN HAI SỐ </h2></th>
        </thead>
        <tr>
            <td><font color="red">Chọn Phép Tính:</font></td>
            <td align="left"><?php echo $pheptinh ?></td>
        </tr>
        <tr>
            <td>Số 1</td>
            <td><input type="text" name="sothunhat" value="<?php  echo $sothunhat;?> "/></td>
        </tr>
        <tr>
            <td>Số 2</td>
            <td><input type="text" name="sothunhi" value="<?php  echo $sothunhi;?> "/></td>
        </tr>
        <tr>
            <td>Kết Quả</td>
            <td><input type="text" name="ketqua" value="<?php  echo $ketqua;?> "/></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><a href="javascript:window.history.back(-1);">Quay Lại</a></td>
        </tr>
        
    </table>

</form>

</body>
</html>