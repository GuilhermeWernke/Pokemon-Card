<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    
    <title>Pokemon</title>
    
</head>

<body class="container bg-dark text-light p-3 100vh">
    
    <main class="container text-center align-content-center align-items-center">
        
        <h1>Cadastro de Pokemon</h1>
        
        <form action="card.php" method="POST" class="formulario">
            
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" class="input-group-text w-100 mb-2" required>
            
            <label for="numero">Número:</label>
            <input type="number" id="numero" name="numero" class="input-group w-100 mb-2 text-center" required>
            
            <label for="tipo1">Tipo 1:</label>
            <input type="text" id="tipo1" name="tipo1" class="input-group-text w-100 mb-2" required>
            
            <label for="tipo2">Tipo 2:</label>
            <input type="text" id="tipo2" name="tipo2" class="input-group-text w-100 mb-2" required>
            
            <label for="vida">Vida:</label>
            <input type="number" id="vida" name="vida" class="input-group-text w-100 mb-2 text-center" required>
            
            <label for="ataque">Ataque:</label>
            <input type="number" id="ataque" name="ataque" class="input-group-text w-100 mb-2 text-center" required>
            
            <label for="defesa">Defesa:</label>
            <input type="number" id="defesa" name="defesa" class="input-group-text w-100 mb-2 text-center" required>
            
            <label for="ataqueEspecial">Ataque Especial:</label>
            <input type="number" id="ataqueEspecial" name="ataqueEspecial" class="input-group-text w-100 mb-2 text-center" required>
            
            <label for="defesaEspecial">Defesa Especial:</label>
            <input type="number" id="defesaEspecial" name="defesaEspecial" class="input-group-text w-100 mb-2 text-center" required>
            
            <label for="velocidade">Velocidade:</label>
            <input type="number" id="velocidade" name="velocidade" class="input-group-text w-100 mb-2 text-center" required>
            
            <label for="linkFotoPokemon">Link Foto Pokemon:</label>
            <input type="text" id="linkFotoPokemon" name="linkFotoPokemon" class="input-group-text w-100 mb-2" required>
            
            <label for="linkFotoTipo1">Link Foto Tipo 1:</label>
            <input type="text" id="linkFotoTipo1" name="linkFotoTipo1" class="input-group-text w-100 mb-2" required>
            
            <label for="linkFotoTipo2">Link Foto Tipo 2:</label>
            <input type="text" id="linkFotoTipo2" name="linkFotoTipo2" class="input-group-text w-100 mb-2" required>
            
            <button type="submit" class="btn btn-outline-light">Cadastrar</button>
            
        </form>
        
    </main>
    
</body>

</html>