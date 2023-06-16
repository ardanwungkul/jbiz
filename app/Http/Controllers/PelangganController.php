<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class PelangganController extends Controller
{
    public function index(Request $request, Pelanggan $pelanggan)
    {
        $data = Pelanggan::all();
        if ($request->ajax()) {

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row, Pelanggan $pelanggan, Domain $domain) {

                    $all = Domain::where('pelanggan_id', $row->id)->get()->first();
                    $hasil = $all ? $all->nama_domain : '-';

                    $btn = '
                    <div class="flex justify-center items-center gap-4">
                    
                    <a style="color: #0b9b01c0;" href="//wa.me/' . $row->no_hp . '/?text=Halo%20Kak%20' . $row->nama_pelanggan . '! Anda%20Memiliki%20Domain%20Yang%20Bernama ' . $hasil . '  " data-toggle="tooltip"  data-id="' . $row->no_hp . '" data-original-title="Wa" class="fa-brands fa-whatsapp fa-xl" title="Whatsapp" ></a>


                    <a  style="color: #171dd4c4;" href="/pelanggan/' . $row->id . '/edit/" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="m-3 editProduct fa-solid fa-lg fa-pen " title="Edit">
                     </a>
                    
                      <a style="color: #a80404d1    ;" title="Delete" href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="fa-regular fa-trash-can fa-xl deleteProduct"></a>
                  </div>
                  ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('master.pelanggan.index', compact('data'));
    }

    public function create()
    {
        $data = User::all();
        return view('master.pelanggan.create', compact('data'));
    }

    public function store(Request $request, Pelanggan $pelanggan)
    {

        $request->validate(
            [
                'nama_pelanggan' => 'required',
                'alamat' => 'required',
                'no_hp' => 'required|unique:pelanggans,no_hp',
                'keterangan_pelanggan' => 'required',
                'link_history' => 'required',
                'user_id' => 'required',
            ],
            [
                'no_hp.unique' => 'Nomor Hp telah digunakan .',
            ]

        );
        // dd($request);

        $pelanggan = new Pelanggan();
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->no_hp = $request->no_hp;
        $pelanggan->keterangan_pelanggan = $request->keterangan_pelanggan;
        $pelanggan->link_history = $request->link_history;
        $pelanggan->user_id = $request->user_id;
        $pelanggan->save();

        return redirect()->route('pelanggan.index')->with(['success' => 'Pelanggan berhasil ditambahkan']);
    }

    public function destroy($id)
    {

        Pelanggan::find($id)->delete();
        return response()->json(['success' => 'Pelanggan deleted successfully.']);
    }

    public function update(Request $request, Pelanggan $pelanggan)
    {
        $request->validate(
            [
                'nama_pelanggan' => 'required',
                'alamat' => 'required',
                'no_hp' => 'required|unique:pelanggans,no_hp',
                'keterangan_pelanggan' => 'required',
                'link_history' => 'required',
                'user_id' => 'required'

            ]
        );

        // dd($request);
        $pelanggan->fill($request->post())->save();

        return redirect()->back()->with('success', 'Pelanggan berhasil diupdate');
    }

    public function getAddEditRemoveColumn()
    {
        return view('datatables.collection.add-edit-remove-column');
    }

    public function rules()
    {
        return [
            'nama_pelanggan' => 'required|unique:pelanggans,nama_pelanggan',
        ];
    }

    public function edit(Pelanggan $pelanggan)
    {
        $data = User::all();
        return view('master.pelanggan.edit', compact('pelanggan', 'data'));
    }

    public function show(Pelanggan $pelanggan, Domain $domain)
    {
        $data = Domain::where('pelanggan_id', $pelanggan->id)->get();
        return view('master.pelanggan.show', compact('pelanggan', 'data', 'domain'));
    }
}
