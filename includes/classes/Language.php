<?php
	class Language {

		private $con;
		private $id;

		public function __construct($con, $id) {
			$this->con = $con;
			$this->id = $id;
		}

    public function getNamee(){
      $languageQuery = mysqli_query($this->con,"SELECT name FROM language WHERE id='$this->id'");
      $language = mysqli_fetch_array($languageQuery);
      return $language['name'];
    }
	}
?>
