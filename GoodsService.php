<?php
namespace App\Services;
use App\Http\Models\goods;
use App\Http\Models\brand;
use App\Http\Models\classtion;
use Illuminate\Http\Request;
class GoodsService{
    private $goods=null;
    private $brand=null;
    private $classtion=null;
    public function __construct(goods $goods,brand $brand,classtion $classtion)
    {
        $this->goods=$goods;
        $this->brand=$brand;
        $this->classtion=$classtion;
    }

    public function add(array $data){

        $flight = $this->goods;
//        $path = $data->file('image')->store('image');

        $flight->name = $data['name'];
        $flight->point = $data['point'];
        $flight->number = $data['number'];
        $flight->stock = $data['stock'];
        $flight->code = $data['code'];
        $flight->image = $data['image'];
        $flight->market = $data['market'];
        $flight->price = $data['price'];
       return  $flight->save();

    }

    public function show(){
       return $this->goods->get();
    }

    public function brandList(){
        return $this->brand->get();

        }

        public function addiTion(array $data){
        $filght = $this->classtion;
//        var_dump($filght);die;
            $filght->t_name = $data['t_name'];
            return  $filght->save();


        }

        public function delete($id){
            $flight = $this->classtion->find($id);
            $flight->delete();

        }

        public function update($id,$name){
        $flight=$this->classtion->find($id);
        $flight->t_name=$name;
        return $flight->save();
        }

}
?>