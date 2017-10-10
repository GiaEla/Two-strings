<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp, "%s", $n);

for ($i = 0; $i < $n; $i++){
    
    fscanf($_fp, "%s", $first_s);
    fscanf($_fp, "%s", $second_s);
    
    $first = str_split($first_s);
    $second = str_split($second_s);
    $int_s=array_intersect($first, $second);
    if(!empty($int_s)) {
        echo "YES\n";
    }
    else {
        echo "NO\n";
    }
}

?>
