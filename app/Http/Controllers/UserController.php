<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index(Request $request,)
    {
        $data = User::all();
        if ($request->ajax()) {

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '
                    <div class="flex justify-center items-center gap-4">
                    
                    <a  style="color: #171dd4c4;" href="/user/' . $row->id . '/edit/" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="m-3 editProduct fa-solid fa-lg fa-pen " title="Edit">
                    </a>
                    
                    <a style="color: #a80404d1    ;" title="Delete" href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="fa-regular fa-trash-can fa-xl deleteProduct"></a>
                  </div>
                  ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('master.user.index', compact('data'));
    }

    public function create()
    {
        return view('master.user.create');
    }
    public function edit(User $user)
    {
        return view('master.user.edit', compact('user'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));


        return redirect()->route('user.index');
        // return redirect(RouteServiceProvider::HOME);
    }
    public function update(Request $request, User $user)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
            ]
        );
        // $request->user()->save();
        $user->fill($request->post())->save();
        return redirect()->route('user.index');
    }
    public function destroy($id)
    {

        User::find($id)->delete();
        return response()->json(['success' => 'Pelanggan deleted successfully.']);
    }
}
