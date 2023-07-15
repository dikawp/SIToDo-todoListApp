<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function getData(Request $request)
    {
        $sessionId = auth()->user()->id;
        $workspace = Member::find($sessionId);

        $detail = Workspace::find($workspace);


        // $availabe = DB::table('members')->select('members.*')->where('members.user_id','=', $sessionId)->get();


        if ($request->ajax()){
            return datatables()->of($detail)
                ->addIndexColumn()
                ->addColumn('actions', function($detail) {
                    return view('workspaces.actions', compact('detail'));
                })
                ->toJson();
        }
    }
}
