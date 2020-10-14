<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo - Add animal</title>
</head>
<body>
    <h1>Add an animal</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <p>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </p>
        <p>
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="F" checked> Female
            <input type="radio" name="gender" value="M" checked> Male
        </p>
        <p>
            <label for="origin">Origin</label>
            <input type="text" name="origin" id="origin">
        </p>
        <p>
            <label for="weight_lbs">Weight (lbs)</label>
            <input type="number" step="any" name="weight_lbs" id="weight_lbs">
        </p>
        <p>
            <label for="date_of_birth">Date of birth</label>
            <input type="date" name="date_of_birth" min="1900-01-01" max="<?php echo date('Y-m-d'); ?>">
        </p>
        <p>
            <label for="species">Species</label>
            <select name="species" id="species">
                <option value="">Select a species</option>
            </select>
        </p>
        <p>
            <label for="staff">Staff member</label>
            <select name="staff" id="staff">
                <option value="">Select a staf member</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Add an animal">
        </p>
    </form>

</body>
</html>