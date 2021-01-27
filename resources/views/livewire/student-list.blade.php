<div>
<div class="mt-5">
@if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">
          {{ session('message') }}
        </div>
    @endif
    <div>

  
    <form>
        <div class=" add-input">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nom" wire:model="name.0">
                        @error('name.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="email" class="form-control" wire:model="email.0" placeholder="Email">
                        @error('email.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" wire:model="age.0" placeholder="Age">
                        @error('age.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-1">
                    <button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})">+</button>
                </div>
            </div>
        </div>

        @foreach($inputs as $key => $value)
            <div class=" add-input">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nom" wire:model="name.{{ $value }}">
                            @error('name.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="email" class="form-control" wire:model="email.{{ $value }}" placeholder=" Email">
                            @error('email.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" wire:model="age.{{$value}}" placeholder="Age">
                        @error('age.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                    <div class="col-md-1">
                        <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">-</button>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-md-12">
                <button type="button" wire:click.prevent="store1()" class="btn btn-success btn-sm">Enregistrer</button>
            </div>
        </div>
    </form>
</div>
</div>
<h1 class="text-center mt-5 mb-2">Eleves</h1>
<div>
<div class="row">
    <div class="col-md-4 mb-1">
      
        <input type="text" wire:model="query" id="query" class="form-control" placeholder='Ex: Kouyate' >
    </div>

    <div class="col-auto ml-auto mb-2">
    @include('livewire.create')
    </div>
    <div class="col-auto ml-auto mb-2">
    
 
    Show
    <select wire:model.lazy="perPage" name="" id="per_page" class="custom-select w-auto">
            @for($i = 5; $i <=25; $i+=5 )

                <option value='{{$i}}'>
                
                {{$i}}
                
                </option>
            @endfor

        
        </select>
        <label for="per_page">per page</label>
    </div>
</div>
   
</div>
        <div class="table-responsive">
            <table class="table">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Adult ?</th>
                        <th>Action</th>
                    </tr>
                
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                         <td>{{$student['id']}}</td>
                        <td>{{$student['name']}}</td>
                        <td>{{$student['email']}}</td>
                        <td>{{$student->is_an_adult? '✅ ' : '🚫 '}}</td>
                        <td>
                <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $student->id }})" class="btn btn-primary btn-sm">Edit</button>
                <button wire:click="delete({{ $student->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            
        </div>
        <div class="mt-3 col-md-6 mx-auto">
        {{$students->links()}}
        </div>
       
</div>
