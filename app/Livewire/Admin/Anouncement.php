<?php

namespace App\Livewire\Admin;

use App\Models\Announcement;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Anouncement extends Component
{

    use WithFileUploads,WithPagination;

    #[Locked]
    public $id;

    #[Validate('required')]
    public $header;

    #[Validate('nullable|image|max:5024')]
    public $image;
    #[Validate('required')]
    public $body;
    public $title='Create Announcement';

    public $show = [];

    public function save()
    {

        $this->validate();

        DB::beginTransaction();

        try{

           

            
            $announcement = new Announcement();
            $announcement->header = $this->header;
            $announcement->body = $this->body;

            $image_uploaded = $this->image;

            if($image_uploaded){

            $name = uniqid().$this->image->getClientOriginalName();
            $this->image->storeAs(path: 'uploads', name:$name, options: 'public');
            $announcement->image = $name;

            }
    
            $announcement->set_status = false;
            $announcement->save();

        
        $this->close();

        DB::commit();

        }catch(\Exception $e){

            DB::rollBack();
            throw $e;

        }
    }

    #[On('confDelete')]
    public function deleteConfirmation($id)
    {

        $this->id = $id;
        $id = Announcement::find($this->id);
        $id->delete();

    }

    public function close()
    {

        $this->reset();
        $this->resetErrorBag(); 

    }

    public function toggle($id)
    {
        $announcement = Announcement::findOrFail($id);
        $announcement->set_status = !$announcement->set_status;
        $announcement->save();
        
    }


    public function render()
    {
        $announcements = Announcement::paginate(5);
        return view('livewire.admin.anouncement',compact('announcements'));
    }
}
