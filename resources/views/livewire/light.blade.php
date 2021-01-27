<div>
    <h1>🔆  {{$brightness}} %</h1>
    <div class="progress" style="height:30px">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: {{$brightness}}%" aria-valuenow="{{$brightness}}" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<div class="mt-3">
<button class="btn btn-danger" wire:click="off">Off</button>
<button class="btn btn-secondary" wire:click="increment">+</button>
<button class="btn btn-secondary" wire:click="decrement">-</button>
<button class="btn btn-primary" wire:click="on">On</button>
</div>
</div>
