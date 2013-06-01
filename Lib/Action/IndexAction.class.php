<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
	$this->show('Hello world');
    }
    public function news(){//This function will correspond with one page
	$Data = M('tbl_test');//The parameter is data table name.
	$this->data = $Data->select();//this->data will use for front-end
	$this->display();
    }
}
