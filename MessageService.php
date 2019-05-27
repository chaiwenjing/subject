<?php
namespace App\Services;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Http\Request;
use App\Http\Models\Message;
class MessageService{
    private $message=null;
    public function __construct(Message $message)
    {
        $this->message=$message;
    }

    public function add(Request $request){
        $flight = new Message();

        $flight->num = $request->num;

        $flight->cnum =$request->cnum;

        $flight->money =$request->money;

        $flight->status=$request->status;


        $a=$flight->save();


    }

    public function delete($id){
        $user = user::find(1);
        $user->delete($id);
    }

    public function get(){
        $this->message;

    }

    public function update(){
        $this->message;
        Flight::where('active', 1)
            ->where('destination', 'San Diego')
            ->update(['delayed' => 1]);
    }

}

?>