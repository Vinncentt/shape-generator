<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>
<body>
    <div class="div-title">
        <h1 class="title">Shape Generator</h1>
            <div class="input-div">
                <h3>Rectangle :</h3>
                X <input type="number" class="input-num rect-x">
                Y <input type="number" class="input-num rect-y">
                W <input type="number" class="input-num rect-h">
                H <input type="number" class="input-num rect-h">
                <button type="submit" id="btn1">Draw</button>

                <h3>Elipse :</h3>
                X <input type="number" class="input-num rect-x">
                Y <input type="number" class="input-num rect-y">
                R <input type="number" class="input-num rect-r">
                <button type="submit" id="btn2">Draw</button>

                <h3>Square :</h3>
                X <input type="number" class="input-num rect-x">
                Y <input type="number" class="input-num rect-y">
                h <input type="number" class="input-num rect-r">
                <button type="submit" id="btn3">Draw</button>
            </div>

            
        
    </div> 
    <script src="p5.min.js"></script>
    <script src="script.js"></script>
</body>
</html>