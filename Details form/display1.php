
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
	
    <style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		th, td {
			padding: 3px;
		}
	</style>
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
<script>
	function display1()
	{
		c=iid1.value;
		//alert(c);
		if(c=="Choose table")
			alert("Please Select table");
		if(c=="Order")
		{
			document.getElementById("sel1").style="display:none";
			document.getElementById("sel2").style="display:block";
		}
		else if(c=="Cancel order")
		{
			document.getElementById("sel1").style="display:block";
			document.getElementById("sel2").style="display:none";
		}
					
	}
	
</script>

<?php
		$conn=mysqli_connect("localhost","u538675911_ntsh3","7209614570");
?>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" >
        <div class="wrapper wrapper--w960" >
            <div class="card card-4" >
                <div class="card-body">
                    <h2 class="title">WELCOME TO THE ADMIN PANEL</h2>
                    
						
                        
                        <div class="row row-space">
							
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Select Database</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                <select name="iname2" id="iid1">
                                    <option disabled="disabled" selected="selected">Choose table</option>
                                    <option >Order</option>
                                    <option >Cancel order</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>
								</div>
                              </div> 
							   
                            </div>
						
                            
                        </div>
						
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="button"  name="x2" onclick="display1()" >Display</button>
                        </div>
						<br>
						<br>
						<hr>
						<div id="sel2" style="display:none">
							<table >
								<tr>
									<th>Name</th><th>Email_id</th><th>Gender</th><th>Item_Type</th><th>Phone_Number</th><th>Pin_Code</th><th>Landmark</th><th>Address</th><th>Date/Time</th></tr>
									<?php
										//$ab=$_REQUEST["iname2"];
										mysqli_select_db($conn,"u538675911_awiee");
										$res=mysqli_query($conn,"select * from ctable");
												
									while($row1=mysqli_fetch_array($res))
									{
									?><tr>
									<td><?php echo$row1[0]?></td><td><?php echo$row1[1]?></td><td><?php echo$row1[2]?></td><td><?php echo$row1[3]?></td><td><?php echo$row1[4]?></td><td><?php echo$row1[5]?></td><td><?php echo$row1[6]?></td><td><?php echo$row1[7]?></td><td><?php echo$row1[8]?></td>
								</tr>
									<?php } ?>
							</table>
						</div>
						<div id="sel1" style="display:none">
							<table >
								<tr>
									<th>Name</th><th>Email_id</th><th>Order_date</th><th>Type</th><th>Phone_Number</th><th>Reason</th><th>Date/Time</th></tr>
									<?php
										//$ab=$_REQUEST["iname2"];
										mysqli_select_db($conn,"u538675911_awiee");
										$res2=mysqli_query($conn,"select * from rtable");
												
									while($row2=mysqli_fetch_array($res2))
									{
									?><tr>
									<td><?php echo$row2[0]?></td><td><?php echo$row2[1]?></td><td><?php echo$row2[2]?></td><td><?php echo$row2[3]?></td><td><?php echo$row2[4]?></td><td><?php echo$row2[5]?></td><td><?php echo$row2[6]?></td></td>
								</tr>
									<?php } ?>
							</table>
						</div>
						
                    
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
	

</body>

</html>
