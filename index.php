<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <title>Island Media Management</title>
</head>
<body>
  <h1>Island Media Management<br>Developer Test Phase 1</h1>
  <br>
  <br>
<section>
  <p class="text-bold">Today Is :<strong class="today">  <?= date('l'); ?></strong></p>
<div class="days-container">

<?php
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
$today = date("l"); // get the current day

 foreach ($days as $day) {
        echo "<div class='day " . ($today == $day ? "distinction" : "") . "' onclick='selectDay(this)'>" . $day . "</div>";
      }

?>
</div>
<p>Selected day is: <span id="selected-day"></span></p>

</section>
 

<script>
 function selectDay(dayElement) {
      let selected = document.querySelector('.selected');
      if (selected) {
        selected.classList.remove('selected');
      }
      
      dayElement.classList.add('selected');
      document.querySelector('#selected-day').innerHTML = dayElement.innerHTML;
    }
</script>


</body>
</html>
