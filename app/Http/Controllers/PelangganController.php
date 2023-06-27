<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

use function PHPUnit\Framework\fileExists;

class PelangganController extends Controller
{
    public function index(Request $request, Pelanggan $pelanggan)
    {
        $data = Pelanggan::with('user')->get();
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
                // 'image' => 'nullable',
            ],
            [
                'no_hp.unique' => 'Nomor Hp telah digunakan .',
            ]

        );

        $charactersToRemove = ['0', '62'];
        $string = ltrim($request->no_hp, implode('', $charactersToRemove));

        // dd($request);

        $pelanggan = new Pelanggan();
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->no_hp = '62' . $string;
        $pelanggan->keterangan_pelanggan = $request->keterangan_pelanggan;
        $pelanggan->link_history = $request->link_history;
        $pelanggan->user_id = $request->user_id;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $nama_file = date('YmdHi') . $file->getClientOriginalName();
            $file->move('storage/images/fotoProfil', $nama_file);
            $pelanggan->image = $nama_file;
        } else {
            $pelanggan->image = 'default_image.jpg';
        }
        $pelanggan->save();

        return redirect()->route('pelanggan.index')->with(['success' => 'Pelanggan berhasil ditambahkan']);
    }
    public function store2(Request $request, Pelanggan $pelanggan)
    {

        $request->validate(
            [
                'nama_pelanggan' => 'required',
                'alamat' => 'required',
                'no_hp' => 'required|unique:pelanggans,no_hp',
                'keterangan_pelanggan' => 'required',
                'link_history' => 'required',
                'user_id' => 'required',
                // 'image' => 'nullable',
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
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $nama_file = date('YmdHi') . $file->getClientOriginalName();
            $file->move('storage/images/fotoProfil', $nama_file);
            $pelanggan->image = $nama_file;
        } else {
            $pelanggan->image = 'default_image.jpg';
        }
        $pelanggan->save();

        return back()->with(['success' => 'Pelanggan berhasil ditambahkan']);
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);
        $file_path = public_path('storage/images/fotoProfil/' . $pelanggan->image);
        if (file_exists($file_path)) {
            if ($pelanggan->image !== 'default_image.jpg') {
                unlink($file_path);
            }
        }

        Pelanggan::find($id)->delete();
        return response()->json(['success' => 'Pelanggan deleted successfully.']);
    }

    public function update(Request $request, Pelanggan $pelanggan)
    {


        $request->validate(
            [
                'nama_pelanggan' => 'required',
                'alamat' => 'required',
                'no_hp' => 'required',
                'keterangan_pelanggan' => 'required',
                'link_history' => 'required',
                'user_id' => 'required'
            ]
        );
        $file_path = public_path('storage/images/fotoProfil/' . $pelanggan->image);
        if ($request->hasFile('image')) {
            if ($pelanggan->image !== 'default_image.jpg') {
                unlink($file_path);
            }
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $nama_file = date('YmdHi') . $file->getClientOriginalName();
            $file->move('storage/images/fotoProfil', $nama_file);
            $pelanggan->image = $nama_file;
        }

        // dd($request);
        $pelanggan->fill($request->post())->save();

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil diupdate');
    }

    public function getAddEditRemoveColumn()
    {
        return view('datatables.collection.add-edit-remove-column');
    }

    public function edit(Pelanggan $pelanggan)
    {
        $data = User::all();
        $pelanggans = Pelanggan::all();
        return view('master.pelanggan.edit', compact('pelanggan', 'data', 'pelanggans'));
    }

    public function show(Pelanggan $pelanggan, Domain $domain)
    {
        $data = Domain::where('pelanggan_id', $pelanggan->id)->get();
        return view('master.pelanggan.show', compact('pelanggan', 'data', 'domain'));
    }
}
