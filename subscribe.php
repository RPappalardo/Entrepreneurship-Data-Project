
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	Data Initiative
</title><meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" /><link href="css/foundation.css" rel="stylesheet" type="text/css" /><link href="css/Glyphter.css" rel="stylesheet" type="text/css" />
    <script src="js/foundation.min.js" type="text/javascript"></script>
    <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="js/kiConcierge.js" type="text/javascript"></script>
</head>
<body class="mainBackground">

<div id="theError" style="position:fixed; width:100%; height:100%; top:0; right:0; left:0; bottom:0; background-color:rgba(0,0,0,0.8);z-index:9999; display:none;">
    <div class="row" style="margin-top:10%;">
        <div class="large-3 columns">&nbsp;</div>
        <div class="large-6 columns" style="position:relative; background-color:#ffffff;padding:30px 20px 20px 20px;">
            <div style="position:absolute; right:0; top:0; z-index:9999; padding-top:10px; padding-right:10px;"><a id="closeError" href="javascript:void(0);"></a></div>
            <h3 style="color:#FF5754 !important;">NOT DONE YET!</h3>
            <p id="errorMessage" style="color:#666666 !important;"></p>
        </div>
        <div class="large-3 columns">&nbsp;</div>
    </div>
</div>

<div id="waiting" style="position:fixed; width:100%; height:100%; top:0; right:0; left:0; bottom:0; background-color:rgba(0,0,0,0.8);z-index:9999; display:none;">
    <div class="row" style="margin-top:10%;">
        <div class="large-3 columns">&nbsp;</div>
        <div class="large-6 columns" style="position:relative; padding:30px 20px 20px 20px; text-align:center">
            <div id="floatingCirclesG">
	            <div class="f_circleG" id="frotateG_01"></div>
	            <div class="f_circleG" id="frotateG_02"></div>
	            <div class="f_circleG" id="frotateG_03"></div>
	            <div class="f_circleG" id="frotateG_04"></div>
	            <div class="f_circleG" id="frotateG_05"></div>
	            <div class="f_circleG" id="frotateG_06"></div>
	            <div class="f_circleG" id="frotateG_07"></div>
	            <div class="f_circleG" id="frotateG_08"></div>
            </div>
        </div>
        <div class="large-3 columns">&nbsp;</div>
    </div>
</div>



    <div id="staticBannerImage" style="background-image: url(../img/background.jpg)"></div>
    <div class="large-8 large-centered columns" style=" margin-bottom:40px;padding-top:40px;padding-bottom:40px; ">
        <form method="post" action="./" onsubmit="javascript:return WebForm_OnSubmit();" id="frmApply">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTk5Mjc3NDI5Ng8WAh4LVmlld1N0YXRlSWQFJDFhNGRkOWRlLTM0ZGYtNDdmNy1iYzllLTdjZTNkMTI3NjJmMWRkJKul8WbprvkLCilenjkaI4K0PSzlaiBZfiYoXQcC8Tk=" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['frmApply'];
if (!theForm) {
    theForm = document.frmApply;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/js/WebResource1.js" type="text/javascript"></script>


<script src="/js/WebResource2.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="8F67B9A0" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAckI2AUU4sIeFIpRHi7kTOLTNr8+Dx/H+2fNfPhxgyex+tZBdiRon5d1qE03oo5TvNDB2YfWbjwUYntrwPx36ESnNqWGF1p3dK5b8LCSQgWKIlA1TEKu/hzq99I8e+5xSLN+DvxnwFeFeJ9MIBWR693jq/j8R/jIcomrkcyosRfo36ULQ/ArbFpXhDTcNlzWuI=" />
</div>
        <div>
                        <div class="row" style="margin-bottom:20px;">
                        <div class="large-4 columns text-center">&nbsp;
                        </div>
                        <div class="large-4 columns text-center">
                            <a href="/">
                            <div  id="logoHomePage"><h1 style = "color: white;">ENTREPRENEURSHIP<br/><span style="font-weight:400; color: white;">Data Project</span></h1></div></a>

                        </div>
                        <div class="large-4 columns text-center">&nbsp;
                        </div>
                        </div>

            <div class="row" style="max-width:55em;">
            <div class="large-12 columns">



                    <div id="Panel1">



                    <div class="row">

                        <div class="large-12 columns">
                            <div class="large-6 column" style="padding-left:0;">
                                <label style="color:white !important;">First Name <span style="color:#FF5754"><span id="RequiredFieldValidator1" class="validate" style="visibility:hidden;">- Required.</span></span></label>
                                <input name="txtFirstName" type="text" maxlength="50" id="txtFirstName" tabindex="1" class="translucent required" style="width:100%;" />
                            </div>
                            <div class="large-6 columns" style="padding-left:0; padding-right:0;">
                                <label style="color:white !important;">Last Name <span style="color:#FF5754"><span id="RequiredFieldValidator2" class="validate" style="visibility:hidden;">- Required.</span></span></label>
                                <input name="txtLastName" type="text" maxlength="50" id="txtLastName" tabindex="2" class="translucent required" style="width:100%;" />
                            </div>
                        </div>

                        <div class="large-12 columns">
                            <div class="large-12 columns" style="padding-left:0;">
                                <label style="color:white !important;">Email  <span style="color:#FF5754"><span id="RequiredFieldValidator3" class="validate" style="visibility:hidden;">- Required.</span></span></label>
                                <input name="txtEmail" type="text" maxlength="100" id="txtEmail" tabindex="3" class="translucent required" style="width:100%;" />
                            </div>
                        </div>

                        <div class="large-12 columns">
                            <div class="large-12 columns" style="padding-left:0;">
                                <label style="color:white !important;">Organization</label>
                                <input name="txtOrganization" type="text" maxlength="100" id="txtOrganization" tabindex="4" class="translucent" style="width:100%;" />
                            </div>
                        </div>
												<div class="large-12 columns">
												    <div class="large-12 columns" style="padding-left:0;">
												         <label style="color:white !important;">Message</label>
												         <textarea name="txtMessage" rows="2" cols="20" id="txtMessage" tabindex="4" class="translucent" style="width:100%;  height: 70px !important;"></textarea>
												     </div>
												 </div>

                        <div class="large-12 columns">
                            <div  style="margin-bottom:4px;"><span id="Label1" style="color:#FF5754;"></span></div>
</br>
                            <div id="robot">
                                <h2 class="solve" style="font-size:1em; color:white !important;">Solve Below...</h2>
                                <div class="robot" id="num1" style="color:white !important;"></div>
                                <div class="robot" id="num1" style="color:white !important;"> + </div>
                                 <input type="text" id="solution" style="display:inline-block; width:40px;"/>
                                <div class="robot" id="num1" style="color:white !important;">=</div>
                                 <div class="robot" id="num2" style="color:white !important;"></div>
                            </div>
                            </div>
                        </div>

</div>
                        <div class="row">
                        <div class="large-12 columns text-left">
                            <div id="pnlButton" style="padding-top:20px;">

                                <input type="submit" id="Button1" value="SUBMIT" class="button" />

</div>
                        </div>
                            </div>




                    </div>

                </div>
                </div>

<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("RequiredFieldValidator1"), document.getElementById("RequiredFieldValidator2"), document.getElementById("RequiredFieldValidator3"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var RequiredFieldValidator1 = document.all ? document.all["RequiredFieldValidator1"] : document.getElementById("RequiredFieldValidator1");
RequiredFieldValidator1.controltovalidate = "txtFirstName";
RequiredFieldValidator1.errormessage = "- Required.";
RequiredFieldValidator1.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
RequiredFieldValidator1.initialvalue = "";
var RequiredFieldValidator2 = document.all ? document.all["RequiredFieldValidator2"] : document.getElementById("RequiredFieldValidator2");
RequiredFieldValidator2.controltovalidate = "txtLastName";
RequiredFieldValidator2.errormessage = "- Required.";
RequiredFieldValidator2.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
RequiredFieldValidator2.initialvalue = "";
var RequiredFieldValidator3 = document.all ? document.all["RequiredFieldValidator3"] : document.getElementById("RequiredFieldValidator3");
RequiredFieldValidator3.controltovalidate = "txtEmail";
RequiredFieldValidator3.errormessage = "- Required.";
RequiredFieldValidator3.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
RequiredFieldValidator3.initialvalue = "";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[

var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
        //]]>
</script>
</form>

    </div>
</body>
</html>
