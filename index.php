<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Register Here</h1>

    <!-- GET FORM -->
    <fieldset>
        <legend>This form uses GET request</legend>

        <form action="redirect.php" method="GET">
            <table>

                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="fname" placeholder="Enter First Name" required></td>
                </tr>

                <tr>
                    <td>Middle Name</td>
                    <td><input type="text" name="mname" placeholder="Enter Middle Name" required></td>
                </tr>

                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lname" placeholder="Enter Last Name" required></td>
                </tr>

                <tr>
                    <td>Age</td>
                    <td><input type="number" name="age" min="1" max="120" placeholder="Enter Age" required></td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" value="Male" required> Male
                        <input type="radio" name="gender" value="Female"> Female
                    </td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" placeholder="Enter Email" required></td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td><textarea name="address" placeholder="Enter Address" required></textarea></td>
                </tr>

                <tr>
                    <td>Contact Number</td>
                    <td>
                        <input type="tel" name="contact"
                               placeholder="09XXXXXXXXX"
                               pattern="[0-9]{11}"
                               maxlength="11"
                               required>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit Data">
                        <input type="reset" value="Cancel">
                    </td>
                </tr>

            </table>
        </form>
    </fieldset>

    <fieldset>
        <legend>This form uses POST request</legend>

        <form action="redirect.php" method="POST">
            <table>

                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="fname" placeholder="Enter First Name" required></td>
                </tr>

                <tr>
                    <td>Middle Name</td>
                    <td><input type="text" name="mname" placeholder="Enter Middle Name" required></td>
                </tr>

                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lname" placeholder="Enter Last Name" required></td>
                </tr>

                <tr>
                    <td>Age</td>
                    <td><input type="number" name="age" min="1" max="120" placeholder="Enter Age" required></td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" value="Male" required> Male
                        <input type="radio" name="gender" value="Female"> Female
                    </td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" placeholder="Enter Email" required></td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td><textarea name="address" placeholder="Enter Address" required></textarea></td>
                </tr>

                <tr>
                    <td>Contact Number</td>
                    <td>
                        <input type="tel" name="contact"
                               placeholder="09XXXXXXXXX"
                               pattern="[0-9]{11}"
                               maxlength="11"
                               required>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit Data">
                        <input type="reset" value="Cancel">
                    </td>
                </tr>

            </table>
        </form>
    </fieldset>

</body>
</html>