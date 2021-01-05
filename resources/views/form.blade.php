<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ URL::asset('asset/myCSS.css')}}">
<script src="{{ URL::asset('asset/myscripts.js')}}"></script>
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f05823;
  padding: 15px 10px; 
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
  height:45px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
  
}

.header a:hover {
  background-color:white;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px){
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>

</head>
 <body>
<!-- <h2>Details of the project</h2>-->
 <div class="header">
  <img src="{{URL::asset('asset/images/Chirayu.png')}}"/>
  <div class="header-right">
    <a> Welcome : Admin</a>
    <a href="#"></a>
    <a href="#"></a>
    <a href="#"></a>
    <a href="#"></a>
    <a href="#">Logout</a>
  </div>
</div>
<hr>
 <div class="row"> 
 
	<div class="col-25">
		<label for="consumerType">Consumer Type</label>
            <select>
			  <option value="volvo">Single Phase 5-30A</option>
			  <option value="saab">Three Phase 10-40A</option>
  			  <option value="fiat">Three phase CT operated</option>
  			  <option value="audi">HT consumer</option>
			</select>
	  </div>
	  <div class="col-25">
		<label>Railing Required?</label>
            <select id="railingDropdown" onchange="railingRequiredFn()">
			  <option value="selectRailing">Select</option>
			  <option value="Yes">Yes</option>
			  <option value="No">No</option>
			
			</select>
	  </div>
	  <div class="col-25">
		<label for="consumerType">Water pipeline Required?</label>
            <select id="pipelineDropdown" onchange="pipelineRequiredFn()">
			  <option value="selectPipeline">Select</option>
			  <option value="Yes">Yes</option>
			  <option value="No">No</option>
			
			</select>
	</div>
	<div class="col-25">
		<label for="consumerType">Walkway Required?</label>
            <select id="walkwayDropdown" onchange="walkwayRequiredFn()">
			  <option value="selectWalkway">Select</option>
			  <option value="Yes">Yes</option>
			  <option value="No">No</option>
			
			</select>
	</div>
</div>
<form action="#">
<div class="row">
  <div class="col-75">
    <div class="container">
      
      
	  <!--solar panel selection area -->
        <div class="row">
          <div class="col-25 bgColor1">
            <h3>Solar Panels</h3>
			<label for="wattage"> System Capacity (KW)</label>
            <input type="text" id="systemCapacity" name="projectCapacity" placeholder="KW capacity of project">
            <label for="panelType"> Panel Type</label>
            <select>
			  <option value="volvo">Polycrystalline</option>
			  <option value="saab">Monocrystalline</option>
  			  <option value="fiat">Mono+Perc</option>
  			  <option value="audi">Mono+Perc+Half cut cell</option>
			  <option value="audi">Poly+Perc+Half cut cell</option>
			</select>
            <label for="panelManufacturer"> Panel Manufacturer</label>
            <select>
			  <option value="volvo">Waaree</option>
			  <option value="saab">Vikram</option>
  			  <option value="fiat">Renewsys</option>
  			  <option value="audi">Trina</option>
			  <option value="audi">Longi</option>
			</select>
            <label for="value">Solar panel value</label>
            <input type="number" id="panelValue" name="value" placeholder="Cost of solar panel">
            			
          </div>
		  
		  
			<!--inverter selection area -->
          <div class="col-25">
            <h3>Inverter Selection</h3>
            <label for="inverterManufacturer"> Inverter Manufacturer</label>
            <select>
			  <option value="volvo">Waaree</option>
			  <option value="saab">Havells</option>
  			  <option value="fiat">Solaredge</option>
  			  <option value="audi">Fronius</option>
			  <option value="audi">Polycab</option>
			</select>
            <label for="inverterCapacity"> Inverter Capacity</label>
            <select>
			  <option value="volvo">1kw</option>
			  <option value="saab">2kw</option>
  			  <option value="fiat">3kw</option>
  			  <option value="audi">4kw</option>
			  <option value="audi">5kw</option>
			</select>
			
			<label for="ccnum">Inverter Quantity</label>
            <input type="number" id="ccnum" name="cardnumber" placeholder="Number of inverters">
            <label for="expmonth">Value of Inverters</label>
            <input type="number" id="expmonth" name="expmonth" placeholder="Cost of Inverter">
            
        </div>
		
			<!--Protection circuit selection -->
		<div class="col-25 bgColor1">
            <h3>Protection Circuit</h3>
			<div class="row">
				<div class="col-50">
					<label for="inverterManufacturer"> DCDB</label>
						<select>
							<option value="volvo">Waaree</option>
							<option value="saab">Havells</option>
							<option value="fiat">Solaredge</option>
							<option value="audi">Fronius</option>
							<option value="audi">Polycab</option>
						</select>
				</div>
				<div class="col-50">
					<label for="ccnum">Quantity</label>
					<input type="text" id="ccnum" name="cardnumber" placeholder="Quantity of DCDB">
				</div>
			</div>
            
			<div class="row">
				<div class="col-50">
					<label for="inverterManufacturer"> ACDB</label>
						<select>
							<option value="volvo">Waaree</option>
							<option value="saab">Havells</option>
							<option value="fiat">Solaredge</option>
							<option value="audi">Fronius</option>
							<option value="audi">Polycab</option>
						</select>
				</div>
				<div class="col-50">
					<label for="ccnum">Quantity</label>
					<input type="text" id="ccnum" name="cardnumber" placeholder="Quantity of ACDB">
				</div>
			</div>
			
            <div class="row">
				<div class="col-50">
					<label for="inverterManufacturer"> MCB Rating</label>
						<select>
							<option value="volvo">Waaree</option>
							<option value="saab">Havells</option>
							<option value="fiat">Solaredge</option>
							<option value="audi">Fronius</option>
							<option value="audi">Polycab</option>
						</select>
				</div>
				<div class="col-50">
					<label for="ccnum">Quantity</label>
					<input type="text" id="ccnum" name="cardnumber" placeholder="Quantity of MCB">
				</div>
			</div>
			
			 <label for="value">Protection Circuit value</label>
            <input type="number" id="panelValue" name="value" placeholder="Cost of solar panel">
                       
          
        </div> <!-- Protection circuit selection ends -->
		
		<!-- Earthing and LA -->
		
		<div class="col-25">
            <h3>Earthing and LA</h3>
            <div class="row">
				<div class="col-50">
					<label for="inverterManufacturer">Earthing Type</label>
						<select>
							<option value="volvo">Waaree</option>
							<option value="saab">Havells</option>
							<option value="fiat">Solaredge</option>
							<option value="audi">Fronius</option>
							<option value="audi">Polycab</option>
						</select>
				</div>
				<div class="col-50">
					<label for="ccnum">Quantity</label>
					<input type="text" id="ccnum" name="cardnumber" placeholder="Quantity of DC1 wire">
				</div>
			</div>
			
            <div class="row">
				<div class="col-50">
					<label for="inverterManufacturer">LA 1</label>
						<select>
							<option value="volvo">Waaree</option>
							<option value="saab">Havells</option>
							<option value="fiat">Solaredge</option>
							<option value="audi">Fronius</option>
							<option value="audi">Polycab</option>
						</select>
				</div>
				<div class="col-50">
					<label for="ccnum">LA1 Quantity</label>
					<input type="text" id="ccnum" name="cardnumber" placeholder="Quantity of DC2 wire">
				</div>
			</div>
			
            <div class="row">
				<div class="col-50">
					<label for="inverterManufacturer">LA 2</label>
						<select>
							<option value="volvo">Waaree</option>
							<option value="saab">Havells</option>
							<option value="fiat">Solaredge</option>
							<option value="audi">Fronius</option>
							<option value="audi">Polycab</option>
						</select>
				</div>
				
				<div class="col-50">
					<label for="ccnum">LA2 Quantity</label>
					<input type="text" id="ccnum" name="cardnumber" placeholder="Quantity of AC1 wire">
				</div>
			</div>
			
           
				<label for="value"> Earthing and LA value </label>
				<input type="number" id="panelValue" name="value" placeholder="Cost of solar panel">
           
                      
        </div> <!--Earthing and LA ends -->
			</div>
			
			<!-- DC wire selection row-->
			
			<div class="row" style="width:100%;">
			
				<div class="col-50">
				<h3>DC Wire 1 Selection</h3>
				<div class="row">
				   <div class="col-50">
				   <label for="inverterManufacturer">DC Wire 1</label>
						<select>
							<option value="volvo">Waaree</option>
							<option value="saab">Havells</option>
							<option value="fiat">Solaredge</option>
							<option value="audi">Fronius</option>
							<option value="audi">Polycab</option>
						</select>
				   </div>
				   <div class="col-50">
						<label for="value"> DC Wire 1 Quantity </label>
						<input type="number" id="panelValue" name="value" placeholder="Cost of solar panel">
				   </div>
				</div>
				</div>
				
				<div class="col-50">
				<h3>DC Wire 2 Selection</h3>
				<div class="row">
				   <div class="col-50">
				   <label for="inverterManufacturer">DC Wire 2</label>
						<select>
							<option value="volvo">Waaree</option>
							<option value="saab">Havells</option>
							<option value="fiat">Solaredge</option>
							<option value="audi">Fronius</option>
							<option value="audi">Polycab</option>
						</select>
				   </div>
				   <div class="col-50">
						<label for="value"> DC Wire 2 Quantity </label>
						<input type="number" id="panelValue" name="value" placeholder="Cost of solar panel">
				   </div>
				</div>
				</div>
				
				
			</div>
			
			<!--AC wire selection -->
			<div class="row bgColor1" >
				<div class="col-50">
				<h3>AC Wire 1 Selection</h3>
					<div class="row">
						<div class="col-33">
						<label for="inverterManufacturer">AC Wire 1 Type</label>
						<select>
							<option value="volvo">Waaree</option>
							<option value="saab">Havells</option>
							<option value="fiat">Solaredge</option>
							<option value="audi">Fronius</option>
							<option value="audi">Polycab</option>
						</select>
						</div>
						<div class="col-33">
						<label for="inverterManufacturer">AC Wire 1 Size</label>
						<select>
							<option value="volvo">Waaree</option>
							<option value="saab">Havells</option>
							<option value="fiat">Solaredge</option>
							<option value="audi">Fronius</option>
							<option value="audi">Polycab</option>
						</select>
						</div>
						<div class="col-33">
						<label for="value"> AC Wire 1 Quantity </label>
						<input type="number" id="panelValue" name="value" placeholder="Cost of solar panel">
						</div>
					</div>
				</div>
				
				<div class="col-50">
				<h3>AC Wire 2 Selection</h3>
					<div class="row">
						<div class="col-33">
						<label for="inverterManufacturer">AC Wire 2 Type</label>
						<select>
							<option value="volvo">Waaree</option>
							<option value="saab">Havells</option>
							<option value="fiat">Solaredge</option>
							<option value="audi">Fronius</option>
							<option value="audi">Polycab</option>
						</select>
						</div>
						<div class="col-33">
						<label for="inverterManufacturer">AC Wire 2 Size</label>
						<select>
							<option value="volvo">Waaree</option>
							<option value="saab">Havells</option>
							<option value="fiat">Solaredge</option>
							<option value="audi">Fronius</option>
							<option value="audi">Polycab</option>
						</select>
						</div>
						<div class="col-33">
						<label for="value"> AC Wire 2 Quantity </label>
						<input type="number" id="panelValue" name="value" placeholder="Cost of solar panel">
						</div>
					</div>
				</div>
			</div>
			
			
		<div class="row" style="margin-top:15px;">
		   <!-- Structure Selection-->
          <div class="col-25 bgColor1">
            <h3>Solar Structure</h3>
			
			<label for="panelType"> Roof Type</label>
            <select>
			  <option value="volvo">RCC Roof</option>
			  <option value="saab">Tin Shade</option>
  			  <option value="fiat">Ground</option>
  			  
			</select>
			
            <label for="panelType"> Structure's Metal</label>
            <select>
			  <option value="volvo">Hot Dip Galvanized</option>
			  <option value="saab">Galvanized</option>
  			  <option value="fiat">Aluminium</option>
  			  <option value="audi">Epoxy Coated</option>
			  <option value="audi">FRP structure</option>
			</select>
            <label for="panelManufacturer"> Structure Type</label>
            <select>
			  <option value="volvo">Waaree</option>
			  <option value="saab">Vikram</option>
  			  <option value="fiat">Renewsys</option>
  			  <option value="audi">Trina</option>
			  <option value="audi">Longi</option>
			</select>
            <label for="value">Structure's value</label>
            <input type="number" id="panelValue" name="value" placeholder="Cost of solar structure">
            			
          </div> <!-- Structure Selection ends-->
		  
		  
			<!--walkway, Railing, Pipeline selection area -->
          <div class="col-25">
            <h3>Walkway / Railing / Water pipeline</h3>
            <div class="row">
				<div class="col-50">
				<label for="inverterManufacturer"> Walkway Type</label>
					<select id="walkwayType">
					<option value="volvo">Aluminium Checkered</option>
					<option value="saab">HDG Slotted</option>
					<option value="fiat">GI Slotted</option>
					<option value="audi">FRP</option>
					<option value="audi">MS Epoxy</option>
					</select>
				</div>
				<div class="col-50">
					<label for="value">Walkway Length</label>
					<input type="number" id="walkwayLength" name="value" placeholder="Length in Meters">
				</div>
			</div>
			<div class="row">
				<div class="col-50">
					<label for="inverterManufacturer"> Railing Type</label>
					<select id="railingType">
						<option value="volvo">Lite Epoxy</option>
						<option value="saab">Heavy Epoxy</option>
					</select>
				</div>
				<div class="col-50">
					<label for="value">Railing Length</label>
					<input type="number" id="railingLength" name="value" placeholder="Length in Meters">
				</div>
			</div>
			
			<div class="row">
				<div class="col-50">
					<label for="inverterManufacturer"> Pipeline Type</label>
					<select id="pipelineType">
						<option value="volvo">CPVC Pipe</option>
						<option value="saab">UPVC Pipe</option>
					</select>
				</div>
				<div class="col-50">
					<label for="inverterManufacturer">Pressure Pump?</label>
					<select>
						<option value="volvo">Required</option>
						<option value="saab">Not Required</option>
					</select>
				</div>
			</div>
			
				<label for="value">Value</label>
				<input type="number" id="panelValue" name="value" placeholder="Value of above products">
			
        </div>
		
			<!--Meter and earthing wire selection -->
		<div class="col-25 bgColor1">
            <h3>Meter and Earthing Wire</h3>
			<div class="row">
				<div class="col-50">
					<label for="inverterManufacturer"> Gen. Meter</label>
						<select>
							<option value="volvo">Single Phase 5-30A</option>
							<option value="saab">Three Phase 10-40A</option>
							<option value="fiat">Three phase CT operated</option>
							<option value="audi">HT consumer</option>
			
						</select>
				</div>
				<div class="col-50">
					<label for="ccnum">Quantity</label>
					<input type="text" id="ccnum" name="cardnumber" placeholder="Quantity of Gen Meter">
				</div>
			</div>
            
			<div class="row">
				<div class="col-50">
					<label for="inverterManufacturer"> Net Meter</label>
						<select>
								<option value="volvo">Single Phase 5-30A</option>
								<option value="saab">Three Phase 10-40A</option>
								<option value="fiat">Three phase CT operated</option>
								<option value="audi">HT consumer</option>
						</select>
				</div>
				<div class="col-50">
					<label for="ccnum">Quantity</label>
					<input type="text" id="ccnum" name="cardnumber" placeholder="Quantity of Net Meter">
				</div>
			</div>
			
            <div class="row">
				<div class="col-50">
					<label for="inverterManufacturer"> Earthing Wire</label>
						<select>
							<option value="volvo">50 sq.mm. AL wire</option>
							<option value="saab">25mm x 3mm HDG Strip</option>
							<option value="fiat">25mm x 3mm HDG Strip</option>
						</select>
				</div>
				<div class="col-50">
					<label for="ccnum">Quantity</label>
					<input type="text" id="ccnum" name="cardnumber" placeholder="Quantity of Earthing Wire">
				</div>
			</div>
			
			 <label for="value">Value</label>
            <input type="number" id="panelValue" name="value" placeholder="Value of meter and wire">
                       
          
        </div> <!-- Protection circuit selection ends -->
		
		<!-- Miscellaneous -->
		
		<div class="col-25">
            <h3>Miscellaneous</h3>
            <div class="row">
				<div class="col-50">
					<label for="inverterManufacturer">Busbar Box</label>
						<select>
							<option value="volvo">100A Cu</option>
							<option value="saab">200A Cu</option>
							<option value="fiat">300A Cu</option>
							<option value="audi">500A Cu</option>
							<option value="audi">1000A Cu</option>
						</select>
				</div>
				<div class="col-50">
					<label for="ccnum">Quantity</label>
					<input type="text" id="ccnum" name="cardnumber" placeholder="Quantity of Busbar Box">
				</div>
			</div>
			
            <div class="row">
				<div class="col-50">
					<label for="inverterManufacturer">Main Disconnect Box</label>
					<input type="text" id="ccnum" name="cardnumber" placeholder="Value of Main Disconnect Box">
				</div>
				<div class="col-50">
					<label for="ccnum">Value of PVC pipes</label>
					<input type="text" id="ccnum" name="cardnumber" placeholder="Costing of PVC pipes">
				</div>
			</div>
			
            <div class="row">
				<div class="col-50">
					<label for="inverterManufacturer">MCB Rating</label>
						<select>
							<option value="volvo">100A</option>
							<option value="saab">200A</option>
							<option value="fiat">Solaredge</option>
							<option value="audi">Fronius</option>
							<option value="audi">Polycab</option>
						</select>
				</div>
				
				<div class="col-50">
					<label for="ccnum">MCB Quantity</label>
					<input type="text" id="ccnum" name="cardnumber" placeholder="number of MCB">
				</div>
			</div>
			
           
				<label for="value"> Value of Miscellaneous </label>
				<input type="number" id="panelValue" name="value" placeholder="Value">
           
                      
        </div> <!--Earthing and LA ends -->
			</div>
		
		
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
		
	  
    
  </div>
  <!-- <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div> -->
</div>
</div>
</form>
</body>
</html>
