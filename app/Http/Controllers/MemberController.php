<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\User;
use App\Models\Pelanggan;
use App\Models\Nameserver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public const CREATE = '/member/create';
    public function index(User $user, Pelanggan $pelanggan, Request $request)
    {
        $auth = Auth::user()->id;
        $pelanggans = Pelanggan::with('user')->where('user_id', $auth)->get();
        $domains = count($pelanggans) > 0 ? Domain::where('pelanggan_id', $pelanggans[0]->id)->get() : collect([]);
        return view('master.member.member', compact('pelanggans', 'domains'));
    }
    public function create()
    {
        $data = User::all();
        return view('master.member.create', compact('data'));
    }
    public function store(Request $request, Pelanggan $pelanggan)
    {

        $request->validate(
            [
                'nama_pelanggan' => 'required|unique:pelanggans,nama_pelanggan',
                'alamat' => 'required',
                'no_hp' => 'required',
                'keterangan_pelanggan' => 'required',
                'link_history' => 'required',
                'user_id' => 'required',
            ],
            [
                'nama_pelanggan.unique' => 'Nama Pelanggan telah terdaftar dalam database.',
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

        return redirect()->route('member')->with(['success' => 'Pelanggan berhasil ditambahkan']);
    }
    public function show(Domain $domain, Pelanggan $pelanggan)
    {
        $data = Domain::with('pelanggan', 'nameserver')->get();
        return view('master.domain.show', compact('data', 'domain'));
    }
}
