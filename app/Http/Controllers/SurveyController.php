<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('survey');
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

        $this->validate(request(),[
            't1' => 'required|in:1,0',
            't2' => 'required|in:1,0',
            't3' => 'required|in:1,0',
            't4' => 'required|in:1,0',
            't5' => 'required|in:1,0',
            't6' => 'required|in:1,0',
            't7' => 'required|in:1,0',
            't8' => 'required|in:1,0',
            't9' => 'required|in:1,0',
            't10' => 'required|in:1,0',
            't11' => 'required|in:1,0',
            't12' => 'required|in:1,0',
            't13' => 'required|in:1,0',
            't14' => 'required|in:1,0',
            't15' => 'required|in:1,0',
            't16' => 'required|in:1,0',
            't17' => 'required|in:1,0',
            't18' => 'required|in:1,0',
            't19' => 'required|in:1,0',
            't20' => 'required|in:1,0',
            't21' => 'required|in:1,0',
        ]);

        $t1 = $request->t1;
        $t2 = $request->t2;
        $t3 = $request->t3;
        $t4 = $request->t4;
        $t5 = $request->t5;
        $t6 = $request->t6;
        $t6 = $request->t6;
        $t7 = $request->t7;
        $t8 = $request->t8;
        $t9 = $request->t9;
        $t10 = $request->t10;
        $t11 = $request->t11;
        $t12 = $request->t12;
        $t13 = $request->t13;
        $t14 = $request->t14;
        $t15 = $request->t15;
        $t16 = $request->t16;
        $t17 = $request->t17;
        $t18 = $request->t18;
        $t19 = $request->t19;
        $t20 = $request->t20;
        $t21 = $request->t21;

        $t = $t1 + $t2 + $t3 + $t4 + $t5 + $t6 + $t7 + $t8 + $t9 + $t10 + $t11 + $t12 + $t13 + $t14 + $t15 + $t16 + $t17 + $t18 + $t19 + $t20 + $t21;

        $survey = new Survey();

        $survey->ya=$t;
        $survey->tidak=21-$t;

        if($t<8){
            $survey->resiko="Rendah";
        }
        elseif($t>7 & $t<15){
            $survey->resiko="Sedang";
        }
        elseif($t>14){
            $survey->resiko="Tinggi";
        }
        $survey->save();
        return view('hasil',compact('survey'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function show(Survey $survey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function edit(Survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {
        //
    }
}
