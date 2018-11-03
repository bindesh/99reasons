@extends('layouts.master')
@section('content')
    <button type="button" class="btn btn-primary btn-fw add_job">Add new Job</button>
    @include('jobs.jobs_info')

    <div class="modal fade" id="add_jobs">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span></button>

                </div>

                <div class="modal-body jobs_form_body">


                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <a href="javascript:;" class="btn btn-default save_jobs">Save changes</a>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    L̥
@endsection
@push('scripts')
    <script src="{!! asset('js/jobs.js') !!}"></script>
@endpush