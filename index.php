<head>
<title>Birthday Girl</title>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>

<body>



<input id="myDate" type="date">
<button id="startButton">Start Countdown</button>
<div id="value"></div>
<div id='countdown'></div>







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
  var splitValues = document.getElementById("value").split('-');
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
