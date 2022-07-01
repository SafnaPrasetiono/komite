<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\members;
use App\Models\members_address;
use App\Models\members_categories;
use App\Models\members_documents;
use App\Models\members_permission;
use App\Models\MembersAddress;
use App\Models\MembersCategories;
use App\Models\MembersDocuments;
use App\Models\MembersPermissions;
use Illuminate\Http\Request;

class memberAdmin extends Controller
{
    public function index()
    {
        return view('admin.members.index');
    }
    public function detail($id)
    {
        $data = members::find($id);
        $address = MembersAddress::where('members_id', $id)->first();
        $ctg = MembersCategories::where('members_id', $id)->first();
        $doc = MembersDocuments::where('members_id', $id)->first();
        $permission = MembersPermissions::where('members_id', $id)->first();
        return view('admin.members.detail', [
            'data' => $data,
            'address' => $address,
            'ctg' => $ctg,
            'doc' => $doc,
            'ps' => $permission
        ]);
    }


    // jenis usaha pages
    public function category()
    {
        return view('admin.categories.index');
    }

    public function categorySub($id)
    {
        $ctg = categories::find($id);
        return view('admin.categories.detail', ['ctg' => $ctg]);
    }
}
