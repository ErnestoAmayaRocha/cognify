<?php

class Connection
{

	private $server = "mysql:host=localhost;dbname=u554379922_cognify";
	private $username = "u554379922_usercognify";
	private $password = "Passcognify1";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
	protected $conn;

	public function open()
	{
		try {
			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
			return $this->conn;
		} catch (PDOException $e) {
			echo "Hubo un problema con la conexión: " . $e->getMessage();
		}
	}

	public function close()
	{
		$this->conn = null;
	}
}
