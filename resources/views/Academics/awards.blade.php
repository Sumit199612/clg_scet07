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
                <p><h3><span style="color: #000080;">Details of Awards received by Students</span></h3></p>
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                    <td width="45"><strong>Sr. No</strong></td>
                    <td width="113"><strong>Name of Student</strong></td>
                    <td width="95"><strong>Branch Year and Sem.</strong></td>
                    <td width="123"><strong>Event Name</strong>
                    <p><strong><u>&nbsp;</u></strong></p></td>
                    <td width="162"><strong>Event details</strong>
                    </td>
                    <td width="78"><strong>Winning position</strong></td>
                    <td width="78"><strong>Details</strong></td>
                    </tr>
                    <tr>
                    <td width="45">1.</td>
                    <td width="113">Liza Pradhan, Grishma Dihora, Charmi Sheladiya, Hemali Solanki, Riddhi Vagrecha</td>
                    <td width="95">Information Technology, BE IV, 7th Sem</td>
                    <td width="123">SSIP Grant from GTU</td>
                    <td width="162">·&nbsp;e-PUC Go Green</td>
                    <td style="text-align: center;" width="78">–</td>
                    <td style="text-align: center;" width="78">Rs.35000/-</td>
                    </tr>
                    <tr>
                    <td width="45">2.</td>
                    <td width="113">Vijay Raj, Shivani Sharma,Vedik Dave,Ahmed Bhesaniya</td>
                    <td width="95">Computer Engineering, BE IV, 8th Sem</td>
                    <td width="123">CSI Organized Event : Innovations 2019</td>
                    <td width="162">·&nbsp;Students of BE IV (CO) won the First Prize in the 7th NATIONAL PROJECT AWARD: INNOVATION 2019 organized by CSI .</td>
                    <td style="text-align: center;" width="78">1</td>
                    <td style="text-align: center;" width="78">–</td>
                    </tr>
                    <tr>
                    <td width="45">3.</td>
                    <td width="113">Chabadiya Jemishaben Pravinbhai, Lakhani Priya Rajeshbhai, Vama Ashok Patel</td>
                    <td width="95">Computer Engineering, BE IV, 8th Sem</td>
                    <td width="123">SSIP Grant through GTU</td>
                    <td width="162">· Received SSIP Grant team “ANAVIEWER”</td>
                    <td style="text-align: center;" width="78">–</td>
                    <td style="text-align: center;" width="78">–</td>
                    </tr>
                    <tr>
                    <td width="45">4.</td>
                    <td width="113">Agarwal Megha Nirmalkumar, Chauhan Maitry Kamleshkumar,Hunny Vankawala, Mangal Mahima Bajrang, Tulsiani Jaya Hiranand</td>
                    <td width="95">Computer Engineering, BE IV, 8th Sem</td>
                    <td width="123">SSIP Grant through GTU</td>
                    <td width="162">· Received SSIP Grant team “Augmented Reality for Education”</td>
                    <td style="text-align: center;" width="78">–</td>
                    <td style="text-align: center;" width="78">–</td>
                    </tr>
                    <tr>
                    <td width="45">5.</td>
                    <td width="113">Asodariya Tushar Savajihai, Lathiya Hardikkumar Pravinbhai, Pansuriya Hiren Gobarbhai, Parghi Renish Anantray</td>
                    <td width="95">Computer Engineering, BE IV, 8th Sem</td>
                    <td width="123">SSIP Grant through GTU</td>
                    <td style="text-align: left;" width="162">· Received SSIP Grant team “IOT Water Contamination”</td>
                    <td style="text-align: center;" width="78">–</td>
                    <td style="text-align: center;" width="78">–</td>
                    </tr>
                    <tr>
                    <td width="45">6.</td>
                    <td width="113">Sannidhi Bookseller<br>
                    Ishita Joshi<br>
                    Milauni Desai<br>
                    Rucha Mohod</td>
                    <td width="95">Electronics and Communication Engineering
                    <p>BE IV, 8<sup>th</sup>sem</p></td>
                    <td width="123">SSIP grant through GTU</td>
                    <td width="162">· GPU based traffic sign detection and recognition”</td>
                    <td style="text-align: center;" width="78">–</td>
                    <td width="78">Rs. 85000/-</td>
                    </tr>
                    <tr>
                    <td width="45">7.</td>
                    <td width="113">Sanjay Suthar, Naman Agarwal,
                    <p>Harshita Jain,</p>
                    <p>Juhi Gupta</p></td>
                    <td width="95">Electronics and Communication Engineering
                    <p>BE IV, 8<sup>th</sup>sem</p></td>
                    <td width="123">AICTE-ECI Chhatra Vishwakarma Awards-2017
                    </td>
                    <td width="162">
                    <p style="text-align: left;">· Theme of Event : ‘To convert Existing Institute into smart institute using innovative approaches ‘</p>
                    <p>· Project Name : Smart Library Management System</p>
                    <p>· Three Rounds</p>
                    <p>· Total Number of Team participated : 1000</p>
                    <p>· Venue :AICTE headquarter, Delhi</p>
                    <p>· Date : 19 septemeber,2017</p></td>
                    <td width="78">3<sup>rd</sup> Rank</td>
                    <td style="text-align: center;" width="78">–</td>
                    </tr>
                    <tr>
                    <td width="45">8.</td>
                    <td width="113">Sanjay Suthar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Naman Agarwal
                    <p>Harshita Jain</p>
                    <p>PratitiGodara</p>
                    </td>
                    <td width="95">Electronics and Communication Engineering
                    <p>BE IV, 8<sup>th</sup>sem</p></td>
                    <td width="123">e-Yantra IDEA Competition by IIT Bomay (eYIC)
                    </td>
                    <td width="162">· Theme of Event : ‘To build Innovative project‘
                    <p>· Project name : Quality Sorting of Fruits</p>
                    <p>· four Rounds</p>
                    <p>· Total Number of Team participated : 500</p>
                    <p>· Venue : IITRAM, Maninagar, Gujarat</p>
                    <p>· Date : 22<sup>nd</sup> -24<sup>th</sup>March,2018</p></td>
                    <td width="78">Qualified till Regional finals Round
                    <p>(3<sup>rd</sup> Round)</p></td>
                    <td style="text-align: center;" width="78">–</td>
                    </tr>
                    <tr>
                    <td width="45">9.</td>
                    <td width="113">Tanay Bhalani
                    </td>
                    <td width="95">Electronics and Communication Engineering
                    <p>BE IV, 8<sup>th</sup>sem</p></td>
                    <td width="123">Integrated Technology Olympiad&nbsp; by TCS (2017)</td>
                    <td width="162">· Theme of Event : ‘To build Innovative project
                    <p>· Project name : 3d container Loading</p>
                    <p>· four Rounds</p>
                    <p>· Total Number of Team participated : 500</p>
                    <p>· Venue : College of Engineering, Pune</p>
                    <p>· Date : 21 Jan, 2017</p></td>
                    <td width="78">1<sup>st</sup> Rank
                    </td>
                    <td style="text-align: center;" width="78">–</td>
                    </tr>
                    <tr>
                    <td width="45">10.</td>
                    <td width="113">Tanay Prakashbhai Bhalani
                    </td>
                    <td width="95">Electronics and Communication Engineering
                    <p>BE IV, 8<sup>th</sup>sem</p></td>
                    <td width="123">TCS codevita season 6 (2017)
                    </td>
                    <td width="162">· Theme of Event : ‘To solve given real life problem using any programming language’
                    <p>· Two Rounds</p></td>
                    <td width="78">Selected for TCS placement with 6.33 per annum (INR)</td>
                    <td style="text-align: center;" width="78">–</td>
                    </tr>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
</section>
@endsection
