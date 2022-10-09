
<!-- reuse col and fix center -->
<?php
function manuTable($value){
    foreach ($value as $i) {
        echo '<th class="text-center">' . $i . '</th>';
    }                                    
}
?>
