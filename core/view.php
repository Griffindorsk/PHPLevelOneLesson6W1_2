<?php
require "../templates/layout.php";
?>
<div class="centerline">
    <div class="calc_body">
        <div class="display">
            <p>
                <?=$display?>
            </p>
        </div>
        <div class="display_small">
            <p>
                <?="$x $operation_symbol $y"?>
            </p>
        </div>
        <div class="aux_display">
            <p>лапоть инструментс<sup>ТМ</sup></p>
        </div>
        <div class="buttons">
            <div class="numbers_block">
                <div class="b1"><a href="index.php<?="?figure=1&display=" . $display . "&operation=" . $operation . "&x=" . $x . "&y=". $y?>">1</a></div>
                <div class="b2"><a href="index.php<?="?figure=2&display=" . $display . "&operation=" . $operation . "&x=" . $x . "&y=" . $y?>">2</a></div>
                <div class="b3"><a href="index.php<?="?figure=3&display=" . $display . "&operation=" . $operation . "&x=" . $x . "&y=" . $y?>">3</a></div>
                <div class="b4"><a href="index.php<?="?figure=4&display=" . $display . "&operation=" . $operation . "&x=" . $x . "&y=" . $y?>">4</a></div>
                <div class="b5"><a href="index.php<?="?figure=5&display=" . $display . "&operation=" . $operation . "&x=" . $x . "&y=" . $y?>">5</a></div>
                <div class="b6"><a href="index.php<?="?figure=6&display=" . $display . "&operation=" . $operation . "&x=" . $x . "&y=" . $y?>">6</a></div>
                <div class="b7"><a href="index.php<?="?figure=7&display=" . $display . "&operation=" . $operation . "&x=" . $x . "&y=" . $y?>">7</a></div>
                <div class="b8"><a href="index.php<?="?figure=8&display=" . $display . "&operation=" . $operation . "&x=" . $x . "&y=" . $y?>">8</a></div>
                <div class="b9"><a href="index.php<?="?figure=9&display=" . $display . "&operation=" . $operation . "&x=" . $x . "&y=" . $y?>">9</a></div>
                <div class="b0"><a href="index.php<?="?figure=0&display=" . $display . "&operation=" . $operation . "&x=" . $x . "&y=" . $y?>">0</a></div>
                <div class="b_dot"><a href="index.php<?="?figure=dot&display=" . $display . "&operation=" . $operation . "&x=" . $x . "&y=" . $y?>">.</a></div>
            </div>
            <div class="controls_block">
                <div class="c_plus"><a href="index.php<?="?figure=plus&display=" . 0 . " &operation=plus&x=" . $x . "&y=" . $y?>">+</a></div>
                <div class="c_minus"><a href="index.php<?="?figure=minus&display=" . 0 . "&operation=minus&x=" . $x . "&y=" . $y?>">–</a></div>
                <div class="c_divide"><a href="index.php<?="?figure=divide&display=" . 0 . "&operation=divide&x=" . $x . "&y=" . $y?>">/</a></div>
                <div class="c_multiply"><a href="index.php<?="?figure=multiply&display=" . 0 . "&operation=multiply&x=" . $x . "&y=" . $y?>">&#10006;</a></div>
                <div class="c_result"><a href="index.php<?="?figure=result&display=" . 0 . "&operation=" . $operation . "&x=" . $x . "&y=" . $y?>">=</a></div>
                <div class="c_clean"><a href="index.php<?="?figure=clean&display=" . 0 . "&operation=" . $operation . " &x=" . $x . "&y=" . $y . "&operation=" . $operation . "&x=" . $x . "&y=" . $y?>">удалить</a></div>
            </div>
        </div>
    </div>
</div>