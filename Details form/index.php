
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    
    <title>Awiee Trends</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">ENTER DETAILS</h2>
                    <form method="POST">
						<div class="input-group">
                            <label class="label">Name</label>
                             <input class="input--style-4" type="text" id="nid" name="nname">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><span color="red">*</span>Email Id</label>
                                    <input class="input--style-4" type="email" id="eid" name="ename">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Confirm Email Id</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="email" id="ceid" name="cename">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" value="Male" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="Female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Item Type</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                <select name="iname" id="iid">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Top Wear</option>
                                    <option>Bottom Wear</option>
                                    <option>FootWear</option>
									<option>Assesary</option>
									<option>Others</option>
                                </select>
                                <div class="select-dropdown"></div>
								</div>
                              </div> 
							   
                            </div>
                            
                        </div>
						<div class="input-group">
                            <label class="label">Phone Number</label>
                             <input class="input--style-4" type="text" id="pid" name="pname">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Pincode</label>
                                    <input class="input--style-4" type="text" id="pinid" name="pinname">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Landmark</label>
                                    <input class="input--style-4" type="text" name="lname">
                                </div>
                            </div>
                        </div>
						 
                        <div class="input-group">
                            <label class="label">Address2</label>
                             <input class="input--style-4" type="textfield" height="200" name="aname">
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit"  name="x" >Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
	<?php
		if(isset($_REQUEST["x"]))
		{
			$p=$_REQUEST["nname"];
			$p1=$_REQUEST["ename"];
			$p2=$_REQUEST["cename"];
			$p3=$_REQUEST["gender"];
			$p4=$_REQUEST["iname"];
			$p5=$_REQUEST["pname"];
			$p6=$_REQUEST["pinname"];
			$p7=$_REQUEST["lname"];
			$p8=$_REQUEST["aname"];
			$p9=Date('h:i:s');
			//$b1=$_REQUEST["bank"];
			//$b2=$_REQUEST["bal"];
			//echo$p10;
			$conn=mysqli_connect("localhost","u538675911_ntsh3","7209614570");
			mysqli_select_db($conn,"u538675911_awiee");
			$yo=mysqli_query($conn,"insert into ctable values('$p','$p1','$p3','$p4','$p5','$p6','$p7','$p8','$p9')");
			if($yo)
			echo"DATA SAVED";
			else
				echo"ERROR";
		
	
		} 
	?>

</body>

</html>
