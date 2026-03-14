<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./../../jquery-4.0.0.js"></script>
    <script>
        $(document).ready (function()
        {
            $("#clickBtn").click(function()
            {
                $("img").before ("Hello");
                $("img").after ("Bye");
            });
        });
    </script>
</head>
<body>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROHxYft1f_Ln_y_scKnh8-g5rLMmce7JKyPQ&s" alt="Birds Images please Connect Your Network" width="200px" height="300px">
    <br><br>
    <button id="clickBtn">Click Me</button>
</body>
</html>