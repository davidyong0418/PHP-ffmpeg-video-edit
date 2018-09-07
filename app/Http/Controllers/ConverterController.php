<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Database\Eloquent\Collection;
class ConverterController extends Controller
{
    // api/get_following?user_id=
    public function show_landing()
    {
        // exec('ffmpeg -f image2 -r 1/1 -i image/pic%d.jpg -vf fps=25 test1.mp4');
        $query = `ffmpeg -i test1.mp4 -i image/pic1.jpg  -filter_complex "[0:v][1:v]" -pix_fmt yuv420p -c:a copy td.mp4`;
        // ffmpeg -r 25 -loop 1 -t 3 -i "image/pic1.jpg" -i "test1.mp4" -f lavfi -t 3 -i aevalsrc=0  output.mp4
        // ffmpeg -i "test1.mp4" -f image2 -framerate 10 -i "image/pic1.jpg" -f lavfi -t 3 -i aevalsrc=0 output.mp4
        $query = 'ffmpeg -i "output2.mp4" -f image2 -framerate 10 -i "image/pic2.jpg" -f lavfi -t 3 -i aevalsrc=0 -filter_complex "[0]setdar=16/9,scale=640x640[a];[1]setdar=16/9,scale=640x640[b]; [a] [0:a] [b] [2:a] concat=n=2:v=1:a=1 [v] [a]" -c:v libx264 -c:a aac -strict -2 -map "[v]" -map "[a]" output3.mp4';
        // ffmpeg -i "output.mp4" -f image2 -framerate 10 -i "image/pic1.jpg" -f lavfi -t 3 -i aevalsrc=0 -filter_complex "[0]setdar=16/9,scale=640x640[a];[1]setdar=16/9,scale=640x640[b];[2]setdar=16/9,scale=640x640[c]; [a] [0:a]  concat=n=3:v=1:a=1 [v] [a]" -c:v libx264 -c:a aac -strict -2 -map "[v]" -map "[a]" output2.mp4

        $data = array(
            'asdf'=>'dasf'
        );
       
        return view('converter', $data);

        // ffmpeg -i test.mp4 -f image2 -framerate 10 -i "image/pic1.jpg" -f lavfi -t 3 -i aevalsrc=0 -filter_complex "[0:v] [0:a] [1:v] [2:a] concat=n=2:v=1:a=1 [v] [a]" -c:v libx264 -c:a aac -strict -2 -map "[v]" -map "[a]" output.mp4
    }
    public function create(Request $request)
    {
        
        $request_info = $request->input('pic');
        foreach ($request_info as $key=>$item)
        {
            
            if($item == 'on')
            {

                $order = $key + 1;
                $path = "image/pic".$order.".jpg";
                $query = 'D:\ffmpeg_static\bin\ffmpeg.exe  -i "test.mp4" -y -f image2 -framerate 3 -i "'.$path.'" -f lavfi -t 3 -i aevalsrc=0 -filter_complex "[0]setdar=16/9,scale=640x640[a];[1]setdar=16/9,scale=640x640[b]; [a] [0:a] [b] [2:a] concat=n=2:v=1:a=1 [v] [a]" -c:v libx264 -c:a aac -strict -2 -map "[v]" -map "[a]" test.mp4';
            exec($query);
            exit;
                $query = 'D:\ffmpeg_static\bin\ffmpeg.exe -i "test.mp4" -f image2 -framerate 3 -i "'.$path.'" -f lavfi -t 3 -i aevalsrc=0 -filter_complex "[0]setdar=16/9,scale=640x640[a];[1]setdar=16/9,scale=640x640[b]; [a] [0:a] [b] [2:a] concat=n=2:v=1:a=1 [v] [a]" -c:v libx264 -c:a aac -strict -2 -map "[v]" -map "[a]" test5.mp4';
                print_r($query);
                print_r('++++++++');
                // exec($query);
            }

        }

//        return view('converter', $request_info);
        

    }

}
