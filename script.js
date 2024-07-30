<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Example</title>
    <style>
        #message {
            display: none;
            margin-top: 10px;
            color: green;
        }
    </style>
</head>
<body>
    <button id="submitButton">Submit</button>
    <div id="message">Information has been added successfully. You will receive an email shortly.</div>

    <script>
        // JavaScript code
        document.getElementById('submitButton').addEventListener('click', function() {
            var messageElement = document.getElementById('message');
            messageElement.style.display = 'block';
        });
    </script>
</body>
</html>
