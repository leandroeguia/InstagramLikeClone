@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-4 p-5">
            <img src="https://instagram.faep4-1.fna.fbcdn.net/v/t51.2885-19/s320x320/30592788_444255662663356_1054850955809390592_n.jpg?_nc_ht=instagram.faep4-1.fna.fbcdn.net&_nc_ohc=6BkxUqqyKBAAX-DcS4d&oh=8007efdf7bae24cd158eb0d58399d5ca&oe=5F53F735" class="rounded-circle" style="width:250px" alt="">
        </div>

        <div class="col-8 p-5">
            <br><br>
            <div><h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>43</strong> Publicaciones</div>
                <div class="pr-5"><strong>317</strong> Seguidores</div>
                <div class="pr-5"><strong>258</strong> Seguidos</div>
            </div>
            <div class="pt-4"><strong>Twitter.com/sxnicyouth</strong></div>
            <div>Ingeniería UNLP</div>
            
        </div>

    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.faep4-1.fna.fbcdn.net/v/t51.2885-15/e35/108215261_144172247325192_4523635482808145653_n.jpg?_nc_ht=instagram.faep4-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=9xp479lCa9AAX9pYte_&oh=0e9dbc3f3beb5bf6b4ab32e038d6efb1&oe=5F527C97" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="https://instagram.faep4-1.fna.fbcdn.net/v/t51.2885-15/e35/88900139_501637427442337_3971635508364826734_n.jpg?_nc_ht=instagram.faep4-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=Cuknb0vICmcAX-hANei&oh=88a897dab76d97b4e64287267f045c35&oe=5F536277" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="https://instagram.faep4-1.fna.fbcdn.net/v/t51.2885-15/e35/71199791_2483927408545116_9102124972724672894_n.jpg?_nc_ht=instagram.faep4-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=T1HLDFoS1wwAX8EdR-Q&oh=7e0e80330e68a6e305b7f52278422280&oe=5F539B78" class="w-100" alt="">
        </div>

    </div>

</div>
@endsection
