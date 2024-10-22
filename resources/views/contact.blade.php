@extends('layout')

@section('main')
    İletişim Sayfası İçeriği
    <br><br>
    @if($errors->any())
      <h2> <strong>Hatalı veri girişi!!</strong></h2>
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>


    @endif

    <h5>İletişim Formu</h5>
    <form action="" method="POST">
        @csrf
        İsminiz
        <br><input type="text" name="isim"/>
        <br><br>
        Konu:
        <br>
            <select name="konu">
                <option>Öğrenci İşleri</option>
                <option>Sosyal Olanaklar</option>
                <option>Diğer</option>
            </select>
        <br><br>
        Mesajınız:
        <br>
        <textarea name="mesaj"></textarea>
        <br>
        <input type="submit" value="Mesajı Gönder"/>
    </form>
@endsection
