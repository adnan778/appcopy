<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Auth;
use App\Models\user;
use App\Models\infodatainsert;
use DB;
use Mpdf\Mpdf;
use View;
use Illuminate\Support\Facades\Session;
class BlogPost extends Controller
{




    // changePassword
    public function changePassword()
    {
      return view('changePassword');
    }
    // updatePassword

    public function updatePassword(Request $request)
    {
       $request->validate([
                 'oldpassword'=>'required',
                 'newpassword' => 'required|string|min:8',
                 'confirmpassword' => 'required',
       ]);

if(!Hash::check($request->oldpassword,Auth()->user()->password)){

return back()->with("error","Old password does't match!");

}elseif($request->newpassword===$request->confirmpassword){

  $pass=user::find(Auth::user()->id);
  $pass->password=Hash::make($request->newpassword);
  $pass->update();
  return back()->with("success","Your password was changed");


}
return back()->with("error","password does't match!");







    }


    // informationInput

    public function informationInput(Request $request)
    {
 

     $infoUpto=new infodatainsert;
     $id=Auth()->user()->id;
     $infoUpto->userid=$id;
     $infoUpto->name=$request->name;
     $infoUpto->email=$request->email;
     $infoUpto->phone=$request->phone;
     $infoUpto->nationality=$request->nationality;
     $infoUpto->age=$request->age;
     $infoUpto->date=$request->date;
     $infoUpto->address=$request->address;
     $infoUpto->country=$request->country;
     $infoUpto->gander=$request->gander;
     $infoUpto->exam=$request->exam;
     $infoUpto->dec=$request->dec;
     $infoUpto->gpa=$request->gpa;
     $infoUpto->examB=$request->exam2;
     $infoUpto->decB=$request->dec2;
     $infoUpto->gpaB=$request->gpa2;
     $infoUpto->examC=$request->exam3;
     $infoUpto->decC=$request->dec3;
     $infoUpto->gpaC=$request->gpa3;
     $infoUpto->job1=$request->job1;
     $infoUpto->work1=$request->work1;
     $infoUpto->job2=$request->job2;
     $infoUpto->work2=$request->work2;
     $infoUpto->job3=$request->job3;
     $infoUpto->work3=$request->work3;
     $infoUpto->lastCompany=$request->lastCompany;

    //  dd($infoUpto->all());
    $infoUpto->save();
Session::flash('success',' Your profile has been updated! ');
    return redirect()->back();

    }


    
    public function seeinfo()
    {
      $info = DB::table('infodatainserts')->where('userid',Auth()->user()->id)->first();

      return view('fontpage.info',compact('info'));
    }

    // downloadPDF
    // ->render()
public function downloadPDF($id)
{
  $info = DB::table('infods')->where('id',$id)->first();
  $html=view('fontpage.info',compact('info'));
    $mpdf = new Mpdf();
    dd($mpdf);
    $mpdf->WriteHTML('<h1>Hello world!</h1>');
    $mpdf->Output();
}




// pdf
public function pdf()
{
  $mpdf = new \Mpdf\Mpdf();
  $mpdf->WriteHTML('<h1>hello wrl</h1>')->render();

 $mpdf=Output();
}

}
