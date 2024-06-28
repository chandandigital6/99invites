<?php

namespace App\Http\Controllers;

use App\Http\Requests\CardTypeRequest;
use App\Models\Card;
use App\Models\CardType;
use Illuminate\Http\Request;

class CardTypeController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $cardType = CardType::query();

        if (!empty($keyword)) {
            $cardType->where('title', 'like', "%$keyword%");
        }
        $cardTypeData = $cardType->paginate(5);

        return view('cardType.index',compact('cardTypeData'));
    }

    public function create(){
        $cards=Card::all();
        return view('cardType.create',compact('cards'));
    }

    public function store(CardTypeRequest $request){
//        dd($request);
        $cardType=CardType::create($request->all());
        $image = $request->file('image')->store('public/cardType');

        $cardType->image = str_replace('public/', '', $image);
        $cardType->save();
        return redirect()->route('cardType.index')->with('success', 'CardType  created successfully.');
    }

    public function edit(CardType $cardType){

        return view('cardType.edit',compact('cardType'));
    }

    public function update(CardType $cardType , CardTypeRequest $request){
        $cardTypeData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/card');
            $cardTypeData['image'] = str_replace('public/', '', $imagePath);
        }

        $cardType->update($cardTypeData);

        return redirect()->route('cardType.index')->with('success', 'card item successfully updated');
    }


    public function delete(CardType $cardType){
        $cardType->delete();
        return redirect()->route('cardType.index')->with('error','Successfully  card items deleted');

    }
    public function duplicate(CardType $cardType){
        $productDuplicate=$cardType->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
