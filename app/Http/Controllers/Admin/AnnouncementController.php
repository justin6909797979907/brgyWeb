<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index(){
        $announcements = Announcement::orderBy("created_at","desc")->paginate(10);

        return view("admin.dashboard", compact("announcements"));
    }

    public function announcement_index(){
        $announcements = Announcement::orderBy("created_at","desc")->paginate(10);

        return view("home.announcement", compact("announcements"));
    }
    
    public function announcement_create(Request $request){
        $validated =  $request->validate([
            'header' => 'required|max:255',
            'body' => 'required|string',
        ]);
        $validated['set_status'] = false;

        Announcement::create($validated);

        return redirect()->back()->with('success','The announcement has been store successfully!!');
    }

    public function announcement_update(Request $request){
        $validated =  $request->validate([
            'id' => 'required',
            'header' => 'required|max:255',
            'body' => 'required|string',
        ]);
        Announcement::find($validated['id'])->update([
            'header' => $validated['header'],
            'body' => $validated['body'],
        ]);

        return redirect()->back()->with('success','The announcement has been updated successfully!!');
    }

    public function announcement_show($id){
        $announcements = Announcement::find($id);
        $announcements->set_status = true;
        $announcements->save();

        return redirect()->back()->with('success','The announcement has been show successfully!!');
    }

    public function announcement_hide($id){
        $announcements = Announcement::find($id);
        $announcements->set_status = false;
        $announcements->save();

        return redirect()->back()->with('success','The announcement has been hide successfully!!');
    }

    public function announcement_delete($id){
        Announcement::find($id)->delete();

        return redirect()->back()->with('success','The announcement has been deleted successfully!!');
    }
}
