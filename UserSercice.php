<?php
namespace App\Services;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Http\Request;
use App\Http\Models\UserModel;
class UserSercice{
    private $usermodel=null;
    public function __construct(UserModel $usermodel)
    {
        $this->usermodel=$usermodel;
    }

    public function add(Request $request){
        $flight = new UserModel();

        $flight->uname = $request->uname;

        $flight->pwd =$request->pwd;

        $flight->tel =$request->pwd;

        $flight->email=$request->email;

        $flight->capital = $request->capital;

        $a=$flight->save();


    }

    public function delete($id){
        $user = user::find(1);
        $user->delete($id);
        }

        public function get(){
        $this->usermodel;

        }

        public function update(){
        $this->usermodel;
            Flight::where('active', 1)
                ->where('destination', 'San Diego')
                ->update(['delayed' => 1]);
        }

}
?>