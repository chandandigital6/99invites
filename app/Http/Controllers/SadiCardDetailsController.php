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
        $sadiCardDetails = sadiCardDetails::with('sadiCard');

        if (!empty($keyword)) {
            $sadiCardDetails->where('mantra', 'like', "%$keyword%")
                ->orWhere('m_name', 'like', "%$keyword%")
                ->orWhere('f_name', 'like', "%$keyword%")
                ->orWhereHas('cardType', function ($query) use ($keyword) {
                    $query->where('title', 'like', "%$keyword%");
                });
        }

        $sadiCardDetailsData = $sadiCardDetails->paginate(5);
//dd($sadiCardDetailsData);
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
        $cardTypes=CardType::all();
        return view('sadiCardDetails.edit',compact('sadiCardDetails','cardTypes'));
    }

    public function update(sadiCardDetails $sadiCardDetails , SadiCardDetailsRequest $request){
        $sadiCardDetailsData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/sadiCardDetails');
            $sadiCardDetailsData['image'] = str_replace('public/', '', $imagePath);
        }

        $sadiCardDetails->update($sadiCardDetailsData);

        return redirect()->route('sadiCardDetails.index')->with('success', 'sadiCardDetails item successfully updated');
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
