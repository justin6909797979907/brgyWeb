<?php

namespace App\Livewire\Admin;

use App\Models\Announcement;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditAnnouncement extends Component
{   

    use WithFileUploads;


    #[Locked]
    public $id;
    
    #[Validate('required')]
    public $title;

    public $image;

    #[Validate('required')]

    public $body;

    #[Validate('required')]
    public $header;

    #[Validate('nullable|image|max:5024')]
    public $newImage;

    public function updateEdit($id){

        $this->validate();

        DB::beginTransaction();

        try{

            $announcement = Announcement::find($id);


            $image_uploaded = $this->newImage;

            if($image_uploaded){

                $name = uniqid().$this->newImage->getClientOriginalName();
                $this->newImage->storeAs(path: 'uploads', name:$name, options: 'public');
                $announcement->image = $name;
                }
        
            $announcement->header = $this->header;
            $announcement->body = $this->body;
            $announcement->set_status = false;
            $announcement->save();



            $this->dispatch('success');


        DB::commit();

        }catch(\Exception $e){

            DB::rollBack();
            throw $e;

        }

    
    }

    public function close()
    {

        $this->resetErrorBag();
        $this->reset();
    }

    #[On('edit')]
    public function getEditValues($id)
    {

        $this->id = $id;

        $announcement_val = Announcement::find($this->id);
        $this->title = 'Edit Announcement';
        $this->image = $announcement_val->image;
        $this->body = $announcement_val->body;
        $this->header = $announcement_val->header;

    }



    public function render()
    {
        return view('livewire.admin.edit-announcement');
    }
}
