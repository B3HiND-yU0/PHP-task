<?php

    $req_type = $_SERVER['REQUEST_METHOD']; // 'GET' or 'POST' — no need to store it as a string mimicking a variable name

    $data = ($req_type === 'POST') ? $_POST : $_GET;

    // Escape before printing so submitted text can't inject HTML/JS (XSS)
    function safe($value) {
        return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output No. 1</title>
    <style>
        body {
            font-family: "Arial";
        }
    </style>
</head>
<body>
    <h2>Data is sent here, and it is stored in the $_<?php echo safe($req_type); ?> variable</h2>
    <table>
        <tr>
            <td width="120">First Name:</td>
            <td style="text-decoration: underline">
                <?php echo safe($data['fname'] ?? ''); ?>
            </td>
        </tr>
        <tr>
            <td>Middle Name:</td>
            <td style="text-decoration: underline">
                <?php echo safe($data['mname'] ?? ''); ?>
            </td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td style="text-decoration: underline">
                <?php echo safe($data['lname'] ?? ''); ?>
            </td>
        </tr>
    </table>
    <br><br>
    <a href="./">Return to Main Form</a>
</body>
</html>