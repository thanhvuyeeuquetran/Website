<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-xxxxxx" crossorigin="anonymous" />
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
  transition: transform 0.2s; /* Thêm transition cho hover effect */
}

.column:hover {
  transform: scale(1.05); /* Thay đổi kích thước khi hover */
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}


.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.center-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100%;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

.page-title {
  text-align: center;
  background-color: #333;
  color: white;
  padding: 20px 0;
  margin: 0;
}
a {
    color: turquoise;
    text-decoration: none;
    background-color: transparent;
}

</style>
</head>
<body>
  <h1 class="page-title">Contact</h1>
  <br>
<div id="contact-section">
  <div class="row">
    <div class="column">
      <div class="card">
      <img src="./images/quyen.jpg" alt="Jane" style="width:40%; display: block; margin: 0 auto;">
        <div class="container center-content">
          <h2>Đỗ Quyên</h2>
          <p class="title">Art Director</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>quyen.207ct47911@vanlanguni.vn</p>
          <p><button class="button"><a href="https://www.facebook.com/ninin2265?mibextid=LQQJ4d"> Contact</a></button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
      <img src="./images/me.jpg" alt="Jane" style="width:54%; display: block; margin: 0 auto;">
        <div class="container center-content">
          <h2>Phạm Thanh Vũ</h2>
          <p class="title">CEO & Founder</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>vu.2174802010457.@vanlanguni.vn</p>
          <p><button class="button"><a href="https://www.facebook.com/profile.php?id=100035542299696"> Contact</a></button></p>
        </div>
      </div>
    </div>
    
    <div class="column">
      <div class="card">
      <img src="./images/phuoc.jpg" alt="Jane" style="width:53%; display: block; margin: 0 auto;">
        <div class="container center-content">
          <h2>Cao Hữu Phước</h2>
          <p class="title">Designer</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>Phuoc.2174802010292@vanlanguni.vn</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>

  <div class="page-title">More Team Members</div>

  <div class="row">
    <div class="column">
      <div class="card">
      <img src="./images/tl1.jpg" alt="Jane" style="width:62%; display: block; margin: 0 auto;">
        <div class="container center-content">
          <h2>Sơn</h2>
          <p class="title">Marketing</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>Son.207KS33237@vanlanguni.vn</p>
          <p><button class="button"><a href="https://www.facebook.com/phat.thach.9469"> Contact</a></button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
      <img src="./images/thay.png" alt="Jane" style="width:55.5%; display: block; margin: 0 auto;">
        <div class="container center-content">
          <h2>Teacher</h2>
          <p class="title">Developer</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>DyDy.2174802010613.@vanlanguni.vn</p>
          <p><button class="button"><a href="https://www.facebook.com/profile.php?id=100044036825339&mibextid=JRoKGi"> Contact</a></button></p>
        </div>
      </div>
    </div>
    
    <div class="column">
      <div class="card">
      <img src="./images/dy.jpg" alt="Jane" style="width:40%; display: block; margin: 0 auto;">
        <div class="container center-content">
          <h2>DyDy</h2>
          <p class="title">Developer</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>DyDy.2174802010613.@vanlanguni.vn</p>        
          <p><button class="button"><a href="https://www.facebook.com/profile.php?id=100044036825339&mibextid=JRoKGi"> Contact</a></button></p>
        </div>
      </div>
    </div>

  <hr style="border: 0;height: 4px;background: #333;margin: 20px 0;">

  <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>

