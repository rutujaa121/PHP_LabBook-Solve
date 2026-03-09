<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./../../jquery-4.0.0.js"></script>
    <script>
        var a = confirm("Exams are near, have you started preparing for ?");
        if(a==true)
            {
                var n = window.prompt("Enter your name ");
                if(n!=null)
                {
                    alert("Best Of Luck "+n);
                }
                else
                {
                    alert("Best Of Luck ");
                }
            } 
            else
            {
                alert("Prepared for it.....");
            }
    </script>
</head>
<body>
    
</body>
</html>

