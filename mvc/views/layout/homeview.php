
<style>
    #chatframe {
        min-height: 500px;
        width: 420px;
        border: solid 1px #f5f5f5;
        box-shadow: 5px 10px 10px 10px grey;
        display: none;
        position: absolute;
        border-radius: 25px 0px;
        background-color: white;
        float: right;
        z-index: 9999;
    }

    .mess {
        overflow: auto;
        border: solid 1px #f5f5f5;
        border-bottom: solid 1px orangered;
        height: 400px;
        width: 390px;
        padding: 10px;
    }

    .off {
        border-radius: 25px 0px;
        padding: 17px;
        border-bottom: solid 2px white;
        background-color: tomato;
        font-weight: bold;
        cursor: pointer;
    }

    button {
        min-width: 145px;
        padding: 15px;
        border: none;
        background-color: tomato;
        border-radius: 50px;
        color: white;
        box-shadow: 5px 5px 5px grey;
    }

    .shape {
        background-color: white;
        width: 20px;
        border: solid 1px white;
        border-radius: 100px;
    }

    .shape span {
        color: black;
        margin-left: 5px;
    }

    #cus {
        min-width: 200px;
        float: left;
        padding: 5px;
        color: black;
        box-sizing: border-box;
        border-radius: 5px;
        border: 1px solid orangered;
        background-color: tomato;
        margin-bottom: 5px;
        margin-top: 5px;
    }

    #ad {
        background-color: white;
        min-width: 200px;
        float: right;
        padding: 5px;
        color: black;
        border-radius: 5px;
        border: 1px solid orangered;
        margin-bottom: 5px;
        margin-top: 5px;
    }

    .wrap {
        height: 400px;
    }

    form {
        margin-top: 50px;
    }

    .frameinput {
        min-height: 75px;
        width: 100%;

    }

    .inmakeup {
        outline: none;
        height: 35px;
        width: 290px;
        border-radius: 15px 0px 0px 15px;
        border: solid 2px orangered;
    }

    .btnmakeup {
        height: 40px;
        width: 100px;
        background-color: tomato;
        border: none;
        font-weight: bolder;
        border-radius: 0px 15px 15px 0px;
    }
</style>
<script>
    function MyF() {
        document.getElementById("chatframe").style.display = "block";
    }

    function MyFun() {
        document.getElementById("chatframe").style.display = "none";

    }
</script>
<div class="content">
    <div class="item2">
        <aside>
            <div class="slides">
                <input type="radio" name="radio_btn" id="radio1">
                <input type="radio" name="radio_btn" id="radio2">
                <input type="radio" name="radio_btn" id="radio3">
                <input type="radio" name="radio_btn" id="radio4">

                <div class="slide">
                    <img src="public/img/hinh1.jpg">
                </div>

                <div class="slide">
                    <img src="public/img/hinhslide2.jpg">
                </div>

                <div class="slide">
                    <img src="public/img/hinhslide3.jpg">
                </div>

                <div class="slide">
                    <img src="public/img/hinhslide4.jpg">
                </div>

                <div class="navi_auto">
                    <div class="auto_btn1"></div>
                    <div class="auto_btn2"></div>
                    <div class="auto_btn3"></div>
                    <div class="auto_btn4"></div>
                </div>

                <div class="navi_manual">
                    <label for="radio1" class="manual_btn"></label>
                    <label for="radio2" class="manual_btn"></label>
                    <label for="radio3" class="manual_btn"></label>
                    <label for="radio4" class="manual_btn"></label>
                </div>
            </div>
        </aside>
    </div>
    <div class="tieude">
        <h1>SẢN PHẨM NỔI BẬT</h1>
    </div>
    <div class="product">
        <div class="items">
            <?php
            foreach ($data['sanphamnoibat'] as $spnb) {



            ?>
                <div class="item">
                    <img src="public/img/<?php echo $spnb->getHinh_sp(); ?>">
                    <div class="cart-a">
                        <p><?php echo $spnb->getTen_sp();
                            ?></p>
                        <?php echo number_format($spnb->getGia_sp(), '0', ",", ".");  ?> VND
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
    <!-----------------------------LAM NUT XEM ALL----------------------------------------->
    <div class="button">

        <a href="./Product"><input type="button" class="btn-xem" name="xem" value="XEM TẤT CẢ"></a>

    </div>
    <div class="chat_cus" style="margin-top: 200px; right:10px;  min-height: 350px; position: fixed; bottom: 75px;">
        <?php
        error_reporting(0);
        if (isset($_POST['tin_nhan']) && !empty($_POST['tin_nhan'])) {
            $mes = $_POST['tin_nhan'];
            $f = fopen("chat.txt", "a");
            fwrite($f, "cus-" . $mes . "\n");
            fclose($f);
        }
        ?>
        <div id="chatframe" style="    display: none;
    left: -266px;
    bottom: -98px;">
            <div class="off">
                <a onclick="MyFun()">
                    <div class="shape">
                        <span>&#215;</span>
                    </div>
                </a>
            </div>
            <div class="wrap">
                <div class="mess">
                    <?php
                    $f = fopen("chat.txt", "r") or die("Không mở đc file");
                    while (!feof($f)) {
                        $nd = fgets($f);
                        $mang = explode("-", $nd);
                        if ($mang[0] == "cus") {
                    ?>

                            <div id="cus">
                                <?php
                                echo $mang[1];
                                ?>
                            </div>
                        <?php
                        } else if ($mang[0] == "ad") {
                        ?>
                            <div id="ad">
                                <?php
                                echo $mang[1]; ?>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <!-- phân tách biệt giữa form nhập và form xuất -->
            <form id="chatbox" method="POST" class="frameinput">
                <table>
                    <tr>
                        <td><input type="hidden" name="may" value="cus"></td>
                        <td><input type="text" name="tin_nhan" id="tin_nhan" placeholder="Nhập vào đây..." class="inmakeup" autocomplete="off" autofocus></td>
                        <td><input type="submit" name="submit" value="Gửi" class="btnmakeup"></td>
                    </tr>
                </table>
            </form>
            <script>
                $(function() {
                    $("#chatbox").submit(function() {
                        $.ajax({
                            type: "POST",
                            url: "data.php",
                            data: {
                                tin_nhan: $("#tin_nhan").val(),
                                may_chat: 'cus'
                            },
                            success: function(data) {
                                $(".mess").html(data);
                                $("#tin_nhan").val("");

                                $(".mess").scrollTop($(".mess")[0].scrollHeight);
                            }
                        });
                        e.preventDefault();
                    })
                    //load lại
                    setInterval(function() {
                        $(".wrap").load("index.php .mess", function() {
                            $(".mess").scrollTop($(".mess")[0].scrollHeight);
                        });
                    }, 1000);
                })
            </script>
        </div>
        <button type="button" onclick="MyF()">Chat now!</button>
    </div>

</div>