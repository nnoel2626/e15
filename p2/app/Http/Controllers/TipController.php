<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class TipController extends Controller
{
     private $tipAmount;
     private $totalAmount;



    public function __construct()
    {

    }


     public function calculateTip()
    {
    }

}






//
//   if (tipPercent.value !== "") {
//     let calcPercent = parseInt(tipPercent.value)
//     const totalWithTip = total + (calcPercent * total) / 100;
//     document.querySelector('#perPerson').innerHTML = (totalWithTip / people).toFixed(2);
//   }
//   else {
//     const result = total / people;
//     document.querySelector('#perPerson').innerHTML = result.toFixed(2);
//   }
//  }

// document.querySelector('#addTip').addEventListener('click', (e) => {
//   e.preventDefault();
//   showTipInput();
// })

// const showTipInput = () => {
//   const tipBtns = document.querySelector('#tipInput')
//   if (tipBtns.style.display === "block") {
//     tipBtns.style.display = "none"
//   } else {
//     tipBtns.style.display = "block"
//   }
// }
// const splitting =  {
     //   let total = parseInt(document.querySelector('#total').value);
//   let people = parseInt(document.querySelector('#people').value);
//   let tipPercent = document.querySelector('#tipPercent')
//  }

// const splitBtn = document.querySelector('#splitBtn')
//   splitBtn.addEventListener('click', (e) => {
//     e.preventDefault();
//     splitting();
// })

// document.querySelector('#resetBtn').addEventListener('click', (e) => {
//   e.preventDefault();
//   document.querySelector('form').reset();
//   document.querySelector('#perPerson').innerHTML = "0"
// })
