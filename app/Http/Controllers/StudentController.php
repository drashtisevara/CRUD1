<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students= DB::table('students')->get();
        return view('home' , ['students' =>$students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        DB::table('students')->insert([
            'name' => $req->name,
            'city' => $req->city,
            'marks' => $req->marks,
        ]);
        return redirect(route('index'))->with('status', 'Student Added !!!');
    }

    
    /**
     * Show the form for editing the specified resource.
     * 
       * @param  int  $id
     * @return Response
 */

    public function edit(Request $request, string $id)
    {
        $student = DB::table('students')->find($id);
        return view('editform' , ['student' => $student]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        DB::table('students')->where('id', $id)->update([
            'name' => $req->name,
            'city' => $req->city,
            'marks' => $req->marks,
        ]);
        return redirect(route('index'))->with('status', 'Student Updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('students')->where('id', $id)->delete();
        return redirect(route('index'))->with('status', 'Student Deleted !!!');
    }
    


    
}
