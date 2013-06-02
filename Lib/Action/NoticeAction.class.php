<?php
class NoticeAction extends Action{
	public function listarticle(){
	$Data1 = M('Test');
	$this->data1 = $Data1->select();
	$this->display();	
	}
}
?>
