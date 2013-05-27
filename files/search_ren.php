<!DOCTYPE html>
<html lang="en">
<head>
<title>Payroll System | SegWorks Technologies Corporation</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<!--<link rel="stylesheet" type="text/css" href="ps_theme/css/bootstrap.min.css"/>-->
<link rel="stylesheet" type="text/css" href="ps_theme/css/search.css"/>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
    <style type="text/css">
    .nightvalue, .holidayvalue, .otvalue{
    border:none;
    display:none;
    font-family: 'Century Gothic',sans-serif;
    font-size: 12px;
}
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.2.js"></script>
<script type="text/javascript">
$(window).load(function(){
    $('#mytable :checkbox.night').attr('checked', false);
$('#mytable :checkbox.night').change(function() {
                $(this).closest('tr').find('.orignightvalue').toggle();
                $(this).closest('tr').find('.nightvalue').toggle();
            });
}); 
</script>
<script type="text/javascript">
$(window).load(function(){
    $('#mytable :checkbox.holiday').attr('checked', false);
$('#mytable :checkbox.holiday').change(function() {
                $(this).closest('tr').find('.origholidayvalue').toggle();
                $(this).closest('tr').find('.holidayvalue').toggle();
            });
}); 
</script>
<script type="text/javascript">
$(window).load(function(){
    $('#mytable :checkbox.ot').attr('checked', false);
$('#mytable :checkbox.ot').change(function() {
                $(this).closest('tr').find('.origotvalue').toggle();
                $(this).closest('tr').find('.otvalue').toggle();
            });
}); 
</script>
</head>
<body>
<div id="content">
	<div class="page-holder">
		<h1>Search Employee</h1>
		<form method="post" action="#" class="search">
			<label class="search_label">To search: Enter Employee's name (i.e. Arn,Mos)</label>
			<p>
				<label>Employee's Name: </label>
				<input type="text" size="45" name="search_list" value="" class="search-here" required/>
			</p>
			<p>
				<label class="batch_name">Batch Name: </label>
				<select>
				  <option value="Batch 1">May 1-15</option>
				  <option value="Batch 2">May 16-31</option>
				  <option value="Batch 3">June 1-15</option>
				  <option value="Batch 4">June 16-30</option>
				</select>
			</p>
			<p>
				<input type="submit" name="search_btn" value="search" class="btn">
			</p>
		</form>
		<hr>
		<div class="employee">
				<label>Name of Employee: <span> Arnel M. Moso</span></label>
				<p class="batch">Batch Number: <span> Batch 1</span></p>	
		</div>
		<table border="0" class="date">
		<caption>Cut off Dates</caption>
		<tbody>
		<tr>
			<td>From:</td>
			<td class="value">May 17, 2013</td>
		</tr>
		<tr>
			<td>To:</td>
			<td class="value">May 31, 2013</td>
		</tr>
		</tbody>
		</table>
		<form action="#" method="post">
			<p><span class="red">*</span> Double Click on the cell to edit the value! <span class="red">*</span></p>
			<table class="table-striped data" border="1" id="mytable">
				<thead>
					<tr>
						<td rowspan="2">Date</td>
						<td colspan="3">&nbsp;</td>
						<td colspan="4">AM</td>
						<td colspan="4">PM</td>					
						<td rowspan="2" style="word-wrap:break-word;width:20px;">Actual Hours</td>
						<td rowspan="2" style="word-wrap:break-word;width:20px;">Cred. Hours</td>
						<td colspan="3">&nbsp;</td>
						<td rowspan="2">Remarks</td>
					</tr>		
					<tr>
						<td>Night?</td>
						<td>Holiday?</td>
						<td>OT?</td>
						<td colspan="2">In</td>
						<td colspan="2" >Out</td>
						<td colspan="2">In</td>
						<td colspan="2">Out</td>
						<td>Night</td>
						<td>Holiday</td>
						<td>OT</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>May 17 (fri)</td>
						<td><input class="night" type="checkbox"></td>
						<td><input class="holiday" type="checkbox"></td>
						<td><input class="ot" type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);" style="width:20px;">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);" style="width:20px;">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);" style="width:20px;">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);" style="width:20px;">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td style="width:20px;"><input class="nightvalue" type="text" value="" style="width:20px;"><span class="orignightvalue">0.0</span></td>
						<td style="width:20px;"><input class="holidayvalue" type="text" value="" style="width:20px;"><span class="origholidayvalue">0.0</span></td>
						<td style="width:20px;"><input class="otvalue" type="text" value="" style="width:20px;"><span class="origotvalue">0.0</span></td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 18 (sat)</td>
						<td><input class="night" type="checkbox"></td>
						<td><input class="holiday" type="checkbox"></td>
						<td><input class="ot" type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td style="width:20px;"><input class="nightvalue" type="text" value="0.0" style="width:20px;"><span class="orignightvalue">0.0</span></td>
						<td style="width:20px;"><input class="holidayvalue" type="text" value="0.0" style="width:20px;"><span class="origholidayvalue">0.0</span></td>
						<td style="width:20px;"><input class="otvalue" type="text" value="0.0" style="width:20px;"><span class="origotvalue">0.0</span></td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 19 (sun)</td>
						<td><input class="night" type="checkbox"></td>
						<td><input class="holiday" type="checkbox"></td>
						<td><input class="ot" type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td style="width:20px;"><input class="nightvalue" type="text" value="0.0" style="width:20px;"><span class="orignightvalue">0.0</span></td>
						<td style="width:20px;"><input class="holidayvalue" type="text" value="0.0" style="width:20px;"><span class="origholidayvalue">0.0</span></td>
						<td style="width:20px;"><input class="otvalue" type="text" value="0.0" style="width:20px;"><span class="origotvalue">0.0</span></td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 20 (mon)</td>
						<td><input class="night" type="checkbox"></td>
						<td><input class="holiday" type="checkbox"></td>
						<td><input class="ot" type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td style="width:20px;"><input class="nightvalue" type="text" value="0.0" style="width:20px;"><span class="orignightvalue">0.0</span></td>
						<td style="width:20px;"><input class="holidayvalue" type="text" value="0.0" style="width:20px;"><span class="origholidayvalue">0.0</span></td>
						<td style="width:20px;"><input class="otvalue" type="text" value="0.0" style="width:20px;"><span class="origotvalue">0.0</span></td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 21 (tue)</td>
						<td><input class="night" type="checkbox"></td>
						<td><input class="holiday" type="checkbox"></td>
						<td><input class="ot" type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td style="width:20px;"><input class="nightvalue" type="text" value="0.0" style="width:20px;"><span class="orignightvalue">0.0</span></td>
						<td style="width:20px;"><input class="holidayvalue" type="text" value="0.0" style="width:20px;"><span class="origholidayvalue">0.0</span></td>
						<td style="width:20px;"><input class="otvalue" type="text" value="0.0" style="width:20px;"><span class="origotvalue">0.0</span></td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 22 (wed)</td>
						<td><input class="night" type="checkbox"></td>
						<td><input class="holiday" type="checkbox"></td>
						<td><input class="ot" type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td style="width:20px;"><input class="nightvalue" type="text" value="0.0" style="width:20px;"><span class="orignightvalue">0.0</span></td>
						<td style="width:20px;"><input class="holidayvalue" type="text" value="0.0" style="width:20px;"><span class="origholidayvalue">0.0</span></td>
						<td style="width:20px;"><input class="otvalue" type="text" value="0.0" style="width:20px;"><span class="origotvalue">0.0</span></td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 23 (thu)</td>
						<td><input class="night" type="checkbox"></td>
						<td><input class="holiday" type="checkbox"></td>
						<td><input class="ot" type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td style="width:20px;"><input class="nightvalue" type="text" value="0.0" style="width:20px;"><span class="orignightvalue">0.0</span></td>
						<td style="width:20px;"><input class="holidayvalue" type="text" value="0.0" style="width:20px;"><span class="origholidayvalue">0.0</span></td>
						<td style="width:20px;"><input class="otvalue" type="text" value="0.0" style="width:20px;"><span class="origotvalue">0.0</span></td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 24 (fri)</td>
						<td><input class="night" type="checkbox"></td>
						<td><input class="holiday" type="checkbox"></td>
						<td><input class="ot" type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td style="width:20px;"><input class="nightvalue" type="text" value="0.0" style="width:20px;"><span class="orignightvalue">0.0</span></td>
						<td style="width:20px;"><input class="holidayvalue" type="text" value="0.0" style="width:20px;"><span class="origholidayvalue">0.0</span></td>
						<td style="width:20px;"><input class="otvalue" type="text" value="0.0" style="width:20px;"><span class="origotvalue">0.0</span></td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 25 (sat)</td>
						<td><input class="night" type="checkbox"></td>
						<td><input class="holiday" type="checkbox"></td>
						<td><input class="ot" type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td style="width:20px;"><input class="nightvalue" type="text" value="0.0" style="width:20px;"><span class="orignightvalue">0.0</span></td>
						<td style="width:20px;"><input class="holidayvalue" type="text" value="0.0" style="width:20px;"><span class="origholidayvalue">0.0</span></td>
						<td style="width:20px;"><input class="otvalue" type="text" value="0.0" style="width:20px;"><span class="origotvalue">0.0</span></td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 26 (sun)</td>
						<td><input class="night" type="checkbox"></td>
						<td><input class="holiday" type="checkbox"></td>
						<td><input class="ot" type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td style="width:20px;"><input class="nightvalue" type="text" value="0.0" style="width:20px;"><span class="orignightvalue">0.0</span></td>
						<td style="width:20px;"><input class="holidayvalue" type="text" value="0.0" style="width:20px;"><span class="origholidayvalue">0.0</span></td>
						<td style="width:20px;"><input class="otvalue" type="text" value="0.0" style="width:20px;"><span class="origotvalue">0.0</span></td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 27 (mon)</td>
						<td><input class="night" type="checkbox"></td>
						<td><input class="holiday" type="checkbox"></td>
						<td><input class="ot" type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td style="width:20px;"><input class="nightvalue" type="text" value="0.0" style="width:20px;"><span class="orignightvalue">0.0</span></td>
						<td style="width:20px;"><input class="holidayvalue" type="text" value="0.0" style="width:20px;"><span class="origholidayvalue">0.0</span></td>
						<td style="width:20px;"><input class="otvalue" type="text" value="0.0" style="width:20px;"><span class="origotvalue">0.0</span></td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 28 (tue)</td>
						<td><input class="night" type="checkbox"></td>
						<td><input class="holiday" type="checkbox"></td>
						<td><input class="ot" type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td style="width:20px;"><input class="nightvalue" type="text" value="0.0" style="width:20px;"><span class="orignightvalue">0.0</span></td>
						<td style="width:20px;"><input class="holidayvalue" type="text" value="0.0" style="width:20px;"><span class="origholidayvalue">0.0</span></td>
						<td style="width:20px;"><input class="otvalue" type="text" value="0.0" style="width:20px;"><span class="origotvalue">0.0</span></td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 29 (wed)</td>
						<td><input class="night" type="checkbox"></td>
						<td><input class="holiday" type="checkbox"></td>
						<td><input class="ot" type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td style="width:20px;"><input class="nightvalue" type="text" value="0.0" style="width:20px;"><span class="orignightvalue">0.0</span></td>
						<td style="width:20px;"><input class="holidayvalue" type="text" value="0.0" style="width:20px;"><span class="origholidayvalue">0.0</span></td>
						<td style="width:20px;"><input class="otvalue" type="text" value="0.0" style="width:20px;"><span class="origotvalue">0.0</span></td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 30 (thu)</td>
						<td><input class="night" type="checkbox"></td>
						<td><input class="holiday" type="checkbox"></td>
						<td><input class="ot" type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td style="width:20px;"><input class="nightvalue" type="text" value="0.0" style="width:20px;"><span class="orignightvalue">0.0</span></td>
						<td style="width:20px;"><input class="holidayvalue" type="text" value="0.0" style="width:20px;"><span class="origholidayvalue">0.0</span></td>
						<td style="width:20px;"><input class="otvalue" type="text" value="0.0" style="width:20px;"><span class="origotvalue">0.0</span></td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td>May 31 (fri)</td>
						<td><input class="night" type="checkbox"></td>
						<td><input class="holiday" type="checkbox"></td>
						<td><input class="ot" type="checkbox"></td>
						<td onDblClick="javascript:changeContent(this);">05</td>
						<td onDblClick="javascript:changeContent(this);">59</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
						<td onDblClick="javascript:changeContent(this);">02</td>
						<td onDblClick="javascript:changeContent(this);">42</td>
						<td onDblClick="javascript:changeContent(this);">8.1</td>
						<td onDblClick="javascript:changeContent(this);">8.2</td>
						<td style="width:20px;"><input class="nightvalue" type="text" value="0.0" style="width:20px;"><span class="orignightvalue">0.0</span></td>
						<td style="width:20px;"><input class="holidayvalue" type="text" value="0.0" style="width:20px;"><span class="origholidayvalue">0.0</span></td>
						<td style="width:20px;"><input class="otvalue" type="text" value="0.0" style="width:20px;"><span class="origotvalue">0.0</span></td>
						<td onDblClick="javascript:changeContent(this);">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="18">&nbsp;</td>
					</tr>
					<tr class="total">
						<td>Total</td>
						<td colspan="11">&nbsp;</td>
						<td>121.5</td>
						<td>123</td>
						<td>0.0</td>
						<td>0.0</td>
						<td>0.0</td>
						<td>&nbsp;</td>
					</tr>
				</tbody>
			</table>
			<p class="button">
				<button class="btn" type="button">Save</button>
				<button class="btn" type="button">Print</button>
			</p>
		</form>
		<div class="clear"></div>
		<aside>
			<a href="#">Download as PDF!</a>
			<a href="#">Download as Microsoft Word!</a>
		</aside>
		<table class="table-striped summary">
			<tr>
				<td>Creditable Hours</td>
				<td>88.50</td>
			</tr>
			<tr>
				<td>Night Premium</td>
				<td>0.0</td>
			</tr>
			<tr>
				<td>Total Holidays</td>
				<td>0.0</td>
			</tr>
			<tr>
				<td>Total Overtime</td>
				<td>0.0</td>
			</tr>
			<tr>
				<td>Total Hours</td>
				<td>121.5</td>
			</tr>
		</table>
	</div>
	</div>

<script type="text/javascript">
function changeContent(tablecell)
{
    //alert(tablecell.firstChild.nodeValue);
    tablecell.innerHTML = "<INPUT type=text name=newname onBlur=\"javascript:submitNewName(this);\" value=\""+tablecell.innerHTML+"\">";
    tablecell.firstChild.focus();
}
function submitNewName(textfield)
{
    //alert(textfield.value);
    textfield.parentNode.innerHTML= textfield.value;
}
 </script>
</body>
</html>