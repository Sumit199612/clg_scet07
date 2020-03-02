@extends('layouts.app')
@section('content')
<style>
.event-list {
    padding: 20px 20px 100px;
    border: 0px solid #333333;
}
</style>
<section class="events-details-ara ptb-80">
    <div class="container">
        <div class="row">
            <div>
            <p style="text-align: justify;"><span style="font-family: georgia, palatino, serif;"><span style="color: #0d0d0d;">
                <h3>
                    <span style="color: #000000;">Courses offered at Sarvajanik College of Engineering & Technology are as follows :</span><br><br>
                </h3>
            </p></span></span>
                <table class="table table-bordered">
                    <tbody>
                    <tr bgcolor="grey">
                    <td width="52"><strong> Sr. </strong><strong> No.</strong></td>
                    <td width="68"><strong> GTU Branch Code</strong></td>
                    <td width="196"><strong> Branch Name</strong></td>
                    <td width="140"><strong>Course Duration</strong></td>
                    <td width="85"><strong> Intake</strong><strong> (2014-15)</strong></td>
                    </tr>
                    <tr bgcolor="#6D96CF">
                    <td colspan="5" width="541"><strong> UG Courses</strong></td>
                    </tr>
                    <tr>
                    <td width="52">1</td>
                    <td width="68">5</td>
                    <td width="196">Chemical Engineering</td>
                    <td rowspan="11" width="140">4 years(8 Semesters)</td>
                    <td width="85">60</td>
                    </tr>
                    <tr>
                    <td width="52">2</td>
                    <td width="68">6</td>
                    <td width="196">Civil Engineering</td>
                    <td width="85">60</td>
                    </tr>
                    <tr>
                    <td width="52">3</td>
                    <td width="68">7</td>
                    <td width="196">Computer Engineering (1<sup>st</sup> Shift)</td>
                    <td width="85">60</td>
                    </tr>
                    <tr>
                    <td width="52">4</td>
                    <td width="68">7</td>
                    <td width="196">Computer Engineering (2<sup>nd</sup> Shift)</td>
                    <td width="85">60</td>
                    </tr>
                    <tr>
                    <td width="52">5</td>
                    <td width="68">9</td>
                    <td width="196">Electrical Engineering (1<sup>st</sup> Shift)</td>
                    <td width="85">60</td>
                    </tr>
                    <tr>
                    <td width="52">6</td>
                    <td width="68">9</td>
                    <td width="196">Electrical Engineering (2<sup>nd</sup> Shift)</td>
                    <td width="85">60</td>
                    </tr>
                    <tr>
                    <td width="52">7</td>
                    <td width="68">11</td>
                    <td width="196">Electronics &amp; Communication Engineering</td>
                    <td width="85">60</td>
                    </tr>
                    <tr>
                    <td width="52">8</td>
                    <td width="68">16</td>
                    <td width="196">Information Technology</td>
                    <td width="85">60</td>
                    </tr>
                    <tr>
                    <td width="52">9</td>
                    <td width="68">17</td>
                    <td width="196">Instrumentation &amp; Control Engineering</td>
                    <td width="85">60</td>
                    </tr>
                    <tr>
                    <td width="52">10</td>
                    <td width="68">29</td>
                    <td width="196">Textile Technology</td>
                    <td width="85">60</td>
                    </tr>
                    <tr>
                    <td width="52">11</td>
                    <td width="68">19</td>
                    <td width="196">Mechanical Engineering</td>
                    <td width="85">60</td>
                    </tr>
                    <tr bgcolor="#6D96CF">
                    <td colspan="5" width="541"><strong> PG Courses</strong></td>
                    </tr>
                    <tr>
                    <td width="52">1</td>
                    <td width="68">2</td>
                    <td width="196">Computer Engineering</td>
                    <td rowspan="5" width="140">2 years(4 Semesters)</td>
                    <td width="85">24</td>
                    </tr>
                    <tr>
                    <td width="52">2</td>
                    <td width="68">4</td>
                    <td width="196">Electronics &amp; Communication Engineering</td>
                    <td width="85">24</td>
                    </tr>
                    <tr>
                    <td width="52">3</td>
                    <td width="68">7</td>
                    <td width="196">Electrical Engineering</td>
                    <td width="85">24</td>
                    </tr>
                    <tr>
                    <td width="52">4</td>
                    <td width="68">17</td>
                    <td width="196">Environmental Engineering</td>
                    <td width="85">18</td>
                    </tr>
                    <tr>
                    <td width="52">5</td>
                    <td width="68">48</td>
                    <td width="196">Civil (Town &amp; Country Planning)</td>
                    <td width="85">24</td>
                    </tr>
                    <tr>
                    <td width="52">6</td>
                    <td width="68">93</td>
                    <td width="196">Master of Computer Application</td>
                    <td width="140">3 years(6 Semesters)</td>
                    <td width="85">60</td>
                    </tr>
                    <tr>
                    <td width="52">7</td>
                    <td width="68">20</td>
                    <td width="196">Structural Engineering</td>
                    <td width="140">2 years (4 Semesters)</td>
                    <td width="85">24</td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</section>
@endsection