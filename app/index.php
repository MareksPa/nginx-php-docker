<!DOCTYPE html>
<html>
<head>
    <title>CRUD with clock</title>
    <style>
        #clock {
            font-size: 196px;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div id="clock">
        <?php 
        echo date("H:i:s"); 
        
        ?>
    </div>
    <div>
      <h1>Hello</h1>
    </div>
    <script>
        function updateClock() {
            const clockElement = document.getElementById("clock");
            const currentTime = new Date();
            const hours = currentTime.getHours().toString().padStart(2, '0');
            const minutes = currentTime.getMinutes().toString().padStart(2, '0');
            const seconds = currentTime.getSeconds().toString().padStart(2, '0');
            clockElement.innerHTML = hours + ":" + minutes + ":" + seconds;
        }

        // Update the clock every second
        setInterval(updateClock, 1000);

        // Initial call to set the clock
        updateClock();
    </script>
</body>
</html>









 
