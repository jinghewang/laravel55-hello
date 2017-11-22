<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Person;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Woodw\Utils\Helpers\UtilsHelper;

/**
 * Class PersonController.
 *
 * @author  The scaffold-interface created at 2017-11-22 05:55:35am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - person';
        $people = Person::paginate(6);
        return view('person.index',compact('people','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - person';
        
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = new Person();

        
        //$person->id = $request->id;

        
        $person->name = $request->name;

        
        $person->age = $request->age;

        
        $person->country = $request->country;

        
        
        $person->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new person has been created !!']);

        return redirect('person');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - person';

        if($request->ajax())
        {
            return URL::to('person/'.$id);
        }

        $person = Person::findOrfail($id);
        return view('person.show',compact('title','person'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - person';
        if($request->ajax())
        {
            return URL::to('person/'. $id . '/edit');
        }

        
        $person = Person::findOrfail($id);
        return view('person.edit',compact('title','person'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $person = Person::findOrfail($id);
    	
        $person->id = $request->id;
        
        $person->name = $request->name;
        
        $person->age = $request->age;
        
        $person->country = $request->country;
        
        
        $person->save();

        return redirect('person');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/person/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$person = Person::findOrfail($id);
     	$person->delete();
        return URL::to('person');
    }
}
