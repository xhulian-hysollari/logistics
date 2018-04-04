
    <div class="bottommargin-sm">
        <label for="description">Write your bid</label>
        <textarea name="description" id="description" class="required sm-form-control input-block-level short-textarea"
                  placeholder="Write your bid here"></textarea>
    </div>
    <div class="bottommargin-sm">
        <label for="files">Upload your attachments</label>
        <input type="file" class="required sm-form-control input-block-level" multiple name="files[]" id="files">
    </div>

    <div class="form-elem">
        <button type="submit" class="button button-small button-3d nomargin">{{trans('bid.send')}}</button>
    </div>
