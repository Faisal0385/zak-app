<div class="tab-pane fade" id="pills-property-video" role="tabpanel" aria-labelledby="pills-property-video-tab">
    <div class="shadow-sm p-2">
        <form method="POST" action="{{ route('properties.video', $properties->id) }}">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="video_url" class="col-form-label">Video URL</label>
                    <div class="form-group">
                        <textarea type="text" name="video_url" id="video_url" rows="5" class="form-control form-control-sm"
                            placeholder="Video URL">{{ $properties->video_url }}</textarea>
                    </div>
                </div>
            </div>
            <br>
            <input type="submit" class="btn btn-sm btn-info waves-effect waves-light" value="Add" />
        </form>
    </div>
</div>
