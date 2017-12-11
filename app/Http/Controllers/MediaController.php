<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller {

    function upload(Request $request){
        $success = false;
        if($request->isMethod('post')){

            //ambil file dari request
            $mainpicture = $request->file('mainpicture');
           if($mainpicture){

            $dir = storage_path('app/public');
            $mainpicture->move($dir, $mainpicture->getClientOriginalName());
        }
            
            $gallery=$request->file('gallery');
            $dir = storage_path('app/public');
            foreach ($gallery as $picture) {
                $picture->move($dir, $picture->getClientOriginalName());
            }

            $success = true;
        }
        $data = [
            'success'=> $success
        ];
        return view('media/upload', $data);
    }

    function index() {

        //ambil data file
        $contents = Storage::disk('public')->listContents();
        $data = [
            'contents' => $contents
        ];
        return view('media/index', $data);
    }

}