<div id="content">
		<div>
			<form class="big_form" action="action_search_restaurant.php" method="post">
				<fieldset>
					<legend> General Information </legend>
					<p><label>Restaurant Name: 
						<input type="text" name="restaurant_name" value="">
					</label></p>
					<p><label>Owner Name: 
						<input type="text" name="owner_name" value="">
					<p><label></p>
					<p><label>Address: 
						<input type="text" name="address_name" value="">
					<p><label></p>
					<p><label>Stars (Minimum) : 0
						<input type="range" value="0" min="0" max="5" step="1"> 5
					</label></p>
				</fieldset>

				<fieldset>
				
					<legend> Function Time </legend>
					Hours: <input type="time" value='00:00'> - <input type="time" value = '23:59'><br><br>
					
					<ul class="simple_list">					
						<li><input class="select_all" type="checkbox" checked="checked" data-group=".group1" value="all_checked">All Checked<br><br></li>
						<li><input class="group1" name="check[]" type="checkbox" checked="checked" name="opening_days" value="monday">Monday</li>
						<li><input class="group1" name="check[]" type="checkbox" checked="checked" name="opening_days" value="tuesday">Tuesday</li>
						<li><input class="group1" name="check[]" type="checkbox" checked="checked" name="opening_days" value="wednesday">Wednesday</li>
						<li><input class="group1" name="check[]" type="checkbox" checked="checked" name="opening_days" value="thursday">Thursday</li>
						<li><input class="group1" name="check[]" type="checkbox" checked="checked" name="opening_days" value="friday">Friday</li>
						<li><input class="group1" name="check[]" type="checkbox" checked="checked" name="opening_days" value="saturday">Saturday</li>
						<li><input class="group1" name="check[]" type="checkbox" checked="checked" name="opening_days" value="sunday">Sunday</li>
					</ul>
				</fieldset>
				
				<fieldset>
					<legend> Categories </legend>
					
					<ul class="simple_list">
						<li><input class="select_all" type="checkbox" checked="checked" data-group=".group2" value="all_checked">All Checked<br><br></li>
					
					<?php
					include_once getcwd() . "/database/connection.php";
					include_once getcwd() . "/database/search.php";
					
					$result = getAllCategories($db);
					
					foreach( $result as $row) {
						echo '<li><input class="group2" name="check[]" type="checkbox" name="categories" checked="checked" value="' . $row['id_category'] . '">' . $row['id_category'] .'<br></li>';
					 }
					?>
					</ul>
				</fieldset>
				
				<button class="button_1"> Search Restaurant </button>
				
			</form>
		</div>
</div>