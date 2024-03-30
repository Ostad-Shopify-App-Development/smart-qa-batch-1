@extends('layouts.widget')


@section('content')

    <div class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Default Accordion</h5>

                        <!-- Default Accordion -->
                        <div class="accordion" id="accordionExample">
                            @foreach($questions as $question)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        {{ $question->question }}
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        {{ $question->answer }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div><!-- End Default Accordion Example -->

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
