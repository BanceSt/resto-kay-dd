<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    //
    public function create(Request $request) {
        $reservation = new Reservation;
        if (auth()->check()) {
            $reservation->user_id = Auth::id();
            $reservation->name = auth()->user()->name;
            $reservation->last_name = auth()->user()->last_name;
            $reservation->email = auth()->user()->email;
            $reservation->phone = auth()->user()->phone;
        } else {
            $reservation->name = $request->first_name;
            $reservation->last_name = $request->last_name;
            $reservation->email = $request->email;
            $reservation->phone = $request->phone;
        }

        //reservé le
        $date = date_create_from_format("d-m-Y", $request->date);
        $formattedDate = $date->format('Y-m-d');
        $reservation->reserved_at = \Carbon\Carbon::parse($formattedDate . " " . $request->time);


        //récupération des tables réservées
        $i = 0;
        $tablesStr = "[";
        while ($request->has("table" . $i) && (4 > $i))
        {
            if ($i > 0) $tablesStr = $tablesStr . ", ";
            $tablesStr = $tablesStr . $request->get("table" . $i);
            $i++;
        }
        $tablesStr = $tablesStr . "]";

        $reservation->numero_table = $tablesStr;

        //save
        $reservation->specials_need = $request->message;
        $reservation->save();

        return view('/');
    }

}
