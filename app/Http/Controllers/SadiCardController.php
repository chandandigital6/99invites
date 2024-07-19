<?php

namespace App\Http\Controllers;

use App\Http\Requests\SadiCardRequest;
use App\Models\CardType;
use App\Models\sadiCard;
use Illuminate\Http\Request;

class SadiCardController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $sadiCard = SadiCard::with('cardType');

        if (!empty($keyword)) {
            $sadiCard->where('mantra', 'like', "%$keyword%")
                ->orWhere('m_name', 'like', "%$keyword%")
                ->orWhere('f_name', 'like', "%$keyword%")
                ->orWhereHas('cardType', function ($query) use ($keyword) {
                    $query->where('title', 'like', "%$keyword%");
                });
        }

        $sadiCardData = $sadiCard->paginate(5);
//dd($sadiCardData);
        return view('sadiCard.index', compact('sadiCardData'));
    }


    public function create(){
        $cardTypes=CardType::all();
//        dd($cardTypes);
        return view('sadiCard.create',compact('cardTypes'));
    }

    public function store(SadiCardRequest $request)
    {
//        dd($request->all());
        $data = $request->all();

        // Array to handle multiple images
        $images = ['image', 'other_image'];

        foreach ($images as $image) {
            if ($request->hasFile($image)) {
                $imagePath = $request->file($image)->store('public/sadiCard');
                $data[$image] = str_replace('public/', '', $imagePath);
            }
        }

        $birthdayCard = sadiCard::create($data);

        return redirect()->route('sadiCard.index')->with('success', 'sadiCard created successfully.');
    }

    public function edit(sadiCard $sadiCard){
        $cardTypes=CardType::all();
        return view('sadiCard.edit',compact('sadiCard','cardTypes'));
    }

    public function update(sadiCard $sadiCard , SadiCardRequest $request){
        $sadiCardData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/sadiCard');
            $sadiCardData['image'] = str_replace('public/', '', $imagePath);
        }

        $sadiCard->update($sadiCardData);

        return redirect()->route('sadiCard.index')->with('success', 'sadiCard item successfully updated');
    }


    public function delete(sadiCard $sadiCard){
        $sadiCard->delete();
        return redirect()->route('sadiCard.index')->with('error','Successfully  sadiCard items deleted');

    }
    public function duplicate(sadiCard $sadiCard){
        $productDuplicate=$sadiCard->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }


    public function showQr($cardType)
    {

        $card = CardType::findOrFail($cardType);
        $qrCode = QrCode::size(200)->generate(route('cardType.showQr', ['cardType' => $cardType]));

        return view('qr_code', compact('card', 'qrCode'));
    }
}
