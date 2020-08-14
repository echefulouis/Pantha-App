<?php

namespace App\Http\Controllers\App;

use App\User;
use App\Events\ChatEvent;
use Auth;
use App\Message;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $messages = Chat::where('from', $user->id)
                    ->orWhere('to', $user->id)->get();
         return response()->json(["success"=> true, "messages" => $messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'message' => 'required|string|max:5000',
            'to' => 'required|integer',
        ]);
        if(!$validator->passes()) {
            return response()->json(['errors'=>$validator->errors()->all()]); 
        }
        $validatedData = $validator->validated();
        $user = Auth::user();
        $validatedData['from'] = $user->id;
        $chat = Chat::create($validatedData);
        $chat->chat_files;
        event(new ChatEvent($chat));
        return response()->json(["success"=> "Message Sent!","chat"=>$chat]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


     public function markAsSeen(Request $request)
    {
        if(is_null($request->id) || !is_numeric($request->id)){
            return response()->json(['error'=>'Unexpected Url parameter']);
        }
        $user = Auth::user();
        $chats = Chat::where('from', $request->id)
                    ->where('to', $user->id)
                    ->update(['is_read'=>1]);
        return response()->json(['success'=>'Updated success']);

    }

    public function contacts()
    {
        $user = Auth::user();
        if($user->role === 'admin' || $user->role === 'user'){
            $contacts = User::where('id', '!=', $user->id)
                        ->where(['status'=>'active','is_verified' => 1])
                        ->get();
            return response()->json(['success'=> true, 'contacts' => $contacts]);
        }else{
           $contacts = User::whereIn('role', ['admin','user'])
                            ->where(['status'=>'active','is_verified' => 1])->get();
            return response()->json(['success'=> true , 'contacts' => $contacts]);
        }
        
    }

    public function count_unread_chat()
    {
        $user = Auth::user();
        $unread_chats = Chat::where('to', $user->id)
                            ->where('is_read', 0)->count();
        return response()->json(['success'=> true, 'unread_chats' => $unread_chats]);
        
    }
}
