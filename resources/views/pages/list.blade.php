@extends('layouts.main')
@section('content')
<div class="container">
      <div class="covid-block basic-flex ">
      	<div class="covid-block__title basic-flex">
      	  <div class="covid-title__img"></div>
      	  <a href="#" class="covid-title__text">Коронавирус COVID-19
      	    в Узбекистане</a>
      	</div>
      	<div class="covid-block__stats basic-flex">
      	  <div class="stats__item basic-flex">
      	    <div class="stats__img"></div>
      	    <div class="stats-text-box">
      	      <h4>Инфицированы</h4>
      	      <p>3000</p>
      	    </div>
      	  </div>
      	  <div class="stats__item basic-flex">
      	    <div class="stats__img"></div>
      	    <div class="stats-text-box">
      	      <h4>Выздоровели</h4>
      	      <p>2438</p>
      	    </div>
      	  </div>
      	  <div class="stats__item basic-flex">
      	    <div class="stats__img"></div>
      	    <div class="stats-text-box">
      	      <h4>Умерли</h4>
      	      <p>12</p>
      	    </div>
      	  </div>
      	</div>
      </div>
    </div>

    <section class="news">
      <div class="container">
        <div class="news__wrapper basic-flex">
          <div class="column-news">
            <h2 class="news__title">Последние новости</h2>
            <ul class="news__list basic-flex">
              <li class="news__item">
                <a href="{{ route('pages.get_article') }}" class="basic-flex news__link">
                  <div class="news-image-wrapper"><img src="/assets/img/bottom1.png" alt="Bottom Img"></div>
                  <div class="news-box basic-flex">
                    <h4 class="news__title">По факту прорыва Сардобинского водохранилища 
                      возбуждено уголовное дело</h4>
                    <p class="news__description">После прорыва дамбы Сардобинского водохранилища возбуждено уголовное дело, сообщили в пресс-службе Генпрокуратуры Узбекистана.
                    </p>
                    <span class="news__date basic-flex">11:31 / 15.05.2020</span>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="{{ route('pages.get_article') }}" class="basic-flex news__link">
                  <div class="news-image-wrapper"><img src="/assets/img/bottom2.png" alt="Bottom Img"></div>
                  <div class="news-box basic-flex">
                    <h4 class="news__title">Мирзиёев: «Нам следовало бы принять некоторые правила 
                      карантина как часть повседневной жизни»
                      </h4>
                    <p class="news__description">Президент Узбекистана заявил, что после того, как угроза коронавируса исчезнет, в стране следовало бы принять некоторые правила периода карантина как часть своей повседневной жизни.
                    </p>
                    <span class="news__date basic-flex">11:31 / 15.05.2020</span>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="{{ route('pages.get_article') }}" class="basic-flex news__link">
                  <div class="news-image-wrapper"><img src="/assets/img/bottom3.png" alt="Bottom Img"></div>
                  <div class="news-box basic-flex">
                    <h4 class="news__title">В Ташкенте планируют ввести новую систему электронных проездных билетов
                    </h4>
                    <p class="news__description">Целью этих изменений является максимально возможное сокращение количества других маршрутов на улицах, где проходят основные маршруты.</p>
                    <span class="news__date basic-flex">11:31 / 15.05.2020</span>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="{{ route('pages.get_article') }}" class="basic-flex news__link">
                  <div class="news-image-wrapper"><img src="/assets/img/bottom1.png" alt="Bottom Img"></div>
                  <div class="news-box basic-flex">
                    <h4 class="news__title">По факту прорыва Сардобинского водохранилища 
                      возбуждено уголовное дело</h4>
                    <p class="news__description">После прорыва дамбы Сардобинского водохранилища возбуждено уголовное дело, сообщили в пресс-службе Генпрокуратуры Узбекистана.
                    </p>
                    <span class="news__date basic-flex">11:31 / 15.05.2020</span>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="{{ route('pages.get_article') }}" class="basic-flex news__link">
                  <div class="news-image-wrapper"><img src="/assets/img/bottom2.png" alt="Bottom Img"></div>
                  <div class="news-box basic-flex">
                    <h4 class="news__title">Мирзиёев: «Нам следовало бы принять некоторые правила 
                      карантина как часть повседневной жизни»
                      </h4>
                    <p class="news__description">Президент Узбекистана заявил, что после того, как угроза коронавируса исчезнет, в стране следовало бы принять некоторые правила периода карантина как часть своей повседневной жизни.
                    </p>
                    <span class="news__date basic-flex">11:31 / 15.05.2020</span>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="{{ route('pages.get_article') }}" class="basic-flex news__link">
                  <div class="news-image-wrapper"><img src="/assets/img/bottom3.png" alt="Bottom Img"></div>
                  <div class="news-box basic-flex">
                    <h4 class="news__title">В Ташкенте планируют ввести новую систему электронных проездных билетов
                    </h4>
                    <p class="news__description">Целью этих изменений является максимально возможное сокращение количества других маршрутов на улицах, где проходят основные маршруты.</p>
                    <span class="news__date basic-flex">11:31 / 15.05.2020</span>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="{{ route('pages.get_article') }}" class="basic-flex news__link">
                  <div class="news-image-wrapper"><img src="/assets/img/bottom1.png" alt="Bottom Img"></div>
                  <div class="news-box basic-flex">
                    <h4 class="news__title">По факту прорыва Сардобинского водохранилища 
                      возбуждено уголовное дело</h4>
                    <p class="news__description">После прорыва дамбы Сардобинского водохранилища возбуждено уголовное дело, сообщили в пресс-службе Генпрокуратуры Узбекистана.
                    </p>
                    <span class="news__date basic-flex">11:31 / 15.05.2020</span>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="{{ route('pages.get_article') }}" class="basic-flex news__link">
                  <div class="news-image-wrapper"><img src="/assets/img/bottom1.png" alt="Bottom Img"></div>
                  <div class="news-box basic-flex">
                    <h4 class="news__title">По факту прорыва Сардобинского водохранилища 
                      возбуждено уголовное дело</h4>
                    <p class="news__description">После прорыва дамбы Сардобинского водохранилища возбуждено уголовное дело, сообщили в пресс-службе Генпрокуратуры Узбекистана.
                    </p>
                    <span class="news__date basic-flex">11:31 / 15.05.2020</span>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="{{ route('pages.get_article') }}" class="basic-flex news__link">
                  <div class="news-image-wrapper"><img src="/assets/img/bottom3.png" alt="Bottom Img"></div>
                  <div class="news-box basic-flex">
                    <h4 class="news__title">В Ташкенте планируют ввести новую систему электронных проездных билетов
                    </h4>
                    <p class="news__description">Целью этих изменений является максимально возможное сокращение количества других маршрутов на улицах, где проходят основные маршруты.</p>
                    <span class="news__date basic-flex">11:31 / 15.05.2020</span>
                  </div>
                </a>
              </li>
            </ul>
            <button type="button" class="btn load-more-btn">Больше новостей</button>
          </div>
          <div class="popular-news">
            <div class="popular-news-wrapper">
              <h4 class="popular-news__title">Cамые популярные новости</h4>
              <ul class="popular-news__list">
                <li class="popular-news__item">
                  <a href="{{ route('pages.get_article') }}">
                    <p class="popular-news__description">По факту прорыва Сардобинского водохранилища возбуждено уголовное дело</p>
                    <span class="popular-news__date">11:31 / 15.05.2020</span>
                  </a>
                </li>
                <li class="popular-news__item">
                  <a href="{{ route('pages.get_article') }}">
                    <p class="popular-news__description">По факту прорыва Сардобинского водохранилища возбуждено уголовное дело</p>
                    <span class="popular-news__date">11:31 / 15.05.2020</span>
                  </a>
                </li>
                <li class="popular-news__item">
                  <a href="{{ route('pages.get_article') }}">
                    <p class="popular-news__description">По факту прорыва Сардобинского водохранилища возбуждено уголовное дело</p>
                    <span class="popular-news__date">11:31 / 15.05.2020</span>
                  </a>
                </li>
                <li class="popular-news__item">
                  <a href="{{ route('pages.get_article') }}">
                    <p class="popular-news__description">По факту прорыва Сардобинского водохранилища возбуждено уголовное дело</p>
                    <span class="popular-news__date">11:31 / 15.05.2020</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="ads-placeholder">
                <h4>ADS PLACEHOLDER</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection