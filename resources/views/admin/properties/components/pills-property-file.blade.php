<div class="tab-pane fade" id="pills-property-file" role="tabpanel" aria-labelledby="pills-property-file-tab">
    <div class="shadow-sm p-2">
        <form method="POST" action="{{ route('properties.file', $properties->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="pdf_attachment" class="col-form-label">PDF Attachment</label>
                <input type="file" class="mb-2 form-control form-control-sm" id="pdf_attachment"
                    name="pdf_attachment" accept="application/pdf" />

                @error('pdf_attachment')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <input type="submit" class="btn btn-sm btn-info waves-effect waves-light" value="Add" />
        </form>
    </div>
    <hr>
    <div>
        @if ($properties->file_attachment)
            <div class="mb-2">
                <a href="{{ asset($properties->file_attachment) }}" target="_blank" class="btn btn-sm btn-success">
                    View PDF
                </a>

                <form action="{{ route('properties.file.delete', $properties->id) }}" method="POST"
                    class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this PDF?');">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-danger">Delete PDF</button>
                </form>
            </div>
        @endif
    </div>
</div>
