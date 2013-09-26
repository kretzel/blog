<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kerli & Jaak
 * Date: 26.09.13
 * Time: 10:55
 * To change this template use File | Settings | File Templates.
 */

class tags extends Controller{
	public function index(){
		$this->tags = get_all('SELECT * FROM tag');

	}

}