<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{
    
    
    
    #[Validate('required' , message:'Questo campo è obbligatorio')]
    public $category;
    
    #[Validate('min:3', message: 'Questo campo deve essere di almeno 3 caratteri')]
    #[Validate('required', message: 'Questo campo è obbligatorio')]
    public $title;
    
    #[Validate('min:1', message: 'Questo campo deve essere di almeno 1 carattere')]
    #[Validate('required', message: 'Questo campo è obbligatorio')]
    public $price;
    
    #[Validate('min:10', message: 'Questo campo deve essere di almeno 10 caratteri')]
    #[Validate('required', message: 'Questo campo è obbligatorio')]
    public $description;
    
    public function store(){
        $category=Category::find($this->category);
        
        $announcement= $category->announcements()->create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            
        ]);
       Auth::user()->announcements()->save($announcement);
      
        $this->validate();
        $this->cleanForm();
        
        session()->flash('message','Annuncio inserito correttamente');
    }
    
    protected function cleanForm(){
        $this->title = "";
        $this->description = "";
        $this->price = "";
        $this->category ="";
    }
    
    
    
    public function render()
    {
        return view('livewire.create-announcement');
    }
}
