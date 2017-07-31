@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.quiz.set.management') . ' | ' . trans('labels.backend.quiz.set.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.quiz.set.management') }}
        <small>{{ trans('labels.backend.quiz.set.create') }}</small>
    </h1>
@endsection

@section('content')
    <form method="POST" action="{{ route('admin.quiz.sets.store')}}" accept-charset="UTF-8" class="form-horizontal" role="form" id="edit-set">
        {{ csrf_field() }}
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.quiz.set.create') }}</h3>
                <div class="box-tools pull-right">
                    @include('backend.quiz.includes.partials.question-set-header-buttons')
                </div>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">{{ trans('validation.attributes.backend.quiz.set.name') }}</label>
                    <div class="col-lg-10">
                        <input class="form-control" maxlength="191" required="required" placeholder="{{ trans('validation.attributes.backend.quiz.set.name') }}" name="name" type="text" id="name" value='{{ old('name') }}'>
                    </div>
                </div>
                <div class="form-group">
                    <label for="year" class="col-lg-2 control-label">Select Year</label>
                    <div class="col-lg-10">
                        <select class="form-control" id="year" name="year" placeholder='Select Year when this question was published'>

                            <option disabled=disabled value="">Select Year</option>
                            <?php $yearFlag=false?>
                            @for($year=1950;$year<=date("Y");$year++)
                                <option value="{{ $year }}"  @if($year == old('year')) <?php $yearFlag=true?> selected='selected' @elseif($year == 2017 && $yearFlag==false) selected='selected' @endif>{{ $year }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="board" class="col-lg-2 control-label">Select Board</label>
                    <div class="col-lg-10">
                        <select class="form-control" maxlength="191" required="required" id="board" name="board" placeholder='Select Board:'>
                            <option disabled="disabled" value="">Select Board</option>
                            @foreach($boards as $board)
                                <option value="{{ $board->id }}" {{ $board->id == old('board')? 'selected=selected': '' }} >{{ $board->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="rule" class="col-lg-2 control-label">Select Rule</label>
                    <div class="col-lg-10">
                        <select class="form-control" maxlength="191" required="required" id="rule" name="rule">
                            <option disabled="disabled" value="">Select Rule</option>
                            @foreach($rules as $rule)
                                <option value="{{ $rule->id }}" {{ $rule->id == old('rule')? 'selected=selected' : '' }} >{{ $rule->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div id='question_wrapper'>
            <div class="box box-success" class='sort hndle'>
                <div class="box-header with-border">
                    <h3 class="box-title">Questions Management</h3>
                    <div class="box-tools pull-right">
                    </div>
                </div>
                <div class="box-body">
                    <p>Generate Questions From Here:</p>
                    <div class="form-group">
                        <label class='col-lg-2 control-label'>Total Number Of Question:</label>
                        <div class="col-lg-10">
                            <input type="text" class='form-control' id='question_generator_question_number' value='100'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class='col-lg-2 control-label'>Total Number of Answers:</label>
                        <div class="col-lg-10">
                            <input type="text" class='form-control' id='question_generator_answer_number' value='4'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class='col-lg-2 control-label'>Difficulty:</label>
                        <div class="col-lg-10">
                            <input type="text" class='form-control' id='question_generator_difficulty' value='Moderate'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class='col-lg-2 control-label'>Marks:</label>
                        <div class="col-lg-10">
                            <input type="text" class='form-control' id='question_generator_marks' value='5'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class='col-lg-2 control-label'>Time(seconds):</label>
                        <div class="col-lg-10">
                            <input type="text" class='form-control' id='question_generator_time' value='60'>
                        </div>
                    </div>
                    <button class='btn btn-primary question_generator_generate'>Generate</button>
                </div>
            </div>
            <div class="questions" id='questions'>
            </div>
        </div>
        <div class="box box-success">
            <div class="box-body">
                <div class="pull-left">
                    <a href="{{ route('admin.quiz.sets.index') }}" class="btn btn-danger btn-xs">Cancel</a>
                </div>
                <div class="pull-right">
                    <input class="btn btn-success btn-xs" type="submit" value="Create">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </form>
@endsection

@section('after-scripts')
<script src="/js/handlebars.min.js"></script>
<script id='question_template' type='text/x-handlebars-template'>
    <div class="question" data-question='@{{question_number}}'>
        <div class="box box-alert">
            <div class="box-body">
                 <div class="question_wrapper">
                    <div class='question-details form-group row'>
                        <div class="col-md-4" >
                            <select name="question[@{{question_number}}][difficulty]" class='form-control question_difficulty'>
                                @{{#select difficulty}}
                                @foreach(['very easy','easy','moderate','hard','very hard'] as $difficulty)
                                    <option value="{{ $difficulty}}">{{ ucwords($difficulty)}}</option>
                                @endforeach
                                @{{/select}}
                            </select>
                        </div>
                        <div class="col-md-4" ><input type="text" class='form-control question_marks' placeholder='Enter marks' name='question[@{{question_number}}][marks]' value='@{{marks}}'></div>
                        <div class="col-md-4" ><input type="text" class='form-control question_time' placeholder='Enter time(second)' name='question[@{{question_number}}][time]' value='@{{time}}'></div>
                    </div>
                    <div class='form-group'>
                        <label for="question_@{{question_number}}" class='col-lg-2 control-label question_content_label'>{{ trans('validation.attributes.backend.quiz.set.question')}} <span class='question_number_text'>@{{question_number}}</span>.</label>
                        <div class="col-lg-10">
                            <textarea  class='form-control question_content'   name='question[@{{question_number}}][content]' id='question_@{{question_number}}' rows='2'></textarea>
                        </div>
                    </div>
                    <div class="answers"></div>

                </div>
            </div>

            <div class="box-footer">
                <div class="pull-left">
                    <a   class='repeatable-add-question btn btn-primary btn-xs'>{{ trans('labels.backend.quiz.set.question.add') }}</a>
                </div>
                <div class="pull-right">
                    <a class='repeatable-remove-question btn btn-danger btn-xs'>Delete</a>
                </div>
            </div>
        </div>
    </div>
</script>

<script id='answer_template' type='text/x-handlebars-template'>
    <div class='form-group answer' data-question='@{{question_number}}' data-answer='@{{answer_number}}'>
        <label for="answer_@{{question_number}}_@{{answer_number}}" class='col-lg-2 control-label answer_content_label'>{{ trans('validation.attributes.backend.quiz.set.answer')}} <span class='answer_number'>@{{answer_number}}</span>.</label>
        <div class="col-lg-10 ">
            <div class="input-group">

            <textarea  class='form-control answer_content'   name='answer[@{{question_number}}][@{{answer_number}}]' id='answer_@{{question_number}}_@{{answer_number}}' rows='1'></textarea>
            <span class="input-group-addon"><input  type='checkbox' class='correct_answer_checkbox'   name='correct_answer[@{{question_number}}][@{{answer_number}}]'></span>
            <a  class='repeatable-add-answer input-group-addon'><i class="fa fa-fw fa-plus"></i></a>
            <a  class='repeatable-remove-answer input-group-addon'><i class="fa fa-fw fa-minus"></i></a>
            </div>
        </div>
    </div>
</script>


<script>

    $(document).ready(function () {
        window.Handlebars.registerHelper('select', function( value, options ){
            var $el = $('<select />').html( options.fn(this) );
            $el.find('[value="' + value + '"]').attr({'selected':'selected'});
            return $el.html();
        });
        var questionTemplate = $('script#question_template').html();
        var answerTemplate = $('script#answer_template').html();

        var questions = Handlebars.compile(questionTemplate);
        var answers = Handlebars.compile(answerTemplate);

        var $questions = $('div#questions');

        $(document.body).on('click','.repeatable-add-question',function(){
            var $question = $(this).closest('.question');
            var $question_number = parseInt( $question.attr('data-question') ,10) + 1;
            $question.after( questions({question_number:$question_number}) );

            sync_questions();

            addChildrenToQuestion($question_number,answers,4);
            sync_answers($question_number);
            return false;
        });

        $(document.body).on('click','.repeatable-remove-question',function(){
            $(this).closest('.question').remove();
            sync_questions();
            sync_answers();
        });

        $(document.body).on('click','.repeatable-add-answer',function(){
            var $answer = $(this).closest('.answer');
            var $answer_number = parseInt( $answer.attr('data-answer'),10) + 1;
            var $question_number = parseInt( $answer.attr('data-question'),10);
            $answer.after( answers({question_number:$question_number,answer_number:$answer_number}) );

            sync_answers($question_number);
            return false;
        });
        $(document.body).on('click','.repeatable-remove-answer',function(){
            $(this).closest('.answer').remove();
            sync_answers();
        });
        function sync_answers(question_number){
            $('.answers').each(function(index,element){
                $(this).children('.answer').each(function(index, answer){
                    var answer = $(this);
                    var $question_number = parseInt(answer.attr('data-question'),10);
                    var $answer_number = index +1 ;

                    var $commonAttr = `answer_${$question_number}_${$answer_number}`;

                    answer.attr('data-answer',$answer_number);
                    answer.find('.answer_content_label').attr('for',$commonAttr);
                    answer.find('.answer_content').attr('id',$commonAttr);
                    answer.find('.answer_content').attr('name',`answer[${$question_number}][${$answer_number}]`);

                    answer.find('.answer_number').text($answer_number);
                    answer.find('.correct_answer_checkbox').attr('name',`correct_answer[${$question_number}][${$answer_number}]`)
                });
            });
        }
        function sync_questions()
        {
            $('.question').each(function(index,element){
                var $this= $(this);
                var $question_number = parseInt(index,10) + 1;

                $this.attr('data-question',$question_number);
                $this.find('.question_content_label').attr('for',`question_${$question_number}`);
                $this.find('.question_content').attr('name',`question[${$question_number}][content]`);
                $this.find('.question_content').attr('id',`question[${$question_number}]`);
                $this.find('.question_number_text').text($question_number);

                $this.find('.question_difficulty').attr('name',`question[${$question_number}][difficulty]`);
                $this.find('.question_marks').attr('name',`question[${$question_number}][marks]`);
                $this.find('.question_time').attr('name',`question[${$question_number}][time]`);


                $this.find('.answer').attr('data-question',$question_number);
            });
        }

        function addChildrenToQuestion(question_number,answers_object,total_answers_required){
            for(var i = 1; i <= total_answers_required; i++) {
                $('div[data-question='+question_number+']').find('.answers').append( answers({question_number:question_number,answer_number:i}) )
            }
        }

        $(".question_generator_generate").click(function(){
            $total_questions = parseInt( $('#question_generator_question_number').val(),10);
            $total_answer    = parseInt( $('#question_generator_answer_number').val(), 10);
            $difficulty      =  ($('#question_generator_difficulty').val()).toLowerCase();
            $marks      = parseInt( $('#question_generator_marks').val(), 10);
            $time      = parseInt( $('#question_generator_time').val(), 10);

            var start = parseInt($('.question').last().attr('data-question'),10) +1 || 1;
            var end  = start + $total_questions -1;
            for(var start;start<=end;start++){
                $questions.append( questions({question_number:start,difficulty:$difficulty,marks:$marks,time:$time}) );
                addChildrenToQuestion(start,answers,$total_answer);
            }

            return false;
        })
    });
</script>
@endsection