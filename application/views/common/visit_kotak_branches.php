<div class="mapView">
	<div class="mapForm">
		<form id="mapDD" method="post" accept-charset="utf-8" onSubmit="return false;" >
			<div class="mapInfo">
				<p>Search for a branch closest to you.</p>
				<div class="selectbg">
					<div class="selectedvalue">State</div>
					<select id="statesDD"  name="statesDD">
						<option value="">State</option>
						<?php 
						foreach($bindStates as $value){$array[] = $value->states;}
						foreach($array as $states){echo "<option value='$states'>$states</option>";}
						?>
					</select>   
				</div>
				<div class="selectbg"> 
					<div class="selectedvalue citySel">City</div>
					<select id="cityDD"></select>
				</div>
				<div class="orDiv"><span>or</span></div>
				<input type="text" placeholder="Enter pincode" onkeypress="return isNumber(event)" id="pincodeTxt" maxlength="6"/>
				<a href="javascript:;" class="nextArrow" id="searchBtn">Next</a>
				<span class="pinErr">Invalid Pincode</span>
				<span class="noBrances">Branches are not available in selected area</span>
			</div>
		</form>
		<p class="contact-timings">Timings : 10:00 AM to 04:30 PM <br> From Monday to Friday <br>(and on first and last Saturday of the month)</p>
	</div>
	<div id="map_canvas" class="mapping"></div>
	<ul class="markers" id="branchInfo" style="display:none;"></ul>
	
	
</div>
