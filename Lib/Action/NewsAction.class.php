<?php
class NewsAction extends Action{
	public function news(){
	$Data = M("News");
	$this->news_list=$Data->select();
	$this->display();
	}
	public function insert(){
		$News = D("News");
		if($News->create()){
			$result = $News->add();
			if($result==true){
				$this->success('successful');
			}else{
				$this->error('write error');
			}
		}else{
			$this->error($News->getError());
		}

	}	
	public function edit($id){//The parameter is from URL, so It's necessary

		$News_edit = M("News");
		//Here: find() and select() 's return value is different.
		$this->news_data=$News_edit->find($id);
		$this->display();
	}
	public function update(){
		$news_update = D("News");
		if($news_update->create()){
			$result = $news_update->save();
			//Here: we shouldn't check the return value for save().
			//Reason: If modification didn't done, the return value is 0.
			$this->success('successful');
		}else{
			$this->error($news_update->getError());
		}
	}
	public function del($id){//The parameter is from URL, so It's necessary
		$News_edit = M("News");
		$News_edit->delete($id);
		$this->success("Delete successfully");
	}
}
?>
