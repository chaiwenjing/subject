<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use App\Services\MessageService;
use App\Services\UserSercice;

class Zhou3Controller extends Controller
{
    //
    private $UserSercice=null;
    private $messageService=null;
    public function __construct(UserSercice $UserSercice,MessageService $messageService)
    {
        $this->UserSercice=$UserSercice;
        $this->messageService=$messageService;
    }
    /*
     * 添加
     * */
   public function add(){
        return view("zhou3/add");
        }

        /*
         * 添加的值
         */
        public function add_do(Request $request){
                $data=$request->all();
                $this->UserSercice->add($request);
        }
    /*
           * 展示
           */
        public function get($id){
            return view('zhou3.show', ['user' => UserSercice::get($id)]);
        }

    /*
   * 删除
   */

        public function delete(){
            $flight = Flight::find(1);
            $flight->delete();
        }

        public function update(){
            $this->UserSercice->update();

        }


    public function m_add(){
        return view("zhou3/m_add");
    }

    /*
     * 添加的值
     */
    public function madd_do(Request $request){
        $data=$request->all();
        $this->messageService->add($request);
    }
    /*
           * 展示
           */
    public function m_get($id){
        return view('zhou3.show', ['user' => UserSercice::get($id)]);
    }

    /*
   * 删除
   */

    public function m_delete(){
        $flight = Flight::find(1);
        $flight->delete();
    }

    public function m_update(){
        $this->messageService->update();

    }
}
