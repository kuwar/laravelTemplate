<div class="modal fade" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <div class="modal-content delete-model">
            <div class="modal-header">
                <p class="heading lead">Delete {{ucfirst($name)}}</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>{{-- modal-header --}}
            <div class="modal-body">
                <div class="delete-msg">
                    <span>Are you sure you want to delete this {{$name}}?</span>
                </div>
                <div class="float-left">
                    <a href="#delete" class="btn btn-danger waves-effect btn-sm">Delete</a>
                    {{--<a href="{{route($name.'.delete',$id)}}" class="btn btn-danger waves-effect btn-sm">Delete</a>--}}
                </div>
                <div class="float-right">
                    <a type="button" class="btn btn-outline-danger waves-effect btn-sm" data-dismiss="modal">Cancel</a>
                </div>
            </div>{{-- modal-body --}}
        </div>{{-- modal-content --}}
    </div>{{-- modal-dialog --}}
</div><!-- Delete Modal-->