@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Trois dernières dépenses</h1></div>

                    <div class="panel-body">

                        {{--formulaire d'ajout de dépense--}}
                        <div class="row">
                            <div class="col-md-12">

                                    <form id='spend_create' class='form-horizontal' style='margin-bottom:30px'
                                          action="{{route('create')}}" method="post">
                                        {{ csrf_field() }}
                                        <fieldset>

                                            <legend>Ajouter une dépense</legend>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="Pseudo">Pseudo</label>
                                                <div class="col-md-5">
                                                    <input id="pseudo" name="pseudo" placeholder="Toto92"
                                                           class="form-control input-md" required="" type="text">

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="title">Titre</label>
                                                <div class="col-md-5">
                                                    <input id="title" name="title" placeholder="Location voiture"
                                                           class="form-control input-md" required="" type="text">

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label"
                                                       for="description">Description</label>
                                                <div class="col-md-5">
                                                    <input id="description" name="description"
                                                           placeholder="j'ai payé par cb auprès du loueur blabla"
                                                           class="form-control input-md" required="" type="text">

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="appendedtext">Appended
                                                    Text</label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <input id="price" name="price"
                                                               class="form-control"
                                                               placeholder="110" required="" type="text">
                                                        <span class="input-group-addon">€</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="pay_date">Date de la dépense</label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <input id="pay_date" name="pay_date" class="form-control"
                                                               placeholder="date" required="" type="date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="level">Statut</label>
                                                <div class="col-md-5">
                                                    <select id="level" name="level" class="form-control">
                                                        <option value="accompt">Accompte</option>
                                                        <option value="paid">Payé</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Button -->
                                            <div class="form-group">
                                                <div class=" text-center">
                                                    <button class="btn btn-success" type="submit">
                                                        Valider la dépense
                                                    </button>
                                                </div>
                                            </div>

                                        </fieldset>
                                    </form>

                                    <div class="col-md-12 text-center">
                                        <button type="button" class="btn btn-lg"
                                                onclick="window.location.href='{{url('')}}'"><i
                                                    class="fa fa-arrow-circle-left" aria-hidden="true"></i> Retour
                                        </button>
                                    </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
