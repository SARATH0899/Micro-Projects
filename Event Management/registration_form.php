<html>
<head>
    <title>Event Registration</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
	
</head>
<body>
<a href="homepage.php"> <h3>Back to Dashboard</h3></a>
    <div class="container">

        <h1>Matrix Catering & Event Managements </h1>
        <h2> Event Details </h2>
        <form action="register.php" method="POST">
            <label for="event_name">Event Name:</label>
            <select id="event_name" name="event_name">
                <option value="">Select the Event </option>
                <option value="event1">Wedding Event</option>
                <option value="event2">Wedding Party</option>
                <option value="event3">Engagement Event</option>
            </select>

            <label for="event_date">Event Date:</label>
            <input type="date" id="event_date" name="event_date">

            <label for="event_address">Event Address:</label>
            <input type="text" id="event_address" name="event_address">
			
			<h2>Groom Details</h2>

            <label for="groom_name">Name:</label>
            <input type="text" id="groom_name" name="groom_name" required>

            <label for="groom_age">Age:</label>
            <input type="number" id="groom_age" name="groom_age" required>

            <label for="groom_address">Address:</label>
            <input type="text" id="groom_address" name="groom_address" required>
			
			<label for="groom_mobile">Mobile:</label>
            <input type="text" placeholder="+91 " id="groom_mobile" name="groom_mobile" required>

            <h2>Bride Details</h2>

            <label for="bride_name">Name:</label>
            <input type="text" id="bride_name" name="bride_name" required>

            <label for="bride_age">Age:</label>
            <input type="number" id="bride_age" name="bride_age" required>

            <label for="bride_address">Address:</label>
            <input type="text" id="bride_address" name="bride_address" required>
			
			<label for="bride_mobile">Mobile:</label>
            <input type="text" placeholder="+91 " id="bride_mobile" name="bride_mobile" required>
			
			 <h2>Catering Details</h2>

            <label for="catering_required">Catering Required:</label>
            <select id="catering_required" name="catering_required" onchange="showVegNonVegOptions()">
                <option value="">Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>

            <div id="veg_non_veg_options" style="display: none;">
                <label for="food_type">Food Type:</label>
                <select id="food_type" name="food_type">
                    <option value="">Select</option>
                    <option value="veg">Vegetarian</option>
                    <option value="non-veg">Non-Vegetarian</option>
                    <option value="mixed">Both Vegetarian & Non-Vegetarian</option>
                </select>
            </div>
			
			<h2>Decorations Required</h2>

            <label for="decorations_required">Decorations Required:</label>
            <select id="decorations_required" name="decorations_required" onchange="showDecorationOptions()">
                <option value="">Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>

            <div id="decoration_options" style="display: none;">
                <label for="decoration_type">Decoration Type:</label>
                <select id="decoration_type" name="decoration_type">
                    <option value="">Select</option>
                    <option value="flower">Flower on Wedding hall only</option>
                    <option value="flower_fruits_vegetables">Both Flower on Wedding hall & Fruits and vegetables cuttings in food area</option>
                </select>
            </div>

            <h2>Other Requirements</h2>
			
			<label for="car_bride">Car for Bride</label>
            <input type="checkbox" id="car_bride" name="other_requirements" value="car_bride">
            
			<label for="car_groom">Car for Groom</label>
            <input type="checkbox" id="car_groom" name="other_requirements" value="car_groom">
            
			<label for="welcome_girls">Welcome Girls</label>
            <input type="checkbox" id="welcome_girls" name="other_requirements" value="welcome_girls">
            
			<label for="catering_boys">Catering Boys</label>
            <input type="checkbox" id="catering_boys" name="other_requirements" value="catering_boys">
            
            <input type="submit" name="submit" value="Register">

			
        </form>
    </div>
		<script src="script.js"></script>
			

</body>
</html>
