<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class DeleteUser extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $name = $request->input('nameId');
        $work = $request->input('workspaceId');
        
        Member::where('user_id','=',$name)->where('workspace_id','=',$work)->delete();

        return redirect()->back();
    }
}
