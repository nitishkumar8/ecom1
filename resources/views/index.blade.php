<!doctype html>

<html>
	<head>
		<meta content="utf-8" />
		<meta name="viewport" content="width=device-width,intial-scale=1.0" />
		<title>Chirayu Power | Login</title>
		<link rel="icon" href="https://homedindia.com/triguard/mr_login/asset/images/chirayu-logo.png" type="image/x-icon">
		<link rel="stylesheet" href="https://homedindia.com/triguard/mr_login/asset/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
		<link rel="stylesheet" type="text/css" href="https://homedindia.com/triguard/mr_login/asset/css/deign.css">
		<style>
            .btn-success
            {
                background-color:#66388b;
                border-color:#66388b;
                padding:7px 20px;
                font-size:18px;
                padding-top:10px;
                padding-bottom:10px;
                margin-top:20px;
            }

            .btn-success:hover
            {
                background-color:#4a1972;
                border-color:#4a1972;

            }
            .figur
            {
                width: 100%;
                margin-top: 20px;
            }
            .figur img
            {
                width: 100%;
                height: 200px;
            }
            @media (max-width:480px){
                .panel-body{
                    padding:20px;
                }
            .figur
            {
                width: 100%;
                margin-top:0px;
               
            }
                .figur img{
                width: 100%;
                height: 150px;
            }
			
         }
        


        </style>
	</head>    
    <body>
        <div class="container">
            <div class="row">
              <!--  <div class="col-md-3 col-md-offset-4 col-sm-4 col-xs-6 col-sm-offset-4 col-xs-offset-3">
					<div class="figur">
						<figure>
						<img src="{{URL::asset('asset/images/chirayu-logo.png')}}"/>
						</figure>
					</div>
                </div> -->



				 <div class="col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
				 <div class="login-panel panel panel-default" style="border:1px solid #D5D8DC">
                 <div class="panel-heading pdg20" style="background-color:#D5D8DC">
				 <h3 class="panel-title ">Chirayu Power</h3>
				 </div>
				  <?php 
                            if(isset($_GET['msg'])){
                  ?>
                  <span style="color:red;"><?=$_GET['msg'] ?></span>
                  <?php
                            }
                    ?> 
						         
					         <div class="panel-body">
									     
							     
							    <form role="form" method="POST" action="Postlogin">	
                                @csrf							 
								<!-- <input type="hidden" name="request_type" value="Loginvalidate">-->						 
								<div class="form-group">
								 	<input class="form-control" name="username" placeholder="Enter User Name" value=""  type="text" required>
								 </div>							
								 
								 <div class="form-group">								 
								 <input class="form-control" name="pass" placeholder="Enter Password" value="" type="password" required>
								</div>					
								 <!-- <div class="checkbox">
								 <label class="email-txt">
									<input name="asp_remember" type="checkbox">Remember Me
								 </label>								
								 </div> -->	
                                  							 
								<button type="submit" name="login_btn" class="btn btn-lg btn-success btn-block" style="font-size:18px;background-color:#F33614;border:1px solid #F33614">Login</button>							    
							    </form>
						     
						     </div>
					</div>
				</div>
            </div>
        </div>
        
    <link rel="stylesheet" href="https://homedindia.com/triguard/mr_login/asset/css/responsive.css"/>
    </body>
</html>
