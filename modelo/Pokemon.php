<?php 
    
    class Pokemon 
    {
        
        // Atributos do Pokémon
        private $numero;
        private $nome;
        private $tipo1;
        private $tipo2;
        private $vida;
        private $ataque;
        private $defesa;
        private $ataqueEspecial;
        private $defesaEspecial;
        private $velocidade;
        
        // Atributos de imagem
        private $imgPokemon;
        private $imgTipo1;
        private $imgTipo2;
        
        public function __construct($numero, $nome, $tipo1, $tipo2, $vida, $ataque, $defesa, $ataqueEspecial, $defesaEspecial, $velocidade, $imgPokemon, $imgTipo1, $imgTipo2) 
        {
            
            $this->numero = $numero;
            $this->nome = $nome;
            $this->tipo1 = $tipo1;
            $this->tipo2 = $tipo2;
            $this->vida = $vida;
            $this->ataque = $ataque;
            $this->defesa = $defesa;
            $this->ataqueEspecial = $ataqueEspecial;
            $this->defesaEspecial = $defesaEspecial;
            $this->velocidade = $velocidade;
            
            $this->imgPokemon = $imgPokemon;
            $this->imgTipo1 = $imgTipo1;
            $this->imgTipo2 = $imgTipo2;
            
        }
        
        // GETTERS & SETTERS
        
        public function getNumero() 
        {
            
            return $this->numero;
            
        } 
        
        public function setNumero($numero) 
        {
            
            $this->numero = $numero;
            
        }
        
        public function getNome() 
        {
            
            return $this->nome;
            
        }
        
        public function setNome($nome) 
        {
            
            $this->nome = $nome;
            
        }
        
        public function getTipo1() 
        {
            
            return $this->tipo1;
            
        }
        
        public function setTipo1($tipo1) 
        {
            
            $this->tipo1 = $tipo1;
            
        }
        
        public function getTipo2() 
        {
            
            return $this->tipo2;
            
        }
        
        public function setTipo2($tipo2) 
        {
            
            $this->tipo2 = $tipo2;
            
        }
        
        public function getVida() 
        {
            
            return $this->vida;
            
        }
        
        public function setVida($vida) 
        {
            
            $this->vida = $vida;
            
        }
        
        public function getAtaque() 
        {
            
            return $this->ataque;
            
        }
        
        public function setAtaque($ataque) 
        {
            
            $this->ataque = $ataque;
            
        }
        
        public function getDefesa() 
        {
            
            return $this->defesa;
            
        }
        
        public function setDefesa($defesa) 
        {
            
            $this->defesa = $defesa;
            
        }
        
        public function getAtaqueEspecial() 
        {
            
            return $this->ataqueEspecial;
            
        }
        
        public function setAtaqueEspecial($ataqueEspecial) 
        {
            
            $this->ataqueEspecial = $ataqueEspecial;
            
        }
        
        public function getDefesaEspecial() 
        {
            
            return $this->defesaEspecial;
            
        }
        
        public function setDefesaEspecial($defesaEspecial) 
        {
            
            $this->defesaEspecial = $defesaEspecial;
            
        }
        
        public function getVelocidade() 
        {
            
            return $this->velocidade;
            
        }
        
        public function setVelocidade($velocidade) 
        {
            
            $this->velocidade = $velocidade;
            
        }
        
        public function getImgPokemon() 
        {
            
            return $this->imgPokemon;
            
        }
        
        public function setImgPokemon($imgPokemon) 
        {
            
            $this->imgPokemon = $imgPokemon;
            
        }
        
        public function getImgTipo1() 
        {
            
            return $this->imgTipo1;
            
        }
        
        public function setImgTipo1($imgTipo1) 
        {
            
            $this->imgTipo1 = $imgTipo1;
            
        }
        
        public function getImgTipo2() 
        {
            
            return $this->imgTipo2;
            
        }
        
        public function setImgTipo2($imgTipo2) 
        {
            
            $this->imgTipo2 = $imgTipo2;
            
        }
        
    }
    
?>