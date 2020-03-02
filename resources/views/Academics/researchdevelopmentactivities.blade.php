@extends('layouts.app')
@section('content')
<style>
.event-list {
    padding: 20px 20px 100px;
    border: 0px solid #333333;
}
</style>

<section class="clearfix-page">
    <div class="container">
        <div class="row">
           <div class="col-md-3 col-sm-12">
                <div class="event-details-sidebar">
                    <div class="enother-event-details">
                        <div class="event-list">
                            <b>{!! menu('Academicssubmenus') !!}</b>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p><h3><span style="color: #000080;">Vision</span></h3></p>
                            <p style="text-align: justify;"><span style="font-size: 10pt; font-family: georgia, palatino, serif;"><span style="color: #0d0d0d;">To work as a catalyst in promoting the research and development activities at SCET and to establish SCET as one of the leading technical institutes for research activities in the state.</span></span></p>

                        </div>
                    </div>
                    <div class="wpb_text_column wpb_content_element ">
                        <p>
                            <h3>
                                <span style="color: #000080;">Mission</span>
                            <h3>
                        </p>
                        <li style="text-align: justify;"><span style="font-size: 10pt; font-family: georgia, palatino, serif;"><span style="color: #0d0d0d;">To promote research and development activities in the institution.</span></span></li><br>
                        <li style="text-align: justify;"><span style="font-size: 10pt; font-family: georgia, palatino, serif;"><span style="color: #0d0d0d;">To motivate the students and the faculty members to keep themselves updated with the latest advancements in the technological areas.</span></span></li><br>
                        <li style="text-align: justify;"><span style="font-size: 10pt; font-family: georgia, palatino, serif;"><span style="color: #0d0d0d;">To identify various government, semi government. and National/International organizations for academic and research collaborations.</span></span></li><br>
                        <li style="text-align: justify;"><span style="font-size: 10pt; font-family: georgia, palatino, serif;"><span style="color: #0d0d0d;">To enhance interaction and cooperation between researchers for interdisciplinary and multi-disciplinary work.</span></span></li><br>
                        <li style="text-align: justify;"><span style="font-size: 10pt; font-family: georgia, palatino, serif;"><span style="color: #0d0d0d;">To help in establishing the links and seeking grants from various government, semi government and private agencies for promoting and supporting the research work.</span></span></li><br>
                        <li style="text-align: justify;"><span style="font-size: 10pt; font-family: georgia, palatino, serif;"><span style="color: #0d0d0d;">To facilitate in furnishing advance infrastructure and library with latest journals and periodicals containing latest references on the advance topics for working on various research projects.</span></span></li><br>
                        <li style="text-align: justify;"><span style="font-size: 10pt; font-family: georgia, palatino, serif;"><span style="color: #0d0d0d;">To inculcate the spirit and culture of research amongst  the students and faculty members for publications/patent of their research work in the conferences and journals of repute.</span></span></li><br>
                        <li style="text-align: justify;"><span style="font-size: 10pt; font-family: georgia, palatino, serif;"><span style="color: #0d0d0d;">To work towards development of SCET as a global R&D centre.</span></span></li><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection