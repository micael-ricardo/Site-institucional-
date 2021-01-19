<?php 

	class Email{
		private $nome;
		private $assunto;
		private $email;
		private $mensagem;

		public function setDados($nome, $assunto, $email, $mensagem){
			$this->nome  = $nome;
			$this->assunto = $assunto;
			$this->email = $email;
			$this->mensagem = $mensagem;
		}
		public function getDados(){
			$imprimir = array(
								$this->nome, 
								$this->assunto,
								$this->email,
								$this->mensagem
							);
			print_r($imprimir);
		}


	}
