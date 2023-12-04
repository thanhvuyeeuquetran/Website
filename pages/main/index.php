<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/product.css">
<style>
#orderForm {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.4);
  padding-top: 60px;
}

#orderFormContent {
  background-color: #fefefe;
  margin: 5% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  display: flex;
}

#orderFormImage {
  height: 500px;
  width: 40%;
  margin-right: 20px;
}

#orderFormDetails {
  width: 60%;
}

form {
  margin-top: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #333;
  font-weight: bold;
}

input,
select {
  width: calc(100% - 22px);
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

button {
  background-color: #4caf50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}
</style>
</head>
<body>
<script>var cart = [];
</script>
<!-- Form đặt hàng -->
<div id="orderForm">
    <div id="orderFormContent">
      <img id="orderFormImage" class="img-responsive" src="" alt="Product Image">
      <div id="orderFormDetails">
        <h2>Đặt Hàng</h2>
        <p id="orderFormTitle" class="title_product"></p>
        <p id="orderFormPrice" class="price_product"></p>
        <p>Thông tin sản phẩm:
Hãng sản xuất: Rolex
Tình trạng : mới 100%
Đồng hồ : Nam
Bộ sưu tập:Day-Date 40mm
Serial No. : 228235
Kích thước: 40 mm
Chất liệu thân đồng hồ: vàng hồng nguyên khối 18k
Bezel: vàng hồng 18k
Chức năng hiển thị: Giờ, Phút, Giây,Ngày,Thứ
Loại máy: Automatic
Loại dây đeo: vàng hồng nguyên khối 18k
Mặt quay số: màu sô-cô-la,thanh chỉ giờ gắn kim cương
Độ căng dây cót : 70 giờ
Khả năng chống nước: 100m
Phụ kiện: Nguyên hộp, Thân đồng hồ, thẻ bảo hành, sách hướng dẫn.
Bảo hành: 5 năm chính hãng Rolex</p>
        <form>
          <label for="fullName">Họ và Tên:</label>
          <input type="text" id="fullName" name="fullName" required>

          <label for="age">Tuổi:</label>
          <input type="number" id="age" name="age" required>

          <label for="dob">Ngày Sinh:</label>
          <input type="date" id="dob" name="dob" required>

          <label for="address">Địa Chỉ Nhận Hàng:</label>
          <input type="text" id="address" name="address" required>

          <label for="phoneNumber">Số Điện Thoại:</label>
          <input type="tel" id="phoneNumber" name="phoneNumber" required>

          <label for="deliveryMethod">Phương Thức Giao Hàng:</label>
          <select id="deliveryMethod" name="deliveryMethod">
            <option value="tiet-kiem">Giao Hàng Tiết Kiệm</option>
            <option value="nhanh">Giao Hàng Nhanh</option>
            <option value="hoa-toc">Giao Hàng Hoả Tốc</option>
          </select>

          <label for="paymentMethod">Hình Thức Thanh Toán:</label>
          <select id="paymentMethod" name="paymentMethod">
            <option value="visa">Visa Card</option>
            <option value="momo">Momo</option>
            <option value="tien-mat">Tiền Mặt</option>
          </select>

          <!-- Nút xác nhận đặt hàng -->
          <button type="button" onclick="confirmOrder()">Xác Nhận Đặt Hàng</button>
          <!-- Nút đóng form đặt hàng -->
          <button type="button" onclick="closeOrderForm()">Huỷ</button>
        </form>
      </div>
    </div>
  </div>
<script>
  // Hàm xác nhận đặt hàng
  function confirmOrder() {
    // Kiểm tra nếu thông tin đặt hàng hợp lệ
    if (validateOrder()) {
      // Hiển thị thông báo đặt hàng thành công
      alert("Đặt hàng thành công! Cảm ơn bạn đã mua sắm.");

      // Đóng form đặt hàng (nếu cần)
      closeOrderForm();
    }
  }

  // Hàm kiểm tra thông tin đặt hàng hợp lệ
  function validateOrder() {
    // Thực hiện kiểm tra thông tin đặt hàng ở đây
    // Return true nếu thông tin hợp lệ, ngược lại return false
    // Ví dụ đơn giản: Kiểm tra xem các trường nhập liệu có được điền đầy đủ không
    var fullName = document.getElementById("fullName").value;
    var age = document.getElementById("age").value;
    var dob = document.getElementById("dob").value;
    var address = document.getElementById("address").value;
    var phoneNumber = document.getElementById("phoneNumber").value;

    if (fullName && age && dob && address && phoneNumber) {
      return true;
    } else {
      alert("Vui lòng điền đầy đủ thông tin đặt hàng.");
      return false;
    }
  }

  // Hàm đóng form đặt hàng
  function closeOrderForm() {
    var orderForm = document.getElementById("orderForm");
    orderForm.style.display = "none";
  }
</script>


<script>
  // Function để hiển thị form đặt hàng
  function showOrderForm(productId) {
    // Lấy thông tin sản phẩm dựa trên productId (điều này cần được thay đổi theo nhu cầu thực tế của bạn)
    var productInfo = getProductInfo(productId);

    // Cập nhật nội dung của form đặt hàng
    document.getElementById('orderFormImage').src = productInfo.image;
    document.getElementById('orderFormTitle').innerText = productInfo.title;
    document.getElementById('orderFormPrice').innerText = productInfo.price;

    // Hiển thị form đặt hàng bằng cách thêm một lớp
    document.getElementById('orderForm').style.display = 'block';
  }

  // Function để đóng form đặt hàng
  function closeOrderForm() {
    // Ẩn form đặt hàng bằng cách loại bỏ một lớp
    document.getElementById('orderForm').style.display = 'none';
  }

  // Function để lấy thông tin sản phẩm (điều này cần được thay đổi theo nhu cầu thực tế của bạn)
  var productList = [
  {
    id: 1,
    image: 'images/sp1.jpg',
    title: 'Đồng hồ Rolex Day-Date 40mm Rose Gold 228235-0002',
    price: 'Giá sản phẩm: $2000.00'
  },
  {
    id: 2,
    image: 'images/sp002.jpg',
    title: 'Sản phẩm 2',
    price: 'Giá sản phẩm: $100.00'
  },
  {
    id: 3,
    image: 'images/sp003.jpg',
    title: 'Sản phẩm 3',
    price: 'Giá sản phẩm: $1000.00'
  },
  {
    id: 4,
    image: 'images/sp004.jpg',
    title: 'Sản phẩm 4',
    price: 'Giá sản phẩm: $2500.00'
  },
  // Thêm các sản phẩm khác
];

// Hàm này sẽ trả về thông tin của sản phẩm dựa trên productId
function getProductInfo(productId) {
  // Tìm sản phẩm trong danh sách
  return productList.find(product => product.id === productId);
}
</script>
   


<script>
  function addToCart(productId) {
    // Lấy thông tin sản phẩm dựa trên productId
    var productInfo = getProductInfo(productId);

    // Thêm sản phẩm vào giỏ hàng
    cart.push({
        id: productId,
        title: productInfo.title,
        price: productInfo.price
    });

    // Gọi hàm để cập nhật giao diện người dùng hoặc thực hiện các xử lý khác nếu cần
    updateCartUI();

    // Hiển thị thông báo cho người dùng (tùy chọn)
    alert('Sản phẩm đã được thêm vào giỏ hàng!');
}
function updateCartUI() {
    // Cập nhật số lượng sản phẩm trong giỏ hàng ở một nơi nào đó trên trang
    var cartItemCount = document.getElementById('cartItemCount');
    if (cartItemCount) {
        cartItemCount.innerText = cart.length;
    }
}

</script>


<h1 class="page-title">Sản Phẩm Bán Chạy</h1>

<ul class="product_list">
  <li>
    <img class="img-responsive" id=1 src="images/sp1.jpg" alt="Đồng hồ Rolex Day-Date 40mm Rose Gold 228235-0002">
    <p class="title_product">Đồng hồ Rolex Day-Date 40mm Rose Gold 228235-0002</p>
    <p style="text-align: center">Mã sản phẩm: 228235-0002</p>
    <p class="price_product">Giá sản phẩm: $2000.00</p>
    <p style="text-align: center;">
    <button class="button" type="button" onclick="showOrderForm(1)">Mua</button>
    <button class="button" onclick="addToCart(1)">🛒</button>

    </p>
  </li>
  <li>
    <img class="img-responsive" id=2 src="images/sp002.jpg" alt=" Omega Constellation Silver 228235-0001">
    <p class="title_product"> Omega Constellation Silver 228235-OMG-0001</p>
    <p style="text-align: center">Mã sản phẩm: 228235-OMG-0001</p>
    <p class="price_product">Giá sản phẩm: $700.00 </p>
    <p style="text-align: center;">
    <button class="button" type="button" onclick="showOrderForm(2)">Mua</button>
    <button class="button" onclick="addToCart(2)">🛒</button>
    </p>
  </li>
  <li>
    <img class="img-responsive" id=3 src="images/sp003.jpg" alt=" Omega De Ville Silver Blue 228235-0002">
    <p class="title_product"> Omega De Ville Silver Blue 228235-OMG-0001</p>
    <p style="text-align: center">Mã sản phẩm: 228235-OMG-0002</p>
    <p class="price_product">Giá sản phẩm: $950.00 </p>
    <p style="text-align: center;">
    <button class="button" type="button" onclick="showOrderForm(3)">Mua</button>
    <button class="button" onclick="addToCart(3)">🛒</button>
    </p>
  </li>
  <li>
    <img class="img-responsive" src="images/sp004.jpg" alt=" Omega Speedmaster Black 228235-0003">
    <p class="title_product"> Omega Speedmaster Black 228235-OMG-0003</p>
    <p style="text-align: center">Mã sản phẩm: 228235-OMG-0003</p>
    <p class="price_product">Giá sản phẩm: $990.00 </p>
    <p style="text-align: center;">
    <button class="button" type="button" onclick="showOrderForm()">Mua</button>
    <button class="button" onclick="addToCart(4)">🛒</button>
    </p>
  </li>
  <li>
    <img class="img-responsive" src="images/sp005.jpg" alt=" Rolex Submariner White 228235-0004"> 
    <p class="title_product"> Rolex Submariner White 228235-RL-000004</p>
    <p style="text-align: center">Mã sản phẩm: 228235-RL-0004</p>
    <p class="price_product">Giá sản phẩm: $850.00 </p>
    <p style="text-align: center;">
    <button class="button" onclick="showOrderForm('1')">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
  <li>
    <img class="img-responsive" src="images/sp006.jpg" alt=" Rolex Daytona Gold 228235-0004123"> 
    <p class="title_product"> Rolex Daytona Gold 228235-RL-000004</p>
    <p style="text-align: center">Mã sản phẩm: 228235-RL-0004122</p>
    <p class="price_product">Giá sản phẩm: $850.00 </p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
  <li>
    <img src="images/sp007.jpg" alt=" Rolex Milgauss Loyal 228235-0005124"> 
    <p class="title_product"> Rolex Milgauss Loyal 228235-RL-0005123</p>
    <p style="text-align: center">Mã sản phẩm: 228235-RL-0005123</p>
    <p class="price_product">Giá sản phẩm: $1200.00 </p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
  <li>
    <img src="images/sp008.jpg" alt="Đồng hồ Rolex Day-Date 40mm Rose Gold 228235-0002">
    <p class="title_product">Đồng hồ Rolex Day-Date 40mm Rose Gold 228235-0002124</p>
    <p style="text-align: center">Mã sản phẩm: 228235-0002</p>
    <p class="price_product">Giá sản phẩm: $850.00</p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
</ul>

<hr style="border: 0;height: 4px;background: #333;margin: 20px 0;">


<img id="myImg" src="images/adv2.jpg" alt="QC1">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
var modal = document.getElementById("myModal");
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function() { 
  modal.style.display = "none";
}
</script>

<hr style="border: 0;height: 4px;background: #333;margin: 20px 0;">

<h1 class="page-title">Sản Phẩm Khuyến Mãi</h1>

<ul class="product_list">
  <li>
    <img src="images/sp012.jpg" alt="Tissot Navigator BMW 228235-0014"> 
    <p class="title_product"> Tissot Navigator BMW 228235-TS-001456</p>
    <p style="text-align: center">Mã sản phẩm: 228235-TS-0014</p>
    <p class="price_product">Giá sản phẩm: $4500.00 </p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
  <li>
    <img src="images/sp013.jpg" alt="  Tissot Flower Visodate.  228235-0013"> 
    <p class="title_product"> Tissot Flower Visodate 228235-TS-0013</p>
    <p style="text-align: center">Mã sản phẩm: 228235-TS-0013</p>
    <p class="price_product">Giá sản phẩm: $800.00 </p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
  <li>
    <img src="images/sp014.jpg" alt=" Tissot Heritage Jadereen 228235-0015"> 
    <p class="title_product"> Tissot Heritage Jadereen 228235-TS-0015</p>
    <p style="text-align: center">Mã sản phẩm: 228235-TS-0015</p>
    <p class="price_product">Giá sản phẩm: $3200.00 </p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
  <li>
    <img src="images/sp016.jpg" alt="  Seiko Chronograph Green  228235-0016"> 
    <p class="title_product"> Seiko Chronograph Green 228235-SK-0016</p>
    <p style="text-align: center">Mã sản phẩm: 228235-SK-0013</p>
    <p class="price_product">Giá sản phẩm: $470.00 </p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
  <li>
    <img src="images/sp017.jpg" alt=" Seiko Motorsport Blue 228235-0017"> 
    <p class="title_product"> Seiko Motorsport Blue 228235-SK-0017</p>
    <p style="text-align: center">Mã sản phẩm: 228235-SK-0017</p>
    <p class="price_product">Giá sản phẩm: $4500.00 </p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
  <li>
    <img src="images/sp4.jpg" alt=" Seiko Motorsport Blue 228235-0017"> 
    <p class="title_product"> Seiko Motorsport Blue 228235-SK-0017</p>
    <p style="text-align: center">Mã sản phẩm: 228235-SK-0017</p>
    <p class="price_product">Giá sản phẩm: $4500.00 </p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
  <li>
    <img src="images/sp008.jpg" alt=" Seiko Motorsport Blue 228235-0017"> 
    <p class="title_product"> Seiko Motorsport Blue 228235-SK-0017</p>
    <p style="text-align: center">Mã sản phẩm: 228235-SK-0017</p>
    <p class="price_product">Giá sản phẩm: $4500.00 </p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
  <li>
    <img src="images/sp002.jpg" alt=" Seiko Motorsport Blue 228235-0017"> 
    <p class="title_product"> Seiko Motorsport Blue 228235-SK-0017</p>
    <p style="text-align: center">Mã sản phẩm: 228235-SK-0017</p>
    <p class="price_product">Giá sản phẩm: $4500.00 </p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
</ul>
<hr style="border: 0;height: 4px;background: #333;margin: 20px 0;">

<h1 id="dior" class="page-title">Dior</h1>
<ul class="product_list">
<li>
    <img src="images/sp009.jpg" alt=" Dior Grand Soir Eagle Eye 228235-0007"> 
    <p class="title_product"> Dior Grand Soir Eagle Eye 228235-DR-0007</p>
    <p style="text-align: center">Mã sản phẩm: 228235-DR-0007</p>
    <p class="price_product">Giá sản phẩm: $1350.00 </p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
  <li>
    <img src="images/sp010.jpg" alt=" La D de Dior Dimond Winter 228235-0008"> 
    <p class="title_product"> La D de Dior Dimond Winter 228235-DR-0008</p>
    <p style="text-align: center">Mã sản phẩm: 228235-DR-0008</p>
    <p class="price_product">Giá sản phẩm: $3000.00 </p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
  <hr style="border: 0;height: 4px;background: #333;margin: 20px 0;">
  <li>
    <img src="images/sp011.jpg" alt=" Dior VIII Silver White 228235-0009"> 
    <p class="title_product"> Dior VIII Silver White 228235-DR-0009</p>
    <p style="text-align: center">Mã sản phẩm: 228235-DR-0001259639</p>
    <p class="price_product">Giá sản phẩm: $2500.00 </p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
  <li>
    <img src="images/sp009.jpg" alt=" Dior Grand Soir Eagle Eye 228235-0007"> 
    <p class="title_product"> Dior Grand Soir Eagle Eye 228235-DR-0007</p>
    <p style="text-align: center">Mã sản phẩm: 228235-DR-0007</p>
    <p class="price_product">Giá sản phẩm: $1350.00 </p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
</ul>
  <hr style="border: 0;height: 4px;background: #333;margin: 20px 0;">
  <h1 id="Rolex" class="page-title">Rolex</h1>
<ul class="product_list">
<li>
    <img src="images/sp1.jpg" alt=" Rolex Grand Soir Eagle Eye 228235-0007"> 
    <p class="title_product"> Dior Grand Soir Eagle Eye 228235-DR-0007</p>
    <p style="text-align: center">Mã sản phẩm: 228235-DR-0007</p>
    <p class="price_product">Giá sản phẩm: $1350.00 </p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
  <li>
    <img src="images/sp010.jpg" alt=" La D de Rolex Dimond Winter 228235-0008"> 
    <p class="title_product"> La D de Rolex Dimond Winter 228235-DR-0008</p>
    <p style="text-align: center">Mã sản phẩm: 228235-DR-0008</p>
    <p class="price_product">Giá sản phẩm: $3000.00 </p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
  <hr style="border: 0;height: 4px;background: #333;margin: 20px 0;">
  <li>
    <img src="images/sp5.jpg" alt=" Rolex VIII Silver White 228235-0009"> 
    <p class="title_product"> Rolex VIII Silver White 228235-DR-0009</p>
    <p style="text-align: center">Mã sản phẩm: 228235-DR-0009</p>
    <p class="price_product">Giá sản phẩm: $2500.00 </p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
  <li>
    <img src="images/sp006.jpg" alt=" Rolex Grand Soir Eagle Eye 228235-0007"> 
    <p class="title_product"> Rolex Grand Soir Eagle Eye 228235-DR-0007</p>
    <p style="text-align: center">Mã sản phẩm: 228235-DR-0007</p>
    <p class="price_product">Giá sản phẩm: $1350.00 </p>
    <p style="text-align: center;">
      <button class="button">Mua</button>
      <button class="button">🛒</button>
    </p>
  </li>
</ul>
</body>
</html>




                    

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>