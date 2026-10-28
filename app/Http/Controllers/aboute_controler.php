<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Http\Requests\test_req;

class aboute_controler extends Controller
{
    public function get_view(){
        $messages = Message::all();
        return view("/castom_views/aboute")->with("messages", $messages);
    }
    public function post_on_view(test_req $req){
        // $req->validate();//для обработки ошибок по ларовеловски//какогото фига оно работает в закоментированном виде
        $message = new Message();
        $message->name = $req->input("name");
        $message->text_message =  $req->input("text_from_user");
        $message->save();
        return redirect()->route("aboute");
    }
    public function message_for_id($id){
	 $message = Message::findOrFail($id);
	 return view("/castom_views/aboute_for_id")->with("mes", $message);
    }
    public function delete($id){
	 $message = Message::findOrFail($id);
	 $message->delete();
    return redirect()->route("aboute");
    }
    public function edit_mes($id, Request $req){
	 $message = Message::findOrFail($id);
	 $message->name = $req->input("name");
    $message->text_message =  $req->input("text_message");
	$message->save();
	return redirect()->route("aboute");

	}


}
 
