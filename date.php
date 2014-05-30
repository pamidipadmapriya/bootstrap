<!DOCTYPE html>
<!-- saved from url=(0047)http://vitalets.github.io/bootstrap-datepicker/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Datepicker for Bootstrap</title>
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./datepicker/css/datepicker.css" rel="stylesheet">
	<style>
	#alert {
		display: none;
	}
    body {
        padding-top: 50px;
    }
	</style>
    <link href="./datepicker/css/prettify.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <script src="./Datepicker for Bootstrap_files/prettify.js"></script>
    <script src="./Datepicker for Bootstrap_files/jquery.js"></script>
    <script src="./Datepicker for Bootstrap_files/bootstrap-datepicker.js"></script>    
    

  <body screen_capture_injected="true">
  

  <div class="container">
    <section id="typeahead">

      <div class="row">
        
        <div class="span9 columns">
          <h2>Example</h2>
          <p>Attached to a field with the format specified via options.</p>
          <div class="well">
            <input type="text" class="span2" value="02-16-2012" id="dp1">
          </div>
          <p>Attached to a field with the format specified via data tag.</p>
          <div class="well">
            <!--<button id="btn2" style="float: right">manual set to 03/17/12</button>-->
            <input type="text" class="span2" value="02/16/12" data-date-format="mm/dd/yy" id="dp2">
          </div>
          <p>As component.</p>
          <div class="well">
			  <div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
				<input class="span2" size="16" type="text" value="12-02-2012" readonly="">
				<span class="add-on"><i class="icon-th"></i></span>
			  </div>
          </div>
          <p>Attached to other elment then field and using events to work with the date values.</p>
          <div class="well">
            
            
			<div class="alert alert-error" id="alert">
				<strong>Oh snap!</strong>
			  </div>
			<table class="table">
				<thead>
					<tr>
						<th>Start date<a href="http://vitalets.github.io/bootstrap-datepicker/#" class="btn small" id="dp4" data-date-format="yyyy-mm-dd" data-date="2012-02-20">Change</a></th>
						<th>End date<a href="http://vitalets.github.io/bootstrap-datepicker/#" class="btn small" id="dp5" data-date-format="yyyy-mm-dd" data-date="2012-02-25">Change</a></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td id="startDate">2012-02-20</td>
						<td id="endDate">2012-02-25</td>
					</tr>
				</tbody>
			</table>
          </div>
      
<hr>    
<p>This page is based on original datepicker by Stefan Petre <a href="http://www.eyecon.ro/bootstrap-datepicker" target="_balnk">www.eyecon.ro/bootstrap-datepicker</a> and <a href="https://github.com/eternicode/bootstrap-datepicker" target="_balnk">@eternicode's improvements</a>.</p>
<p>Vitaliy Potapov, 2012</p>

</div>
	<script>
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#dp1').datepicker({
				format: 'mm-dd-yyyy',
                todayBtn: 'linked'
			});
            
			$('#dp2').datepicker();
            $('#btn2').click(function(e){
                e.stopPropagation();
                $('#dp2').datepicker('update', '03/17/12');
            });             
            
			$('#dp3').datepicker();
			
			
			var startDate = new Date(2012,1,20);
			var endDate = new Date(2012,1,25);
			$('#dp4').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() > endDate.valueOf()){
						$('#alert').show().find('strong').text('The start date can not be greater then the end date');
					} else {
						$('#alert').hide();
						startDate = new Date(ev.date);
						$('#startDate').text($('#dp4').data('date'));
					}
					$('#dp4').datepicker('hide');
				});
			$('#dp5').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() < startDate.valueOf()){
						$('#alert').show().find('strong').text('The end date can not be less then the start date');
					} else {
						$('#alert').hide();
						endDate = new Date(ev.date);
						$('#endDate').text($('#dp5').data('date'));
					}
					$('#dp5').datepicker('hide');
				});
                
            //inline    
            $('#dp6').datepicker({
                todayBtn: 'linked'
            });
                
            $('#btn6').click(function(){
                $('#dp6').datepicker('update', '15-05-1984');
            });            
            
            $('#btn7').click(function(){
                $('#dp6').data('datepicker').date = null;
                $('#dp6').find('.active').removeClass('active');                
            });            
		});
	</script>
  