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
           'totalAmount' => 'required',
           'numberOfPeople' => 'required',
           'tipPercentage' => 'required',

        ]);

        #Form Data individual fields can also be accessed via dynamic proprerties
        $totalAmount = $this->request->input('totalAmount');
        $tipPercentage = $this->request->input('tipPercentage');

        # Calculate the totalTip
        if ($tipPercentage == 'Being stingy') {
            $this->totalTip  = ($totalAmount * 10) / 100;
        }

        if ($tipPercentage == 'Average tip') {
            $this->totalTip = ($totalAmount * 15) / 100;
        }

        if ($tipPercentage == 'Feelin generous') {
            $this->totalTip = ($totalAmount * 20) / 100;
        }


        # get all input value from Form
        $totalAmount = floatval($this->request->input('totalAmount', null));
        $numberOfPeople = floatval($this->request->input('numberOfPeople', null));
        $roundUp = $this->request->input('roundUp');

        # Boolean to see if the request contains data for a particular field(roundUp)
        if ($this->request->has('roundUp')) {
            # If it has, round up the total amount.
            $splitAmount = round(($totalAmount + $this->totalTip) /$numberOfPeople);
        } else {
            $splitAmount =  ($totalAmount + $this->totalTip) / $numberOfPeople;
        }

        // dump($totalAmount);
        // dump($this->totalTip);
        // dump($splitAmount);

        #Redirect to the form View with the following variables
        return redirect()->back()->with([
            'totalAmount' => $totalAmount,
             'tipTotal' => $this->totalTip,
            'splitAmount' => $splitAmount

            ]);
    }
}
