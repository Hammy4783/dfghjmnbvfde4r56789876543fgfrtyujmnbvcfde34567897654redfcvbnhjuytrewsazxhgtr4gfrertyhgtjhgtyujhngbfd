@extends('layouts.app')

@section('page_title', 'Junior Jobs')

@section('page_styles')
<style>

    /* Add styles for the job listings section */
    .jobs {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;

    }
    .jobs-all{
        margin: 50px;
        text-transform: capitalize
    }
    .jobs-all h2{
        margin-left: 35px
    }
    /* Add styles for the individual job listing boxes */
    .job {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      width: 300px;
      height: 400px;
      margin: 20px;
      overflow: hidden;
      transition: all 0.3s ease-in-out;
    }

    /* Add styles for the job listing box on hover */
    .job:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
    }

    /* Add styles for the job info inside the listing box */
    .job-info {
      padding: 20px;
    }

    /* Add styles for the job title */
    .job-title {
      font-size: 24px;
      margin: 0 0 10px 0;
    }

    /* Add styles for the job pay */
    .job-pay {
      font-size: 18px;
      color: #67b26f;
      margin: 0 0 10px 0;
    }

    /* Add styles for the job location */
    .job-location {
      font-size: 16px;
      color: #999;
      margin: 0 0 10px 0;
    }

    /* Add styles for the job description */
    .job-desc {
      font-size: 14px;
      color: #333;
      text-align: justify;
    }
     /* Add styles for the page here */
     @import 'https://fonts.googleapis.com/css?family=Ubuntu:300, 400, 500, 700';

    *, *:after, *:before {
    margin: 0;
    padding: 0;
    }

    .svg-container {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: -1;
    }

    svg {
    path {
        transition: .1s;
    }

    &:hover path {
        d: path("M 800 300 Q 400 250 0 300 L 0 0 L 800 0 L 800 300 Z");
    }
    }

    body {
    background: #fff;
    color: #333;
    font-family: 'Ubuntu', sans-serif;
    position: relative;
    }

    h3 {
    font-weight: 400;
    }

    header {
    color: #fff;
    padding-top: 10vw;
    padding-bottom: 30vw;
    text-align: center;
    }

    main {
    background: linear-gradient(to bottom, #ffffff 0%, #0433ff 100%);
    border-bottom: 1px solid rgba(0, 0, 0, .2);
    padding: 10vh 0 80vh;
    position: relative;
    text-align: center;
    overflow: hidden;


    &::after {
        border-right: 2px dashed #eee;
        content: '';
        position: absolute;
        top: calc(10vh + 1.618em);
        bottom: 0;
        left: 50%;
        width: 2px;
        height: 100%;
    }
    }

    footer {
    background: #0433ff;
    padding: 5vh 0;
    text-align: center;
    position: relative;
    }

    small {
    opacity: .5;
    font-weight: 300;

    a {
        color: inherit;
    }
    }




      .jobs {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        grid-gap: 1rem;
        padding: 1rem;
      }

      .job {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        overflow: hidden;
      }

      .job img {
        width: 100%;
        height: 200px;
        object-fit: cover;
      }

      .job-info {
        padding: 1rem;
        font-family: "Times New Roman", Times, serif;
      }

      .job-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
      }

      .job-pay {
        color: green;
        font-weight: bold;
        margin-bottom: 0.5rem;
      }

      .job-location {
        font-style: italic;
        margin-bottom: 0.5rem;
      }

      .job-desc {
        text-align: justify;
        margin-bottom: 0.5rem;
      }
      .text-center{
        text-align: center
      }
      .btn-primary {
    border-color: #7367f0 !important;
    background-color: #7367f0 !important;
    color: #fff !important;
}
.btn {
    display: inline-block;
    font-weight: 400;
    line-height: 1;
    color: #6e6b7b;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.786rem 1.5rem;
    font-size: 1rem;
    border-radius: 0.358rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, background 0s, border 0s;
}
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
@endsection

@section('content')
 <!-- Add the header -->
  <button style="background-color: transparent; border: 2px solid white; padding: 10px 10px; margin-top: 5px; ">
    <a href="{{url('/')}}" style="color: white; font-size: 10px; text-decoration: none;">Home</a>
  </button>
 <button style="background-color: transparent; border: 2px solid white; padding: 10px 10px; margin-top: 5px; float: right;">
    <a href="{{route('web.jobs.create')}}" style="color: white; font-size: 10px; text-decoration: none;">Looking To Add A Job?</a>
  </button>


   <div class="svg-container">
      <!-- I crated SVG with: https://codepen.io/anthonydugois/pen/mewdyZ -->
      <svg viewbox="0 0 800 400" class="svg">
        <path id="curve" fill="#50c6d8" d="M 800 300 Q 400 350 0 300 L 0 0 L 800 0 L 800 300 Z">
        </path>
      </svg>
    </div>

    <header>
      <h1>Junior Jobs</h1>
      <h3>By Hamza Mian.</h3>
    </header>

      <!-- Add the job listings -->
  <section class="jobs-all">
   <div class="row">
            <div class="col-12">
                <div class="card">
                    <!--<div class="card-header">-->
                    <!--    <h4 class="card-title">Job</h4>-->
                    <!--</div>-->
                    <div class="card-body">
                       <div class="row">
                        <div class="col-md-8 col-12">
                            <h5 class="m-0 mb-2">{{$item->title}}</h5>
                            <div class="d-flex gap-2 mb-2">
                                <span><i class="fa-solid fa-location-dot" title="location"></i> {{$item->location}}</span>
                                <span><i class="fa-solid fa-dollar-sign" title="Salery"></i> ${{$item->salary}}/Hr</span>
                                <span><i class="fa-solid fa-user-tie" title="Posted By"></i> {{$item->user->email}}</span>
                            </div>
                            <p class="m-0 mb-2">{{$item->description}}</p>
                        </div>
                        <div class="col-md-4 col-12">
                            <img class="img-fluid rounded" src="{{$item->image}}">
                        </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
  </section>
@endsection

@section('page_scripts')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>(function() {
    // Variables
    var $curve = document.getElementById("curve");
    var last_known_scroll_position = 0;
    var defaultCurveValue = 350;
    var curveRate = 3;
    var ticking = false;
    var curveValue;

    // Handle the functionality
    function scrollEvent(scrollPos) {
      if (scrollPos >= 0 && scrollPos < defaultCurveValue) {
        curveValue = defaultCurveValue - parseFloat(scrollPos / curveRate);
        $curve.setAttribute(
          "d",
          "M 800 300 Q 400 " + curveValue + " 0 300 L 0 0 L 800 0 L 800 300 Z"
        );
      }
    }

    // Scroll Listener
    // https://developer.mozilla.org/en-US/docs/Web/Events/scroll
    window.addEventListener("scroll", function(e) {
      last_known_scroll_position = window.scrollY;

      if (!ticking) {
        window.requestAnimationFrame(function() {
          scrollEvent(last_known_scroll_position);
          ticking = false;
        });
      }

      ticking = true;
    });
  })();

  </script>
@endsection
