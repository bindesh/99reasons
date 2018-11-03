<div class="col-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"></h4>
            <p class="card-description">

            </p>
            <form class="forms-sample">
                <input type="hidden" value="{!! !empty($job_data->id)?$job_data->id:'' !!}" name="id" class="job_id">
                <div class="form-group row">
                    <label for="job_name" class="col-sm-3 col-form-label">Job name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="job_name" placeholder="Enter Job name"
                               name="job_name"
                        value="{!! !empty($job_data->job_name)?$job_data->job_name:'' !!}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="job_name" class="col-sm-3 col-form-label">Job name</label>
                    <div class="col-sm-9">
                        <textarea name="job_description" class="form-control" placeholder="Enter Job Description">{!! !empty($job_data->job_description)?$job_data->job_description:'' !!}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="category_id" class="col-sm-3 col-form-label">Category name</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="category_id" name="category_id">
                            <option value="">Please select category</option>
                            @foreach($all_category as $cat)
                            <option value="{!! $cat->id !!}"
                            {!! (!empty($job_data->category_id) && $job_data->category_id==$cat->id)?'selected':'' !!}>{!! $cat->category_ame !!}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>