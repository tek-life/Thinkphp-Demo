<?php
class NewsModel extends Model{
	protected $_validate = array(
		array('title','require','Title is necessary!'),
		array('author','require','Author is necessary!'),
	);
	protected $_auto = array(
		array('create_time','time',1,'function'),
	);
}
?>
