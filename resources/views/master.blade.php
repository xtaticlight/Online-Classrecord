<TITLE>Class Record</TITLe>
    <br/>
        <div class="form-group col-lg-4 col-md-4 col-xs-4" style="margin-left: -15px">
            <p class="text-nowrap">Logged as</p>
            <div style="margin-top: 20px" class="text-nowrap">
                <br></br><a id="lbMain" href="http://www.must.edu.ph/">MUST Website</a> &gt; <a id="lbMain" style="color: Green" href="/e-class-record/public/home">HOME</a> &gt; <span>Class Record</span>
            </div>
        </div>

        <div class="form-group col-lg-4 col-md-4 col-xs-4 col-lg-pull-3 col-md-pull-3 col-xs-pull-3">
            <div class="container">
                <div class="form-group col-lg-12 col-md-12 col-xs-12" style="margin-left: -25px">
                    <span style="color:Blue;font-family:Verdana;font-size:12pt;font-weight:bold;font-style:normal;">{{ Auth::user()->id }}</span>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-xs-12" style="margin-top: -15px;margin-bottom: -15px;margin-left: -25px">
                    <span class="color1">[employee]</span>
                </div>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-xs-12" style="margin-left: -10px">
                <a class="text-nowrap"  href="javascript:__doPostBack('ctl00$LoginView1$lbChangePW','')">Change Setup</a> | <a  href="{{url('/logout')}}"> Logout</a>

            </div>
        </div>
        @include('pages.layout.build_info')
<table width="100%">
    <tbody>

    <td valign="middle" style="text-align: center; vertical-align:middle; padding:3px">
        <img  src="/e-class-record/public/assets/img/kimting.jpg" style="height:70px;width:75px;margin-top: -4px">
    </td>
    <td valign="top" style="width: 100%">
        <table cellpadding="0" cellspacing="0" width="100%">
            <tbody><tr>
                    <td>
                        <table width="100%">
                            <tbody><tr>
                                    <td style="width: 100px;" class="TableHeader">
                                        <span>Employee No.</span></td>
                                    <td class="TableHeader">
                                        <span>Name</span></td>
                                    <td style="width: 75px;" class="TableHeader">
                                        <span>Gender</span></td>
                                </tr>
                                <tr>
                                    <td style="width: 100px; height: 30px; text-align: center;">
                                        <span style="font-size:Larger;font-weight:normal;">{{ Auth::user()->id }}</span></td>
                                    <td style="text-align: center">
                                        <span  style="font-size:Larger;font-weight:normal;">{{ Auth::user()->name }}</span></td>
                                    <td style="width: 75px; text-align: center;">
                                        <span style="font-size:Larger;font-weight:normal;">{{ Auth::user()->gender }}</span></td>
                                </tr>
                            </tbody></table>
                    </td>
                </tr>
                <tr>
                    <td style="background-color: gainsboro" valign="bottom">
                        <table style="font-size: smaller; width: 100%; font-style: italic">
                            <tbody><tr>
                                    <td>
                                        <span>Email : </span>
                                        <span>{{ Auth::user()->email }}</span></td>
                                    <td>
                                        <span>Mobile No.:</span>
                                        <span>{{ Auth::user()->contactNumber }}</span></td>
                                </tr>
                            </tbody></table>
                    </td>
                </tr>

            </tbody>
        </table>
</table>
<br />
