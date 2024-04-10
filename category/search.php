<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Custom Input Dialog</title>
    <style>
        /* Style the dialog background */
        .dialog-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Initially transparent */
            backdrop-filter: blur(5px); /* Apply blur effect */
            justify-content: center;
            align-items: center;
        }

        /* Style the dialog box */
        .dialog-box {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            width: 400px; /* Adjust dialog width */
            height: 200px; /* Adjust dialog height */
        }
    </style>
</head>
<body>

<center>
    <div class="dialog-overlay" id="customDialog">
        <div class="dialog-box">
            <label for="customInput">Enter something:</label><br>
            <input type="text" id="customInput"><br><br>
            <button onclick="submitCustomInput()">Submit</button>
            <button onclick="cancelCustomInput()">Cancel</button>
        </div>
    </div>
</center>

<button onclick="showCustomDialog()">Click to Input</button>

<script>
    function showCustomDialog() {
        document.getElementById('customDialog').style.display = 'flex';
    }

    function submitCustomInput() {
        var userInput = document.getElementById('customInput').value;
        if (userInput.trim() !== '') {
            alert("You entered: " + userInput);
            // Perform actions with userInput
        } else {
            alert("Please enter something.");
        }
        closeCustomDialog();
    }

    function cancelCustomInput() {
        closeCustomDialog();
    }

    function closeCustomDialog() {
        document.getElementById('customDialog').style.display = 'none';
    }
</script>

</body>
</html>
