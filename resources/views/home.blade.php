@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{route('chat')}}">Chat</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Vous êtes connecté
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
Echo.join('demo')
    .joining(() => {
        window.livewire.emit('newuser');
    })



  
  


</script>

@endsection