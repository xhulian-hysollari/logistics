<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="type">Post Type</label>
                    <select name="type" id="type">
                        <option value="0"> Legal</option>
                        <option value="1"> Statement</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="title_sq">Titulli (SQ)</label>
                    <input type="text" class="form-control" id="title_sq" name="title_sq" placeholder="Titulli"
                           value="{{ isset($result->getTranslation('sq')->title) ? $result->getTranslation('sq')->title : null }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="title_en">Title (EN)</label>
                    <input type="text" class="form-control" id="title_en" name="title_en" placeholder="Title"
                           value="{{ isset($result->getTranslation('en')->title) ? $result->getTranslation('en')->title : null }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="content_sq">Permbajtja (SQ)</label>
                    <textarea class="form-control" id="content_sq" name="content_sq"
                              placeholder="Permbajtja"> {{isset($result->getTranslation('sq')->content) ? $result->getTranslation('sq')->content : null}} </textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="content_en">Content (EN)</label>
                    <textarea class="form-control" id="content_en" name="content_en"
                              placeholder="Content"> {{isset($result->getTranslation('sq')->content) ? $result->getTranslation('sq')->content : null}} </textarea>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>