<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
    

        //model student data抓出來 ORM
        //存在$data
        $data = Student::all();
        //dd($data);

        //foreach (Student::all() as $student){
        //    echo $student->name;
        //}
        //return view('student.index');

        //dd($data);
        return view('bike.index',['data' => $data]);


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd('bike create ok');
        
        return view('bike.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('store ok');
        dd($request->all());

        $studnet = new Student();
 
        $studnet->id = $request->id;
        $studnet->name = $request->name;
        $studnet->chinese = $request->chinese;
        $studnet->english = $request->english;
        $studnet->math = $request->math;
 
        $studnet->save();

        return redirect()->route('students.index');

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
        dd($id);
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
