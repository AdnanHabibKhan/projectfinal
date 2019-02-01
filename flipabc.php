<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-box {
  background-color: transparent;
  width: 400px;
  height: 300px;
align:center;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
}

.flip-box-back {
  background-color: #555;
  color: white;
  transform: rotateY(180deg);
}
</style>
</head>
<body>

<center>
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <img src="images/team1.jpg" alt="Paris" style="width:400px;height:300px">
    </div>
    <div class="flip-box-back">
      <h2>Tajmmal Bashir</h2>
      <p></p>
    </div>
  </div>
</div>

</body>
</html>
