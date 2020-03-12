<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;

class TipController extends Controller
{
    # define a property or properties with visibility( private or public)
    private $totalTip;
    private $splitAmount;

    # define the constructor function
    public function __construct(Request $request)
    {
        $this->request = $request  ;
    }

    # public function to display the form
    public function index()
    {
        return view('showForm');
    }

    #Function to caculate the total tip from the input percentage
    public function calculateTip()
    {
        #Form Data individual fields can also be accessed via dynamic proprerties
        $totalAmount = $this->request->totalAmount;
        $tipPercent= $this->request->tipPercent;

        if ($tipPercent == 'Being stingy') {
            $this->totalTip  = ($totalAmount * 10) / 100;
        }

        if ($tipPercent == 'Average tip') {
            $this->totalTip = ($totalAmount * 15) / 100;
        }

        if ($tipPercent == 'Feelin generous') {
            $this->totalTip = ($totalAmount * 20) / 100;
        }

        // ddd($tipPercent);
        // ddd($totalAmount);

        return $this->totalTip;
    }


    public function splitTotal()
    {
        # Check to see if you have all the form inputs.
        // ddd($this->request->All());

         # Validate all the form inputs
        // $this->validate($request, [
        //    'totalAmount' => 'required',
        //     'numberOfPeople' => 'required',
        //     'tipPercentage' => 'required',
        //
        // ]);

        # Pull the totalTip valueby calling the calculateTip function
        $this->calculateTip();
        // ddd($this->totalTip);

        # get all input value from Form
        $totalAmount = $this->request->input('totalAmount', null);
        $numberOfPeople = $this->request->input('numberOfPeople', null);
        $tipPercentage = $this->request->input('tipPercentage', null);
        $roundUp = $this->request->input('roundUp');

        # Boolean to see if the request contains data for a particular field(roundUp)
        if ($this->request->has('roundUp')) {
            # # If it has, proceed with the calculation
            $splitAmount = (round($totalAmount + $this->totalTip) / $numberOfPeople);
        } else {
            $splitAmount =  ($totalAmount + $this->totalTip) / $numberOfPeople;
        }

        #Redirect to the form View with the following variables
        return redirect('/')->with([
            'totalAmount' => $totalAmount,
            'tipTotal' => $this->totalTip,
            'splitAmount' => $splitAmount

            ]);
    }
}
