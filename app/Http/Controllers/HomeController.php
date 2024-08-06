<?php

namespace App\Http\Controllers;


use App\Models\Banner;
use App\Models\BirthdayCard;
use App\Models\Card;
use App\Models\CardType;
use Illuminate\Http\Request;
use function Termwind\renderUsing;

class HomeController extends Controller
{
    public function index()
    {
        $banners=Banner::all();
        $cards=Card::all();
        return view('index',compact('banners','cards'));
    }

    public function showCardType($card)
    {
//        $cardTypes = Card::with('cardTypes')->findOrFail($card->id);
//        dd($cardTypes);
////        $cardTypes = CardType::where('card_id', $card->id)->with('card')->get();
        $card = Card::findOrFail($card); // Find the Card by its ID
        $cardTypes = $card->cardTypes; // Assuming 'cardTypes' is the relationship name in Card model
//      dd($cardTypes);
        // Optionally, you can eager load 'card' relationship for each CardType
        // $cardTypes = $card->cardTypes()->with('card')->get();

        // dd($cardTypes); // Uncomment for debugging to see fetched data

        return view('cardType', compact('cardTypes'));

//        return view('cardType', compact('cardTypes'));
    }

    public function show($cardType)
    {
        // Find the specific CardType by its ID and eager load related data
        $card = CardType::with(['birthdayCards', 'sadiCard.sadiCardDetails'])->findOrFail($cardType);

        // Get the related BirthdayCard instances
        $birthDay = $card->birthdayCards;

        // Get the related sadiCard instances
        $sadiCard = $card->sadiCard;
//         dd($sadiCard);
        // Prepare the data to pass to the view
        $viewData = compact('birthDay', 'card', 'sadiCard');

        // Determine which view to render based on the card's page attribute
        switch ($card->page) {
            case 'card_1':
                return view('card_4', $viewData);
            case 'card_2':
                return view('card_2', $viewData);
            case 'card_3':
                return view('card_3', $viewData);
            case 'card_4':
                return view('card_4', $viewData);
            case 'card_5':
                return view('card_5', $viewData);
            default:
                return response("No pages", 404);
        }
    }



//    public function show($cardType)
//    {
//        $card = CardType::findOrFail($cardType); // Use findOrFail to handle non-existent IDs
//        $birthDay = $card->birthdayCards; // Get the related BirthdayCard instances
//        $sadiCard=$card->sadiCard;
//
//
//        if ($card->page == 'card_1') {
//            return view('card_4', compact('birthDay', 'card'));
//        } elseif ($card->page == 'card_2') {
//            return view('card_2', compact('birthDay', 'card'));
//        } elseif ($card->page == 'card_3') {
//            return view('card_3', compact('birthDay', 'card'));
//        } else {
//            return response("No pages", 404);
//        }
//    }




    public function card_1()
    {
        return view('card_1');
    }
    public function card_2()
    {
        return view('card_2');
    }
    public function card_3()
    {
        return view('card_3');

    }

    public function card_4()
    {
        return view('card_4');

    }

    public function card_5()
    {
        return view('card_5');

    }

    public function birthday_card_1()
    {
        return view('card.birthday_card_1');

    }

    public function birthday_card_2()
    {
        return view('card.birthday_card_2');

    }


    public function birthday_card_3()
    {
        return view('card.birthday_card_3');

    }

    public function birthday_card_4()
    {
        return view('card.birthday_card_4');

    }

    public function birthday_card_5()
    {
        return view('card.birthday_card_5');

    }

    public function birthday_card_6()
    {
        return view('card.birthday_card_6');

    }

    public function birthday_card_7()
    {
        return view('card.birthday_card_7');

    }
}
