<div>


<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Chat</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="zmdi zmdi-home"></i>Profile</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                        <li class="breadcrumb-item active">Chat</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="chat_list" wire:ignore.self>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="zmdi zmdi-search"></i></span>
                                </div>
                                <input type="text" class="form-control" wire:ignore wire:model="query" placeholder="Search..." >
                            </div>
                            <ul class="user_list list-unstyled mb-0 mt-3">
                             
                            @foreach($users as $user)
                                @if( auth()->user()->id != $user->id  )
                                @if(in_array($user->id, $online))
                                <li class="active">
                                    <a href="{{route('chat.show',$user->id)}}">
                                        <img src="{{url('assets/images/xs/avatar2.png')}}" alt="avatar" />
                                        <div class="about">
                                            <div class="status online"> <i class="zmdi zmdi-circle"></i> en ligne</div>
                                            <div class="name">{{$user->name}}</div>
                                        </div>
                                    </a>
                                </li>
                                @else
                                <li class="active">
                                    <a href="{{route('chat.show',$user->id)}}">
                                        <img src="{{url('assets/images/xs/avatar2.png')}}" alt="avatar" />
                                        <div class="about">
                                            <div class="status offline"> <i class="zmdi zmdi-circle"></i> deconnecté</div>
                                            <div class="name">{{$user->name}}</div>
                                        </div>
                                    </a>
                                </li>
                                @endif
                                @endif
                                @endforeach


                            </ul>
                        </div>





                        
                        <div class="chat_window body">
                        @if(count($message_recents)==0)

                        <div class="chat-header">
                               
                                <a href="javascript:void(0);" class="list_btn btn btn-info btn-round float-md-right"><i class="zmdi zmdi-comments"></i></a>
                            </div>
                            <hr>
                             
                             @endif
                            @foreach($message_recents as $message)
            
                       @if(auth()->user()->id!=$message->user->id )
                            <div class="chat-header">
                                <div class="user">
                                <a href="{{route('chat.show', $message->user->id )}}">
                                    <img src="{{url('assets/images/xs/avatar2.png')}}" alt="avatar" />
                                    <div class="chat-about">
                                        <div class="chat-with">{{$message->user->name}}</div>
                                        <div class="chat-num-messages">{{$message->body}}</div>
                                    </div>
                                </a>
                                </div>
                                <div class="setting">
                                <div class="chat-num-messages" wire:poll.60s>{{$message->created_at->diffForHumans()}}</div>
                                
                                </div>
                                <a href="javascript:void(0);" class="list_btn btn btn-info btn-round float-md-right"><i class="zmdi zmdi-comments"></i></a>
                            </div>
                            <hr>
                         
                         @endif
                            @endforeach
                           
                            <!-- <ul class="chat-history">
                           
                            @foreach($realTimeMessages as $realMessage)
                        
                            @if($realMessage->user->id == auth()->user()->id)
                                <li class="clearfix">
                                    <div class="status message-data text-right">
                                        <span class="time">{{$realMessage->created_at->diffForHumans()}}</span>
                                        <span class="name"  wire:poll.60s>Interlocuteur </span>
                                       
                                    </div>
                                    <div class="message other-message float-right" >{{$realMessage->body}} </div>
                                </li>

                            @else

                                <li>
                                    <div class="status online message-data">
                                        <span class="name">Interlocuteur</span>
                                        <i class="zmdi zmdi-circle me"></i>
                                        <span class="time" wire:poll.60s>{{$realMessage->created_at->diffForHumans()}}</span>
                                    </div>
                                    <div class="message my-message">
                                        <p>{{$realMessage->body}}.</p>
                                 <div class="attachment">
                                            <a class="w200" href="javascript:void(0);"><img src="assets/images/image-gallery/2.jpg" alt="" class="img-fluid img-thumbnail"></a>
                                            <a class="w200" href="javascript:void(0);"><img src="assets/images/image-gallery/5.jpg" alt="" class="img-fluid img-thumbnail"></a>
                                        </div> 
                                    </div>
                                </li>  
                            @endif
                            @endforeach                           
                                <li>
                                    <div class="status message-data">
                                        <span class="name">Aiden</span>
                                        <span class="time">10:31 AM, Today</span>
                                    </div>
                                    <i class="zmdi zmdi-circle" style="color: #04BE5B; font-size: 10px;"></i>
                                    <i class="zmdi zmdi-circle" style="color: #83d0a7; font-size: 10px;"></i>
                                    <i class="zmdi zmdi-circle" style="color:#DAE9DA; font-size: 10px;"></i>
                                </li> 
                            </ul>
                            <div class="chat-box" wire:ignore.self >
                                <div class="input-group" wire:ignore.self>
                                    <div class="input-group-prepend">
                                        <a class="input-group-text"  ><i class="zmdi zmdi-mail-send"></i></a>
                                    </div>
                                    <input type="text" class="form-control" readonly placeholder="Ecrire ici..." required>
                                    @error('message') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>                                                            
                            </div>-->
                        </div> 
 


























                        


                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>






</div>
