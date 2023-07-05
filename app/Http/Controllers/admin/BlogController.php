<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    // index/view
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Blog::select('*')->orderBy('id', 'desc');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = 'gh';
                    // $deleteUrl = route('delete-category', $row->id);
                    $actionBtn = '<td class="tb-tnx-action">
                                        <div class="dropdown">
                                            <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs" style="">
                                                <ul class="link-list-plain">
                                                    <li><a href="#" onclick="confirmDelete()">View</a></li>
                                                    <li><a href="' . $editUrl . '">Edit</a></li>
                                                    <li><a href="' . $editUrl . '" >Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        // $categories = Category::all();
        return view('admin.blogs');
    }
}
