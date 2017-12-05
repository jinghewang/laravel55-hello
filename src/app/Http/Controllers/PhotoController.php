<?php

namespace App\Http\Controllers;

use DeepCopy\Reflection\ReflectionHelper;
use Illuminate\Http\Request;
use Woodw\Utils\Helpers\UtilsHelper;

class PhotoController extends Controller
{

    public function xx() {
        $re = new \ReflectionClass($this);
        foreach ($re->getMethods() as $method) {
            UtilsHelper::print_r($method->name);
        }
    }


    /**
     * before action and after action
     * @author wjh 2017-12-04
     * @param string $method
     * @param array $parameters
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function callAction($method, $parameters) {
        //UtilsHelper::print_r(__METHOD__ . ' before');
        $data =  parent::callAction($method, $parameters);
        //UtilsHelper::print_r(__METHOD__ . ' end');
        return $data;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        UtilsHelper::print_r(__METHOD__);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        var_dump(__METHOD__);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        var_dump(__METHOD__);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        var_dump(__METHOD__);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        var_dump(__METHOD__);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        var_dump(__METHOD__);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        var_dump(__METHOD__);
    }
}
