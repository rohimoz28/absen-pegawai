<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\Absen;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::get();

        return view('pegawai.index', ['pegawai' => $pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->_validation($request);

        Pegawai::create($request->all());

        return redirect()->route('pegawai.index')
            ->with('message', 'New Pegawai has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        $nik = $pegawai->nik;
        $absen = Absen::where('nik_id', $nik)->get();

        return view('pegawai.show', compact('pegawai', 'absen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $this->_validation($request);

        $pegawai->update($request->all());

        return redirect()->route('pegawai.index')
            ->with('message', 'Pegawai updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();

        return redirect()->route('pegawai.index')
            ->with('message', 'Pegawai has been deleted');
    }

    private function _validation(request $request)
    {
        $request->validate(
            [
                'nik' => 'required',
                'full_name' => 'required',
                'email' => 'required',
                'mobile_number' => 'required'
            ],
            [
                'nik.required' => 'The NIK field is required.',
                // 'nik.unique' => 'The NIK is duplicated',
                'full_name.required' => 'The Name field is required.',
                'email.required' => 'The Email field is required.',
                'mobile_number.required' => 'The Mobile Number field is required.'
            ]
        );
    }
}
