<?php
$playerMoves = $_POST['data'];
$computerMoves = $_POST['dataComp'];
$winnerFields = [
    [1, 2, 3], [4, 5, 6], [7, 8, 9], [1, 4, 7],
    [2, 5, 8], [3, 6, 9], [1, 5, 9], [3, 5, 7],
];


$movesLeft = array_diff([1,2,3,4,5,6,7,8,9], $playerMoves, $computerMoves);
shuffle($movesLeft);

$computerMove = array_pop($movesLeft);

foreach ($winnerFields as $winnerCombination) {

    if (count(array_intersect($winnerCombination, $computerMoves)) == 3) {
        die('zero');
    }
    if (count(array_intersect($winnerCombination, $playerMoves)) == 3) {
        die('cross');
    }
}

if ($computerMove === null){
    die('draw');
}
echo $computerMove;