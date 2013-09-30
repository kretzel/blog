<?php


class tags extends Controller{
	public function index(){
		$this->tags = get_all('SELECT * FROM tag');

	}

//	function view() {
//		$tag_id = $this->params[0];
//		$this->tag = get_one("SELECT * FROM tag NATURAL JOIN user WHERE tag_id='$tag_id'");
//	}



	}

?>