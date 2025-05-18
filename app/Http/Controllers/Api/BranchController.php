<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BranchResource;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function get($id = null)
{
    if ($id) {
        $branch = Branch::where('status','visible')->find($id);
        if (!$branch) {
            return response()->json(['message' => 'Branch not found'], 404);
        }
        return new BranchResource($branch);
    }

    $branches = Branch::where('status','visible')->get();
    return BranchResource::collection($branches);
}

}
