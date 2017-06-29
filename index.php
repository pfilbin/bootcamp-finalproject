<?php
        $link = mysqli_connect("bootcamp.coqxothtgwj0.us-west-2.rds.amazonaws.com", "pfilbin", "kibocommerce");

        if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
        }

        echo "Connected to MySQL Successfully! <br> <br> Your IP Address is: $_SERVER[REMOTE_ADDR]<br>";


        $result = mysqli_query($link,"Select * From BootcampTable.Messages");
        $feedback .= "<table border='1'><tr>";
        $feedback .= "<th>MSGID</th><th>Message</th></tr>";

        while ($row = mysqli_fetch_array($result))
        {
        $feedback .= "<tr><td>" . $row['MSGID'] . "</td>";
        $feedback .= "<td>" . $row['Message'] . "</td></tr>";
        }

        $feedback .= "</table>";

        echo $feedback;

        mysqli_close($link);
?>
