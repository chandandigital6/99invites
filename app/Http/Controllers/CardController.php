<?php

namespace App\Http\Controllers;

use App\Http\Requests\CardRequest;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $card = Card::query();

        if (!empty($keyword)) {
            $card->where('title', 'like', "%$keyword%");
        }
        $cardData = $card->paginate(5);

        return view('card.index',compact('cardData'));
    }

    public function create(){
        return view('card.create');
    }

    public function store(CardRequest $request){
//        dd($request);
        $card=Card::create($request->all());
        $image = $request->file('image')->store('public/card');

        $card->image = str_replace('public/', '', $image);
        $card->save();
        return redirect()->route('card.index')->with('success', 'Card  created successfully.');
    }

    public function edit(Card $card){

        return view('card.edit',compact('card'));
    }

    public function update(Card $card , CardRequest $request){
        $cardData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/card');
            $cardData['image'] = str_replace('public/', '', $imagePath);
        }

        $card->update($cardData);

        return redirect()->route('card.index')->with('success', 'card item successfully updated');
    }


    public function delete(Card $card){
        $card->delete();
        return redirect()->route('card.index')->with('error','Successfully  card items deleted');

    }
    public function duplicate(Card $card){
        $productDuplicate=$card->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
