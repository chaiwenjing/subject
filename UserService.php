<?php
namespace App\Services;
use App\Http\Models\UserModel;
use Illuminate\Support\Facades\DB;

class UserService{
    private $usermodel=null;
    public function __construct(UserModel $usermodel)
    {
        $this->usermodel=$usermodel;
    }

    public function add($data){
        $flight = $this->usermodel;

        $flight->name = $data['name'];
        $flight->sex = $data['sex'];
        $flight->pwd = $data['pwd'];
        $flight->email = $data['email'];
        $flight->tel = $data['tel'];

      return  $flight->save();

    }

  public function delete($id){
      $flight=  $this->usermodel->find($id);
      $flight->delete();

  }

  public function upd($name,$id){
       $flight= $this->usermodel->find($id);
       $flight['name']=$name;
       $flight->save();

  }

  public function show(){
      return  $this->usermodel->get();
  }

}
?>