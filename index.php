<head>
<title>Birthday Girl</title>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>





<div class="container">
<div class="row">
  
  <input id="myDate" type="date" style="display:none;">
  <button id="startButton" style="display:none;">Start Countdown</button>
  <div id="value"></div>
  <div id='countdown'></div>

</div>


</div>








<script type="text/javascript">
var _second = 1000;
var _minute = _second * 60;
var _hour = _minute * 60;
var _day = _hour * 24;
var _month = _day * 30;
var timer;

initDate();

$( document ).ready(function() {
  document.getElementById('value').innerHTML = '2020-10-21';
  var splitValues = ["2020","10","21"];
  var end = new Date(splitValues[0], splitValues[1] - 1, splitValues[2]);
  clearInterval(timer);
  showRemaining(end);
  timer = setInterval(showRemaining, 1000, end);
});

function showRemaining(end) {
  var now = new Date();
  var distance = end - now;
  if (distance < 0) {
    clearInterval(timer);
    document.getElementById('countdown').innerHTML = 'EXPIRED!';
    return;
  }

  var months = Math.floor(distance / _month);
  var days = Math.floor((distance % _month) / _day);
  var hours = Math.floor((distance % _day) / _hour);
  var minutes = Math.floor((distance % _hour) / _minute);
  var seconds = Math.floor((distance % _minute) / _second);

  document.getElementById('countdown').innerHTML = months + 'months ';
  document.getElementById('countdown').innerHTML += days + 'days ';
  document.getElementById('countdown').innerHTML += hours + 'hrs ';
  document.getElementById('countdown').innerHTML += minutes + 'mins ';
  document.getElementById('countdown').innerHTML += seconds + 'secs';
}

function initDate() {
  var defaultDate = new Date();
  var month;
  if(defaultDate.getMonth() + 1 > 9) {
    month = "" + (defaultDate.getMonth() + 1);
  } else {
    month = '0' + (defaultDate.getMonth() + 1);
  }
  document.getElementById("myDate").value = defaultDate.getFullYear() + '-' + month + '-' + defaultDate.getDate();
}
</script>

</body>
