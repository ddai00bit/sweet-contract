<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use niklasravnsborg\LaravelPdf\Facades\Pdf;
use Illuminate\Support\Facades\Session;

class PDFController extends Controller
{

    public function login()
    {
        return view('form');
    }
    public function index()
    {
        $data = [
            'foo' => 'bar'
        ];
        $pdf = PDF::loadView('demo_pdf', $data);
        return $pdf->stream('document.pdf');
    }

    public function export_pdf()
    {
        $info = Session::get('info');
        $data['info'] = $info;
        $pdf = PDF::loadView('pdf', $data);

        return $pdf->stream('hop-dong.pdf');
    }

    public function form()
    {
        return view('form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
