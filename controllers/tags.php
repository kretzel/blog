<?php


class tags extends Controller{
	public function index(){
		$this->tags = get_all("SELECT * FROM tag");

	}

	function view() {
		$tag_name = $this->params[0];
		$this->posts = get_all("SELECT * FROM post_tags NATURAL JOIN post NATURAL JOIN tag NATURAL JOIN user WHERE tag_name = '$tag_name'");
		$_tags=get_all("SELECT * FROM post_tags NATURAL JOIN tag");
		foreach ($_tags as $tag){
			$this->tags[$tag['post_id']][] = $tag['tag_name'];
		}
	}



	}

?>