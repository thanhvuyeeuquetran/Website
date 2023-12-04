<!DOCTYPE html>
<link rel="stylesheet" href="./css/map.css">
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideDown("slow");
  });
});
</script>
<style> 
body{
  background-color: #EEEEEE;
}
#panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #999999;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 50px;
  display: none;
}
</style>
</head>
<body>
 
<h3><b>MAP</b></h3>
<div id="flip">BASIS</div>
<div id="panel"> 
<i class='fas fa-map-marker-alt'><p>Trụ sở: 45 Nguyễn Khắc Nhu, P. Cô Giang, Q.1, TP. HCM</p></i>
 <p>Cơ sở 2: 233A Phan Văn Trị, P.11, Q. Bình Thạnh, TP. HCM</p>
 <p>Cơ sở 3: 69/68 Đặng Thùy Trâm, P. 13, Q. Bình Thạnh, TP. HCM</p>
 <p>Ký túc xá: 160/63A-B Phan Huy Ích, P. 12, Q. Gò Vấp, TP. HCM</p></div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.787805227351!2d106.69744577460384!3d10.827544458249657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528f4a62fce9b%3A0xc99902aa1e26ef02!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBWxINuIExhbmc!5e0!3m2!1svi!2s!4v1699680738595!5m2!1svi!2s" 
  ></iframe>
</body>
</html>

<hr style="border: 0; height: 4px; background: #333; margin: 20px 0" />

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
