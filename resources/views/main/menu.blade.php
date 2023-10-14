@extends('main.base')

@section('title', 'トップメニュー')

@section('menu')
  <p>TOP MENU</p>
  <a href="{{ route('showOwnRegister') }}">自社商品登録画面</a>
  <br>
  <a href="{{ route('showOtherRegister') }}">他社商品登録画面</a>
  <br>
  <a href="{{ route('showOwnEdit') }}">自社商品編集画面</a>
  <br>
  <a href="{{ route('showOtherEdit') }}">他社商品編集画面</a>
  <br>
  <a href="{{ route('compare') }}">商品比較画面</a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-responsive-nav-link>
  </form>
@endsection
