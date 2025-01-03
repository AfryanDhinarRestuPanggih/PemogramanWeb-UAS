<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Lost in Space</title>
    <style>
        /* Global Styles */
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Courier New', Courier, monospace;
            background: radial-gradient(circle, #2b2d42, #0f0f1e);
            color: #edf2f4;
            overflow: hidden;
        }

        /* Animation: Stars */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            background-image: 
                radial-gradient(white 1px, transparent 1px),
                radial-gradient(white 1px, transparent 1px);
            background-size: 3px 3px, 5px 5px;
            background-position: 0 0, 2px 2px;
            z-index: -1;
            animation: twinkling 5s infinite;
        }

        @keyframes twinkling {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        /* Container Styles */
        .container {
            text-align: center;
            padding: 40px;
            border-radius: 15px;
            background: rgba(20, 20, 40, 0.9);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        /* Glowing Planet */
        .planet {
            position: relative;
            width: 150px;
            height: 150px;
            background: linear-gradient(145deg, #ef233c, #8d99ae);
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(239, 35, 60, 0.8), 0 0 50px rgba(141, 153, 174, 0.8);
            margin: 0 auto 20px;
        }

        .planet::after {
            content: '';
            position: absolute;
            top: 20%;
            left: 20%;
            width: 60%;
            height: 60%;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            filter: blur(15px);
        }

        /* Error Text Styles */
        .error-text {
            font-size: 100px;
            font-weight: bold;
            margin: 0;
            color: #ef233c;
            text-shadow: 0 0 20px rgba(239, 35, 60, 0.8);
        }

        /* Message Styles */
        .message {
            font-size: 24px;
            margin-top: 10px;
        }

        /* Button Styles */
        .back-button {
            margin-top: 30px;
            padding: 10px 20px;
            font-size: 18px;
            color: #edf2f4;
            border: 2px solid #ef233c;
            border-radius: 5px;
            cursor: pointer;
            background: none;
            transition: background 0.3s, color 0.3s;
        }

        .back-button:hover {
            background: #ef233c;
            color: #2b2d42;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="planet"></div>
        <h1 class="error-text">404</h1>
        <p class="message">Page Lost in Space</p>
        <button class="back-button" onclick="history.back()">Take Me Home</button>
    </div>
</body>
</html>
