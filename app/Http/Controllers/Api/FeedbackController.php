<?php

namespace App\Http\Controllers\Api;

use App\Models\Offer;
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        return response()->json(Offer::find($id)->feedback, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    /*public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $id)
    {
        $feedback = Feedback::create([
            'offer_id' => (int)$id,
            'news' => $request->news,
        ]);
        return response()->json($feedback, 200); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $offerId, string $newsId)
    {
        return response()->json(Offer::find($offerId)->feedback[(int)$newsId - 1],200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    /*public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $offerId, string $newsId)
    {
        $feedback = Offer::find($offerId)->feedback[(int)$newsId - 1];

        $feedback->update([
            'offers_id' => $request-> offers_id,
            'news' => $request->news,
        ]);
        return response()->json($feedback, 200); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $offerId, string $newsId)
    {
        Offer::find($offerId)->feedback[(int)$newsId - 1]->delete();
    }
}