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

        if(isset($_POST['sothunhat']))  
            $sothunhat=trim($_POST['sothunhat']); 
        else $sothunhat="";
        if(isset($_POST['sothunhi']))  
            $sothunhat=trim($_POST['sothunhi']); 
        else $sothunhi="";    
        
        if(isset($_POST['tinh'])){
            if (is_numeric($sothunhat) && is_numeric($sothunhi)){
                $sothunhat;
                $sothunhi;
            }
            else{
                echo "<font color='red'>Vui lòng nhập vào đúng thông tin</font>"; 
            }        
        }
    ?>

<form align="right" action="ketquatinh.php" method="post">
    <table>
        <thead> 
            <th colspan="2" align="center" ><h2>PHÉP TÍNH TRÊN HAI SỐ </h2></th>
        </thead>
        <tr>
            <td><font color="red">Chọn Phép Tính:
                <input type="radio" name="pheptinh" value="Cộng" checked>Cộng
                <input type="radio" name="pheptinh" value="Trừ">Trừ
                <input type="radio" name="pheptinh" value="Nhân">Nhân
                <input type="radio" name="pheptinh" value="Chia">Chia
                </font>
            </td>                    
        </tr>
        <tr>
            <td>Số Thứ Nhất:
                <input type="text" name="sothunhat" &nbsp value="<?php  echo $sothunhat;?> "/>
            </td>
        </tr>
        <tr>
            <td>Số Thứ Nhì:
                <input type="text" name="sothunhi" value="<?php  echo $sothunhi;?> "/>
            </td>            
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /> </td>
        </tr>
    </table>

</form>

</body>
</html>