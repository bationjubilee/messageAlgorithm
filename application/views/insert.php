<!DOCTYPE html>  
<html>
<head>
<title>Registration form</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
      
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
 
<body>

	<!-- <form method="post">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">mobile no</td>
    <td width="329"><input type="int"  name="mobileNo" ></td>
  </tr>
  <tr>
    <td>message</td>
    <td width="329"><input   name="Message" ></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="save" value="Save Data"/></td>
  </tr>
</table>
 
	</form> -->
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-bullhorn" aria-hidden="true"></i> send
      </h1>
    </section>
  
    <section>
      <div class="container " style='padding-top:30pxS;'>
      	<div class="col-md-9">
      		<div class="panel panel-default">
      			<div class="panel-body message">
      				<b><p class="text-center">Resident SMS</p></b>
      				<div class="col-sm-12">
      					<br>					
      					<form method= "post">
        					<div class="form-group">
        						<label for="number">Mobile Number</label>
        						<input type="number"  name="mobileNO" class="form-control">
        						<span class="text-danger"><?php echo form_error("mobileNO"); ?></span>
        					</div> 
        					<div class="form-group">
          						<textarea  class="form-control" name="sms_content" rows="12" placeholder="Type here" id="sms_content"></textarea>
          						<span class="text-danger"><?php echo form_error("sms_content"); ?></span>
        					</div>
      					
        					<div class="form-group" style="padding-left:93%">	
                    <button  type="submit" name="save" value="Save parsedataCAT" class="btn btn-success">Send</button>
        					</div>	
      				  </form>
      				</div>	
      			</div>	                    
      		</div>	
        </div>
  	  </div>    
    </section>

</body>
</html>
<!--<script type="text/javascript" src="assets/js/common.js" charset="utf-8"></script>-->
<script type="text/javascript">
   
</script>
