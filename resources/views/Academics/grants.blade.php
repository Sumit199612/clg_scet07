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
                <p><h3><span style="color: #000080;">Details of R & D grants (AICTE / GUJCOST ) received by SCET</span></h3></p>
            <table class="table table-bordered">
                <tbody>
                <tr>
                <td width="78"><strong>Academic Year</strong>
                <p><strong>&nbsp;</strong></p></td>
                <td width="90"><strong>Granting Agency</strong></td>
                <td width="150"><strong>Coordinator</strong></td>
                <td width="150"><strong>Amount Granted</strong>
                <p><strong>(INR)</strong></p></td>
                <td width="67"><strong>Name of grant</strong></td>
                </tr>
                <tr>
                <td width="78">2018-19</td>
                <td width="90">GUJCOST</td>
                <td width="150">Prof. Mayuri Mehta</td>
                <td width="150">40,000</td>
                <td width="67">Workshop grant
                </td>
                </tr>
                <tr>
                <td width="78">2018-19</td>
                <td width="90">GUJCOST</td>
                <td width="150">Prof. Vandana Joshi</td>
                <td width="150">40,000</td>
                <td width="67">Workshop grant
                </td>
                </tr>
                <tr>
                <td width="78">2018-19</td>
                <td width="90">GUJCOST</td>
                <td width="150">Dr. Chirag Pauwala</td>
                <td width="150">50,000</td>
                <td width="67">Seminar grant</td>
                </tr>
                <tr>
                <td width="78">2018-19</td>
                <td width="90">GUJCOST</td>
                <td width="150">Prof. Mayuri Mehta</td>
                <td width="150">20,000</td>
                <td width="67">Workshop grant
                </td>
                </tr>
                <tr>
                <td width="78">2018-19</td>
                <td width="90">GUJCOST</td>
                <td width="150">Prof. Mayuri Mehta</td>
                <td width="150">20,000</td>
                <td width="67">Workshop grant
                </td>
                </tr>
                <tr>
                <td width="78">2018-19
                </td>
                <td width="90">GUJCOST</td>
                <td width="150">Prof. Mohan Patel</td>
                <td width="150">30,000</td>
                <td width="67">Seminar grant</td>
                </tr>
                <tr>
                <td width="78">2018-19
                </td>
                <td width="90">GUJCOST</td>
                <td width="150">Prof. Srujal Rana</td>
                <td width="150">30,000</td>
                <td width="67">Seminar grant</td>
                </tr>
                <tr>
                <td width="78">2018-19
                </td>
                <td width="90">GUJCOST</td>
                <td width="150">Dr. Chirag Naik</td>
                <td width="150">30,000</td>
                <td width="67">Seminar grant</td>
                </tr>
                <tr>
                <td width="78">2016-17</td>
                <td width="90">GUJCOST</td>
                <td width="150">Prof. Mayuri Mehta</td>
                <td width="150">40,000</td>
                <td width="67">Workshop grant</td>
                </tr>
                <tr>
                <td width="78">2015-16</td>
                <td width="90">GUJCOST</td>
                <td width="150">Dr. Hiren Patel</td>
                <td width="150">4,10,000</td>
                <td width="67">Minor Research project</td>
                </tr>
                <tr>
                <td width="78">2015-16</td>
                <td width="90">GUJCOST</td>
                <td width="150">Dr. Chirag Pauwala</td>
                <td width="150">2,05,000</td>
                <td width="67">Minor Research project</td>
                </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection