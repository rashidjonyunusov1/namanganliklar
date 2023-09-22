@extends('layouts.main')
@section('content')




    @include('sections.corona')

    @include('sections.posts')

    <div class="container">
      <div class="notification basic-flex">
        <div class="notification__text basic-flex">
          <h3>@lang('home.adc_1')
          </h3>
        </div>
        <button type="button" class="notification__button btn">
        @lang('home.adc_1_button')
        </button>
      </div>
    </div>

    <section class="news">
      <div class="container">
        <div class="news__wrapper basic-flex">
          @include('sections.latestNews')
          @include('sections.mostPopularNews')
        </div>
      </div>
    </section>
    @include('sections.advertising3')
  </main>

@endsection





