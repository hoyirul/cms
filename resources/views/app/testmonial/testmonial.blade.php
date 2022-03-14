@extends('app.layouts.main')

@section('content')
  <!--Our  Clients -->
<div id="plant" class="section_Clients layout_padding padding_bottom_0">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <div class="titlepage">
          <h2> Testmonial</h2>
          <span style="text-align: center;">available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section Clients_2 layout_padding padding-top_0">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div id="testimonial" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#testimonial" data-slide-to="0" class="active"></li>
            <li data-target="#testimonial" data-slide-to="1"></li>
            <li data-target="#testimonial" data-slide-to="2"></li>
          </ul>
          <!-- The slideshow -->
          <div class="carousel-inner">

            @foreach ($testmonial as $row)
              <div class="carousel-item {{ ($row->id == 1) ? 'active' : '' }}">
                <div class="titlepage">
                  <div class="john">
                    <div class="john_image"><img src="uploads/testmonials/{{ $row->img_profile }}" style="max-width: 100%;"></div>
                    <div class="john_text">{{ $row->name }}<span style="color: #fffcf4;">({{ $row->position }})</span></div>
                    <p class="lorem_ipsum_text">{{ $row->testmonial }}</p>
                    <div class="icon_image"><img src="images/icon-1.png"></div>
                  </div>
                </div>
              </div>
            @endforeach
            
          </div>
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#testimonial" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#testimonial" data-slide="next">
          <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<!-- end Our  Clients -->
@endsection