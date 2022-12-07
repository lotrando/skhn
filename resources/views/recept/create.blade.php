@extends('layouts.app')

@section('main')
  <!--Intro Section-->
  <section class="view" id="home"
           style="background-image: url('../img/pillshand.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div class="mask rgba-blue-strong">
      <div class="h-100 d-flex justify-content-center align-items-center container">
        <div class="row pt-0">
          <div class="col-12 text-md-left text-center">
            <div class="white-text">
              <div class="d-flex justify-content-between align-items-center wow fadeInRight"
                   data-w-delay="1.7">
                <a href="https://www.epreskripce.cz/"><img src="{{ asset('img/erecept.png') }}"
                       alt="Logo eRecept" height="80"></a>
                <h1 class="h1-responsive font-weight-semibold mt-md-2 mt-0">Rezervace eReceptu
                </h1>
              </div>
              <hr class="hr-light wow fadeInLeft" data-w-delay="0.5s">
                @if (session()->has('message'))
                  <div class="alert alert-success font-weight-bold text-center">
                    {{ session()->get('message') }}
                  </div>
                @endif
              <p class="font-weight-bold wow fadeInRight mb-1 text-justify" data-w-delay="0.7">
                Pokud máte vystaven elektronický eRecept, tak si vaše léky můžete pohodlně zarezervovat v
                našich lékárnách KHN. Stačí zadat číslo eReceptu a kontaktní telefon. My Vám léky
                připravíme na vámi zvolené lékárně a až budou k dispozici pošleme Vám SMS zprávu kdy si léky můžete vyzvednout.
              </p>
              <form class="wow fadeInLeft" data-w-delay="0.7s" action="{{ route('erecept.store') }}"
                    method="POST">
                @csrf
                <div class="form-group">
                  <label class="font-small m-0" style="color: #d4e38a; font-weight: 700;" for="recept">Opište číslo eReceptu ( max. 12 znaků )</label>
                  <input class="form-control" id="recept" name="recept" type="text" minlenght="12" maxlength="12"
                         value="{{ old('recept') }}" aria-describedby="recept"
                         placeholder="************">
                  <small class="form-text text-warning" id="receptHelp">
                    @error('recept')
                      <div style="color: #ff5975; font-weight: 700;">{{ $message }}</div>
                    @enderror
                  </small>
                </div>
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label class="font-small m-0" style="color: #d4e38a; font-weight: 700;" for="mobile">Zadejte kontaktní telefonní číslo ( SMS )</label>
                      <input class="form-control" id="mobile" name="mobile" type="text"
                             value="{{ old('mobile') }}"
                             placeholder="*********">
                      <small id="mobileHelp">
                        @error('mobile')
                          <div style="color: #ff5975; font-weight: 700;">{{ $message }}</div>
                        @enderror
                      </small>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label class="font-small m-0" style="color: #d4e38a; font-weight: 700;" for="pharmacy">Vyberte lékárnu, kde chcete rezervované léky vyzvednout</label>
                      <select class="form-control" id="pharmacy" name="pharmacy" type="text">
                        <option value="KHN" {{ old('pharmacy') == 'KHN' ? 'selected' : '' }}>
                          Nemocnice KHN - Karviná 6</option>
                        <option value="RÁJ" {{ old('pharmacy') == 'RÁJ' ? 'selected' : '' }}>
                          Středisko KHN - Karviná 4</option>
                      </select>
                      <small class="form-text text-warning" id="pharmacyHelp">
                        @error('pharmacy')
                          <div style="color: #ff5975; font-weight: 700;">{{ $message }}</div>
                        @enderror
                      </small>
                    </div>
                  </div>
                </div>
                <br>
                <input name="status" type="hidden" value="rezervováno">
                <button class="btn btn-primary btn-rounded font-weight-bold ml-lg-0 w fadeInRight"
                        data-w-delay="1.5s" type="submit">Rezervovat eRecept</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection