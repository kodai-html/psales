@extends('main.base')

@section('title', 'トップメニュー')

@section('menu')
  <p>TOP MENU</p>
  <a href="{{ route('showProposedProductRegister') }}" class='btn'>自社商品登録画面</a>
  <br>
  <a href="{{ route('showComparedProductRegister') }}" class='btn'>他社商品登録画面</a>
  <br>
  <a href="{{ route('showProposedProductDetail1') }}" class='btn'>自社商品編集画面</a>
  <br>
  <a href="{{ route('showComparedProductDetail1') }}" class='btn'>他社商品編集画面</a>
  <br>
  <a href="{{ route('showProposedProductContinues') }}" class='btn'>自社商品チャート用データ登録画面</a>
  <br>
  {{-- <a href="{{ route('showComparedProductDetail1') }}" class='btn'>自社商品チャート用データ登録画面</a> --}}
  <br>
  <a href="{{ route('choice') }}" class='btn'>比較商品選択画面</a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-responsive-nav-link>
  </form>
@endsection
