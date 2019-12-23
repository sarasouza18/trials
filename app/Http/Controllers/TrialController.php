<?php
/**
 * Created by PhpStorm.
 * User: Sara
 * Date: 19/12/2019
 * Time: 15:10
 */


namespace App\Http\Controllers;
use App\Mail\sendMail;
use App\Trial;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;



/**
 * Class TrialController
 * @package App\Http\Controllers
 */
class TrialController extends Controller implements Contracts\TrialController
{


    /**
     * @return Factory|View
     */
    public function index() {

        $trials = DB::table('trials')->get();
        return view('trials/index', compact('trials'));
    }


    /**
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request) {
        $input = $request->except('_token');
        $fileName = $request->name;
        $request->file('file')->storeAs('curriculum',$fileName);
        Trial::create($input);
        return redirect('home');
    }

    /**
     * @param $id
     * @param Request $request
     * @return Factory|View
     */
    public function trialSingle($id,  Request $request){
        $trial = Trial::findOrFail($id);
        return view('trials.trials',compact('trial', 'id'));
    }

    /**
     * @param $name
     * @param Request $request
     * @return BinaryFileResponse
     */
    public function downloadCurriculum($name, Request $request){
        return response()->download(storage_path("app/public/curriculum/{$name}"));
    }

    /**
     * @param Request $request
     */
    public function sendEmail(Request $request){
        $trials = Trial::all()->count();
        Mail::to('sara.souza.9@hotmail.com')->send(new SendMail($trials));

    }

}