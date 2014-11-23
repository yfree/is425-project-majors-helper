<?php
function normalize_output_field($field)
{
    $field = str_replace('___', "\'", $field);
    $field = str_replace('__', ', ', $field);
    $field = str_replace('_', ' ', $field);
    $normalized_field = ucwords($field);
    return $normalized_field;
}
?>
