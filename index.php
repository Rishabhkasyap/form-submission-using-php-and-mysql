<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Registration</title>
    <style>
        body {
            background-color: #FBB917; 
            transition: background-color 0.5s ease; 
            font-family: Arial, sans-serif;
        }
        h1, h2 {
            text-align: center;
        }
        form {
            width: 300px;
            margin: auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
        }
        label, input {
            width: 100%;
            margin-top: 10px;
        }
        input[type="submit"] {
            margin-top: 20px;
            background: #FBB917;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background: #e0a500;
        }
    </style>
</head>
<body>
    <h1>Blood Donation Camp</h1>
    <h2>Registration Form</h2>

    <form action="connect.php" method="POST">
        <label for="name">Name:</label> 
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label> 
        <input type="email" name="email" id="email" required>

        <label for="phone">Phone:</label> 
        <input type="text" name="phone" id="phone" required>

        <label for="bg_group">Blood Group:</label> 
        <input type="text" name="bg_group" id="bg_group" required>

        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>
