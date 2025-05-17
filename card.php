<?php 
    
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    require_once (__DIR__ . "/modelo/Pokemon.php");
    
    $dadosPost = array
    (
        
        "nome" => $_POST["nome"],
        "numero" => $_POST["numero"],
        "tipo1" => $_POST["tipo1"],
        "tipo2" => $_POST["tipo2"],
        "vida" => $_POST["vida"],
        "ataque" => $_POST["ataque"],
        "defesa" => $_POST["defesa"],
        "ataqueEspecial" => $_POST["ataqueEspecial"],
        "defesaEspecial" => $_POST["defesaEspecial"],
        "velocidade" => $_POST["velocidade"],
        "linkFotoPokemon" => $_POST["linkFotoPokemon"],
        "linkFotoTipo1" => $_POST["linkFotoTipo1"],
        "linkFotoTipo2" => $_POST["linkFotoTipo2"]
        
    );
    
    $pokemon = new Pokemon
    (
        $dadosPost["numero"],
        $dadosPost["nome"],
        $dadosPost["tipo1"],
        $dadosPost["tipo2"],
        $dadosPost["vida"],
        $dadosPost["ataque"],
        $dadosPost["defesa"],
        $dadosPost["ataqueEspecial"],
        $dadosPost["defesaEspecial"],
        $dadosPost["velocidade"],
        $dadosPost["linkFotoPokemon"],
        $dadosPost["linkFotoTipo1"],
        $dadosPost["linkFotoTipo2"]
    );
    
    print
    ("
        
        <!DOCTYPE html>
        <html lang='en'>
        
        <head>
            
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT' crossorigin='anonymous'>
            
            <title>Pokemon</title>
            
        </head>
        
        <body class='container bg-dark p-5 100vh'>
            
            <main class='bg-light rounded container text-center align-content-center align-items-center p-5 mb-2'>
                
                <h1>Pokemon Cadastrado:</h1>
                <h2>Nome: " . $pokemon->getNome() . "</h2>
                
                <img src=' " . $pokemon->getImgPokemon() . "' alt='Imagem do Pokemon' class='img-fluid rounded mb-2'>
                
                <p>Número: " . $pokemon->getNumero() . "</p>
                
                <!-- Tipo -->
                <div class='d-flex flex-row justify-content-center align-items-center gap-2 mb-2'>
                    
                    <div class='d-flex flex-column justify-content-center align-items-center ' style='width: 25vh;'>
                        
                        <img src='" . $pokemon->getImgTipo1() . "' alt='Imagem do Tipo 1' class='ratio ratio-1x1 img img-fluid border-1 rounded mb-2'>
                        
                        <p>Tipo 1:" .  $pokemon->getTipo1() . "</p>
                        
                    </div>
                    
                    <div class='d-flex flex-column justify-content-center align-items-center ' style='width: 25vh;'>
                        
                        <img src='" . $pokemon->getImgTipo2() . "' alt='Imagem do Tipo 2' class='ratio ratio-1x1 img img-fluid border-1 rounded mb-2'>
                        
                        <p>Tipo 2: " . $pokemon->getTipo2() . "</p>
                        
                    </div>
                    
                </div>
                
                <p>Vida: " . $pokemon->getVida() . "</p>
                <p>Velocidade: " . $pokemon->getVelocidade() . "</p>
                
                <p>Ataque: " . $pokemon->getAtaque() . "</p>
                <p>Defesa: " . $pokemon->getDefesa() . "</p>
                
                <p>Ataque Especial: " . $pokemon->getAtaqueEspecial() . "</p>
                <p>Defesa Especial: " . $pokemon->getDefesaEspecial() . "</p>
                
            </main>
            
            <footer class='container text-center'>
                
                <a href='formulario.php' class='btn btn-outline-light'>Voltar</a>
                
            </footer>
            
        </body>
        
        </html>
        
    ");
    
?>