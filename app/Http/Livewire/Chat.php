<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Message;
use App\User;
use App\Events\MessageSentEvent;
class Chat extends Component
{

    public $message, $test,  $realTimeMessages = [],  $query, $userId, $message_recents, $listUserId = [] ;
    
 

    protected $listeners = [ 'incomingMessage' => 'incomingMessage',

    'newuser'=> 'joining',


    "echo-presence:demo,here" => 'here',
    "echo-presence:demo,joining" => 'joining',
    "echo-presence:demo,leaving" => 'leaving',


];

public function incomingMessage(){
    $this->message_recents = Message::where('receiver_id', auth()->user()->id)
    ->with('user')
         ->latest()
        
         ->get()
         ->unique('user_id')
        ; 
}
    public function here($users){
        foreach($users as $user){
            $this->listUserId[] = $user['id'];
        }
       
    
    }

    public function leaving($data){

        
        

        $user = User::find($data['id']);


        $user->touch();

        
        $firstIndex = array_search($data['id'],$this->listUserId);

 
        

      

        unset($this->listUserId[$firstIndex]);
       
    }

    public function joining($user){
        $this->listUserId[] = $user['id'];
    }

public function mount(){
   //$this->listUserId[] = "";
    //$this->userId = $id;

    $this->realTimeMessages = Message::
            with('user')
            ->latest()
            ->limit(5)
            ->get()
            ->reverse()
           ;
    
        }
    public function listen($data)
    {
    

       //$this->test = $data['body'];
       
            
       $this->realTimeMessages = Message::
            with('user')
            ->latest()
            ->limit(5)
            ->get()
            ->reverse()
           ;

           $this->emit('sent');
       
    }

    private function resetInputFields(){
        $this->message= '';
       
    }

    


    public function store(){
        $this->validate([
            'message' => 'required'
        ]);
        $message = auth()->user()->messages()->create([
            'body' => $this->message,
        ]);
   
        //$message->load('user');
            $event = broadcast(new MessageSentEvent($message));
                   
       $this->realTimeMessages = Message::
            with('user')
            ->latest()
            ->limit(5)
            ->get()
            ->reverse()
           ;
        $this->emit('sent');
           $this->resetInputFields();
           
      

       
    }
    public function render()
    {
       $users = User::where('name', 'like', '%' . $this->query . '%')->get()->all();

      $this->message_recents = Message::where('receiver_id', auth()->user()->id)
       ->with('user')
            ->latest()
           
            ->get()
            ->unique('user_id')
           ; 

       
        //    $this->message_recents = User::with([
               
        //     'latestMessage' => function($message) {

        //     $message->where('receiver_id', auth()->user()->id)  ;
        
        //       }
            
        //     ])->get(); 


            //
            //$this->message_recents = User::join('messages', 'messages.receiver_id', 'users.id')->orderBy('messages.created_at')->get()->groupBy('name'); 

            /*$this->message_recents = Message::latest()->where('user_id', auth()->user()->id)->orWhere('receiver_id', auth()->user()->id)->get()->first();


           // $this->message_recents = Message::with('user')->where('receiver_id', auth()->user()->id)->latest()->get()->groupBy('user_id')->toArray();
           
          */
           
       //$user = User::where('id', $userId)->get()->first();
      
       return view('livewire.chat', ['users'=>$users,  'online' => $this->listUserId, 'message_recents' =>  $this->message_recents]);
       
    }
 
}
