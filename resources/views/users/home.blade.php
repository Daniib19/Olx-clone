@extends('template')

@section('content')
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <ul class="list-group" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <li class="list-group-item">
                    <a href="/user" style="color: rgba(49, 49, 49, 0.801); text-decoration: none; font-weight: bold">Contul meu</a>
                </li>
                <li class="list-group-item">
                    <a href="/purchases" style="color: rgb(106, 120, 180); text-decoration: none">Cumparaturile mele</a>
                </li>
                <li class="list-group-item">
                    <a href="/favorites" style="color: rgb(106, 120, 180); text-decoration: none">Favorite</a>
                </li>
                <li class="list-group-item">
                    <a href="/cart" style="color: rgb(106, 120, 180); text-decoration: none">Cosul meu</a>
                </li>
            </ul>
        </div>
        
        <div class="col-sm-9">
            <div class="container" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color: white; padding: 15px">
                <h6>Datele contului</h6>
                <br>
                <div class="row">
                    <div class="col-sm-4">
                        <img src="https://images.indianexpress.com/2018/09/paulo-dybala-759.jpg" style="width: 130px; height: 130px; object-fit: cover; border-radius: 50%">
                    </div>
                    
                    <div class="col-sm-8">
                        <a>Nume: <a style="text-decoration: none; margin-left: 85px">{{ $user->name }}</a> </a>
                        <br>
                        <a>Email: <a style="margin-left: 90.5px; text-decoration: none">{{ $user->email }}</a></a>
                        <br>
                        <a>Numar telefon:
                            @if ($user->phone_number == NULL)
                                <a href="/edit_account" style="margin-left: 25.5px; text-decoration: none">Adauga un numar de telefon</a>
                            @else
                            <a style="margin-left: 25.5px; text-decoration: none">{{ $user->phone_number }}</a>
                            @endif
                        </a>
                        <br>
                        <br>
                        <a href="/edit_account" style="text-decoration: none">Editeaza datele
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                        </a>


                    </div>
                    
                </div>
            </div>
            <br>
            <div class="container" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color: white; padding: 15px">
                <h6>Activitatea mea</h6>
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col">
                        <a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                            <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/>
                        </svg> Produse favorite : {{ $user->favorite_products }}</a>
                    </div>
                    <div class="col">
                        <a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg> Review-uri adaugate : {{ $user->reviews_added }}</a>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        
        
    </div>
    </div>
@endsection