<?php
namespace App\Service\shop;
use App\Http\Models\shop;
class shop{
    private $shop=null;
    public function __construct(shop $shop)
    {
        $this->shop=$shop;
    }


    public function add(){
        $a=$this->shop;
        if ($a){
            echo "添加成功";
        }else{
            echo "添加失败";
        }

}


public function delete($id){
        $a=$this->shop($id);
        if ($a){
            echo "删除成功";

        }else{
            echo "删除失败";
        }

}

public function update($id){
    $a=$this->shop($id);
    if ($a){
        echo "修改成功";

    }else{
        echo "修改失败";
    }

}

public function get($id){
        $a=$this->shop($id);

}






    }




?>