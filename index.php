<html>
    <head>
        <title>Code Challenge</title>
    </head>
    <body>
        <!--
            I can make this code more shorter / less code,
            but I think readability for other developers is more important
        -->
        <ul style="list-style:none;">
            <?php for($i = 1; $i <= 100; $i++): ?>
                <li>
                    <?php 
                        $byThree = $i % 3;
                        $byFive = $i % 5;
                        if(!$byThree  && !$byFive ) {
                            echo 'FizzBuzz';
                        } elseif (!$byFive) {
                            echo 'Buzz';
                        } elseif (!$byThree) {
                            echo 'Fizz';
                        } else {
                            echo $i;
                        }
                    ?>
                </li>
            <?php endfor; ?>
        </ul>
    </body>
</html>
