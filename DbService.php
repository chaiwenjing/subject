<?php
namespace App\Services;
use App\Http\Models\Tuan;
use App\Http\Models\Shop;
use App\User;

class DbService{
    private $tuan=null;
    private $shop=null;
    public function __construct(Tuan $tuan,Shop $shop)
    {
        $this->tuan=$tuan;
        $this->shop=$shop;
    }

    public function add(array $data){
        $flight = new Tuan();

        $flight->name = $data['name'];

        $flight->hour = $data['hour'];

        $flight->save();
    }

    public function shop_add(array $data){
        $flight = new Shop();

        $flight->s_name = $data['s_name'];

        $flight->s_price = $data['s_price'];
        $flight->s_num = $data['s_num'];

        $flight->s_desc = $data['s_desc'];

        $flight->save();
    }

    public function es_add($db_id,$es_id){
        $flight=$this->tuan->find($db_id);
        $flight->es_id=$es_id;
        $flight->save();
        return $flight['es_id'];

    }

    public function del($id){
      $flight=  $this->tuan->find($id);
//      var_dump($flight);die;
      $flight->delete();
      return $flight['es_id'];
    }

    public function upd($id,$name){
        $flight=$this->tuan->find($id);
//        var_dump($flight);die;
        $flight['name']=$name;

        $flight->save();
//        return $flight['es_id'];
    }

    public function purchase(array $data){
        $flight = new User();

        $flight->name = $data['name'];

        $flight->addres = $data['addres'];

        $flight->tel = $data['tel'];

        $flight->num = $data['num'];

        $flight->save();

    }
}
?>