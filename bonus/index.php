<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bonus php axios</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link rel="shortcut icon" href="#">

</head>
<body>
  <div id='root'>

    <div v-for="item in hotels" class="box">
      <h1>{{item.name}}</h1>
      <h3>{{item.description}}</h3>
      <ul>
        <li v-if="item.parking">  <strong>Parking: </strong>Si</li>
        <li v-else><strong>Parking: </strong>No</li>
        <li>  <strong>Voto: </strong>{{item.vote}}</li>
        <li> <strong>Distanza dal centro: </strong> {{item.distance_to_center}} km</li>
      </ul>
    </div>

  </div>
  <script src="script.js"></script>
</body>
</html>
