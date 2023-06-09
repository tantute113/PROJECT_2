<div class="content">

    <div class="free">
        <img src="public/img/background.jpg">
    </div>
    <div class="banner">
        <div>

            <marquee behavior="scroll" Loop=1000 ScrollDelay=0.1 ScrollAmount=15>
                <h3>hello các bạn</h3>
            </marquee>
            <?php
            foreach ($data['sv'] as $test) {
            }



            ?>
        </div>
    </div>
    <div class="xulyphantrang">
        <?php
        // PHẦN XỬ LÝ PHP
        // BƯỚC 1: KẾT NỐI CSDL
        $conn = mysqli_connect('localhost', 'root', '', 'doan3');

        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
        $result = mysqli_query($conn, 'select count(GG_MA) as total from magiamgia');
        $rows = mysqli_fetch_assoc($result);
        $total_records = $rows['total'];

        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 3;

        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);

        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page) {
            $current_page = $total_page;
        } else if ($current_page < 1) {
            $current_page = 1;
        }

        // Tìm Start
        $start = ($current_page - 1) * $limit;

        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        $result = mysqli_query($conn, "SELECT * FROM magiamgia WHERE TT_MATT='1' LIMIT $start, $limit");
        ?>
    </div>
    <div class="khungbu">
        <div class="khung1">
            <h1>MÃ GIẢM GIÁ</h1>
        </div>
        <div class="khung2">

            <?php
            while ($row = mysqli_fetch_assoc($result)) {


                // foreach ($data['seeS'] as $row){
            ?>
                <div class="khung2_1">
                    <div class="hinhanh"><img src="public/img/<?php echo $row['GG_ANH'] ?>" alt="Không có ảnh"></div>
                    <div class="chung">
                        <div class="thongtin">
                            <a href="./Detailsale/index/<?php echo $row['GG_MA'] ?>"><?php echo $row['GG_TEN'] ?>
                            </a>
                        </div>
                        <div class="ng_batdau"><?php echo $row['GG_BATDAU'] ?></div>
                        <div class="ng_ketthuc"><?php echo $row['GG_KETHUC']  ?></div>
                        <a href="./Detailsale/index/<?php echo $row['GG_MA'] ?>">Xem chi tiết</a>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="control-btn" style="width:99%;">
                <div class="btn" style="float:right; margin-right:15px;" >
                    <?php
                    // PHẦN HIỂN THỊ PHÂN TRANG
                    // BƯỚC 7: HIỂN THỊ PHÂN TRANG

                    // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                    if ($current_page > 1 && $total_page > 1) {
                        echo '<a href="./Sale?page=' . ($current_page - 1) . '">Prev</a> | ';
                    }

                    // Lặp khoảng giữa
                    for ($i = 1; $i <= $total_page; $i++) {
                        // Nếu là trang hiện tại thì hiển thị thẻ span
                        // ngược lại hiển thị thẻ a
                        if ($i == $current_page) {
                            echo '<span>' . $i . '</span> | ';
                        } else {
                            echo '<a href="./Sale?page=' . $i . '">' . $i . '</a> | ';
                        }
                    }