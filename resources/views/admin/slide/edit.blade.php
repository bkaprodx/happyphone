@extends('admin.layout')
@section('content')
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Slide</h5>
                <span>Quản lý Slide</span>
            </div>

            <div class="horControlB menu_action">
                <ul>
                    <li><a href="admin/slide/add">
                            <img src="source/backend/admin/images/icons/control/16/add.png" />
                            <span>Thêm mới</span>
                        </a></li>
                    <li><a href="admin/slide/view">
                            <img src="source/backend/admin/images/icons/control/16/list.png" />
                            <span>Danh sách</span>
                        </a></li>

                </ul>
            </div>

            <div class="clear"></div>
        </div>
    </div>

    <div class="line"></div>
    <!-- Message -->
    <div id="thonbao" style="display: none">
        @if(session('loi'))
            <p class="loi">{{ session('loi') }}</p>
        @endif
    </div>
    <!-- Main content wrapper -->
    <div class="wrapper">

        <!-- Form -->
        <form class="form" id="form" action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <fieldset>
                <div class="widget">
                    <div class="title">
                        <img src="source/backend/admin/images/icons/dark/edit.png" class="titleIcon" />
                        <h6>Chỉnh sửa Slide</h6>
                    </div>

                    <div class="formRow">
                        <label class="formLeft">Hình ảnh:<span class="req">*</span></label>
                        <div class="formRight">
                            <div class="left">
                                <div><img src="source/image/slide/{{$slide->image}}" width="350px"></div>
                                <div><input type="file" id="image" name="image" /></div>
                            </div>

                            <div name="image_error" class="clear error"></div>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="formSubmit">
                        <input type="submit" id="add" value="Chỉnh sửa" class="redB" />
                        <input type="reset" value="Hủy bỏ" class="basic" />
                    </div>
                    <div class="clear"></div>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="clear mt30"></div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            if($('.loi').length ){
                $.dialog({
                    theme: 'material',
                    title: '',
                    content: $('.loi').html(),
                    animationSpeed: 200,
                    boxWidth:30,
                    backgroundDismiss: true,
                });
            }
        })
    </script>
@endsection