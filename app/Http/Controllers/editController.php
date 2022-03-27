<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\infodatainsert;
use DB;
use Auth;
use Illuminate\Support\Facades\Session;

class editController extends Controller
{
    public function editInfo()
    {
        $editData = DB::table('infodatainserts')->where('userid',Auth()->user()->id)->first();
        return view('fontpage.editinfo',compact('editData'));
    }
    public function updateInfo(Request $request,$id)
    {
        $updateInfo=infodatainsert::find($id);
        $updateInfo->name=$request->name;
        $updateInfo->email=$request->email;
        $updateInfo->phone=$request->phone;
        $updateInfo->nationality=$request->nationality;
        $updateInfo->age=$request->age;
        $updateInfo->date=$request->date;
        $updateInfo->address=$request->address;
        $updateInfo->country=$request->country;
        $updateInfo->gander=$request->gander;
        $updateInfo->exam=$request->exam;
        $updateInfo->dec=$request->dec;
        $updateInfo->gpa=$request->gpa;
        $updateInfo->examB=$request->examB;
        $updateInfo->decB=$request->decB;
        $updateInfo->gpaB=$request->gpaB;
        $updateInfo->examC=$request->examC;
        $updateInfo->decC=$request->decC;
        $updateInfo->gpaC=$request->gpaC;
        $updateInfo->job1=$request->job1;
        $updateInfo->work1=$request->work1;
        $updateInfo->job2=$request->job2;
        $updateInfo->work2=$request->work2;
        $updateInfo->job3=$request->job3;
        $updateInfo->work3=$request->work3;
        $updateInfo->lastCompany=$request->lastCompany;
   
       //  dd($infoUpto->all());
       $updateInfo->update();
   Session::flash('success',' Your profile has been updated! ');
       return redirect()->route('edit.info');
    }
    public function pdfmake()
    {
        // $users = DB::table('users')->where('id',Auth::user()->id)->first();
        

        $mpdf = new \Mpdf\Mpdf();
        // $data=view('profile')->with('users', $users);
        $mpdf->WriteHTML(file_get_contents('http://localhost:8000/home'));
      
       $mpdf->Output();
    }
}
