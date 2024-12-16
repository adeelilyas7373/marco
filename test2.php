<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Div with Name and Close Button</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .beautiful-div {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 10px 15px;
            border-radius: 8px;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-size: 18px;
        }

        .beautiful-div .name {
            font-weight: bold;
        }

        .beautiful-div .close-btn {
            background: rgba(255, 255, 255, 0.3);
            border: none;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background 0.3s;
        }

        .beautiful-div .close-btn:hover {
            background: rgba(255, 255, 255, 0.6);
        }
    </style>
</head>
<body>
    <div class="beautiful-div">
        <span class="name">Your Name</span>
        <button class="close-btn">&times;</button>
    </div>
</body>
</html>
