<?php
	class Connection {
		
		public static function connect(){
			try {
				return new PDO('mysql:host=localhost;dbname=homestead', 'homestead', 'secret');
			} catch (PDOException $e) {
				die($e->getMessage());
			}
		}
	}