<?php

namespace App\Http\Controllers;

use App\Category;
use App\Jobs;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jobs.jobs');
    }

    public function getJobTable(){
        $all_job_data=Jobs::getAllJobs();
        return DataTables::of($all_job_data)
            ->addColumn('action', function ($all_job_data) {
                return '<a href="javascript:;" class="edit_job" id="' . $all_job_data->id . '">
                            <i class="fa fa-edit"></i> </a>
                            <a href="javascript:;" class="delete_job" id="' . $all_job_data->id . '">
                            <i class="fa fa-trash"></i> </a>';

            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->getFormDetails(0);
    }

    public function getFormDetails($id){
        $job_data=Jobs::find($id);
        $all_category=Category::all();
        return view('jobs.job_form_details',compact('job_data','all_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
