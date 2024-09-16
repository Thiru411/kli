<section>
  <article class="breadcrumb">
    <div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
  </article>
  <article>
    <div class="midWrapper">
      <div class="headDesc">
        <h1>Agents Terminated due to malpractices</h1>
        <a href="javascript:;" class="kliBack" onclick="goBack()"><span>Back</span></a></div>
    </div>
  </article>
  <article class="searchWrapper atdWrp deactive_li">
    <div class="midWrapper">
      <div class="lftSide">
        <div class="searchBox searchBox01">
          <input type="text" name="searchByName" placeholder="Search by Name" id="searchByName"/>
          <a href="javascript:;" id="searchByNameBtn">Search</a>
		</div>
      </div>
      <div class="midSide">
        <p>And/OR</p>
      </div>
      <div class="rgtSide">
        <div class="annualFund">
          <div class="selectbg">
            <div class="selectedvalue">Search by Year</div>
            <select id="searchByYearDD">
              <option selected>Search by Year</option>
              <option>2015</option>
              <option>2016</option>
              <option>2017</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </article>
  
  <article class="atdsearchRslt">
    <div class="midWrapper">
      <div class="navDetailWrapper">
      <!--<p>List As per the Search </p>-->
        <table width="100%" border="0" class="tableClass" cellpadding="0" cellspacing="0">
          <tbody id="resTable">
            <tr><th width='75%'>Name of Agent</th><th width='25%'>Date of Termination</th></tr>
			<tr><td>Kshama Uday Sabnis</td><td>9 Feb 2011</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </article>
</section>
<script>
var agentsJson = <?php echo json_encode($agentsDetails);?>;
var gaCat = <?php echo json_encode($gaCat);?>;
//var agentsJson = "test";

var formsJson = "";
var formsJsonLmt = "";

var jsonSucessStories = "";
var resLimit = "";

var jsonExeAdvisors = "";
var resExeAdvLimit= "";

var jsonFaqs = "";
var resFaqsLimit= "";
</script>