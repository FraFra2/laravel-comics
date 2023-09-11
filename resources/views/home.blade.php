@extends('layouts.main')

@section('page-title', 'Homepage')

@section('main-content')

<h1>
    Homepage
</h1>
<div class ="container">
    {{-- {{ $comics }} --}}
    <div class="row">
        @foreach ($comics as $data)
        @foreach ($data as $singleComic)

        <div class="col-4 mb-4">
            <div class = "w-50">
                <img class = "img-fluid" src="{{ $singleComic['thumb'] }}">
                <small>
                    {{ $singleComic["sale_date"] }}
                </small>
            </div>

            <div class = "d-flex gap-4">
                <h5>
                    {{ $singleComic["title"] }}
                </h5>
                <h6>
                    Serie: {{ $singleComic["series"] }}
                </h6>
            </div>
            
            <h6>
                {{ $singleComic["price"] }}
            </h6>
            {{-- accordion --}}
            <div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          Desc:
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                {{ $singleComic["description"] }}
                            </p>                     
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            
        </div>
        @endforeach
    @endforeach
        
        
    </div>
    


</div>

{{-- <img src="{{ Vite::asset('resources/img/img.jpg') }}"  alt=""> --}}
@endsection
