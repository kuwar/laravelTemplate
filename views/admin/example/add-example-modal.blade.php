<div class="modal fade" id="addcourse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info modal-lg" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Add Example</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <form class="col-md-12" method="POST" name="course_form" action=""
                      enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group row md-form">
                                <label for="name"
                                       class="col-md-12 col-form-label text-md-left">Name</label>
                                <input id="name"
                                       class="form-control{{ $errors->has('name')? ' is-invalid' : '' }}"
                                       type="text" name="heading" value="{{old('name')}}" required="required"/>
                                @if($errors->has('name'))
                                    <span class="invalid-feedback">
                                         <strong>{{$errors->first('name')}}</strong>
                                       </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group register-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="add_to_ahq"
                                           id="add_to_ahq">
                                    <label for="add_to_ahq" class="grey-text"><span class="blue-text"
                                                                                    id="add_to_ahq_label">Add to Academy HQ</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group row md-form">
                                <label for="course_heading"
                                       class="col-md-12 col-form-label text-md-left">Heading</label>
                                <input id="course_heading"
                                       class="form-control{{ $errors->has('heading')? ' is-invalid' : '' }}"
                                       type="text" name="heading" value="{{old('heading')}}" required="required"/>
                                @if($errors->has('heading'))
                                    <span class="invalid-feedback">
                                         <strong>{{$errors->first('heading')}}</strong>
                                       </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group md-form">
                                <input id="course_image"
                                       class="form-control{{ $errors->has('image')? ' is-invalid' : '' }}"
                                       type="file" name="image" value="{{old('image')}}" accept="image"/>
                                @if($errors->has('image'))
                                    <span class="invalid-feedback">
                                             <strong>{{$errors->first('image')}}</strong>
                                           </span>
                                @endif
                                <input type="hidden" name="image_url" id="image_url" value="{{old('image_url')}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row md-form text-editor">
                        <label for="course_description"
                               class="col-md-12 col-form-label text-md-left">Description</label>
                        <textarea id="course_description"
                                  class="form-control md-textarea{{ $errors->has('description')? ' is-invalid' : '' }}"
                                  type="text-box" name="description"
                                  required="required">{{old('description')}}</textarea>
                        @if($errors->has('description'))
                            <span class="invalid-feedback">
                                 <strong>{{$errors->first('description')}}</strong>
                               </span>
                        @endif
                    </div>

                    <div class="row float-right">
                        <div class="add-btn">
                            <button type="button"
                                    class="btn btn-outline-primary waves-effect btn-sm">Create
                            </button>

                        </div>
                    </div>

                </form>
            </div>{{-- modal-body --}}
        </div>{{-- modal-content --}}
    </div>{{-- modal-dialog --}}
</div>{{-- modal --}}
