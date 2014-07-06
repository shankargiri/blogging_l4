<!-- Button trigger modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    <i class="fa fa-plus"></i> Start Thread:
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Start a Thread!!
                </h4>
            </div>
            <div class="modal-body">
                {{ Form::open(['method' => 'post', 'route' => 'threads.store']) }}
                   <!--Topic Form Input -->
                   <div class="form-group">
                       {{ Form::label('topic', 'Topic:') }}
                       {{ Form::text('topic', null, ['class' => 'form-control']) }}
                   </div>
                <div class="form-group">
                    {{ Form::label('tag', 'Tag:') }}
                    {{ Form::select('tag_id', $tag_name_selector, array_values($tag_name_selector)[0]) }}
                </div>
                <div class="form-group">
<!--                   -->
                </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {{ Form::open() }}

            </div>
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--                <button type="button" class="btn btn-primary">Save changes</button>-->
<!--            </div>-->
        </div>
    </div>
</div>