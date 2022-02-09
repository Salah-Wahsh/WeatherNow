<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- <script type="text/javascript" src="./assets/jq/jquery.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="./assets/js/script.js" defer></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<script> 
$( document ).ready(function() {
  var url="https://api.unsplash.com/search/photos?query=cairo&client_id=UbMVB-D_RFTCUCFpa8sEaHL2S3fAl8eCgUM3O3lk9gg&per_page=1&orientation=landscape"
  $.ajax({
    method: 'GET',
    url:url,
    success:function(data){
      console.log(data)
      
      data.results.forEach(photo=>{
        data.results= $("#imageContainer").empty().append(
        `<img class= "count" src="${photo.urls.regular}"/>`
      )
    })
    }
  })

  $(document).on('keypress',function(e) {
    if(e.which == 13) {
      var search = $("#search").val()
   url="https://api.unsplash.com/search/photos?query="+search+"&client_id=UbMVB-D_RFTCUCFpa8sEaHL2S3fAl8eCgUM3O3lk9gg&per_page=1&orientation=landscape"
  $.ajax({
    method: 'GET',
    url:url,
    success:function(data){
      console.log(data)
      
      data.results.forEach(photo=>{
        data.results= $("#imageContainer").empty().append(
        `<img class= "count" src="${photo.urls.regular}"/>`
      )
    })
    }
  }) 
    }
});
  $("#click").click(function(){
  var search = $("#search").val()
   url="https://api.unsplash.com/search/photos?query="+search+"&client_id=UbMVB-D_RFTCUCFpa8sEaHL2S3fAl8eCgUM3O3lk9gg&per_page=1&orientation=landscape"
  $.ajax({
    method: 'GET',
    url:url,
    success:function(data){
      console.log(data)
      
      data.results.forEach(photo=>{
        data.results= $("#imageContainer").empty().append(
        `<img class= "count" src="${photo.urls.regular}"/>`
      )
    })
    }
  }) 
})  
} )

</script>
</head>
<body >
  
 <div class="centered">
   <!-- <div class="row"> -->
     <div class="col-mid-12" id="boot">
  <div class="card-container">
<div class="search">
  <input id="search" type="text" placeholder="Search" class="search-bar">
  <button id="click"  ><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z"></path></svg></button>

</div>
<div class="weather loading">
<h2 class="city">Weather in Denver</h2>
<h3 class="temp">51°C</h3>
<div class="flex">
<img src="http://openweathermap.org/img/wn/02d.png" alt="" class="icon">
<div class="description">Cloudy</div>
</div>
<div class="humed">Humidity:60% </div>

<div class="wind">Wind Speed 6.2km</div>
</div>
  </div>
</div>
<!-- </div> -->
</div>
<div id="imageContainer"></div>
</body>
</html>