<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Task;
use App\Models\User;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;
use Yajra\DataTables\Facades\DataTables;

class WorkspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sessionId = auth()->user()->id;

        $availabe = DB::table('members')->select('members.*')->where('members.user_id','=', $sessionId)->get();


        // $workspace = Member::all();
        // $workspace = Member::find($sessionId);

        // $detail = Workspace::find($workspace);

        return view('workspaces.index',[
            'available' => $availabe,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sessionId = auth()->user()->id;


        return view('workspaces.createWorkspace',['user_id' => $sessionId]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $sessionId = auth()->user()->id;

        $workspace = New Workspace;
        $workspace->user_id = $request->user_id;
        $workspace->namaWorkspace = $request->workspaceName;
        $workspace->deskWorkspace = $request->workspaceDesc;
        $workspace->save();


        $member = New Member;
        $member->workspace_id = $workspace->id;
        $member->user_id = $sessionId;
        $member->level = '1';
        $member->save();



        return redirect()->route('workspaces.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sessionId = auth()->user()->id;
        $workspace = Workspace::find($id);

        $member = Member::all()->where('workspace_id','=',$workspace->id)->pluck('user_id');

        $usersName = User::all()->whereIn('id',$member);

        $task = Task::all()->whereIn('workspace_id',$workspace->id);

        return view('workspaces.detail', compact('workspace','sessionId','member','usersName','task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sessionId = auth()->user()->id;
        $workspace = Workspace::find($id);
        $user = User::all();

        return view('workspaces.edit', compact('workspace','sessionId','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $workspace = Workspace::find($id);
        $workspace->user_id = $request->user_id;
        $workspace->namaWorkspace = $request->workspaceName;
        $workspace->deskWorkspace = $request->workspaceDesc;
        $workspace->save();

        $new = $request->newName;
        $newMember = User::where('email','=',$new)->pluck('id')->first();

        $member = New Member;
        $member->workspace_id = $workspace->id;
        $member->user_id = $newMember;
        $member->level = '0';
        $member->save();

        return redirect()->route('workspaces.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sessionId = auth()->user()->id;

        $level = Member::where('user_id','=',$sessionId)->pluck('level')->first();

        $work = Workspace::find($id);

        if ($level === "1" && $work){
            $work->delete();
        }else{
            return redirect()->route('workspaces.index');
        }

        return redirect()->route('workspaces.index')->with('deleteSuccess', '');
    }


    public function getData(Request $request)
    {
        $sessionId = auth()->user()->id;

        // NYOBA" CUY
        // $workspace = Member::find($sessionId);
        // $detail = Workspace::find($workspace);
        // $availabe = DB::table('members')->select('members.*')->where('members.user_id','=', $sessionId)->get();

        // QUERY BUILDER
        // $detail = DB::table('members')
        // ->select('members.*')
        // ->where('user_id','=',$sessionId)
        // ->get()->pluck('workspace_id');

        // ELOQUENT
        $detail = Member::all()
        ->where('user_id','=',$sessionId)
        ->pluck('workspace_id');

        // QUERY BUILDER
        // $workspace = DB::table('workspaces')
        // ->select('workspaces.*')
        // ->whereIn('id', $detail)->get();

        // ELOQUENT
        $workspace = Workspace::all()
        ->whereIn('id', $detail);

        if ($request->ajax()){
            return datatables()->of($workspace)
                ->addIndexColumn()
                ->addColumn('actions', function($workspace) {
                    return view('workspaces.actions', compact('workspace'));
                })
                ->toJson();
        }
    }

    // public function createTask(string $id){

    //     $sessionId = auth()->user()->id;
    //     $workspace = Workspace::find($id);

    //     return view('workspaces.workTasks.taskIndex', compact('workspace','sessionId'));
    // }
}
