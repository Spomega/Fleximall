<?php
namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;

class MallRepository extends Repository {
    
    
    
    public function model() {
        return "App\Mall";
    }
    
    public function getAllSelect()       
      {
        
		$select = $this->all()->lists('mallname', 'id');

		return compact('select');
	}


    
}
