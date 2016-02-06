<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class staticController extends Controller
{
    //
    public function index(){ return view('welcome');}
    public function aboutUs(){return view('aboutUs');}
    public function contactUs(){
    $test="تواصلو معنا و خلينا نسمع رأيكن:";
    $contactus="الرجاء الأخذ بعين الإعتبار أن هذا النموذج لتقديم إقتراح أو شكوى أو رمي السلام 😉

في حال رغبتك في التقدم إلى عمل موجود مسبقاً في موقعنا اضغط على الزر المشابه لهذا الزر : 

لأصحاب العمل الراغبين في إضافة فرصة عمل الرجاء الضغط هنا.";

    	//return view('contactUs')->with('test',$test);
    	return view('contactUs',compact('test','contactus'));
    }
   
}
