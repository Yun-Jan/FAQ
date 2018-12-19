<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadfileController extends Controller
{
    public function upload(Request $request)
    {

        if($request->isMethod('POST')){

            //var_dump($_FILES);
            $file=$request->file('file');

            if ($file->isValid()){
                // Original file name
                $originalName=$file->getClientOriginalName();
                //Extension file name
                $extension= $file->getClientOriginalExtension();
                //MineType
                $type=$file->getClientMimeType();
                //Temporary path
                $realPath=$file->getRealPath();

                $filename=date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $extension;
                $bool =Storage::disk('uploads')->put($filename, file_get_contents($realPath));
                return back()->with('message','File Uploaded Successfully!' );

                //var_dump($bool);

            }


            exit;


        }


        return view('uploadfile');
    }




}
