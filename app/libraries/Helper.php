<?php

use Carbon\Carbon;
use Carbon\CarbonInterval;
use App\Models\EduStudentPracticeTime_User;

class Helper {

    //Pagination
    public static function paginate($data=[], $perPage=10) {
        $perPage = (empty($data) || empty($data['perPage'])) ? $perPage : $data['perPage'];
        $serial = (!empty($data) && !empty($data['page']) && ($data['page']>1)) ? ($perPage*($data['page']-1))+1 : 1;
        return (object) ['perPage' => $perPage, 'serial' => $serial];
    }

    public static function getFixedUpFileName($mainFile, $imgPath, $isFixed=false, $reqWidth=0, $reqHeight=0)
    {
        $fileExtention = $mainFile->extension();
        $fileOriginalName = $mainFile->getClientOriginalName();
        $file_size 	= $mainFile->getSize();
        $imgSizeArr = getimagesize($mainFile);

        $validExtentions = array('jpeg', 'jpg', 'png');
        $path = public_path($imgPath);
        $currentTime = time();
        $fileName = $currentTime.'.'.$fileExtention;

        if (in_array($fileExtention, $validExtentions)) {
            if ($isFixed) { //Size Fixed
                $imgDimention = false;
                $imgWidth = $imgSizeArr[0];
                $imgHeight = $imgSizeArr[1];
                if ($reqWidth <= $imgWidth && $reqHeight <= $imgHeight) {
                    $imgDimention = true;
                } else {
                    $imgDimention = false;
                    $dimentionErrMsg = "Image size must be greater than or equal ".$reqWidth."px * ".$reqHeight."px";
                }

                if ($imgDimention) {
                    $mainFile->move($path, $fileName);
                    //create instance
                    //Image Fixed resizing for Use
                    $img = Image::make($path.'/'.$fileName)->resize($reqWidth, $reqHeight)->save($path.'/'.$fileName);
                    // //resize image for thumb
                    $img->resize(80, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    $img->save($path.'/thumb/'.$fileName);

                    $output['status']             = 1;
                    $output['file_name']          = $fileName;
                    $output['file_original_name'] = $fileOriginalName;
                    $output['file_extention']     = $fileExtention;
                    $output['file_size']          = $file_size;
                } else {
                    $output['errors'] = $dimentionErrMsg;
                    $output['status'] = 0;
                }

            } else { //Size Not Fixed
                $mainFile->move($path, $fileName);
                //create instance
                $img = Image::make($path.'/'.$fileName);
                //resize image
                $img->resize(80, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save($path.'/thumb/'.$fileName);

                $output['status']             = 1;
                $output['file_name']          = $fileName;
                $output['file_original_name'] = $fileOriginalName;
                $output['file_extention']     = $fileExtention;
                $output['file_size']          =  $file_size;
            }

        } else {
            $output['errors'] = $fileExtention.' File is not support';
            $output['status'] = 0;
        }
        return $output;

    }

}
