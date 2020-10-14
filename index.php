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
                <?php if(!$byThree  && !$byFive ): ?>
                    <li>FizzBuzz</li>
                <?php elseif (!$byFive): ?>
                    <li>Buzz</li>
                <?php elseif (!$byThree): ?>
                    <li>Fizz</li>
                <?php else : ?>
                    <li><?php echo $i; ?></li>
                <?php endif; ?>
            <?php endfor; ?>
        </ul>
    </body>
</html>
