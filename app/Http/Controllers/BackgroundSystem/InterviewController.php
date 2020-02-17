<?php

namespace App\Http\Controllers\BackgroundSystem;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class InterviewController extends Controller
{
    // 面试
    public function add()
    {
    	// echo 222;
    	return view('BackgroundSystem.Interview.add');
    }

    public function do_add(request $request)
    {
    	$data=$request->all();
        // dd($data);
    	$path = $request->file('pic')->store('mianshi');
        // dd($path);
        $img=asset('storage'.'/'.$path);
        // dd($img);
    	$res=DB::table('interview')->insert([
    		'company_name'=>$data['company_name'],
    		'address'=>$data['address'],
            'pic'=>$img,
    		'time'=>time()
    	]);
    	if($res){
            echo "<script>alert('添加成功');location.href='/index';</script>";
        }else{
            echo "<script>alert('添加失败');location.href='/add';</script>";
        }
    } 
// 面试列表
    public function index(request $request)
    {
    	$res=DB::table('interview')->get();

    	return view('BackgroundSystem.Interview.index',['res'=>$res]);
    }

    //后台登录
    public function adminlogin()
    {
        return view('BackgroundSystem.Interview.adminlogin');
    }

    public function do_adminlogin(request $request)
    {
        $data=$request->all();
         // dd($data);
        $res=DB::table('login')->where('username','=',$data['username'])->first();
        if($res){
            if($res->password == $data['password']){
                session([
                    'id'=>$res->id,
                    'username'=>$res->username,
                ]);
                echo "<script>alert('登录成功')</script>";
                echo "<script>window.location.href='adminadd'</script>";
            }else{
                echo "<script>alert('密码不正确')</script>";
                echo "<script>window.location.href='adminlogin'</script>";
            }
        }else{
            echo "<script>alert('账号不存在或不能为空')</script>";
            echo "<script>window.location.href='adminlogin'</script>";
        }  
         
    }

    //   后台添加前台用户
    public function adminadd()
    {
        return view('BackgroundSystem.Interview.adminadd');
    }
    public function do_adminadd(Request $request)
    {
        $data=$request->all();
        $res = DB::table('hlogin')->insert([
            'name'=>$name,
            'password'=>$pwd
        ]);
        if ($res) {
            echo "<script>alert('添加成功');location.href='/adminindex';</script>";
        } else {
            echo "<script>alert('添加失败');location.href='/adminadd';</script>";
        }
    }
//    后台添加前台用户列表
    public function adminindex(Request $request)
    {
        $data = $request->all();
        $res = DB::table('hlogin')->get();
        return view('BackgroundSystem.Interview.adminindex', ['res' => $res]);
    }
//    前台登录
    public function hlogin()
    {
        return view('BackgroundSystem.Interview.hlogin');
    }
    public function do_hlogin(Request $request)
    {
         $data=$request->all();
         // dd($data);
        $res = DB::table('hlogin')->where('username','=',$data['username'])->first();
        if($res){
            if($res->password == $data['password']){
                session([
                    'id'=>$res->id,
                    'username'=>$res->username,
                ]);
                echo "<script>alert('登录成功')</script>";
                echo "<script>window.location.href='add'</script>";
            }else{
                echo "<script>alert('密码不正确')</script>";
                echo "<script>window.location.href='hlogin'</script>";
            }
        }else{
            echo "<script>alert('账号不存在或不能为空')</script>";
            echo "<script>window.location.href='hlogin'</script>";
        }  

    }


                 /*七牛云*/

     public function qiniu()
    {
        return view('BackgroundSystem.Interview.qiniuyun');
    }
    //七牛
    public function qiniu_add()
    {
        include '../qiniu/autoload.php';
        $ak="cZxqtblzVecGXGhN4h5O1JX9MGQHv81sQVEoCWO0";
        $sk="0wdtYmmnUENuBt8QZphlD7--xD_K4BUp-xM5DN12";
        $bucket="cslwqiniuyun";
        $obj=new Auth($ak,$sk);
        // dd($obj);
        echo $obj->uploadToken($bucket);
    }

}



