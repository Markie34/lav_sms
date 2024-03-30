
<div class="col-m-12">
    <!-- Your upload form goes here -->
    <form action="{{ route('uploadMaterials.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-flex flex-column">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="w-50">
        </div>
        <div class="d-flex flex-column">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="w-50"></textarea>
        </div>
        <div>
            <label for="file">Choose file:</label>
            <input type="file" name="file" id="file">
        </div>
        <div class="py-4">
            <button type="submit" class="bg-success border-0 py-2 px-2 w-25">Upload</button>
        </div>
    </form>
</div>

