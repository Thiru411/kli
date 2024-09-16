<style>.digitalindia p{
text-align: center;
    color: #000000; 
    padding: 0 30px; 
    font-size: 1.4em;
    text-transform: uppercase;
    border-radius: 30px;
    margin: 0 auto 20px auto;
    display: table; 
    letter-spacing: 1px;
    transition: all ease .5s;
    -webkit-transition: all ease .5s;
    -moz-transition: all ease .5s;
    -o-transition: all ease .5s;
    line-height: 50px;
    height: 50px;
	}
  .digitalindia a{
    color: #FC453B;
    text-decoration: underline;
  }
  <!--.mange-links{display:flex;width:450px; margin:auto;}-->
  .mange-links .redBtn{width:200px; text-align:center; height:38px; line-height:38px;}
  .digitalindia{display:inherit;width:200px;}
  .digitalindia img{max-width:100%;}
  .kperas{margin:2rem auto !important; width:75% !important; float:none !important; text-align:center !important;}
  .breadcrumb_sapce{top:125px !important;}
  
	@media only screen and (max-width: 768px) {

.mange-links {
     display: inline; 
    /* width: 450px; */
    /* margin: auto; */
}
.digitalindia img{
	max-width:71%!important; 
 
}
.midWrapper_breadcrumb{
	margin-top:-172px;
}
.mange-links .redBtn{
	width:255px!important;
	padding:4px 30px !important;

}
	}
  
  </style>
  
<section class="breadcrumb_sapce"> 
  <!-- breadcrumb Start -->
  <article class="breadcrumb ">
		<div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
	</article>
  <!-- breadcrumb End --> 
  
  <!-- midWrapper Start -->
  <article >
    <div class="midWrapper midWrapper_breadcrumb">
      <div class="headDesc">
        <h1>Manage My Policy</h1>
		<div class="mangae-img">
		<img src="assets/images/IMG.svg">
		</div>
		 <p class="kperas">Kotak Life Insurance supports you in every way throughout the policy period. Now you can manage your policy with easy processes and be assured of faster response.</p>
		<!-- midWrapper Start -->
		<div class="mange-links">
		 <a href="assets\pdf\KLI_ DigitalGuideV8.pdf" target="_blank" class="digitalindia" onclick=""><img src="assets/images/guideButton.svg"></a>
         <a href="javascript:void(0);"  rel="nofollow" class="redBtn buyOnline_login1" style='text-transform:capitalize' >Login Now</a> 
        </div>
		<!-- midWrapper End -->
       
        <a href="<?=base_url()?>how-do-i/" class="kliBack"><span>Back</span></a> </div>
      <div class="topHeading">
        <h2>Register a service request</h2>
        <p>(Minor Changes can be done online/Major changes need physical branch forms)</p>
      </div>
      <div class="rBox">
      <div class="img"><img alt="Icon for minor changes" title="Icon for minor changes" src="<?=base_url()?>assets/images/minorchanges.png" ></div>
      <div class="rDetail">
      	<h3>Minor changes to include</h3>
        <ul class="bullet">
          <li>Fund switches</li>
          <li>Payment frequency change</li>
          <li>Name change</li>
          <li>Address change</li>
          <li>Contact details update</li>
          <li>Nominee change</li>
        </ul>
      </div>
     </div> 
      <div class="rBox rBox01">
      <div class="img"><img alt="Icon for check my details" title="Icon for check my details"  src="<?=base_url()?>assets/images/checkmydetail.png" >    </div>
      <div class="rDetail">
      	<h3>Check my policy details (View/Download)</h3>
        <ul class="bullet">
          <li>Bonus/Accumulated fund value</li>
          <li>Premium Certificates</li>
          <li>Policy Deposit Receipt</li>
          <li>TDS Certificate</li>
        </ul>
        </div>
      </div>
	  
	   <!-- SMS Alert Starts Here -->  
            <!--
			
			<div class="tableWrapper">
                <div class="topHeading">
                    <h2>SMS Alerts</h2>       
                </div>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableClass">
                    <tr>
                        <th width="10%">Sr. No.</th>
                        <th>SERVICE</th>
                        <th>KEYWORD</th>
                        <th>SMS SYNTAX*</th>
                    </tr>
                    <tr>
                        <td >1</td>
                        <td>For Registration</td>
                        <td>REGL</td>
                        <td>REGL &lt;POLICY NO&gt; &lt;DATE OF BIRTH&gt; to 5676788. Example REGL 176945 17/09/1974</td>
                    </tr>
                    <tr>
                        <td >2</td>
                        <td>For Premium Due date and Amount Due</td>
                        <td>PREML</td>
                        <td>PREML &lt;POLICY NO&gt; to 5676788</td>
                    </tr>
                    <tr>
                        <td >3</td>
                        <td>For NAV &amp; Fund Value as on date</td>
                        <td>NAVL</td>
                        <td>NAVL &lt;POLICY NO&gt; to 5676788</td>
                    </tr>
                    <tr>
                        <td >4</td>
                        <td>For Premium Certificate</td>
                        <td>CERTL</td>
                        <td>CERTL &lt;POLICY NO&gt; to 5676788</td>
                    </tr>
                    <tr>
                        <td >5</td>
                        <td>For Unit Link Statement</td>
                        <td>STMTL</td>
                        <td>STMTL &lt;POLICY NO&gt; to 5676788</td>
                    </tr>
                    <tr>
                        <td >6</td>
                        <td>For Renewal Notice</td>
                        <td>RENOTL</td>
                        <td>RENOTL &lt;POLICY NO&gt; to 5676788</td>
                    </tr>
                </table>
            </div>
			-->
            <!-- SMS Alert Ends Here -->

    </div>
  </article>
  <!-- midWrapper End --> 
  
  
</section>

<!--Login-->
<div class="manage_login">
    <div class="rhsBoxDetails1">
        <!-- Buy Online detail start -->
       
        <div class="rhsboxWrap1 buy-online-change buy-online-new-sec">
            <a onclick="dataLayer.push({'event':'event side menu buy online close', 'category':'New Customer', 'action':'buy online','label':'close'});close_popup();" href="javascript:void(0);" class="closePopup"><span>Close</span></a>
            <h3 class="select-login">Select Login</h3>
            <div class="sellog-group">
                <div class="login-options">
                    <div class="glog">
                        <img src="assets/images/indivual-login.svg">
                        <p>Individual customer</p>
                    </div>
                     <a href="https://care.kotaklifeinsurance.com" target="_blank" class="login-now">Login Now </a>
                </div>
                <div class="login-options">
                    <div class="glog">
                        <img src="assets/images/Group-login.svg">
                        <p>Group customer</p>
                    </div>
                    <a href="https://customer.kotaklifeinsurance.com/kliportal/Login.aspx" target="_blank" class="login-now">Login Now </a>
                </div>
            </div>



        </div>
      
        <!-- Buy Online detail End -->

    </div>
    <!-- get a call detail End -->


</div>
<!--End Login-->

<script>
    $("a.buyOnline_login1").click(function () {
        
        if ((o = $(window).width()) <= 1024 && $("html,body").animate({
                scrollTop: 0
            }, 200), $(this).parent("li").hasClass("selected")) $("a.closePopup").trigger("click");
        else {
            $(".rhsBoxDetails1").removeClass("activate"); 
            var e = parseInt($(this).parent().index());
            N = $(this).attr("class"), I = $("ul.fixedUL li .login").length > 0 ? 1 : "0", "login" != N && "getCall" != N && (e = parseInt(e - I), $(this).parent("li").addClass("selected").siblings("li").removeClass("selected"), $(".manage_login").addClass("activate"), $(".rhsBoxDetails1 .rhsboxWrap1").eq(e).fadeIn().siblings(".rhsboxWrap1").hide(), $(".overlay").fadeIn(), 0 == e && setTimeout(function () {
                a > 1024 && ($("#scroll_01").jScrollPane(), $("#scroll_02").jScrollPane())
            }, 100), 1 == e && setTimeout(function () {
                a > 1024 && $("#scroll_02").jScrollPane()
            }, 100), setTimeout(function () {
                jQuery.browser.version > 8 && B()
            }, 10), $(".searchBox").fadeOut(), $("a.searchBtn").removeClass("selected")) 
        }
       
    })
</script>

<script>
var formType = "Mange My Policy";
var gaCat = <?php echo json_encode($gaCat);?>;
var jsonDataAppForm = "";
var jsonDataFaqs = "";
var form_flag = "";

var annualFundPer = "";
var fundPerformance = "";
</script>




