<style>
    @media print {
        body {
            margin: 0;
            background-color: #fff;
        }
        header, footer, aside, nav, form, iframe, .btn {
            display: none !important;
        }
    } 
    h4 {
        color: #fff;
    }

    h5 {
        color: #0033a1;
    }

    em {
        color: #c8102e;
        font-size: 14px;
    }

    .table thead th {
        border-bottom: 2px solid #0033a1 !important;
    }

    .table thead tr th {
        border-top: transparent !important;
    }

    .table tbody tr:last-child>* {
        border-bottom-color: transparent !important;
    }

    .table tbody tr:first-child {
        border-bottom-color: transparent !important;
    }
</style>

<section class="projects-section pt-5" id="setting">
    <div class="container">
        <!-- Featured Project Row-->
        <div class="row align-items-center no-gutters pb-5">
            <div class="col-xl-6 col-lg-6"><img class="img-fluid mb-3 mb-lg-0 shadow" src="{{ asset('img/set-expectations-min.jpg')}}" alt="setting-expectations" /></div>
            <div class="col-xl-6 col-lg-6">
                <div class="featured-text text-center text-lg-left">
                    <h4>Setting Expectations</h4>
                    <!-- <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p> -->
                    
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    What are the longest lead time items? 
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Generally, the longest lead time items are the appraisal & title. Borrowers seeking a speedy close should pay special attention to turning around these two items as expeditiously as possible.
                                </div>
                        </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Can the appraisal affect my rehab loan? 
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Yes, the lender is limited to a max ARV of 65%-75% in most cases. If the appraised ARV is returned lower than expected it cold affect the loan amount or kill the loan if very low.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    How fast can you close? 
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Average turn times once all documents have been verified and approved are generally 72 hours after the appraisal back.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Does ACRA require a personal guarantee
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Yes, all loans are guaranteed by an member of the entity who has 20% or more ownership in the entity.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Can I close in my personal name? 
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    No, all loans must close into an entity.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="text-center letter-banner">
            <h4 class="mx-auto py-1 pt-2">Turn Times</h4>
        </div>
        <table class="table">
            @foreach ($turnTimes->section as $turnTime)

            <thead>

                <tr>
                    <th scope="col">{{$turnTime->title}}</th>
                    <th scope="col"></th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td>{!! $turnTime->comments !!}</td>
                    <td>{{$turnTime->body}}</td>
                </tr>
                @if ($turnTime->subSection->count())
                @foreach($turnTime->subSection as $subSection)
                <tr>
                    <td>{{$subSection->title}}<br>
                        @if (!empty($subSection->comments))
                            {!! $subSection->comments !!}
                        @endif
                    </td>
                    <td>{{$subSection->body}}</td>
                </tr>
                @endforeach
                @endif

            </tbody>
            @endforeach

        </table>
        <br>
        <br>
        <p>
            *Turn times are estimates and may vary depending on certain factors, such as daily loan volume. The next business day will count as the first day of the stated turn time.
        </p>
        <br>
        <div class="text-right small">
            <p><em>Last updated EOD {{Carbon\Carbon::parse($turnTimes->section[0]->updated_at)->format('m-d-Y')}}</em></p>
        </div>
    </div> --}}
    
</section>