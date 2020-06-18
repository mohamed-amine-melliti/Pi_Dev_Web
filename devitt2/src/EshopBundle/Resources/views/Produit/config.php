<?php
  class config {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
        self::$instance = new PDO('mysql:host=localhost;dbname=3a3', 'root', '');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }
  }

  public function getCategs()
    {

            $dba=config::getConnexion();
            $sqlQuery="SElECT * From Categories";
            try{
                $result=$dba->query($sqlQuery);
                }

            catch (Exception $e){
                echo '\n Erreur: '.$e->getMessage();
            }

            return $result;

    }
?>