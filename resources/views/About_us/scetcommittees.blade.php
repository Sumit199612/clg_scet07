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
           <div class="col-md-3 col-sm-12">
                <div class="event-details-sidebar">
                    <div class="enother-event-details">
                        <div class="event-list">
                            <b>{!! menu('AboutusScetcomeeteesMenus') !!}</b>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
            <table class="table table-bordered" cellspacing="0" cellpadding="5" style="width: 75%">
                <tbody>
                <tr>
                <td colspan="2" bgcolor="#999999"><b>COMMITTEES:</b></td>
                </tr>
                <tr>
                <td colspan="2"><b>Internal Committees<br>
                </b></td>
                </tr>
                <tr>
                <td colspan="2"><b>Collegiate Women’s Development Committee</b></td>
                </tr>
                <tr>
                <td colspan="2"><b>Anti-Ragging Cell</b></td>
                </tr>
                <tr>
                <td colspan="2"><b>Grievance Redressal Committee</b></td>
                </tr>
                <tr>
                <td colspan="2"><b>Disability Resource Center</b></td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</section>
@endsection