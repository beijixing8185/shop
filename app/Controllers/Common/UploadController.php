<?php
namespace app\Controllers\Common;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UploadController extends Controller
{
    /**
     * 上传图片
     */
    public function uploadImage(Request $request){
        $this->validate($request,['path'=>'required|string']);

        $path = $request->path;
        $file = $request->file('imgFile');

        $save_path = public_path('/uploads/'.$path);

        if (!file_exists($save_path)) {
            mkdir($save_path, 0777, true);
        }

        $url = $file->store($path);
        $visit_url = '/uploads/'.$url;
        if ($url) {
            return response()->json(['error' => 0, "url" => $visit_url]);
        } else {
            return response()->json(['error' => 1, "msg" => '图片上传失败！']);
        }
    }

}