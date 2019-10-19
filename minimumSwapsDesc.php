<?php
function minimumSwaps($popularity) {
    $popularityCopy = $popularity;
    rsort($popularityCopy);
    $reversed = $popularityCopy;
    $count = 0; 
    $i = count($popularity);
    while ($i--) {
        if ($popularity[$i] === $reversed[$i]) continue;
        $p = array_search($reversed[$i], $popularity);
        [$popularity[$i], $popularity[$p]] = [$popularity[$p], $popularity[$i]];
        $count++;
    }
    return $count;
}
echo minimumSwaps([1, 2, 3, 4]);
