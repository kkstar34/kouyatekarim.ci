<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Message;
use App\User;
use App\Events\MessageSentEvent;
class ChatShow extends Component
{
    
    public $message, $test,  $realTimeMessages = [],  $query, $userId, $listUserId=[];

   
    protected $listeners = ['incomingMessage' => 'incomingMessage',

                            'newuser'=> 'joining',
                     
                                'leave',
                            "echo-presence:demo,here" => 'here',
                            "echo-presence:demo,joining" => 'joining',
                            "echo-presence:demo,leaving" => 'leaving',


];

   


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
  
 
    
      


    public function leave($data){

       
        

        $user = User::find($data['id']);


        $user->touch();

        
        $firstIndex = array_search($data['id'],$this->listUserId);

 
        

      

        unset($this->listUserId[$firstIndex]);



  

    
      

    }

   /*  public function incomingMessage($message)
    {
        // get the hydrated model from incoming json/array.
        $this->realTimeMessages = Message::where('user_id', $this->userId)->where('receiver_id', auth()->user()->id)->orwhere('user_id', auth()->user()->id)->where('receiver_id', $this->userId)
        ->latest()
        ->get()
        ->reverse()
       ;

    } */

    public function joining($user){
        
        $this->listUserId[] = $user['id'];
    }
    public function mount($id){



        $this->userId = $id;

        
        $this->realTimeMessages = Message::where('user_id', $this->userId)->where('receiver_id', auth()->user()->id)->orwhere('user_id', auth()->user()->id)->where('receiver_id', $this->userId)
            ->latest()
            ->get()
            ->reverse()
           ;

    
    }

    public function incomingMessage()
    {
    

       //$this->test = $data['body'];
  
       $this->realTimeMessages = Message::where('user_id', $this->userId)->where('receiver_id', auth()->user()->id)->orwhere('user_id', auth()->user()->id)->where('receiver_id', $this->userId)
       ->with('user')
            ->latest()
            ->get()
            ->reverse()
           ;

           $this->emit('sent');
       
    }


    public function store(){
        $this->validate([
            'message' => 'required'
        ]);
        $message = auth()->user()->messages()->create([
            'body' => $this->message,
            'receiver_id' => $this->userId,
            ]);
            
            
        $message->load('user');
        $event = broadcast(new MessageSentEvent($message));
                
       $this->realTimeMessages = Message::where('user_id', $this->userId)->where('receiver_id', auth()->user()->id)->orwhere('user_id', auth()->user()->id)->where('receiver_id', $this->userId)
       ->with('user')
            ->latest()
            ->get()
            ->reverse()
           ;
         
        $this->emit('sent');
     
           $this->resetInputFields();
           
      

       
    }

    private function resetInputFields(){
        $this->message= '';
       
    }


    public function render()
    {

        $users = User::where('name', 'like', '%' . $this->query . '%')->get()->all();
        
       

        $user = User::where('id',$this->userId)->get()->first();
       
        return view('livewire.chat-show', ['users'=>$users, 'utilistateur'=>$user, 'online' => $this->listUserId]);
    }
}
