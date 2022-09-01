<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Controllers\PhotoCommentController;


// 類次這樣的 先註解;
//use App\Http\Controllers\Controller;
//use App\Models\User;


class StudentController extends Controller

{
    public function index(){
    

        //model student data抓出來 ORM
        //存在$data
        $data = Student::all();
        //dd($data);

        //foreach (Student::all() as $student){
        //    echo $student->name;
        //}
        //return view('student.index');

        dd($data);
        return view('student.index',['data' => $data]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $student = new Student();


        $student->id = $request->id;
        $student->name = $request->name;
        $student->chinese = $request->chinese;
        $student->english = $request->english;
        $student->id = $request->math;

        $student->save();
 
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









}
