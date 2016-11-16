<?php
namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Image;

class ImageController extends Controller
{
	public function index(){
		$pictures = Picture::all();
		return view('pages.home')->with('pictures', $pictures);
	}
    public function showPictureList()
    {
        $pictures = Picture::all();
        return view('pages.pictureslist')->with('pictures', $pictures);
    }

    public function addPicture()
    {
        return view('pages.addpicture');
    }

    public function savePicture(Request $request)
    {

         $file = Input::file('pic');
         $img = Image::make($file);
         Response::make($img->encode('jpeg'));

         $picture = new Picture;
         $picture->name = $request->get('name');
         $picture->pic = $img;
         $picture->save();


         return Redirect::to('list');
    }

    /*
     * Extracts picture's data from DB and makes an image 
     */
    public function showPicture($id)
    {
        $picture = Picture::findOrFail($id);
        $pic = Image::make($picture->pic);
        $response = Response::make($pic->encode('jpeg'));

        //setting content-type
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }
}
