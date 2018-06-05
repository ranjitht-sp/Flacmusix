<?php
	class Song {

		private $con;
		private $id;
    private $mysqliData;
    private $title;
    private $artistId;
    private $albumId;
    private $starring;
    private $lyricsBy;
    private $director;
    private $language;
    private $duration;
    private $path;


		public function __construct($con, $id) {
			$this->con = $con;
			$this->id = $id;

      $query = mysqli_query($this->con,"SELECT * FROM songs WHERE id='$this->id'");
      $this->mysqliData = mysqli_fetch_array($query);
      $this->title = $this->mysqliData['title'];
      $this->artistId = $this->mysqliData['artist'];
      $this->albumId = $this->mysqliData['album'];
      $this->starring = $this->mysqliData['starring'];
      $this->lyricsBy = $this->mysqliData['lyricsBy'];
      $this->director = $this->mysqliData['director'];
      $this->language = $this->mysqliData['language'];
      $this->duration = $this->mysqliData['duration'];
      $this->path = $this->mysqliData['path'];

		}


    public function getTitle(){
      return $this->title;
    }

		public function getId(){
      return $this->id;
    }

    public function getArtist(){
      return new Artist($this->con, $this->artistId);
    }

    public function getAlbum(){
      return new Artist($this->con, $this->albumId);
    }

    public function getStarring(){
      return $this->starring;
    }

    public function getlyricsBy(){
      return $this->lyricsBy;
    }

    public function getLanguage(){
      return $this->language;
    }

    public function getDuration(){
      return $this->duration;
    }

    public function getPath(){
      return $this->path;
    }

    public function getDirector(){
      return $this->director;
    }

    public function getMysqliData(){
      return $this->mysqliData;
    }

	}
?>
