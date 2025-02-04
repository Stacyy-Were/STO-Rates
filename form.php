<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="icon" href="images/Bush & Beyond.png" type="images/Bush and Beyond.png">
    <title>Agent Form</title>
</head>
<body>
    <h1>STO RATES REQUEST FORM</h1>
    
        <form action="submit_form.php" method="POST">
            <!-- First Name -->
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required><br><br>

            <!-- Last Name -->
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required><br><br>

            <!-- Email -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <!-- Country -->
            <label for="country">Country:</label>
            <input type="text" id="country" name="country" required><br><br>

            <!-- City -->
            <label for="city">City:</label>
            <input type="text" id="city" name="city" required><br><br>

            <!-- Agency Name -->
            <label for="agency_name">Agency Name:</label>
            <input type="text" id="agency_name" name="agency_name" required><br><br>

            <!-- Properties to be booked -->
            <label for="properties_to_be_booked">Properties to be Booked:</label>
            <input type="text" id="properties_to_be_booked" name="properties_to_be_booked" required><br><br>

            <!-- Agent Type -->
            <label for="agent_type">Agent Type:</label>
            <select id="agent_type" name="agent_type" required>
                <option value="individual">Resident</option>
                <option value="agency">Non-Resident</option>
            </select><br><br>

            <!-- Telephone -->
            <label for="telephone">Telephone:</label>
            <input type="tel" id="telephone" name="telephone" required><br><br>

            <!-- Subscribe to newsletter -->
            <label for="subscribe">Subscribe to our newsletter:</label>
            <input type="checkbox" id="subscribe" name="subscribe" value="yes"><br><br>

            <!-- Submit Button -->
            <input type="submit" value="Submit">
        </form>
        
</body>
</html>