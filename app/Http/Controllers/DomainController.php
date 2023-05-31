<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Nameserver;
use App\Models\Pelanggan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DomainController extends Controller
{
    public function index(Request $request, Domain $domain)
    {
        $today = Carbon::today();
        $expirationDate = Carbon::parse($domain->tanggal_expired);
        $data = Domain::with('pelanggan')->get();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '
                    <div class="flex justify-center items-center gap-4">

                    <a  style="color: #171dd4c4;" href="/domain/' . $row->id . '/edit/" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="m-3 editProduct fa-solid fa-lg fa-pen ">
                    </a>
                    
                    <a style="color: #a80404d1;" href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="fa-regular fa-trash-can fa-xl deleteProduct">
                    </a>
                  </div>
                  ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('master.domain.index', compact('data', 'domain', 'expirationDate', 'today'));
    }

    public function create(Pelanggan $pelanggan, Nameserver $nameserver)
    {
        $data = Pelanggan::all();
        $ns = Nameserver::all();
        return view('master.domain.create', compact('data', 'ns'));
    }

    public function store(Request $request, Domain $domain)
    {

        $request->validate(
            [
                'nama_domain' => 'required|unique:domains,nama_domain',
                'epp_code' => 'required|unique:domains,epp_code',
                'keterangan_domain' => 'required',
                'lokasi_domain' => 'required',
                'tanggal_mulai' => 'required',
                'tanggal_expired' => 'required',
                'status_domain' => 'required',
                'hosting' => 'required',
                'kapasitas_hosting' => 'required',
                'tanggal_hosting' => 'required',
                'lokasi_hosting' => 'required',
                'paket_website' => 'required',
                'jumlah_email' => 'required',
                'pelanggan_id' => 'required',
                'nameserver_id' => 'required',
            ],
            [
                'epp_code.unique' => 'Code telah digunakan.',
                'nama_domain.unique' => 'Domain telah terdaftar dalam database.',
            ]

        );

        $domain = new Domain();
        $domain->nama_domain = $request->nama_domain;
        $domain->epp_code = $request->epp_code;
        $domain->keterangan_domain = $request->keterangan_domain;
        $domain->lokasi_domain = $request->lokasi_domain;
        $domain->tanggal_mulai = $request->tanggal_mulai;
        $domain->tanggal_expired = $request->tanggal_expired;
        $domain->status_domain = $request->status_domain;
        $domain->hosting = $request->hosting;
        $domain->kapasitas_hosting = $request->kapasitas_hosting;
        $domain->tanggal_hosting = $request->tanggal_hosting;
        $domain->lokasi_hosting = $request->lokasi_hosting;
        $domain->paket_website = $request->paket_website;
        $domain->jumlah_email = $request->jumlah_email;
        $domain->pelanggan_id = $request->pelanggan_id;
        $domain->nameserver_id = $request->nameserver_id;
        $domain->save();

        return redirect()->route('domain.index')->with(['success' => 'Domain berhasil ditambahkan']);
    }

    public function destroy($id)
    {

        Domain::find($id)->delete();
        return response()->json(['success' => 'Domain deleted successfully.']);
    }

    public function update(Request $request, Domain $domain)
    {
        $request->validate(
            [
                'nama_domain' => 'required',
                'epp_code' => 'required',
                'keterangan_domain' => 'required',
                'lokasi_domain' => 'required',
                'tanggal_mulai' => 'required',
                'tanggal_expired' => 'required',
                'status_domain' => 'required',
                'hosting' => 'required',
                'kapasitas_hosting' => 'required',
                'tanggal_hosting' => 'required',
                'lokasi_hosting' => 'required',
                'paket_website' => 'required',
                'jumlah_email' => 'required',
                'pelanggan_id' => 'required',
            ]
        );

        // dd($request->domain);
        $domain->fill($request->post())->save();

        return redirect()->route('domain.index')->with(['success' => 'Domain berhasil di update']);
    }

    public function edit(Domain $domain)
    {
        $data = Pelanggan::all();
        return view('master.domain.edit', compact('data', 'domain'));
    }

    public function show(Domain $domain)
    {
        $today = Carbon::today();
        $expirationDate = Carbon::parse($domain->tanggal_expired);

        $data = Domain::with('pelanggan', 'nameserver')->get();
        return view('master.domain.show', compact('data', 'domain', 'today', 'expirationDate'));
    }

    public function getAddEditRemoveColumn()
    {
        return view('datatables.collection.add-edit-remove-column');
    }
    public function rules()
    {
        return [
            'epp_code' => 'required|unique:domains,epp_code',
            'nama_domain' => 'required|unique:domains,nama_domain',
        ];
    }
}
