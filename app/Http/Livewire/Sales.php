<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Service\Stats;
class Sales extends Component
{
    



    public function render()
    {
        return view('livewire.sales', [
            'newOrders' => Stats::newOrders(),
            'salesAmount' => Stats::salesAmount(),
            'satisfactions' => Stats::satisfactions(),
        ]);
    }

   // public function mount(){

       // $this->fill();
       /*  $this->newOrders = rand(5, 100);
        $this->salesAmount= rand(100, 1000);
        $this->satisfactions = rand(95, 100); */
        /*$this->assignStats();
    } 

/*     public function updating($values, $field){

    } */

    private function assignStats(){
        $this->newOrders = Stats::newOrders();
        $this->salesAmount = Stats::salesAmount();
        $this->satisfactions = Stats::satisfactions();
    }

   /*  public function updatingName($value){
        // updating lié à l'attribut $name $value la valeur tapé
    }
    public function updated(){
        
    }
    public function hydrate(){
        
    } */
  
}
