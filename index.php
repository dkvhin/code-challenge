<html>
    <head>
        <title>Code Challenge</title>
    </head>
    <body>
        <ul style="list-style:none;">
            <?php for($i = 1; $i <= 100; $i++): ?>
                <?php
                    $byThree = $i % 3;
                    $byFive = $i % 5;
                ?>
                <li>
                    <?php 
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
