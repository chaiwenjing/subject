<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;


class Zhou1Controller extends Controller
{
    //
    private $userservice=null;
    public function __construct(UserService $userservice)
    {
        $this->userservice=$userservice;
    }

    protected $result=[
        'data'=>'',
        'msg'=>'',
        'code'=>'',
    ];

    public function add(){
        return view('zhou1.add');
    }

    public function add_do(Request $request){
//        Redis::set('name');
        $data=$request->all();
        $a=$this->userservice->add($data);
        if ($a){
            return  $this->show;
        }

    }

    public function show(Request $request){
        $data=$request->all();
        return view('zhou1.show',['data'=>$data]);
    }

    public function email(Request $request){
        $a=rand(1111,999);

       $flag= Mail::raw($a, function ($message) {
            $to = '2280126339@qq.com';
            $message ->to($to)->subject('测试邮件');
        });
        if(!$flag){
            echo '发送邮件成功，请查收！';
        }else{
            echo '发送邮件失败，请重试！';
        }
    }

    public function page(Request $request){
        $users = DB::table('user')->paginate(2);

    }

    public function delete($id){
       $data= $this->userservice->delete($id);
        if ($data){
            echo "删除成功";
        }else{
            echo "删除失败";
        }

    }

    public function update($name,$id){
       $a= $this->userservice->upd($name,$id);
       if ($a){
           echo "修改成功";
       }else{
           echo "修改失败";
       }
    }


}
