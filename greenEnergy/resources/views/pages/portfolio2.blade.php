@extends('layouts.app')

@section('title')
    Portfolio2
@endsection

@section('head')
    
@endsection


@section('content')
  <section id="portfolio" class="section_bg">
      <div class="container">

        <h2>PORTFOLIO</h2>
        <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')"> Show all</button>
        <button class="btn" onclick="filterSelection('nature')"> Nature</button>
        <button class="btn" onclick="filterSelection('cars')"> Cars</button>
        <button class="btn" onclick="filterSelection('people')"> People</button>
        </div>

        <!-- Portfolio Gallery Grid -->
        <div class="row">
        <div class="column nature">
            <div class="content">
            <img src="/images/portfolio/app1.jpg" alt="Mountains" style="width:100%">
            <h4>Mountains</h4>
            <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column nature">
            <div class="content">
            <img src="/images/portfolio/app1.jpg" alt="Lights" style="width:100%">
            <h4>Lights</h4>
            <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column nature">
            <div class="content">
            <img src="/images/portfolio/app1.jpg" alt="Nature" style="width:100%">
            <h4>Forest</h4>
            <p>Lorem ipsum dolor..</p>
            </div>
        </div>

        <div class="column cars">
            <div class="content">
            <img src="/images/portfolio/app1.jpg" alt="Car" style="width:100%">
            <h4>Retro</h4>
            <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column cars">
            <div class="content">
            <img src="/images/portfolio/app1.jpg" alt="Car" style="width:100%">
            <h4>Fast</h4>
            <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column cars">
            <div class="content">
            <img src="/images/portfolio/app1.jpg" alt="Car" style="width:100%">
            <h4>Classic</h4>
            <p>Lorem ipsum dolor..</p>
            </div>
        </div>

        <div class="column people">
            <div class="content">
            <img src="/images/portfolio/app1.jpg" alt="People" style="width:100%">
            <h4>Girl</h4>
            <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column people">
            <div class="content">
            <img src="/images/portfolio/app1.jpg" alt="People" style="width:100%">
            <h4>Man</h4>
            <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column people">
            <div class="content">
            <img src="/images/portfolio/app1.jpg" alt="People" style="width:100%">
            <h4>Woman</h4>
            <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <!-- END GRID -->
        </div>

        </div>
    </section><!
@endsection
