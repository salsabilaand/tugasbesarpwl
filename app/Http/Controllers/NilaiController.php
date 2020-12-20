<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Score;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use PDF;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $score = DB::table('scores')
        ->join('subjects','scores.subject_id', '=', 'subjects.id')
        ->select('subjects.nama', 'scores.nilai')
        ->get();
        return view('FP.akademik2', ['score' => $score]);
    }

    public function cetak_pdf(){
        $score = DB::table('scores')
        ->join('subjects','scores.subject_id', '=', 'subjects.id')
        ->select('subjects.nama', 'scores.nilai')
        ->get();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadview('FP.nilai_pdf',['score'=>$score]);
        return $pdf->stream();
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
