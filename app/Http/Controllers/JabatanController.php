<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use Hash;
use Alert;
use DataTables;
use JeroenNoten\LaravelAdminLte\View\Components\Tool\Datatable;

class JabatanController extends Controller
{
    public function index()
    {
        return view('jabatan.index');
    }

    public function getJabatan(Request $request)
    {
        if($request->ajax()) {
            $jabatan = Jabatan::all();
            return Datatables::of($jabatan)
            ->editColumn('aksi', function($jabatan){
                return view('partials._action',[
                    'model' => $jabatan,
                    'form_url' => route('jabatan.destroy', $jabatan->id),
                    'edit_url' => route('jabatan.edit', $jabatan->id),
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['aksi'])
            ->make(true);
        }
    }

    public function create()
    {
        return view('jabatan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $jabatan = Jabatan::create($request->all());

        toast('Berhasil Menambahkan Data Pengguna Baru','success');
        return redirect()->route('jabatan.index');
        // Alert::success('Sukses','Berhasil Menambahkan Data Pengguna Baru');
    }

    public function edit(Jabatan $jabatan)
    {

        return view('jabatan.edit', compact('jabatan'));

    }

    public function update(Request $request, Jabatan $jabatan)
    {

        $jabatan->update($request->all());

            toast('Berhasil Menambahkan Data Pengguna Baru','success');
            return redirect()->route('jabatan.index');

    }
    
    public function destroy(Jabatan $jabatan)
    {

        $jabatan->destroy($jabatan->id);

        toast('Berhasil Menghapus Data Pengguna','success');
        return redirect()->route('jabatan.index');

    }
}
