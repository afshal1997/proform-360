
@extends('front.layout.front')
@section('title','Pay-Now')
@section('content')

    <section class="pay-now-bg" style="background:#eee">
        <div class="center-div">
            <h1 class="font-weight-bold pay-now-heading">Check Out</h1>
            <div aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                </ol>
            </div>
        </div>
    </section>
    <div class="section-contact-page">
        <div class="container">
            <div class="row">

                <div class="col-lg-2"></div>
                <div class="col-md-8 mb-5 contactbg check-out shadow" style="background:#eee">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-12 payment-heading">
                                <h2>Payment Information</h2>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" class="form-control ">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="amount">Amount: USD</label>
                                <input type="number" id="amount" class="form-control ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 payment-heading">
                                <h2>Billing Information</h2>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="first-name">First Name</label>
                                <input type="text" id="first-name" class="form-control ">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="last-name">Last Name</label>
                                <input type="text" id="last-name" class="form-control ">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" class="form-control ">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="address">Address</label>
                                <input name="address" id="address" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="city">City</label>
                                <input name="city" id="city" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-4 mb-4">
                            <div class="col-md-6">
                                <label for="city">Country</label>
                                <select class="w-100" name="country"></select>
                            </div>
                            <div class="col-md-6">
                                <label>State/Province:</label>
                                <select name="state" id="state" class="long-field" onchange="checkFieldBack(this);">
                                    <option value="">Please Select</option>
                                    <optgroup label="US States">
                                        <option value="AL" >Alabama</option>
                                        <option value="AK" >Alaska</option>
                                        <option value="AZ" >Arizona</option>
                                        <option value="AR" >Arkansas</option>
                                        <option value="BVI" >British Virgin
                                            Islands
                                        </option>
                                        <option value="CA" >California</option>
                                        <option value="CO" >Colorado</option>
                                        <option value="CT" >Connecticut</option>
                                        <option value="DE" >Delaware</option>
                                        <option value="FL" >Florida</option>
                                        <option value="GA" >Georgia</option>
                                        <option value="GU" >Guam</option>
                                        <option value="HI" >Hawaii</option>
                                        <option value="ID" >Idaho</option>
                                        <option value="IL" >Illinois</option>
                                        <option value="IN" >Indiana</option>
                                        <option value="IA" >Iowa</option>
                                        <option value="KS" >Kansas</option>
                                        <option value="KY" >Kentucky</option>
                                        <option value="LA" >Louisiana</option>
                                        <option value="ME" >Maine</option>
                                        <option value="MP" >Mariana Islands
                                        </option>
                                        <option value="MPI" >Mariana Islands
                                            (Pacific)
                                        </option>
                                        <option value="MD" >Maryland</option>
                                        <option value="MA" >Massachusetts</option>
                                        <option value="MI" >Michigan</option>
                                        <option value="MN" >Minnesota</option>
                                        <option value="MS" >Mississippi</option>
                                        <option value="MO" >Missouri</option>
                                        <option value="MT" >Montana</option>
                                        <option value="NE" >Nebraska</option>
                                        <option value="NV" >Nevada</option>
                                        <option value="NH" >New Hampshire</option>
                                        <option value="NJ" >New Jersey</option>
                                        <option value="NM" >New Mexico</option>
                                        <option value="NY" >New York</option>
                                        <option value="NC" >North Carolina
                                        </option>
                                        <option value="ND" >North Dakota</option>
                                        <option value="OH" >Ohio</option>
                                        <option value="OK" >Oklahoma</option>
                                        <option value="OR" >Oregon</option>
                                        <option value="PA" >Pennsylvania</option>
                                        <option value="PR" >Puerto Rico</option>
                                        <option value="RI" >Rhode Island</option>
                                        <option value="SC" >South Carolina
                                        </option>
                                        <option value="SD" >South Dakota</option>
                                        <option value="TN" >Tennessee</option>
                                        <option value="TX" >Texas</option>
                                        <option value="UT" >Utah</option>
                                        <option value="VT" >Vermont</option>
                                        <option value="USVI" >VI U.S. Virgin
                                            Islands
                                        </option>
                                        <option value="VA" >Virginia</option>
                                        <option value="WA" >Washington</option>
                                        <option value="DC" >Washington, D.C.
                                        </option>
                                        <option value="WV" >West Virginia</option>
                                        <option value="WI" >Wisconsin</option>
                                        <option value="WY" >Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Australian Provinces">
                                        <option value="-AU-NSW" >New South
                                            Wales
                                        </option>
                                        <option value="-AU-QLD" >Queensland
                                        </option>
                                        <option value="-AU-SA" >South
                                            Australia
                                        </option>
                                        <option value="-AU-TAS" >Tasmania
                                        </option>
                                        <option value="-AU-VIC" >Victoria
                                        </option>
                                        <option value="-AU-WA" >Western
                                            Australia
                                        </option>
                                        <option value="-AU-ACT" >Australian
                                            Capital Territory
                                        </option>
                                        <option value="-AU-NT" >Northern
                                            Territory
                                        </option>
                                    </optgroup>
                                    <optgroup label="Canadian Provinces">
                                        <option value="AB" >Alberta</option>
                                        <option value="BC" >British Columbia
                                        </option>
                                        <option value="MB" >Manitoba</option>
                                        <option value="NB" >New Brunswick</option>
                                        <option value="NF" >Newfoundland</option>
                                        <option value="NT" >Northwest
                                            Territories
                                        </option>
                                        <option value="NS" >Nova Scotia</option>
                                        <option value="NVT" >Nunavut</option>
                                        <option value="ON" >Ontario</option>
                                        <option value="PE" >Prince Edward Island
                                        </option>
                                        <option value="QC" >Quebec</option>
                                        <option value="SK" >Saskatchewan</option>
                                        <option value="YK" >Yukon</option>
                                    </optgroup>

                                    <!-- FOR STRIPE UK -->
                                    <optgroup label="England">
                                        <option >Bedfordshire</option>
                                        <option >Berkshire</option>
                                        <option >Bristol</option>
                                        <option >Buckinghamshire
                                        </option>
                                        <option >Cambridgeshire
                                        </option>
                                        <option >Cheshire</option>
                                        <option >City of London
                                        </option>
                                        <option >Cornwall</option>
                                        <option >Cumbria</option>
                                        <option >Derbyshire</option>
                                        <option >Devon</option>
                                        <option >Dorset</option>
                                        <option >Durham</option>
                                        <option >East Riding
                                            of Yorkshire
                                        </option>
                                        <option >East Sussex</option>
                                        <option >Essex</option>
                                        <option >Gloucestershire
                                        </option>
                                        <option >Greater London
                                        </option>
                                        <option >Greater
                                            Manchester
                                        </option>
                                        <option >Hampshire</option>
                                        <option >Herefordshire</option>
                                        <option >Hertfordshire</option>
                                        <option >Isle of Wight</option>
                                        <option >Kent</option>
                                        <option >Lancashire</option>
                                        <option >Leicestershire
                                        </option>
                                        <option >Lincolnshire</option>
                                        <option >Merseyside</option>
                                        <option >Norfolk</option>
                                        <option >North Yorkshire
                                        </option>
                                        <option >Northamptonshire
                                        </option>
                                        <option >Northumberland
                                        </option>
                                        <option >Nottinghamshire
                                        </option>
                                        <option >Oxfordshire</option>
                                        <option >Rutland</option>
                                        <option >Shropshire</option>
                                        <option >Somerset</option>
                                        <option >South Yorkshire
                                        </option>
                                        <option >Staffordshire</option>
                                        <option >Suffolk</option>
                                        <option >Surrey</option>
                                        <option >Tyne and Wear</option>
                                        <option >Warwickshire</option>
                                        <option >West Midlands</option>
                                        <option >West Sussex</option>
                                        <option >West Yorkshire
                                        </option>
                                        <option >Wiltshire</option>
                                        <option >Worcestershire
                                        </option>
                                    </optgroup>
                                    <optgroup label="Scotland">
                                        <option >Aberdeenshire</option>
                                        <option >Angus</option>
                                        <option >Argyllshire</option>
                                        <option >Ayrshire</option>
                                        <option >Banffshire</option>
                                        <option >Berwickshire</option>
                                        <option >Buteshire</option>
                                        <option >Cromartyshire</option>
                                        <option >Caithness</option>
                                        <option >Clackmannanshire
                                        </option>
                                        <option >Dumfriesshire</option>
                                        <option >Dunbartonshire
                                        </option>
                                        <option >East Lothian</option>
                                        <option >Fife</option>
                                        <option >Inverness-shire
                                        </option>
                                        <option >Kincardineshire
                                        </option>
                                        <option >Kinross</option>
                                        <option >
                                            Kirkcudbrightshire
                                        </option>
                                        <option >Lanarkshire</option>
                                        <option >Midlothian</option>
                                        <option >Morayshire</option>
                                        <option >Nairnshire</option>
                                        <option >Orkney</option>
                                        <option >Peeblesshire</option>
                                        <option >Perthshire</option>
                                        <option >Renfrewshire</option>
                                        <option >Ross-shire</option>
                                        <option >Roxburghshire</option>
                                        <option >Selkirkshire</option>
                                        <option >Shetland</option>
                                        <option >Stirlingshire</option>
                                        <option >Sutherland</option>
                                        <option >West Lothian</option>
                                        <option >Wigtownshire</option>
                                    </optgroup>
                                    <optgroup label="Wales">
                                        <option >Anglesey</option>
                                        <option >Brecknockshire
                                        </option>
                                        <option >Caernarfonshire
                                        </option>
                                        <option >Carmarthenshire
                                        </option>
                                        <option >Cardiganshire</option>
                                        <option >Denbighshire</option>
                                        <option >Flintshire</option>
                                        <option >Glamorgan</option>
                                        <option >Merioneth</option>
                                        <option >Monmouthshire</option>
                                        <option >Montgomeryshire
                                        </option>
                                        <option >Pembrokeshire</option>
                                        <option >Radnorshire</option>
                                    </optgroup>
                                    <optgroup label="Northern Ireland">
                                        <option >Antrim</option>
                                        <option >Armagh</option>
                                        <option >Down</option>
                                        <option >Fermanagh</option>
                                        <option >Londonderry</option>
                                        <option >Tyrone</option>
                                    </optgroup>
                                    <!-- FOR STRIPE UK END-->
                                    <option value="N/A" >Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 payment-heading">
                                <h2>Credit Card Information</h2>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="zip/postal">ZIP/Postal Code</label>
                                <input type="number" id="zip/postal" class="form-control ">
                            </div>
                            <div class="col-md-6 form-group mt-1">
                                <h5 style="color: gray"><b>I have:</b></h5>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        <img src="{{ asset('assets/front/images/logo/ico_visa.jpg') }}" class="w-100" />
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        <img src="{{ asset('assets/front/images/logo/ico_mc.jpg') }}" class="w-100" />
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        <img src="{{ asset('assets/front/images/logo/ico_amex.jpg') }}" class="w-100" />
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                    <label class="form-check-label" for="exampleRadios4">
                                        <img src="{{ asset('assets/front/images/logo/ico_disc.jpg') }}" class="w-100" />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="cardnumber">Card Number</label>
                                <input name="cardnumber" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                       type = "number"
                                       maxlength = "16" class="form-control"
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="cardname">Name on card</label>
                                <input type="text" id="cardname" class="form-control ">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="datemin">Expiration Date</label>
                                <input class="form-control" type="date" id="datemin" name="datemin">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="cvv">CVV</label>
                                <input id="cvv" type="text" maxlength="5" class="form-control">
                                <label style="float: none; position: relative; text-align: left; width: 80%;"><input type="checkbox" value="1" id="cc_terms" checked=""> I accept <a href="javascript:void(0)" target="_blank">Terms &amp; Conditions</a></label>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <button type="submit" class="btn btn-warning text-white w-100">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
