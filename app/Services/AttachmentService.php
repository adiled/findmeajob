<?php

namespace App\Services;

class AttachmentService {

  // Upload multiple files with eloquent rule

  public static function multiple_file_upload($dir, $files, $rule){
    $file_count = count($files);
    $upload_count = 0;

    $rules = ['file' => $rule];

    foreach($file as $files) {
      $validator = Validator::make(['file' => $file], $rules);

      if($validator->passes()){
        $file->store('attachment/'.$dir, 'local');
      }

      $upload_count++;
    }
  
    if($upload_count !== $file_count)
      return false;

    return true;

  }
  
}

?>