
    <div class="default-inp form-elem">
        <label for="description">Write your bid</label>
        <textarea name="description" id="description"
                  placeholder="Write your bid here"></textarea>
    </div>
    <div class="default-inp form-elem">
        <label for="files">Upload your attachments</label>
        <input type="file" multiple name="files[]" id="files">
    </div>

    <div class="form-elem">
        <button type="submit" class="btn btn-success btn-default">{{trans('bid.send')}}</button>
    </div>
