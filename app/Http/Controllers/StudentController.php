<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
class StudentController extends Controller
{
    public function index()
    {
      $students=student::all();

      return view('index')->with ('students', $students);

    }


    public function save(Request $request)
    {
      $student = new student();

      $student->firstName = $request->fname;
      $student->lastName = $request->lname;
      $student->address = $request->add;
      $student->depatment = $request->dep;
      $student->gender = $request->gen;
      $student->save();
    }
}
