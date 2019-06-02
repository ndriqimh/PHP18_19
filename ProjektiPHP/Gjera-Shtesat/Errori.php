<?php
function inverse($x) {
    if (!$x) {
        throw new Exception('Pjestimi nga zero.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Kapja e exception: ',  $e->getMessage(), "\n";
}

// vazhdo execution
echo "Pershendetje te nderuar!\n";
?>