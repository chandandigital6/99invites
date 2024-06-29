<?php

namespace App\Http\Controllers;

use App\Http\Requests\BirthdayCardRequest;
use App\Models\BirthdayCard;
use App\Models\CardType;
use Illuminate\Http\Request;

class BirthDayController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $birthDayCard = BirthdayCard::query();

        if (!empty($keyword)) {
            $birthDayCard->where('title', 'like', "%$keyword%");
        }
        $birthDayCardData = $birthDayCard->paginate(5);

        return view('birthDayCard.index',compact('birthDayCardData'));
    }

    public function create(){
        $cardTypes=CardType::all();
        return view('birthDayCard.create',compact('cardTypes'));
    }

    public function store(BirthdayCardRequest $request)
    {
        $data = $request->all();

        // Array to handle multiple images
        $images = ['image', 'other_image'];

        foreach ($images as $image) {
            if ($request->hasFile($image)) {
                $imagePath = $request->file($image)->store('public/birthDayCard');
                $data[$image] = str_replace('public/', '', $imagePath);
            }
        }

        $birthdayCard = BirthdayCard::create($data);

        return redirect()->route('birthDayCard.index')->with('success', 'BirthdayCard created successfully.');
    }

    public function edit(BirthdayCard $birthDayCard){
        $cardTypes=CardType::all();
        return view('birthDayCard.edit',compact('birthDayCard','cardTypes'));
    }

    public function update(BirthdayCard $birthDayCard , BirthdayCardRequest $request){
        $birthDayCardData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/birthDayCard');
            $birthDayCardData['image'] = str_replace('public/', '', $imagePath);
        }

        $birthDayCard->update($birthDayCardData);

        return redirect()->route('birthDayCard.index')->with('success', 'birthDayCard item successfully updated');
    }


    public function delete(BirthdayCard $birthDayCard){
        $birthDayCard->delete();
        return redirect()->route('birthDayCard.index')->with('error','Successfully  birthDayCard items deleted');

    }
    public function duplicate(BirthdayCard $birthDayCard){
        $productDuplicate=$birthDayCard->replicate();
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
