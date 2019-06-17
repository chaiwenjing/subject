<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoodsService;

class Zhou2Controller extends Controller
{
    //
    private $goodsservice=null;
    public function __construct(GoodsService $goodsservice)
    {
        $this->goodsservice=$goodsservice;
    }


    protected $result=[
        'data'=>"",
        'msg'=>'',
        'code'=>'200',
    ];
    /*
     * 商品添加
     * @param Request request
     */

    public function brandAdd(){
        return view('brand.add');

    }

    /*
   * 商品添加的值
   * @param Request request
   */

    public function add_do(Request $request){


        $validatedData=$request->validate([
            'name'=>'required|unique:posts|max:255',
            'point'=>'required',
            'number'=>'required|max:1~999999999',
            'stock'=>'required|max:1~999',
            'code'=>'required',
            'market'=>'required|max:1~999999999',
            'price'=>'required|max:1~999999999',
            'image'=>'required',
        ]);

        $data=$request->all();
      $a=  $this->goodsservice->add($data);
      if ($a){
          return $this->show();
      }


    }
    /*
       * 商品列表
       * @param Request request
       */
    public function show(){
        $data=$this->goodsservice->show();
        return view('brand.show',['data'=>$data]);
    }
    /*
        * 品牌列表
        * @param Request request
        */
    public function brandList(){
        $data=$this->goodsservice->brandList();
        return view('brand.list',['data'=>$data]);
    }

    /*
         * 分类添加
         * @param Request request
         */
    public function clascTion(){
        return view('brand.clascTion');
    }


    /*
     * 分类添加的值
     * @param Request request
     */

    public function addiTion(Request $request){
        $data=$request->all();
//        var_dump($data);die;
        $this->goodsservice->addiTion($data);
    }

    /*
 * 分类的删除
 * @param Request request
 */
    public function delete($id){
        $this->goodsservice->delete($id);

    }

    /*
* 分类的修改
* @param Request request
*/

    public function update($id ,$name){

        $this->goodsservice->update($id,$name);
    }




}
