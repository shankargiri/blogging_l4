<!-- Button trigger modal -->
<button class="btn btn-info" data-toggle="modal" data-target="#eventsModel">
    <i class="fa fa-plus"></i> Add Events:
</button>

<!-- Modal -->
<div class="modal fade" id="eventsModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Add Event Details!
                </h4>
            </div>
            <div class="modal-body">
                {{ Form::open(['method' => 'post', 'route' => 'events.store']) }}
                <div class="form-group">
                    {{ Form::label('event', 'Event Title::') }}
                    {{ Form::text('event', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('venue', 'Venue Name:') }}
                    {{ Form::text('venue', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('address', 'Street Address:') }}
                    {{ Form::text('address', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('date', 'Date:') }}
                    <input type="text" name="date" id="datepicker">
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