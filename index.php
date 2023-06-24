<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Calculadora</title>
</head>
<body class="bg-secondary">
    <div class="container p-5 my-5 bg-dark text-white">
        <div class="col">
            <div class="row h4">
                <label class="col text-break" id="operaciones"></label>
            </div>
            <div class="row h4">
                
                <label class="col p-3 text-end">Resultados: </label>
                <label class="col p-3 text-start" id="resultados"></label>
            </div>
            <div class=" h2 row">
                <div class="row">
                    <button class="col p-3" onclick="borrar()">Borrar</button>
                    <button class="col p-3" onclick="borrarAll()">BorrarTodo</button>
                    <button class="col-3 p-3" onclick="suma()">+</button>
                </div>
                <div class="row row-cols-4">
                    <button class="col bg-light p-3" onclick="agregar(7)">7</button>
                    <button class="col bg-light p-3" onclick="agregar(8)">8</button>
                    <button class="col bg-light p-3" onclick="agregar(9)">9</button>
                    <button class="col bg-light p-3" onclick="resta()">-</button> 
                    <button class="col bg-light p-3" onclick="agregar(4)">4</button>
                    <button class="col bg-light p-3" onclick="agregar(5)">5</button>
                    <button class="col bg-light p-3" onclick="agregar(6)">6</button>
                    <button class="col bg-light p-3" onclick="multi()">*</button> 
                    <button class="col bg-light p-3" onclick="agregar(1)">1</button>
                    <button class="col bg-light p-3" onclick="agregar(2)">2</button>
                    <button class="col bg-light p-3" onclick="agregar(3)">3</button>
                    <button class="col bg-light p-3" onclick="div()">/</button>
                </div>
                <div class="row">
                    <button class="col-8 p-3" onclick="agregar(0)">0</button>
                    <button class="col-4" onclick="igual()">=</button> 
                </div>
            </div>
        </div>
    </div>
    <script src="calc.js"></script>
    </body>
</html>