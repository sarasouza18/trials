<?php


namespace App\Http\Controllers\Contracts;


use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Interface TrialController
 * @package App\Http\Controllers\Contracts
 */
interface TrialController
{

    /**
     * @return mixed
     */
    public function index();

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request);

    /**
     * @param $id
     * @param Request $request
     * @return Factory|View
     */
    public function trialSingle($id,  Request $request);

    /**
     * @param $name
     * @param Request $request
     * @return mixed
     */
    public function downloadCurriculum($name, Request $request);

    /**
     * @param Request $request
     * @return mixed
     */
    public function sendEmail(Request $request);
}