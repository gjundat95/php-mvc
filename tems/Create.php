<html>
    <head>
        <title>Tạo mới mặt hàng</title>
    </head>
    <body>
        <h1>Tạo mới mặt hàng</h1>
        <br>
        <form action="?action=doCreate" method="post">
            <br>Tên Hàng
            <br><input name="tenhang" id="tenhang" type="text">
            
            <br>Hãng Sản Xuất
            <br><input name="hangsanxuat" id="hangsanxuat" type="text">
            
            <br>Số Lượng Còn
            <br><input name="soluongcon" id="soluongcon" type="number">
            
            <br>Giá
            <br><input name="giaban" id="giaban" type="number">
            
            <br><p style="color: red;"><?php echo $data ?></p>
            <br><button type="submit">Thêm mặt hàng</button>
        </form>
    </body>
</html>

