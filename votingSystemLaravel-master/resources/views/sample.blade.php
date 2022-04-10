<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script>
       var countDownDate = <?php 
       echo strtotime("{{ $date }} {{ $h }}:{{ $m }}:{{ $s }}" ) ?> * 1000;
       var now = <?php echo time() ?> * 1000;
       
       // Update the count down every 1 second
       var x = setInterval(function() {
       now = now + 1000;
       // Find the distance between now an the count down date
       var distance = countDownDate - now;
       // Time calculations for days, hours, minutes and seconds
       var days = Math.floor(distance / (1000 * 60 * 60 * 24));
       var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
       var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
       var seconds = Math.floor((distance % (1000 * 60)) / 1000);
       // Output the result in an element with id="demo"
       document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
       minutes + "m " + seconds + "s ";
       // If the count down is over, write some text 
       if (distance < 0) {
       clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
       }
           
       }, 1000);
       </script>
</body>
</html>