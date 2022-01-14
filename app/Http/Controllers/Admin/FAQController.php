<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = FAQ::all();
        return view('Admin.Faqs.faqs', ['faqs' => $faqs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = new FAQ;
        $data->question = $request->input('question');
        $data->answer = $request->input('answer');
        $data->position = $request->input('position');
        $data->status = $request->input('status');
        $data->save();

        return redirect()->intended('admin/faq')->with('success', 'FAQ Added Successfully!');
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
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function show(FAQ $fAQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function edit(FAQ $fAQ, $id)
    {
        $faq = FAQ::find($id);
        return view('Admin.Faqs.edit_faq', [
            'faq' => $faq,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FAQ $fAQ, $id)
    {
        $data = FAQ::find($id);
        $data->question = $request->input('question');
        $data->answer = $request->input('answer');
        $data->position = $request->input('position');
        $data->status = $request->input('status');
        $data->save();

        return redirect()->route('admin_faq_edit', ['id'=>$id])->with('success', 'FAQ Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy(FAQ $fAQ, $id)
    {
        DB::table('f_a_q_s')
            ->where('id', $id)
            ->delete();
        return redirect()->intended('admin/faq')->with('success', 'FAQ Deleted Successfully!');
    }

    public function add(Request $request)
    {
        return view('Admin.Faqs.add_faq');
    }
}
