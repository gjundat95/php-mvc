<html>
    <head>
        <title>Detail - Quan Ly Ban Hang</title>
    </head>
    <body>
        <h1>Chi tiết mặt hàng</h1>
        
        <br>
        <table border="1px">
            <tr>
                <th width="100px">Mã Hàng</th>
                <th width="200px">Tên Hàng</th>
                <th width="150px">Nhà Sản Xuất</th>
                <th width="100px">Số Lượng Còn</th>
                <th width="100px">Giá Tiền</th>
            </tr>
            <?php
            foreach ($data as $item) {
                echo '<tr>';
                echo '<td>'.$item->mahang.'</td>';
                echo '<td>'.$item->tenhang.'</td>';
                echo '<td>'.$item->hangsanxuat.'</td>';
                echo '<td>'.$item->soluongcon.'</td>';
                echo '<td>'.$item->giaban.'</td>';
                
                echo '</tr>';
            }
            ?>
        </table>
        <a href="?action=">Quay Lại Trang Chủ</a>
    </body>
</html>