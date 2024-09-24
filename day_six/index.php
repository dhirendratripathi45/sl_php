<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 6 - Form Handling with POST Method</title>
</head>
<body>
<section>
        <h1>Day 6 - Form Handling With POST Merhod</h1>
        <form action="form_post.php" method="POST">
            <label for="full_name">Full Name:</label>
            <input type="text" name="full_name" id="full_name" required>
            <br><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <br><br>
            <label for="contact">Contact:</label>
            <input type="number" name="contact" id="contact" required>
            <br><br>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required>
            <br><br>
            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" id="dob">
            <br><br>
            <label for="academic">Academics:</label>
            <input type="text" name="academic" id="academic" required>
            <br><br>
            <input type="submit" value="Add Student" name="add_student">
        </form>
    </section>
</body>
</html>