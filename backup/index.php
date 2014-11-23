<!DOCTYPE html>
<html>
<head>
<title>Majors Helper</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript">
function select_check(checked_id, id_to_show) 
{
    var select_list = document.getElementById(checked_id);
    var selected_value = select_list.options[select_list.selectedIndex].value;
    if (selected_value != "")
    {
        document.getElementById(id_to_show).style.visibility = "visible";
    }
}
</script>

</head>
<body>
<div id="header">
<h1>Majors Helper</h1>
</div>

<div id="container2">
	<div id="container1">
		<div id="col1">
<form action="results.php" method="post">

<div id="math_aptitude_div" style="visibility:visible">
<p>
How strong is your aptitude in math?
</p>
<p>
<select name="math_aptitude" id="math_aptitude" onclick="javascript:select_check('math_aptitude','writing_aptitude_div');">
<option value="" selected disabled>--</option>
<option value="0">Poor</option>
<option value="1">Average</option>
<option value="2">Fairly Good</option>
<option value="3">Very Good</option>
</select>
</p>
</div>

<div id="writing_aptitude_div" style="visibility:hidden">
<p>
How strong is your aptitude in writing?
</p>
<p>
<select name="writing_aptitude" id="writing_aptitude" onclick="javascript:select_check('writing_aptitude','science_aptitude_div');">
<option value="" selected disabled>--</option>
<option value="0">Poor</option>
<option value="1">Average</option>
<option value="2">Fairly Good</option>
<option value="3">Very Good</option>
</select>
</p>
</div>

<div id="science_aptitude_div" style="visibility:hidden">
<p>
How strong is your aptitude in science?
</p>
<p>
<select name="science_aptitude" id="science_aptitude" onclick="javascript:select_check('science_aptitude','advanced_degree_required_div');">
<option value="" selected disabled>--</option>
<option value="0">Poor</option>
<option value="1">Average</option>
<option value="2">Fairly Good</option>
<option value="3">Very Good</option>
</select>
</p>
</div>

<div id="advanced_degree_required_div" style="visibility:hidden">
<p>
Do you intend to pursue an advanced degree?
</p>
<p>
<select name="advanced_degree_required" id="advanced_degree_required" onclick="javascript:select_check('advanced_degree_required','technology_interest_div');">
<option value="" selected disabled>--</option>
<option value="0">No</option>
<option value="1">Yes</option>
</select>
</p>
</div>

<div id="technology_interest_div" style="visibility:hidden">
<p>
How much are you interested in technology?
</p>
<p>
<select name="technology_interest" id="technology_interest" onclick="javascript:select_check('technology_interest','science_interest_div');">
<option value="" selected disabled>--</option>
<option value="0">Uninterested</option>
<option value="1">A Little Interested</option>
<option value="2">Interested</option>
<option value="3">Very Interested</option>
<option value="4">Completely Obsessed</option>
</select>
</p>
</div>

<div id="science_interest_div" style="visibility:hidden">
<p>
How much are you interested in science?
</p>
<p>
<select name="science_interest" id="science_interest" onclick="javascript:select_check('science_interest','performing_interest_div');" >
<option value="" selected disabled>--</option>
<option value="0">Uninterested</option>
<option value="1">A Little Interested</option>
<option value="2">Interested</option>
<option value="3">Very Interested</option>
<option value="4">Completely Obsessed</option>
</select>
</p>
</div>

<div id="performing_interest_div" style="visibility:hidden">
<p>
How much are you interested in performing?
</p>
<p>
<select name="performing_interest" id="performing_interest" onclick="javascript:select_check('performing_interest','business_interest_div');" >
<option value="" selected disabled>--</option>
<option value="0">Uninterested</option>
<option value="1">A Little Interested</option>
<option value="2">Interested</option>
<option value="3">Very Interested</option>
<option value="4">Completely Obsessed</option>
</select>
</p>
</div>


</div>
		<div id="col2">



<div id="business_interest_div" style="visibility:hidden">
<p>
How much are you interested in business?
</p>
<p>
<select name="business_interest" id="business_interest" onclick="javascript:select_check('business_interest','history_interest_div');" >
<option value="" selected disabled>--</option>
<option value="0">Uninterested</option>
<option value="1">A Little Interested</option>
<option value="2">Interested</option>
<option value="3">Very Interested</option>
<option value="4">Completely Obsessed</option>
</select>
</p>
</div>

<div id="history_interest_div" style="visibility:hidden">
<p>
How much are you interested in history?
</p>
<p>
<select name="history_interest" id="history_interest" onclick="javascript:select_check('history_interest','writing_interest_div');" >
<option value="" selected disabled>--</option>
<option value="0">Uninterested</option>
<option value="1">A Little Interested</option>
<option value="2">Interested</option>
<option value="3">Very Interested</option>
<option value="4">Completely Obsessed</option>
</select>
</p>
</div>

<div id="writing_interest_div" style="visibility:hidden">
<p>
How much are you interested in writing?
</p>
<p>
<select name="writing_interest" id="writing_interest" onclick="javascript:select_check('writing_interest','culture_interest_div');" >
<option value="" selected disabled>--</option>
<option value="0">Uninterested</option>
<option value="1">A Little Interested</option>
<option value="2">Interested</option>
<option value="3">Very Interested</option>
<option value="4">Completely Obsessed</option>
</select>
</p>
</div>

<div id="culture_interest_div" style="visibility:hidden">
<p>
How much are you interested in culture?
</p>
<p>
<select name="culture_interest" id="culture_interest" onclick="javascript:select_check('culture_interest','health_interest_div');" >
<option value="" selected disabled>--</option>
<option value="0">Uninterested</option>
<option value="1">A Little Interested</option>
<option value="2">Interested</option>
<option value="3">Very Interested</option>
<option value="4">Completely Obsessed</option>
</select>
</p>
</div>

<div id="health_interest_div" style="visibility:hidden">
<p>
How much are you interested in health?
</p>
<p>
<select name="health_interest" id="health_interest" onclick="javascript:select_check('health_interest','environment_interest_div');" >
<option value="" selected disabled>--</option>
<option value="0">Uninterested</option>
<option value="1">A Little Interested</option>
<option value="2">Interested</option>
<option value="3">Very Interested</option>
<option value="4">Completely Obsessed</option>
</select>
</p>
</div>


<div id="environment_interest_div" style="visibility:hidden">
<p>
How much are you interested in the environment?
</p>
<p>
<select name="environment_interest" id="environment_interest" onclick="javascript:select_check('environment_interest','submit_div');" >
<option value="" selected disabled>--</option>
<option value="0">Uninterested</option>
<option value="1">A Little Interested</option>
<option value="2">Interested</option>
<option value="3">Very Interested</option>
<option value="4">Completely Obsessed</option>
</select>
</p>
</div>

<div id="submit_div" style="visibility:hidden">
<p>
<input type="submit" value="submit" class="btn">
</p>
</div>
</form>
</div>
</div>
</div>
<div id="footer">
<p>Brought to you by Emerging Systems</p>
</div>
</body>
</html>
