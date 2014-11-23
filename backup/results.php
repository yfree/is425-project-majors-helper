<?php
require_once 'class/MajorsHelper.php';

try
{
    $Majors = new MajorsHelper($_POST, 'resource/model.csv');
}
catch (Exception $e)
{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Majors Helper</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<div id="header">
<h1>Results</h1>
</div>
<div id="container2">
<?php
function normalize_output_field($field)
{
    $field = str_replace('___', '\'', $field);
    $field = str_replace('__', ', ', $field);
    $field = str_replace('_', ' ', $field);
    $normalized_field = ucwords($field);
    return $normalized_field;
}

$Majors->filter_unqualified();
$Majors->strip_noninterest_fields();
$Majors->calc_most_interested();


if (array_key_exists(2, $Majors->results))
{
    $results = $Majors->results[2];
}
elseif (array_key_exists(1, $Majors->results))
{
    $results = $Majors->results[1];
}
elseif (array_key_exists(0, $Majors->results))
{
    $results = $Majors->results[0];
}
else
{
    $results[] = 'Interdisciplinary Studies';
}
print '<center><table><tr><td><ul><p>';

foreach ($results as $result)
{
    print '<li>' . normalize_output_field($result) . '</li>';
}
print '</ul></p></td></tr></table></center>';
?>
<center>
<form action="." method="post">
<input type="submit" value="Try Again" class="btn">
</form>
</center>
</div>
<div id="footer">
<p>Brought to you by Emerging Systems</p>
</div>
</body>
</html>
