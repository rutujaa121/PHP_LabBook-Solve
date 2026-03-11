<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./../../jquery-4.0.0.js"></script>
    <script>
        $(document).ready(function()
        {
            $("p").append('<br> Hello...');
            $("ol").append('<li> Red </li><li> Orange </li>');
        });
    </script>
</head>
<body>
    <p>This is paragraph </p>
    <ol>
    </ol>
</body>
</html>