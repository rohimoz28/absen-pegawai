<?php

namespace App\Http\Controllers;

use App\Absen;
use App\Pegawai;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // if (request('keyword')) {
        //     $query = where('full_name', 'Like', '%' . request('keyword') . '%');
        // } else {
        //     $query = DB::table('absensi');
        // }
        // $keyword = $request->keyword;
        // dd($keyword);
        $keyword = $request->input('keyword');
        if ($request->has('keyword')) {
            $absen = DB::table('absensi')
                ->join('pegawai', 'pegawai.nik', '=', 'absensi.nik_id')
                ->select('absensi.*', 'pegawai.full_name')->where('full_name', 'Like', '%' . $keyword . '%')->paginate(5);
        } else {
            $absen = DB::table('absensi')
                ->join('pegawai', 'pegawai.nik', '=', 'absensi.nik_id')
                ->select('absensi.*', 'pegawai.full_name')->orderBy('date_time', 'desc')->paginate(5);
        }


        return view('absen.index', ['absen' => $absen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai = Pegawai::get();
        $timeNow = Carbon::now()->format('H.i.s');

        return view('absen.create', ['pegawai' => $pegawai, 'time' => $timeNow]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $absen = new Absen;
        $current_date = Carbon::now()->toDateTimeString();
        $current_time = Carbon::now()->toTimeString();

        $request->validate([
            'nik' => 'required',
        ]);

        $absen->nik_id = $request->nik;
        $absen->date_time = $current_date;
        $absen->in_out = $current_time;

        $absen->save();
        return redirect()->route('absen.index')
            ->with('message', 'Absen berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show(Absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit(Absen $absen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absen $absen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absen $absen)
    {
        //
    }
}
