@extends('layouts.app')

@section('title')
    Services
@endsection

{{-- @section('head')

@endsection --}}

@section('content')
<!-- section -->

<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Services</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Services</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->

<!-- section -->
<div class="section padding_layout_1 light_silver service_list">
  <div class="container">
    <div class="row">

    <div class="col-md-12">

        <div class="full">

          <div class="main_heading text_align_center">
            <h2>Types Of Services </h2>
            <p class="large">Many types of services!</p>
          </div>
        </div>
      </div>

    {{-- </div> --}}

      <div class="col-md-4 service_blog">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="/images/it_service/post-01.jpg" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head">Multi-cluster Solar System</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <div class="bt_cont"> <a class="btn sqaure_bt" href="it_service_detail.html">View Details</a> </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 service_blog">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="/images/it_service/post-02.jpg" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head">Solar Panels And Storage</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <div class="bt_cont"> <a class="btn sqaure_bt" href="it_service_detail.html">View Service</a> </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 service_blog">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="/images/it_service/post-03.jpg" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head">Wholesale Distrubution</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <div class="bt_cont"> <a class="btn sqaure_bt" href="it_service_detail.html">View Service</a> </div>
          </div>
        </div>
      </div>

    </div>
</div>
    <br><br><br>

    <div class="container">
    <div class="row">

      <div class="col-md-4 service_blog">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="/images/it_service/post-01.jpg" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head">Solar Hybrid System</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <div class="bt_cont"> <a class="btn sqaure_bt" href="it_service_detail.html">View Details</a> </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 service_blog">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="/images/it_service/post-02.jpg" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head"> Autonomous Solar System</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <div class="bt_cont"> <a class="btn sqaure_bt" href="it_service_detail.html">View Service</a> </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 service_blog">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="/images/it_service/post-03.jpg" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head">Technical support service</h3>
            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <div class="bt_cont"> <a class="btn sqaure_bt" href="it_service_detail.html">View Service</a> </div>
          </div>
        </div>
      </div>



    </div>
  </div>

</div>
<!-- end section -->


<!-- section -->
<div class="section padding_layout_1 light_silver gross_layout">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>About Service</h2>
            <p class="large">Easy and effective way to get your device repaired.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
            <div class="full">
              <div class="service_blog_inner2">
                <div class="icon text_align_left"><i class="fa fa-wrench"></i></div>
                <h4 class="service-heading">Honest Services</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore mque.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="full">
              <div class="service_blog_inner2">
                <div class="icon text_align_left"><i class="fa fa-cog"></i></div>
                <h4 class="service-heading">Secure payments</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore mque.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="full">
              <div class="service_blog_inner2">
                <div class="icon text_align_left"><i class="fa fa-history"></i></div>
                <h4 class="service-heading">Expert team</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore mque.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="full">
              <div class="service_blog_inner2">
                <div class="icon text_align_left"><i class="fa fa-heart-o"></i></div>
                <h4 class="service-heading">Affordable services</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore mque.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->

{{-- <div class="section padding_layout_1 gross_layout">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>Service Process</h2>
            <p class="large">Easy and effective way to get your device repaired.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="/images/it_service/si1.png" alt="#"></div>
                <h4 class="service-heading">Fast service</h4>
                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="/images/it_service/si2.png" alt="#"></div>
                <h4 class="service-heading">Secure payments</h4>
                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="/images/it_service/si3.png" alt="#"></div>
                <h4 class="service-heading">Expert team</h4>
                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="/images/it_service/si4.png" alt="#"></div>
                <h4 class="service-heading">Affordable services</h4>
                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="/images/it_service/si5.png" alt="#"></div>
                <h4 class="service-heading">90 Days warranty</h4>
                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="/images/it_service/si6.png" alt="#"></div>
                <h4 class="service-heading">Award winning</h4>
                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 --}}

<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>Experienced Staff</h2>
            <p class="large">Our experts have been featured in press numerous times.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="/images/it_service/team-member-1.jpg" alt="#"> </div>
          <div class="team_feature_head">
            <h4>Dean Michael</h4>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="/images/it_service/team-member-2.jpg" alt="#"> </div>
          <div class="team_feature_head">
            <h4>Ruby Jake</h4>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="/images/it_service/team-member-3.jpg" alt="#"> </div>
          <div class="team_feature_head">
            <h4>David Hussay</h4>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="/images/it_service/team-member-1.jpg" alt="#"> </div>
          <div class="team_feature_head">
            <h4>Dean Michael</h4>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- end section -->
@endsection
