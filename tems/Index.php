<html>
    <head>
        <title>Index - Quan Ly Ban Hang</title>
    </head>
    <body>
        <h1>Danh Sách mặt hàng</h1>
        <a href="?action=create">Tạo mới mặt hàng</a>
        <br>
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
                echo '<td><a href="?action=detail&mahang='.$item->mahang.'">Xem</a></td>';
                echo '<td><a href="?action=edit&mahang='.$item->mahang.'">Sửa</td>';
                echo '<td><a href="?action=delete&mahang='.$item->mahang.'">Xóa</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </body>
</html>


