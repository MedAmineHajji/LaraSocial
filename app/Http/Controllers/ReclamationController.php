<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reclamation;
use App\Models\User;
use Illuminate\Http\Request;

use Auth;
use DB;

class ReclamationController extends Controller
{
    public function store(Request $request){
        $data = [
            'user_id' => Auth::user()->id,
            'titleReclamation' => $request->titleReclamation,
            'descriptionReclamation' => $request->titleReclamation,
            'status' => 'WAITING FOR REVIEW'
        ];

        DB::table('reclamations')->insert($data);
        $notify = ['message'=>'Reclamation successfully sent to the Admin!', 'alert-type'=>'success'];
        return redirect()->back()->with($notify);
    }

    public function show(){
        $reclamations = Reclamation::where('user_id', auth()->id())->get();
        $user = User::find(auth()->id());

        return view('user.reclamations', compact('reclamations', 'user'));
    }
}
