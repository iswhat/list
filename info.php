<!DOCTYPE html>
<html>
<head>
    <title>儿子，你想找什么？</title>
    <style>
        .scroll-text {
            width: 200px;
            height: 50px;
            overflow: hidden;
            position: relative;
            border: 1px solid #000;
        }
        
        .scroll-text p {
            position: absolute;
            width: 100%;
            height: 100%;
            margin: 0;
            line-height: 50px;
            text-align: center;
            animation: scroll 10s linear infinite;
        }
        
        @keyframes scroll {
            0% {
                top: 0;
            }
            100% {
                top: -100%;
            }
        }
    </style>
</head>
<body>
    <div class="scroll-text">
        <p>Son, what are you looking for?</p>
    </div>
</body>
</html>