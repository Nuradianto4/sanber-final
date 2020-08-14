@extends('layouts/user/master')
@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Pertanyaan</h3>
        <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
            <a href="{{ route('ownquestion.create') }}" class="btn-toggle-minified"><i
                    class="lnr lnr-plus-circle"></i></a>
        </div>
    </div>
    <div class="panel-body no-padding">
        <table class="table table-striped">
            
            <tbody>
                
                <div class="row">
        <div class="col-md-4">

            <!-- PANEL DEFAULT -->
            <div class="panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Nama User</h3>
                    
                </div>
                <div class="panel-body">
                    <h3>Judul Pertanyaan</h3>
                    <p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-primary">SHOW</button>
                </div>
            </div>
            <!-- END PANEL DEFAULT -->

        </div>
        
        <div class="col-md-4">

            <!-- PANEL NO CONTROLS -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Nama User</h3>
                </div>
                <div class="panel-body">
                    <h3>Judul Pertanyaan</h3>
                    <p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-primary">SHOW</button>
                </div>
            </div>
            <!-- END PANEL NO CONTROLS -->

        </div>

        <div class="col-md-4">

            <!-- PANEL WITH FOOTER -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Nama User</h3>
                </div>
                <div class="panel-body">
                    <h3>Judul Pertanyaan</h3>
                    <p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-primary">SHOW</button>
                </div>
            </div>
            <!-- END PANEL WITH FOOTER -->

        </div>
    </div>
               
            </tbody>
        </table>
    </div>
    <div class="panel-footer">
        <div class="row">
            <div class="col-md-6"><span class="panel-note"></span></div>
            <div class="col-md-6 text-right"></div>
        </div>
    </div>
</div>
@endsection
