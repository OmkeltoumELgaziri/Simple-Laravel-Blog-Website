<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>

                            /* Shared gradient animation for header + banner */
.gradient-animated {
  background: linear-gradient(135deg, #4f46e5, #06b6d4, #f43f5e); /* same colors */
  background-size: 400% 400%;
  animation: gradientShift 8s ease infinite; /* same duration */
}

@keyframes gradientShift {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}




    </style>
</body>
</html>