<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
}

#aboutUsContainer {
  position: relative;
  max-width: 100%;
  overflow: hidden;
}

#myVideo {
  width: 100%;
  height: 650px;
}

.content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  padding: 20px;
  box-sizing: border-box;
  text-align: center;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

hr {
  border: 0;
  height: 4px;
  background: #333;
  margin: 20px 0;
}
</style>
</head>
<body>
<div id="aboutUsContainer">
  <!-- Nội dung "About Us" ở đây -->
  <video autoplay muted loop id="myVideo">
    <source src="images/1.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  </div>
</div>

<hr>

<!-- Rest of your content here -->

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>

</body>
</html>
