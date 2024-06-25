<?php
require_once 'koneksi.php';
?>

<html>
    <head>
        <title>WA BOT</title>
    </head>
    <body>
        <fieldset>
            <legend>
                Form Message
            </legend>
            <form name="formmessage" method="post" action="send_message.php">
                    <p>
                        <p>
                            <label for="number">phone</label>
                            <input type="text" name="number" id="number">
                        </p>
                    </p>
                    <p>
                        <p>
                            <label for="message">message</label>
                            <input type="text" name="message" id="message">
                        </p>
                    </p>
                    <p>
                        <p>
                            <input type="submit" name="submit" id="submit" value="send message">
                        </p>
                    </p>
                </form>
        </fieldset>

        <table border="1">
            <tr>
                <th>No</th>
                <th>Number</th>
                <th>Message</th>
                <th>Time</th>
            </tr>
            <?php            
                $q = $conn->query("select * from message");
                $no = 1;
                while($dt = $q->fetch_assoc()):
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $dt['number'];?></td>
                <td><?php echo $dt['pesan'];?></td>
                <td><?php echo $dt['time'];?></td>
            </tr>
            <?php
            endwhile; 
            ?>
        </table>

    </body>
</html>