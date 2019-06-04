<?php
namespace App\Services;
use Ixudra\Curl\Facades\Curl;
class EsService{
    public function add(array $data){
        $res=Curl::to("119.23.51.199:9200/db/user")
            ->withData(json_encode($data))
            ->withContentType("application/json")
            ->post();
        return $res;
    }

    public function getlist(){
        $res=Curl::to("119.23.51.199:9200/db/user")
            ->withContentType("application/json")
            ->get();
        return $res;
    }

}
?>