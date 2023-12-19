<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=vietravel", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    $stmt = $conn->prepare("SELECT id, name, image,description, price FROM products");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../content/css/reset.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="../content/css/header-footer.css">
<link rel="stylesheet" href="../content/css/style.css">
<link rel="stylesheet" href="../content/css/font.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  table {
    border-collapse: collapse;
    width: 100%;
  }
  
  th, td {
    text-align: left;
    padding: 8px;
  }
  
  th {
    background-color: #4CAF50;
    color: white;
  }
  
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  
  input[type="number"] {
    width: 50px;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
  }
  
  button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 5px;
    cursor: pointer;
  }
  
  button[type="submit"]:hover {
    background-color: #3e8e41;
  }
</style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">

</head>

<body>
    <header class="header">
        <nav class="navbar">
            <div class="navbar-logo">
                <a href="index.php">
                    <img src="../content/images/VIETRAVEL - TRANQUILILY.png" alt="Logo">
                </a>
            </div>
            <ul class="navbar-menu">
                <li><a href="introduce.php">Giới Thiệu</a></li>
                <li class="has-submenu">
                    <a href="tour.php">Gói Tour</a>
                    <ul class="submenu">
                        <li><a href="#">Tour Châu Âu</a></li>
                        <li><a href="#">Tour Châu Á </a></li>
                        <li><a href="#">Tour Nam Mỹ</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="service.php">Dịch Vụ</a>
                    <ul class="submenu">
                        <li><a href="#">Vé Máy Bay</a></li>
                        <li><a href="#">Vé Visa </a></li>
                        <li><a href="#">Vận chuyển - Đưa đón</a></li>
                        <li><a href="">Khách Sạn -Lưu Trú</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="news.php">Tin Tức</a>
                    <ul class="submenu">
                        <li><a href="#">Tin Trong Nước</a></li>
                        <li><a href="#">Tin Quốc Tế </a></li>

                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="libary.php">Thư Viện</a>
                    <ul class="submenu">
                        <li><a href="#">Hình Ảnh</a></li>
                        <li><a href="#">Video </a></li>

                    </ul>
                </li>
                <li><a href="contact.php">Liên Hệ</a></li>
                <!-- <ion-icon name="person-add-outline"></ion-icon> -->
                <li>
                    <div class="has-submenu">
                        <a href="./signup.php">Đăng Ký</a>
                    </div>
                </li>

                <li class="has-submenu">
                    <!-- <ion-icon name="person-outline"></ion-icon> -->
                    <a href="login.php">Đăng Nhập</a>
                    <ul class="submenu">
                        <li><a href="login.php">User</a></li>
                        <li><a href="../admin/index.php">Admin </a></li>
                    </ul>
                </li>

                <li><a href="#"><i class="fas fa-search"></i></a>Tìm Kiếm</li>
            </ul>
        </nav>
    </header>

    <div>
    <table>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Xóa</th>
            </tr>

            <?php
            $stt = 1;
            $tongtien = 0;
            //        $sp=array($id,$tensp,$img,$gia,$sl,$thanhtien,$tongtien);
            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $sp) {

                    // $thanhtien = $sp[3] * $sp[4];
                    // $tongtien = $tongtien + $thanhtien;
                    echo "<tr>
                                            <td>$stt</td>
                                            <td>$sp[1]</td>
                                            <td><img src='$sp[2]' style='width:100px; height:130px;'> </td>
                                            <td>$sp[3]</td>
                                            <td>$sp[1]</td>
                                            <td>$stt</td>
                                            <td><a href='../Controller/del.php?stt=$stt'> Xóa</a></td>
                                            
                                        </tr>";
                    $stt++;
                }
            }
            //Khởi động session
    
            //Khởi tạo mảng session cart nếu chưa có

            // if (!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
            // if (isset($_POST["dathang"]) && ($_POST["dathang"])) {
            //     $stt = $_POST['stt'];
            //     $name = $_POST["name"];
            //     $imgage = $_POST['imgage'];
            //     $price = $_POST["price"];
            //     $sl = 1;
            //     $i = 0;
            //     $slupdate = 0;
            // }
                // tìm và so  sánh coi có trong mảnh có giỏ hàng hay không
                if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                    foreach ($_SESSION['cart'] as $sp) {
                        if ($sp[0] == $stt) {
                            $slupdate = 1;
                            $sl = $sp[4] + 1;
                            $_SESSION['cart'][$i][4] = $sl;
                            break;
                              $i++;
                        }
                      
                    }
                }
                // if (!isset($_SESSION['cart'])) $_SESSION['cart'] {
                // if ($slupdate == 0) {
                    //tạo mảng con
                    // $sp = array($stt, $name, $imgage, $price, $sl);
                    //add vô giỏ hàng
                    // array_push($_SESSION['cart'], $sp);
                // }
                //chuyển sang trang viewcart.php       
                // header('location: viewcart.php');
            
         
            ?>
            <tr>
                <td colspan="5">Tổng đơn hàng</td>
                <td><?php echo $tongtien;
                    ?></td>
        </table>
    </div>
    <!-- <button type="submit" class="btn ctnshop" a href="index.html"></a>Tiếp Tục Mua Hàng</button> -->

    <a href="tour.php">Tiếp tục mua hàng</a>
    <a href="../Controller/delall.php">Xóa tất cả sản phẩm</a>
    <footer class="footer">
        <div class="footer-content">
            <div class="fst">
                <h4 class="fst-heading"><span>Vie</span>Travel</h4>
                <p>Công viên phần mêm Quang Trung, Q.12,<br>P.12, Q.10, TP.HCM, Việt Nam</p>
                <p>Điện Thoại:0373863708</p>
                <p>Email: vietravel@gmail.com</p>
                <div class="list-icon">
                    <a href="#" class="icon-link"><i class="fab fa-pinterest"></i></a>
                    <a href="#" class="icon-link"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="icon-link"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="icon-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="icon-link"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="icon-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="fst">
                <h4 class="fst-head">TOUR DU LỊCH</h4>
                <p>Tour châu Âu</p>
                <p>Tour châu Á</p>
                <p>Tour châu Mỹ</p>
                <p>Tour châu Úc</p>
            </div>
            <div class="fst">
                <h4 class="fst-head">DỊCH VỤ</h4>
                <p>Đăng ký Visa</p>
                <p>Đăng ký vé máy bay</p>
                <p>Vận chuyển - Đưa đón</p>
                <p>Khách sạn - Lưu trú</p>
            </div>
            <div class="fst">
                <h4 class="fst-head">Hình Ảnh</h4>


            </div>
        </div>
        </div>
    </footer>
    <div class="footer-sub">
        <div class="footer-sub_content">
            <div class="footer-sub_left">Được thực hiện bởi nhóm <span>Tranquil</span></div>
            <div class="footer-sub_right">vietravel@gmail.com</div>
        </div>
    </div>



</body>

</html>