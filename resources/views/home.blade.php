@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Trois dernières dépenses</h1></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Pseudo</th>
                                        <th>Titre</th>
                                        <th>Montant</th>
                                        <th>Date de paiement</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($spends as $spend)
                                    @foreach($spend->users as $user)
                                        <tr>
                                            <td>{{$user->pseudo}}</td>
                                            <td>{{$spend->title}}</td>
                                            <td>{{$spend->price}}</td>
                                            <td>{{$spend->pay_date}}</td>
                                        </tr>
                                    @endforeach
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>


                            <div class="col-md-12 text-center">
                                <button type="button" class="btn btn-lg"
                                        onclick="window.location.href='{{url('history')}}'"><i
                                            class="fa fa-arrow-circle-right" aria-hidden="true"></i> Afficher toutes les
                                    depenses
                                </button>
                            </div>

                            <div class="col-md-12 text-center" style=" margin-top: 30px">
                                <button type="button" class="btn btn-lg btn-success"onclick="window.location.href='{{url('create')}}'">
                                Ajouter une dépense
                                </button>
                            </div>
                        </div>



                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
