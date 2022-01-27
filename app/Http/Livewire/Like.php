<?php

namespace App\Http\Livewire;

use App\Models\Place;
use App\Http\Livewire\Like;
use ILLUminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $record, $place_id, $liked;

    public function mount($id)
    {
        $this->record = Like::where('place_id',$id);
        $this->place_id = $this->record->id;
    }
    public function render()
    {
        return view('livewire.like');
    }
    private function resetInput()
    {
        $this->rate = null;
    }
    
    public function store()
    {
        

        if($liked == 1){
            Like::create([
            'place_id' => $this->place_id,
            'user_id' => Auth::id()
            ]);
        }
        else{
            DB::table('likes')->where('user_id', Auth::user()->id)->where('place_id', $id)->delete();
        }
        session()->flash('message', 'Liked');
        $this->resetInput();
    }
}
