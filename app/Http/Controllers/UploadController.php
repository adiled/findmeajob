<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    
  public function multiple_file_upload($user_id, $files, $rule){
    $file_count = count($files)
    $upload_count = 0;

    $rules = ['file' => $rule];

    foreach($file as $files) {
      $validator = Validator::make(['file' => $file], $rules);

      if($validator->passes()){
        $file->store('attachment/'.$user_id, 'local');
      }
    }
  }

}