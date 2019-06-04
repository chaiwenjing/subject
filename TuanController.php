<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DbService;
use App\Services\EsService;
use App\Http\Models\Tuan;

class TuanController extends Controller
{
    //
    private $dbservice = null;
    private $esservice = null;

    public function __construct(DbService $dbservice, EsService $esservice)
    {
        $this->esservice = $esservice;
        $this->dbservice = $dbservice;
    }

    protected $result = [
        'data' => '',
        'code' => '',
        'msg' => '',
    ];

    /*
     * 添加活动
     *
     */
    public function add()
    {
        return view('tuan/add');
    }

    /*
   * 添加活动的值
   * @param Request $request
   */
    public function add_do(Request $request)
    {
        $data = $request->input();
        $db_id = $this->dbservice->add($data);
        if ($db_id) {
            $data = $request->input();
            $es_arr = $this->esservice->add($data);
//            var_dump($es_arr);die;
            $a = json_decode($es_arr, true);
            $es_id = $a['_id'];
            $res = $this->dbservice->es_add($db_id, $es_id);
            $this->result['code'] = '';
            $this->result['data'] = '201';
            $this->result['msg'] = $res;
            return $this->result;


        }

    }

    /*
     * 添加商品
     *
     */

    public function shop()
    {
        return view("tuan/shop");
    }

    /*
     * 添加商品的值
     *@param Request $request
     */
    public function shop_add(Request $request)
    {
        $data = $request->input();
        $db_id = $this->dbservice->shop_add($data);
        if ($db_id){
            $a=$this->esservice->shop_add($db_id);
            return $a;
        }
    }

    /*
      * 展示
      *@param Request $request
      */
    public function show(Request $request)
    {
        $data = $request->input();
//        $db_id=$this->dbservice->add($data);
        return view('tuan.show', ['data' => $data]);
    }

    /*
   * es查询
   *@param Request $request
   */

    public function getlist($name, $value, $page)
    {
        $str = [
            "query" => [
                "match" => [
                    "$name" => $value
                ]
            ],
            'size' => 2,
            'form' => ($page-1) * 2,
            "highlight" => [
                "fields" => [
                    "$name" => new \stdClass()
                ]
            ]
        ];
        $data = $this->esservice->getlist($str);
        return $data;
    }

    /*
     * 删除活动
    *@param id
    */
    public function delete($id){
        $db_id=$this->dbservice->del($id);
//        var_dump($db_id);die;

    }

      /*
      * 修改
      *@param Request $request
      */
      public function update($name,$id){
          $db_id=$this->dbservice->upd($name,$id);

      }

    /*
   * 购买
   *@param Request $request
   */
    public function purchase(Request $request){
        $data=$request->input();
        $db_id=$this->dbservice->purchase($data);
    }



}
