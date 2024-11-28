<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = School::all();

        if ($request->keyword != null) {
            $data = school::where('name', 'like', '%' . $request->keyword . '%')->get();
        }
        return view('BackOffice.pages.school.index', [
            'page_title' => 'School',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = null;
        return view('BackOffice.pages.school.create', [
            'page_title' => 'Tambah',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formdata = [
            'name' => $request->name
        ];
        School::create($formdata);

        return redirect()->route('admin.school.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = School::find($id);
        return view('BackOffice.pages.school.form', [
            'page_title' => 'edit',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formdata = [
            'name' => $request->name
        ];
        School::whereId($id)->update($formdata);

        return redirect()->route('admin.school.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            school::whereid($id)->delete();

            return response()->json([
                'succes' => true,
                'massage' => 'Hapus Berhasil',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'succes' => false,
                'massage' => 'Hapus Berhasil :' . $th->getMessage(),
            ], 500);
        } catch (\Exception $th) {
            return response()->json([
                'succes' => false,
                'massage' => 'Hapus Berhasil :' . $th->getMessage(),
            ], 500);
        }
        // $school = School::findOrFail($id);
        // $school->delete();
        // return redirect()->route('admin.school.index')->with('success', 'Data berhasil dihapus.');
    }
}
