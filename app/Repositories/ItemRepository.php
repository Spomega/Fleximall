<?php
namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;
use App\Item;

class ItemRepository extends Repository {
    
     public function model() {
        return 'App\Item';
    }
    
    
    public function getItemById($id)        
    {
       return Item::find($id); 
    }
    //put your code here
}
