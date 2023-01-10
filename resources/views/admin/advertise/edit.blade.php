@extends('admin.layouts.admin')
@section('title')
        Edit Advertise
@endsection

@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="col-md-12 col-sm-12 col-xs-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="title_left">
                <h3>Edit Advertise</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <form class="form-horizontal form-label-left" action="{{ route('advertises.update', $advertise->id) }}" method="POST" novalidate>
                            @csrf
                            @method('PUT')
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">BUSINESS OR AGENCY NAME<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input id="name" class="form-control col-md-6 col-xs-6" required="required" type="text" name="business_name" value="{{ $advertise->business_name }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">ZIP CODE <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input name="zip_code"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        type = "number"
                                        maxlength = "6"
                                        class="form-control col-md-6 col-xs-6" 
                                        required="required"
                                        value="{{ $advertise->zip_code }}"
                                    />
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">FIRST NAME <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input id="name" class="form-control col-md-6 col-xs-6" required="required" type="text" name="first_name" value="{{ $advertise->first_name }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">LAST NAME <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input id="name" class="form-control col-md-6 col-xs-6" required="required" type="text" name="last_name" value="{{ $advertise->last_name }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">EMAIL <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input id="name" class="form-control col-md-6 col-xs-6" required="required" type="email" name="email" value="{{ $advertise->email }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">PHONE NUMBER <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input name="phone_no"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        type = "number"
                                        maxlength = "10"
                                        class="form-control col-md-6 col-xs-6" 
                                        required="required"
                                        value="{{ $advertise->phone_no }}"
                                    />
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">WHAT IS YOUR MOST IMPORTANT ADVERTISING GOAL RIGHT NOW? <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input type="radio" name="advertising_goal" value="Boost traffic to my website" <?php echo ($advertise->advertising_goal=='Boost traffic to my website')?'checked':'' ?>>
                                    <label for="html">BOOST TRAFFIC TO MY WEBSITE</label><br>
                                    <input type="radio" name="advertising_goal" value="Drive sales" <?php echo ($advertise->advertising_goal=='Drive sales')?'checked':'' ?>>
                                    <label for="html">DRIVE SALES</label><br>
                                    <input type="radio" name="advertising_goal" value="Find new customers" <?php echo ($advertise->advertising_goal=='Find new customers')?'checked':'' ?>>
                                    <label for="html">FIND NEW CUSTOMERS</label><br>
                                    <input type="radio" name="advertising_goal" value="Increase Local Brand Awareness" <?php echo ($advertise->advertising_goal=='Increase Local Brand Awareness')?'checked':'' ?>>
                                    <label for="html">INCREASE LOCAL BRAND AWARENESS</label><br>
                                    <input type="radio" name="advertising_goal" value="All of the Above" <?php echo ($advertise->advertising_goal=='All of the Above')?'checked':'' ?> >
                                    <label for="html">ALL OF THE ABOVE</label>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">TELL US MORE ABOUT YOUR BUSINESS: <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <textarea id="textarea" required="required" name="about_your_business" class="form-control col-md-7 col-xs-12">{{ $advertise->about_your_business }}</textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Status <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <select name="status" class="form-control col-md-6 col-xs-6" required="required" id="single">
                                        @foreach(\App\Advertise::$status as $k => $v)
                                            <option value="{{$k}}" {{ ($advertise->status == $k) ? 'selected' : ''}}>{{$v}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <a href="{{ route('advertises.index') }}"><button type="button" class="btn btn-primary">Cancel</button></a>
                                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection