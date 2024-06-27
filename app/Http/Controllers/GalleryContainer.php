<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;
class GalleryContainer extends Controller
{
    //
    function view_gallery(){
        $default=DB::table('gallery_main')->where('status', 1)->get();
        $data['default']=$default;
        return view('admin.view_gallery',$data);
    }
    function add_gallery(){
        return view('admin.add_gallery');
     }

    function view_gallery_id($id){
        // fetch ->find->view..
        $all=DB::table('photos_main')->get();
        $curr_gallery =DB::table('gallery_main')->where('gallery_id', $id)->first();
        $author = DB::table('members')->where('id', $curr_gallery->user_id)->first();
        $data['author'] = $author;
        $data['all']=$all;
        $data['curr_gallery']=$curr_gallery;
        $data['id']=$id;
        return view('admin.view_gallery_id',$data);
    }
    
    function view_gallery_id_post( Request $request)
{
        
            $request->validate([
                'id' => 'required',
                'thumbnail.*' => 'required|file|mimes:jpg,png,jpeg,avif,gif,webp',
            ]);
            $start=0;
            foreach($request->file('thumbnail') as $data){
            $file_name=$start.time(). '-img.' .$data->getClientOriginalExtension();
           $data->storeAs('public/uploads/gallery/'.$request->id,$file_name);

           if(Auth::user()->role== 1){
           DB::table('photos_main')->insert([
    'gallery_id'=>$request->id,
    'photo_url'=>'storage/uploads/gallery/'.$request->id.'/'.$file_name,
    'status' => 1,
    'user_id' => Auth::user()->id,
    'created_at'=>date('Y-m-d H:i:s'),
    'updated_at'=>date('Y-m-d H:i:s')
]);

            }
            if(Auth::user()->role == 2){  
                DB::table('gallery_main')->where('gallery_id', $request->id)
                ->update([
                    'status' => 0,
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
                DB::table('photos_main')->insert([
                    'gallery_id' => $request->id,
                    'photo_url' => 'storage/uploads/gallery/'.$request->id.'/'.$file_name,
                    'user_id' => Auth::user()->id,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
            }
     
            $start += 1;
        }
    return redirect(route('view_gallery_id_post',$request->id))->with ('success','Photo Added Successfully');
        }


   public function upload(Request $request){
    $request->validate([
        'image'=>'required|image',
        'name'=>'required'
       ]);
        $id= DB::table('gallery_main')->insertGetId([
            'gallery_name'=>$request->name,
            'thumbnail'=>'image',
            'status'=>1,
            'user_id' => Auth::user()->id,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
    
    $file_name=time(). '-img.' .$request->file('image')->getClientOriginalExtension();
    $request->file('image')->storeAs('public/uploads/gallery/'.$id,$file_name);


    if(Auth::user()->role == 1){ 
      DB::table('photos_main')->insert([
    'gallery_id'=>$id,
    'photo_url'=>'storage/uploads/gallery/'.$id.'/'.$file_name,
    'status'=>1,
    'user_id' => Auth::user()->id,
    'created_at'=>date('Y-m-d H:i:s'),
    'updated_at'=>date('Y-m-d H:i:s')
]);

DB::table('gallery_main')->where('gallery_id',$id)
    ->update([
       'thumbnail'=>'storage/uploads/gallery/'.$id.'/'.$file_name,
       'status'=>1,
       'updated_at'=>date('Y-m-d H:i:s'),
    ]);  
     return redirect(route('view_gallery'))->with('success','Successfully uploaded');
}
     else{   
    DB::table('photos_main')->insert([
        'gallery_id'=>$id,
        'photo_url'=>'storage/uploads/gallery/'.$id.'/'.$file_name,
        'user_id' => Auth::user()->id,
        'status'=>0,
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s')
    ]);
    
    DB::table('gallery_main')->where('gallery_id',$id)
        ->update([
           'thumbnail'=>'storage/uploads/gallery/'.$id.'/'.$file_name,
           'updated_at'=>date('Y-m-d H:i:s'),
           'status'=>0,
        ]);   return redirect(route('view_gallery'))->with('success','Pending');
}

}

public function user_view_gallery()
{
    $galleries = DB::table('gallery_main')->where('status', 1)->get();
    $data['galleries'] = $galleries;
    return view('user_views.all_gallery', $data);
}
public function user_view_gallery_id($id)
{
    $all = DB::table('photos_main')->where('gallery_id', $id)->get();
    $curr_gallery = DB::table('gallery_main')->where('gallery_id', $id)->first();
    $data['curr_gallery'] = $curr_gallery;
    $data['all'] = $all;
    $data['id'] = $id;
    return view('user_views.view_gallery_id', $data);
}

function view_pending($id){
    if(!Auth::user()){
        return redirect(route('login'))->with('error', 'Access denied- Login Required');
    }
    $all = DB::table('photos_main')->where('gallery_id', $id)->get();
    $curr_gallery = DB::table('gallery_main')->where('gallery_id', $id)->first();
        $data['curr_gallery'] = $curr_gallery;
        $data['all'] = $all;
        $data['id'] = $id;
        return view('admin.view_pending', $data);

}
public function view_pending_request()
{
    if(!Auth::user()){
        
        return redirect(route('login'))->with('error', 'Login required to access dashboard!');
    }
    $galleries = DB::table('gallery_main')->where('status', 0)->get();
    $members = DB::table('members')->get();
    $data['galleries'] = $galleries;
    $data['members'] = $members;
    return view('admin.view_pending_request', $data);
}

function accept_gallery($id){
    if(!Auth::user()){
        return redirect(route('login'))->with('error', 'Access denied- Login Required');
    }
    DB::table('gallery_main')->where('gallery_id',$id)
    ->update([
        'status'=>1,
        'updated_at'=>date('Y-m-d H:i:s')
    ]);
    $all = DB::table('photos_main')->where('gallery_id', $id)
    ->update([
        'status' => 1,
        'updated_at' => date('Y-m-d H:i:s')
    ]);

return redirect(route('view_pending_request'))->with('success','Request Accepted');
}

function reject_gallery($id){
    if(!Auth::user()){
        return redirect(route('login'))->with('error', 'Access denied- Login Required');
    }
    DB::table('gallery_main')->where('gallery_id',$id)
    ->update([
        'status'=>2,
        'updated_at'=>date('Y-m-d H:i:s')
    ]);
    $all= DB::table('photos_main')->where('gallery_id', $id)
    ->update([
        'status' => 2,
        'updated_at' => date('Y-m-d H:i:s')
    ]);
   





return redirect(route('view_pending_request'))->with('error','Request Denied');
}

public function view_all_requests_for_member()
{
    if(!Auth::user()){
        // dd(auth()->user()->role_id);
        return redirect(route('login'))->with('error', 'Login required to access dashboard!');
    }
    $galleries = DB::table('gallery_main')->get();
    $members = DB::table('members')->get();
    $data['galleries'] = $galleries;
    $data['members'] = $members;
    return view('admin.view_all_requests_for_member', $data);
}


//       \\               
function view_photos(){
    $default=DB::table('gallery_main')->get();
    $data['default']=$default;
    return view('user_views.photos',$data);
}

function view_photos_id($id){
    // fetch ->find->view..
    $all=DB::table('photos_main')->where('gallery_id', $id)->get();
    $curr_gallery =DB::table('gallery_main')->where('gallery_id', $id)->first();
    $data['all']=$all;
    $data['curr_gallery']=$curr_gallery;
    $data['id']=$id;
    
    return view('user_views.photos2',$data);
}
        
function view_photos_id_post( Request $request){
        
    $request->validate([
        'id' => 'required',
        'thumbnail.*' => 'required|file|mimes:jpg,png,jpeg,avif,gif,webp',
    ]);
    $start=0;
    foreach($request->file('thumbnail') as $data){
    $file_name=$start.time(). '-img.' .$data->getClientOriginalExtension();
   $data->storeAs('public/uploads/gallery/'.$request->id,$file_name);

    
DB::table('photos_main')->insert([
'gallery_id'=>$request->id,
'photo_url'=>'storage/uploads/gallery/'.$request->id.'/'.$file_name,
'created_at'=>date('Y-m-d H:i:s'),
'updated_at'=>date('Y-m-d H:i:s')
]);

    }
$start++;


return redirect(route('photos2',$request->id))->with ('success','Photo Added Successfully');
}



//  LOGIN ->DASHBOARD
   public  function login_done(Request $request){
    // validation
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);
    // find
    $user =User::where([
        'email'=>$request->email,
        'password'=>$request->password,
    ])->first();   /*return one record*/
     if($user){
        Auth::login($user);
        return redirect(route('dashboard'))->with ('success','Logged in Successfully');
     }
     
        return redirect(route('login'))->with ('error','Wrong info');
     

   }

function logout(){
    Session::flush();
    Auth::logout();
    return redirect( route('view_home'));
}

public function add_notice(){
    $dataa=DB::table('type_master')->get();
    $defaultt['dataa']=$dataa;
    return view('admin.add_notice',$defaultt);

}
public function added_notice(Request $request){
    $request->validate([
        'title' => 'required',
        'department' => 'required',
        'type'=>'required',
        'url'=>'nullable',
       'file.*' => 'nullable|required_without:url|file|mimes:pdf,'

    ]);
       
        $curr_notice = DB::table('notice')->insertGetId([
            'type' => $request->type,
            'title' => $request->title,
            'department' => $request->department,
        ]);
        if($request->url){
            DB::table('notice')->where('id',$curr_notice)
            ->update([
                'url'=>$request->url,
                'updated_at'=>date('Y-m-d H:i:s'),
            ]);
        }
        else{
            $st=0;
            if($request->file('file')){
               foreach($request->file('file') as $file){
                $file_name = $st.time().'-pdf.'.$file->getClientOriginalExtension();
                $file->storeAs('public/uploads/files/'.$curr_notice, $file_name);
                $st += 1;
                    DB::table('notice1')->insert([
                        'foreign_id' => $curr_notice,
                        'url' => 'storage/uploads/files/'.$curr_notice.'/'.$file_name,                        
                    ]);
                }
            }
        }
        return redirect(route('add_notice'))->with ('success','Notice Added Successfully');
}

        public function view_notice(){
            $all_notice= DB::table('notice')->where('type', 1)->get();
           
            $data['all_notice'] = $all_notice;
            $all_types = DB::table('type_master')->get();
            $data['types'] = $all_types;
           
            return view('admin.view_notice', $data);
        }
    public function view_tender(){
        $all_notice= DB::table('notice')->where('type', 2)->get();
        $data['all_notice'] = $all_notice;
        $all_types = DB::table('type_master')->get();
        $data['types'] = $all_types;
        return view('admin.view_tender', $data);
    }
    public function view_orders(){
        $all_notice= DB::table('notice')->where('type', 3)->get();
       
        $data['all_notice'] = $all_notice;
        $all_types = DB::table('type_master')->get();
        $data['types'] = $all_types;
       
        return view('admin.view_notice', $data);
    }
    public function view_circulars(){
        $all_notice= DB::table('notice')->where('type', 4)->get();
       
        $data['all_notice'] = $all_notice;
        $all_types = DB::table('type_master')->get();
        $data['types'] = $all_types;
       
        return view('admin.view_notice', $data);
    }
    public function view_recruitments(){
        $all_notice= DB::table('notice')->where('type', 5)->get();
       
        $data['all_notice'] = $all_notice;
        $all_types = DB::table('type_master')->get();
        $data['types'] = $all_types;
       
        return view('admin.view_notice', $data);
    }
    public function view_notifications(){
        $all_notice= DB::table('notice')->where('type', 3)->get();
       
        $data['all_notice'] = $all_notice;
        $all_types = DB::table('type_master')->get();
        $data['types'] = $all_types;
       
        return view('admin.view_notice', $data);
    }


    public function inside($id)
    {
        $notice_data = DB::table('notice')->where('id', $id)->first();
        $data['notice_data'] = $notice_data;
        $attachments = DB::table('notice1')->where('foreign_id', $id)->get();
        $data['attachments'] = $attachments;
        $all_types = DB::table('type_master')->get();
        $data['types'] = $all_types;
        $url = DB::table('notice')->get();
        $data['url']=$url;
        return view('admin.inside', $data);
    }

    

    function photo_gallery(){
        $default=DB::table('gallery_main')->get();
        $data['default']=$default;
        return view('e&it_views.photo_gallery',$data);
    }
    
    function photo_gallery2($id){
        // fetch ->find->view..
        $all=DB::table('photos_main')->where('gallery_id', $id)->get();
        $curr_gallery =DB::table('gallery_main')->where('gallery_id', $id)->first();
        $data['all']=$all;
        $data['curr_gallery']=$curr_gallery;
        $data['id']=$id;
        
        return view('e&it_views.photo_gallery2',$data);
    }
      
    // NEW NEW

    
    public function eit_view_notifications()
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        $all_notices = DB::table('notice')->where('type', 6)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('type_master')->get();
        $data['types'] = $all_types;
        return view('e&it_views.view_notifications', $data);
    }
     
    public function eit_view_recruitments()
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        $all_notices = DB::table('notice')->where('type', 5)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('type_master')->get();
        $data['types'] = $all_types;
        return view('e&it_views.view_notifications', $data);
    }

    public function eit_view_circulars()
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        $all_notices = DB::table('notice')->where('type', 4)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('type_master')->get();
        $data['types'] = $all_types;
        return view('e&it_views.view_notifications', $data);
    }

    public function eit_view_orders()
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        $all_notices = DB::table('notice')->where('type', 3)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('type_master')->get();
        $data['types'] = $all_types;
        return view('e&it_views.view_notifications', $data);
    }


  
    public function eit_view_tenders()
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        $all_notices = DB::table('notice')->where('type', 2)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('type_master')->get();
        $data['types'] = $all_types;
        return view('e&it_views.view_notifications', $data);
    }
    public function eit_view_news()
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        $all_notices = DB::table('notice')->where('type', 1)->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('type_master')->get();
        $data['types'] = $all_types;
        return view('e&it_views.view_notifications', $data);
    }





    public function eit_view_notice_board()
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        $all_notices = DB::table('notice')->orderBy('id', 'desc')->get();
        $data['all_notices'] = $all_notices;
        $all_types = DB::table('type_master')->get();
        $data['types'] = $all_types;
        return view('e&it_views.view_notice_board', $data);
    }
      
    public function eit_view_notice_id($id)
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();

        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        
        $notice_data = DB::table('notice')->where('id', $id)->first();
        $data['notice'] = $notice_data;
        $attachments = DB::table('notice1')->where('foreign_id', $id)->get();
        $data['attachments'] = $attachments;
        $all_types = DB::table('type_master')->get();
        $data['types'] = $all_types;
        return view('e&it_views.view_notice_id', $data);
    }




    public function view_home()
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.home', $data);
    }

    public function view_acts_and_rules()
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.acts_and_rules', $data);
    }

    public function view_subject_matter_art_scheme()
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.subject_matter_art_scheme', $data);
    }
    public function view_right_to_information()
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.right_to_information', $data);
    }
    public function view_whos_who()
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.whos_who', $data);
    }

    public function view_achievements()
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.achievement', $data);
    }

    public function view_organization_chart()
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.organization_chart', $data);
    }

    public function view_departmental_structure()
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.departmental_structure', $data);
    }

    
    public function view_services()
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.services', $data);
    }
  public function view_program_and_schemes()
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.program_and_schemes', $data);
    }
    public function view_departmental_activities() 
    {
        $notices = DB::table('notice')->orderBy('id', 'desc')->limit(3)->get();
        $data['notices'] = $notices;
        $total_tenders = DB::table('notice')->where('type', 2)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_tenders'] = $total_tenders;
        $total_news = DB::table('notice')->where('type', 1)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_news'] = $total_news;
        $total_circulars = DB::table('notice')->where('type', 4)->orderBy('id', 'desc')->limit(3)->get();
        $data['total_circulars'] = $total_circulars;
        return view('e&it_views.departmental_activities', $data);
    }
    // EMAIL sent
     public function email(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        // insert into DB
        DB::table('email')->insert([
            
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
            ]);
       
        return redirect(route('e&it_views.contact_us'))->with ('success','Request sent successfully');
   }
    // admin view  
    public function view_all_email(){
        $details = DB::table('email')->get();
        $data['details']=$details;
        return view('admin.notify',$data);
    }

//     admin  inside view
   public function email_id($id){
    $detail = DB::table('email')->where('message_id',$id)->first();
    $data['detail']=$detail;
    return view('admin.email_id',$data);

   }



}