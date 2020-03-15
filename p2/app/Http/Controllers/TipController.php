<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipController extends Controller
{
    public $totalTip;

    # define the constructor function
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    # public function to display the form
    public function index()
    {
        return view('showForm');
    }


    public function splitTotal()
    {
        # Check to see if you have all the form inputs.
        //ddd($request->All());

        # Validate all the form inputs
        $this->validate($this->request, [
           'totalAmount' => 'required | integer',
           'numberOfPeople' => 'required | numeric',
           'tipPercentage' => 'required',

        ]);

        #Form Data individual fields can also be accessed via dynamic proprerties
        $totalAmount = $this->request->input('totalAmount');
        $tipPercentage = $this->request->input('tipPercentage');

        $totalTip;

        # Calculate the totalTip
        if ($tipPercentage == 'Being stingy') {
            $totalTip  = ($totalAmount * 10) / 100;
        }

        if ($tipPercentage == 'Average tip') {
            $totalTip = ($totalAmount * 15) / 100;
        }

        if ($tipPercentage == 'Feelin generous') {
            $totalTip = ($totalAmount * 20) / 100;
        }


        # get all input value from Form
        $totalAmount = floatval($this->request->input('totalAmount'));
        $numberOfPeople = floatval($this->request->input('numberOfPeople'));
        $roundUp = $this->request->input('roundUp');

        # Boolean to see if the request contains data for a particular field(roundUp)
        if ($this->request->has('roundUp')) {
            # If it has, round up the total amount.
            $splitAmount = round(($totalAmount + $totalTip) /$numberOfPeople);
        } else {
            $splitAmount =  ($totalAmount + $totalTip) / $numberOfPeople;
        }

        # Show user the new bill total with the tip included
        $newBillTotal = $splitAmount * $numberOfPeople;

        #Redirect to the form View with the following variables
        return redirect()->back()->with([
            'newBillTotal' => $newBillTotal,
             'tipTotal' => $totalTip,
            'splitAmount' => $splitAmount

            ]);
    }
}
