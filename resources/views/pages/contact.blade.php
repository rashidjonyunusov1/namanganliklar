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

    <section class="contact-details">
      <div class="container">
        <div class="contact-details__wrapper basic-flex">    
          <div class="form__wrapper">
            <h3 class="form__wrapper-title">Напишите нам
            </h3>
            <form method="post" action="/pages/message">
              @csrf
              <div class="form__top">
                <label><input type="text" name="full_name" placeholder="Имя" required></label>
               
                <label><input type="text" name="phone" placeholder="Номер телефона" required></label>
                
                <textarea class="contact-tetxarea" name="message" placeholder="Текст" required></textarea>
              </div>
              <div class="form__bottom">
                <input type="file" name="file" id="file" class="inputfile">
               
                <label class="basic-flex verification-code-wrapper">
                
                  
                </label>
                <button type="submit" class="btn send-btn">Отправить</button>
              </div>
            </form>
          </div>
          <div class="business__card">
            <h3 class="card__title">NAMANGANLIKLAR24</h3>
            <div class="card__item basic-flex">
              <span card__item-title>Электронная почта</span>
              <a class="email__link" href="mailto:info@namanganliklar24.uz">info@namanganliklar24.uz</a>
            </div>
            <div class="card__item basic-flex">
              <span card__item-title>Социальные сети</span>
              <div class="card__social-items basic-flex">
                <a href="#" class="social__item"></a>
                <a href="#" class="social__item"></a>
                <a href="#" class="social__item"></a>
              </div>
            </div>
            <div class="card__item basic-flex">
              <span card__item-title>Телеграм канал</span>
              <a class="card-join-telegram basic-flex" href="#">Подписатся</a>
            </div>
            <div class="card__item basic-flex">
              <span card__item-title>Мобильная приложение</span>
              <div class="card__apps-wrapper basic-flex">
                <a href="#"><img src="/assets/img/googleplay-wh.png" alt="GooglePlay"></a>
                <a href="#"><img src="/assets/img/appstore-white.png" alt="AppStore"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection