<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Invoice;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class InvoiceController.
 *
 * @author  The scaffold-interface created at 2017-12-29 02:29:45am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - invoice';
        $invoices = Invoice::paginate(6);
        return view('invoice.index',compact('invoices','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - invoice';
        
        return view('invoice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice = new Invoice();

        
        $invoice->name = $request->name;

        
        $invoice->no = $request->no;

        
        
        $invoice->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new invoice has been created !!']);

        return redirect('invoice');
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
        $title = 'Show - invoice';

        if($request->ajax())
        {
            return URL::to('invoice/'.$id);
        }

        $invoice = Invoice::findOrfail($id);
        return view('invoice.show',compact('title','invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - invoice';
        if($request->ajax())
        {
            return URL::to('invoice/'. $id . '/edit');
        }

        
        $invoice = Invoice::findOrfail($id);
        return view('invoice.edit',compact('title','invoice'  ));
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
        $invoice = Invoice::findOrfail($id);
    	
        $invoice->name = $request->name;
        
        $invoice->no = $request->no;
        
        
        $invoice->save();

        return redirect('invoice');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/invoice/'. $id . '/delete');

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
     	$invoice = Invoice::findOrfail($id);
     	$invoice->delete();
        return URL::to('invoice');
    }
}
