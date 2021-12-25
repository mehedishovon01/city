@extends('front.layouts.base')
@section('contents')
<div class="page-title-section" style="background-image: url({{ asset('public/fronts/img/bg/pagetitle.jpg') }});">
    <div class="container">
        <h1>About Us</h1>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
    </div>
</div>

<div class="section-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="pr-30-md">
                    <div class="section-heading">
                        <h4>Consulting Agency for every Business</h4>
                    </div>
                    <div class="section-heading-line-left"></div>
                    <div class="text-content-big mt-20">
                        <p class="text-justify">City Bank Capital is a top tier investment bank in Bangladesh and is a 100% subsidiary of The City Bank Limited. City Bank Capital has strong footprint in corporate advisory, equity and debt capital management and portfolio management. It is dedicated to creating strategic advantage for institutions and individuals by connecting clients with investment professionals and creating investment opportunities. CBC has wide coverage in Fintech, Energy, Pharma, Construction, Financial Institutions, Renewables, FMCG and Telco sector. CBC is also a member of Angel Investment Network, Bangladesh with keen interest in startup businesses. CBC is distinguished by its extensive capital market knowledge, local and international expertise, innovation and strong relationship with regulatory bodies, government agencies and state-owned and private banks.</p>
                        <p class="text-justify">CBC was founded in 2010 and is headquartered in Motijheel, Dhaka. CBC also has branches in Gulshan Avenue and in Chittagong. Our vision is to cater to international and local clients with investment banking and consulting solutions to sustain, enable and catalyze growth to clients and stakeholders. Our mission is to bring Bangladesh to the frontier of global finance.</p>
                        <p class="text-justify">Our focus is to do better and to give back to the community. Environmental, Social and Governance principles are vital to our corporate strategy. CBC is committed to achieving a sustainable future and has adopted sustainable development goals since the beginning of its journey. Gender Equality, Decent Work and Economic Growth, Industry, Innovation and Infrastructure, and Sustainable Cities and Communities are key sustainable development goals that define us.</p>
                    </div>
                    {{-- <div class="mt-20">
                        <ul class="primary-list">
                            <li><i class="fa fa-check-square"></i>Immigration consultant, Information technology
                                consulting</li>
                            <li><i class="fa fa-check-square"></i>Consultant pharmacist Creative consultant</li>
                            <li><i class="fa fa-check-square"></i>Employment consultant Environmental consultant
                            </li>
                            <li><i class="fa fa-check-square"></i>Independent contractor, Permatemp</li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            {{-- <div class="col-md-6 col-sm-6 col-12"> <img src="{{ asset('fronts/img/content/home5.jpg') }}"
                    class="rounded-border shadow-primary mt-15-xs" alt="img"> </div> --}}
        </div>
    </div>
</div>

<div class="section-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-12"> <img src="{{ asset('public/fronts/img/bg/map.png') }}" class="mb-15-xs" alt="map"> </div>
            <div class="col-md-5 col-sm-6 col-12 offset-md-1">
                <div class="section-heading">
                    <h5>We are Available Worldwide</h5>
                    <div class="section-heading-line-left"></div>
                </div>
                <div class="text-content mt-25">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="mt-25"> <a href="#" class="primary-button button-sm">Contact Us</a> </div>
            </div>
        </div>
    </div>
</div>

@endsection