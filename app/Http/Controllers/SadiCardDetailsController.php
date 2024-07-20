<?php

namespace App\Http\Controllers;

use App\Http\Requests\SadiCardDetailsRequest;
use App\Models\sadiCard;
use App\Models\sadiCardDetails;
use Illuminate\Http\Request;

class SadiCardDetailsController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $sadiCardDetailsQuery = sadiCardDetails::with('sadiCard')->get(); // Use query builder, not collection

        if (!empty($keyword)) {
            $sadiCardDetailsQuery->where(function($query) use ($keyword) {
                $query->where('haldi_title', 'like', "%$keyword%")
                    ->orWhere('haldi_msg', 'like', "%$keyword%")
                    ->orWhere('mehndi_title', 'like', "%$keyword%")
                    ->orWhere('mehndi_msg', 'like', "%$keyword%")
                    ->orWhere('sangeet_title', 'like', "%$keyword%")
                    ->orWhere('sangeet_msg', 'like', "%$keyword%")
                    ->orWhere('barat_title', 'like', "%$keyword%")
                    ->orWhere('barat_msg', 'like', "%$keyword%")
                    ->orWhere('vidai_title', 'like', "%$keyword%")
                    ->orWhere('vidai_msg', 'like', "%$keyword%")
                    ->orWhere('reception_title', 'like', "%$keyword%")
                    ->orWhere('reception_msg', 'like', "%$keyword%")
                    ->orWhere('child_msg', 'like', "%$keyword%")
                    ->orWhereHas('sadiCard', function ($query) use ($keyword) {
                        $query->where('m_name', 'like', "%$keyword%")
                            ->orWhere('f_name', 'like', "%$keyword%")
                            ->orWhereHas('cardType', function ($query) use ($keyword) {
                                $query->where('title', 'like', "%$keyword%");
                            });
                    });
            });
        }
        $sadiCardDetailsData = $sadiCardDetailsQuery;
        // Paginate the query result
//        $sadiCardDetailsData = $sadiCardDetailsQuery->paginate(5); // Adjust pagination as needed
        return view('sadiCardDetails.index', compact('sadiCardDetailsData'));
    }


    public function create(){
        $sadiCards=sadiCard::all();
//        dd($cardTypes);
        return view('sadiCardDetails.create',compact('sadiCards'));
    }

    public function store(SadiCardDetailsRequest $request)
    {

//        dd($request->all());
        $data = $request->all();

        // Array to handle multiple images
        $images = [
            'haldi_image', 'mehndi_image', 'sangeet_image',
            'barat_image', 'vidai_image', 'reception_image'

        ];

        foreach ($images as $image) {
            if ($request->hasFile($image)) {
                $imagePath = $request->file($image)->store('public/sadiCardDetails');
                $data[$image] = str_replace('public/', '', $imagePath);
            }
        }

        $birthdayCard = sadiCardDetails::create($data);

        return redirect()->route('sadiCardDetails.index')->with('success', 'sadiCardDetails created successfully.');
    }

    public function edit(sadiCardDetails $sadiCardDetails){
        $sadiCards=sadiCard::all();
        return view('sadiCardDetails.edit',compact('sadiCardDetails','sadiCards'));
    }

    public function update(sadiCardDetails $sadiCardDetails, SadiCardDetailsRequest $request)
    {
        $sadiCardDetailsData = $request->all();

        // Array to handle multiple images
        $images = [
            'haldi_image', 'mehndi_image', 'sangeet_image',
            'barat_image', 'vidai_image', 'reception_image'
        ];

        foreach ($images as $image) {
            if ($request->hasFile($image)) {
                $imagePath = $request->file($image)->store('public/sadiCardDetails');
                $sadiCardDetailsData[$image] = str_replace('public/', '', $imagePath);
            }
        }

        $sadiCardDetails->update($sadiCardDetailsData);

        return redirect()->route('sadiCardDetails.index')->with('success', 'Sadi Card Details successfully updated');
    }

    public function show(sadiCardDetails $sadiCardDetails){

        return view('sadiCardDetails.show',compact('sadiCardDetails'));
    }

    public function delete(sadiCardDetails $sadiCardDetails){
        $sadiCardDetails->delete();
        return redirect()->route('sadiCardDetails.index')->with('error','Successfully  sadiCardDetails items deleted');

    }
    public function duplicate(sadiCardDetails $sadiCardDetails){
        $productDuplicate=$sadiCardDetails->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
