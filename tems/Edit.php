<html>
    <head>
        <title>Edit</title>
    </head>
    <body>
        <h1>Sửa mặt hàng</h1>
        <br>
        <form action="?action=doCreate" method="post">
            <br>Tên Hàng
            <br><input name="tenhang" id="tenhang" type="text" value="<?php echo $data[0]->tenhang ?>">
            
            <br>Hãng Sản Xuất
            <br><input name="hangsanxuat" id="hangsanxuat" type="text" value="<?php echo $data[0]->hangsanxuat ?>">
            
            <br>Số Lượng Còn
            <br><input name="soluongcon" id="soluongcon" type="number" value="<?php echo $data[0]->soluongcon ?>">
            
            <br>Giá
            <br><input name="giaban" id="giaban" type="number" value="<?php echo $data[0]->giaban ?>">
            
            
            <br><button type="submit">Save</button>
        </form>
    </body>
</html>