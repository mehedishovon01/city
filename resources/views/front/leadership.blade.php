@extends('front.layouts.base')
@section('contents')
    <div class="page-title-section" style="background-image: url({{ asset('public/fronts/img/bg/pagetitle.jpg') }});">
        <div class="container">
            <h1>Leadership</h1>
            {{-- <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
        </ul> --}}
        </div>
    </div>
    <div class="section-block">
        <div class="container">
            <div class="team-single">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-12">
                        <div class="team-single-img"> <img src="{{ asset('public/fronts/img/team/team-02.jpg') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-12">
                        <div class="team-single-text"> <span>Managing Director & CEO</span>
                            <h4>Ershad Hossain</h4>
                            {{-- <ul class="team-single-info">
                                <li><strong>Phone</strong><span>(+123) 123-456-789</span></li>
                                <li><strong>Gmail</strong><span>SpecThemes@gmail.com</span></li>
                            </ul> --}}
                            <div class="text-content mt-20">
                                <p>Bio above.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class="team-single">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-12">
                        <div class="team-single-img"> <img src="{{ asset('public/fronts/img/team/team-02.jpg') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-12">
                        <div class="team-single-text"> <span>Chief Operating Officer</span>
                            <h4>Shibly Amran</h4>
                            {{-- <ul class="team-single-info">
                                <li><strong>Phone</strong><span>(+123) 123-456-789</span></li>
                                <li><strong>Gmail</strong><span>SpecThemes@gmail.com</span></li>
                            </ul> --}}
                            <div class="text-content mt-20">
                                <p>Mr. Amran is a seasoned professional in fund management and PMD operation and has over 13
                                    years of experience. He is the Chief Operating Officer of City Bank Capital and plays a
                                    vigorous role in CBC’s operation and has led CBC to become one of the best investment
                                    banks in portfolio management in Bangladesh. During his tenure as the CIO and Head of
                                    Portfolio Management of City Bank Capital, Mr. Amran managed an AUM of BDT 1.5 billion.
                                    Prior to joining City Bank Capital, Mr. Amran worked in Prime Bank Investment Limited.
                                    <br>
                                    Mr. Amran has obtained numerous local and international training on financial valuation,
                                    investment banking, sales and leadership management. He has completed his Post
                                    Graduation from American International University-Bangladesh in Finance and graduation
                                    in Finance from North South University.
                                    <br>
                                    • Sajib Chakrabartty, Head of Finance & Company Secretary
                                    <br>
                                    Mr. Sajib Chakrabartty is the Head of Finance & Company Secretary of City Bank Capital.
                                    He has almost eight years of experience in City Bank Capital and over the years he has
                                    established his roles with efficient corporate strategies, professionalism and
                                    sincerity.
                                    <br>
                                    Mr. Chakrabartty has completed his post-graduation from National University having major
                                    in accounting. He has completed CA article ship from well renowned firm Hoda Vasi
                                    Chowdhury & Co registered under the Institute of Chartered Accountants of Bangladesh
                                    (ICAB).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
