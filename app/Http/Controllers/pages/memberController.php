<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Mail\ValidateMembers;
use App\Models\categories;
use App\Models\categories_sub;
use App\Models\District;
use App\Models\Members;
use App\Models\MembersAddress;
use App\Models\MembersCategories;
use App\Models\MembersDocuments;
use App\Models\MembersPermissions;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class memberController extends Controller
{
    // show index
    public function index()
    {
        return view('pages.member.index');
    }

    public function register()
    {
        return view('pages.member.register');
    }
    public function store(Request $request)
    {
        // dd($request->ud);
        // dd($request);
        $data = array();

        if($request->ud){
            array_push($data, 'UD');
        }
        if($request->siup){
            array_push($data, 'SIUP');
        }
        if($request->halal){
            array_push($data, 'HALAL');
        }
        if($request->bpom){
            array_push($data, 'BPOM');
        }
        if($request->pirt){
            array_push($data, 'PIRT');
        }
        if($request->nib){
            array_push($data, 'NIB');
        }
        if($request->sku){
            array_push($data, 'SKU');
        }
        if($request->izin){
            array_push($data, 'IZIN');
        }

        $validate = Validator::make($request->all(), [
            'username'      => 'required',
            'email'         => 'required',
            'born'          => 'required',
            'gender'        => 'required',
            'phone'         => 'required',

            'province_id'   => 'required',
            'city_id'       => 'required',
            'district_id'   => 'required',
            'village_id'    => 'required',
            'postal_code'   => 'required',
            'country'       => 'required',
            'address'       => 'required',

            'typeBusiness'       => 'required',
            'class'              => 'required',
            // 'description'        => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withInput()->withErrors($validate);
        } else {
            $provinces = Province::find($request->province_id);
            $cities = Regency::find($request->city_id);
            $districts = District::find($request->district_id);
            $villages = Village::find($request->village_id);
            $categories = categories::find($request->categories_id);

            $members = new Members();
            $members->nik = $request->nik;
            $members->username = $request->username;
            $members->email = $request->email;
            $members->born = $request->born;
            $members->gender = $request->gender;
            $members->phone = $request->phone;

            $members->typeBusiness = $request->typeBusiness;
            $members->class = $request->class;
            $members->description = $request->description;
            $members->permission = json_encode($data);

            $members->country = $request->country;
            $members->province = $provinces->name;
            $members->city = $cities->name;
            $members->district = $districts->name;
            $members->village = $villages->name;
            $members->postal_code = $request->postal_code;
            $members->address = $request->address;
            $members->id_province = $provinces->id;
            $members->id_regency = $cities->id;
            $members->id_district = $districts->id;
            $members->id_village = $villages->id;

            $members->validate = 0;
            $members->save();

            // code members & images members
            $toCode = $members->id_members . date('YmdHis');
            $haseCode = md5($toCode);
            $key = substr(strtoupper($haseCode), 0, 12);
            $code = 'KOP' . '-' . $key;

            $updateMembers = Members::find($members->id_members);
            $updateMembers->code = $code;
            $updateMembers->save();

            $permission = new MembersPermissions();
            $permission->ud = $request->ud;
            $permission->siup = $request->siup;
            $permission->halal = $request->halal;
            $permission->bpom = $request->bpom;
            $permission->pirt = $request->pirt;
            $permission->nib = $request->nib;
            $permission->sku = $request->sku;
            $permission->izin = $request->izin;
            $permission->members_id = $members->id_members;
            $permission->save();

            // Mail::to($request->email)->send(new ValidateMembers($updateMembers));
            try {
                return redirect()->route('member.register')->with('success', 'Pendaftaran kamu berhasil tunggu validasi data. Cek email email anda secara berkala!.');
            } catch (\Throwable $th) {
                //throw $th;
                return redirect()->route('member.register')->with('error', 'Oops, maaf database desang sibuk, ulangi nanti!');
            }
        }
    }
}
