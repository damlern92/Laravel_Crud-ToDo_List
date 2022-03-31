<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ListItem;

class TodoListController extends Controller
{
    public function saveItem(Request $request){ // request object is data from form
        // \Log::info(json_encode($request->all())); // everthing pass through method

        // Save items to database:
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = 0;
        $newListItem->save();

        // return view('welcome', ['listItems' => ListItem::all()]);

        return redirect('/'); // Redirect to default route
    }

    public function index(){
        // Return all values from this modal:
        // return view('welcome', ['listItems' => ListItem::all()]);
        
        // Filter
        return view('welcome', ['listItems' => ListItem::where('is_complete',0)->get()]);
    }

    public function markComplete($id){
        // \Log::info($id);
        // Fetch:
        $listItem = ListItem::find($id);
        // \Log::info($listItem);
        $listItem->is_complete = 1;
        $listItem->save();

        return redirect('/');
    }
}
