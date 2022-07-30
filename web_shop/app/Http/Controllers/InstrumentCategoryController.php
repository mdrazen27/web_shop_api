<?php

namespace App\Http\Controllers;

use App\Models\InstrumentCategory;
use App\Http\Requests\StoreInstrumentCategoryRequest;
use App\Http\Requests\UpdateInstrumentCategoryRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InstrumentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        $bestRatedInstruments = (DB::select('Select avg(instrument_grades.grade) as average_rate,instruments.*,instrument_grades.instruments_id
                            from instrument_grades join instruments
                            where instrument_grades.instruments_id = instruments.id
                            group by instrument_grades.instruments_id
                            order by average_rate desc
                            limit 4
                            '));

        return response()->json([
            'success' => true,
            'message' => 'All categories received!',
            'data' => InstrumentCategory::all(['id','photo','name']),
            'bestRatedInstruments' => $bestRatedInstruments,
        ], 200);
    }

    public function categoryWithInstruments(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'All categories received!',
            'data' => InstrumentCategory::with('hasManyInstruments')->get(['id','photo','name']),
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInstrumentCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInstrumentCategoryRequest $request): JsonResponse
    {
        //
        $new_category = new InstrumentCategory();
        $new_category->name = $request->name;
        $new_category->photo = $request->photo;
        $new_category->create_user_id = Auth::id();
        $new_category->save();

        return response()->json([
            'success' => true,
            'message' => 'All types received!',
            'data' => $new_category,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InstrumentCategory  $instrumentCategory
     * @return \Illuminate\Http\Response
     */
    public function show(InstrumentCategory $instrumentCategory): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Document category received!',
            'data' => $instrumentCategory::with('hasManyInstruments')->where('id',$instrumentCategory->id)->get(['name','photo','id']),
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInstrumentCategoryRequest  $request
     * @param  \App\Models\InstrumentCategory  $instrumentCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInstrumentCategoryRequest $request, InstrumentCategory $instrumentCategory): JsonResponse
    {
        if($request->photo){
            $instrumentCategory->photo = $request->photo;
        }

        if($request->name){
            $instrumentCategory->name = $request->name;
        }
        $instrumentCategory->save();

         return response()->json([
        'success' => true,
        'message' => 'Instrument category updated!',
        'data' => $instrumentCategory,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstrumentCategory  $instrumentCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstrumentCategory $instrumentCategory): JsonResponse
    {
        //
        $instrumentCategory -> delete();
        return response()->json([
            'success' => true,
            'message' => 'Instrument category deleted!',
            'data' => $instrumentCategory,
        ], 200);
    }
}
