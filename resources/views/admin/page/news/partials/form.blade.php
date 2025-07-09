@php $isEdit = isset($item) && $item->id; @endphp

<form method="POST" action="{{$isEdit ? route('admin.news.update', $item->id) : route('admin.news.store')}}"  enctype="multipart/form-data" id="formAjax">
    @csrf

        <div class="tab-content mt-3" id="languageTabsContent">
            <div class="mb-6">
                <label for="">Şəkil</label>
                <input type="file" name="image" class="form-control" id="imageInput"><br>
                <img src="{{$isEdit ? get_image($item->image) : ''}}" class="td-image">
            </div>
            <div class="mb-6">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" id="title"><br>
            </div>
            <div class="mb-6">
                <label for="">Description</label>
                <input type="text" name="description" class="form-control" id="description"><br>
            </div>
            <div class="mb-3 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary waves-effect waves-light" id="save-form-btn">
                    Yadda saxla
                </button>
            </div>
            <div id="spinner" style="display:none;" class="text-center">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Yüklənir...</span>
                </div>
            </div>
</form>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const typeSelect = document.getElementById('type');
        const coverImgInput = document.getElementById('coverImgInput');

        typeSelect.addEventListener('change', function () {
            if (typeSelect.value == '2') {
                coverImgInput.style.display = 'block';
            } else {
                coverImgInput.style.display = 'none';
            }
        });

        typeSelect.dispatchEvent(new Event('change'));
    });
</script>
