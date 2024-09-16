 <?php
function isMobile()
{
  return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
if (isMobile()) {
  // Do something for only mobile users
} else {
  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $temp = array();
  $temp = explode("/", $actual_link);

  if ($temp[3] == "main") {
    redirect(base_url());
  }
  // Do something for only desktop users
}
?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- <?php var_dump($rss); ?> -->
<style>
.doc_man th{color:#000!important;}
.chang_mang th{color:#000!important;}
.csr-policy section{top:initial;}
    .csr-accordion section{margin-bottom: 0px; padding-top: 10px;}
    .csr-accordion .seclis li{margin-bottom: 20px;}
   .csr-accordion .ins-policy, .csr-accordion .kotaklife-process{margin-bottom: 30px;}
</style>

<div class="csr-sec">



  <section class="comp">
    <div class="midWrapper">
      <h1>Kotak Mahindra Life Insurance Company Limited’s Board Corporate Social Responsibility (CSR) Committee</h1>

      <table>

        <tr>
          <td>1</td>
          <td>Mr. Dipak Gupta, Non-Executive Director</td>
          <td>Chairman</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Ms. Farida Khambata, Independent Director</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Mr. Gaurang Shah, Non-Executive Director</td>
          <td>Member</td>
        </tr>


      </table>
    </div>
  </section>


  <section class="csr-policy">
    <div class="midWrapper">
      <h2>CSR Policy</h2>
     
        
        <div class="accordion-div csr-acc mt-mob-15">




<div class="bor csr-accordion">
    <button class="accordion bor-top-zero" role="heading" aria-level="3">
   <p class="csr-anc">Kotak Mahindra Life Insurance Company’s Policy Statement Corporate Social Responsibility.</p>
    </button>
    <div class="panel tab-detail mb-0 tab-align" style="">
    <section class="kotaklife-process">
  <div class="midWrapper">
    <div class="roww">
      <div class="coll-md-5 bor-blk br-0">
        <a href="https://www.kotaklife.com/#" class="kot-anc"> <img src="assets/images/kotak-logo.svg" alt="" class="wh-mob-20"> <img src="assets/images/kotak-txt.svg" alt="" class="img-mrr wh-mob-40">life</a>
        <h6>Process Assurance and Risk Management</h6>
      </div>
      <div class="coll-md-7 bor-blk">
        <h5>Policy Statement on Corporate Social Responsibility </h5>
		<div style="display: flex;">
			<h6>v.6.1.1</h6><h6>Asset Classification: Public</h6>
		</div>
        
      </div>

    </div>
  </div>
</section>

<section class="ins-policy">
  <div class="ins-bor">

    <h3>Kotak Mahindra Life Insurance Company Limited’s</h3>
    <h2>Corporate Social Responsibility Policy</h2>

  </div>
</section>

<section class="doc_man">
  <div class="midWrapper">
    <h2><b><u>Document Management</u></b></h2>
    <table>

      <tbody><tr>
        <td colspan="2" class="w-40 fw-bold">Document Reference No. </td>
        <td colspan="3">PARM/23-24/53</td>

      </tr>
      <tr>
        <td colspan="2" class="w-40 fw-bold">Document Issue Date </td>
        <td colspan="3">18/10/2023</td>

      </tr>

      <tr>
        <td colspan="2" class="w-40 fw-bold">Process Owner</td>
        <td colspan="3">Subhasis Ghosh, Joint President, FIG</td>

      </tr>

      <tr>
        <th>Particulars </th>
        <th>Name </th>
        <th>Section </th>
        <th>Designation &amp; <br>
          Department
        </th>
        <th>Date</th>
      </tr>
      <tr>
        <td>Reviewed by</td>
        <td>Shazin Motorwala</td>
        <td>Whole Document
        </td>
        <td class="w-17">DVP, Marketing</td>
        <td>11/09/2023</td>
      </tr>

      <tr>
        <td>Reviewed by</td>
        <td>Ashish Nair</td>
        <td>Whole Document
        </td>
        <td class="w-17">Chief Marketing Officer</td>
        <td>11/09/2023</td>
      </tr>
	  <tr>
        <td>Approved by</td>
        <td>CSR Committee </td>
        <td>Whole Document
        </td>
        <td class="w-17">-</td>
        <td>18/10/2023</td>
      </tr>
	  <tr>
        <td>Approved by</td>
        <td>Board</td>
        <td>Whole Document
        </td>
        <td class="w-17">-</td>
        <td>18/10/2023</td>
      </tr>
    </tbody></table>
  </div>
</section>


<section class="chang_mang">
  <div class="midWrapper">
    <h2><b><u>Change Management</u></b></h2>
    <table>

      <tbody><tr style="background-color:#ccc!important;">
        <th>Date</th>
        <th>Version</th>
        <th>Author</th>
        <th>Section </th>
        <th>Amendment</th>
      </tr>

      <tr>
        <td>18/04/2016 </td>
        <td>V.1.1.1</td>
        <td> Neha Mathur</td>
        <td> Whole <br> Document</td>
        <td> This policy has been
          approved in the 79th
          Board Meeting dated
          03/02/2015. Post which,
          it has been reviewed in
          the 81st Board Meeting
          dated
          28/07/2015.
          Post which, it has been
          reviewed in the Board
          Meeting dated 26/04/2019.</td>

      </tr>

      <tr>
        <td>20/04/2020 </td>
        <td>V.2.1.1 </td>
        <td> Rohit Rao </td>
        <td> Whole <br>Document</td>
        <td>Entire policy revamped
          to bring it in sync with
          the Kotak Group level
          policy<br> <br>
          This policy has been
          reviewed by Board in its
          meeting dated 29/04/2020 </td>
      </tr>
	  <tr>
        <td>11/08/2020 </td>
        <td>V.3.1.1 </td>
        <td> Rohit Rao </td>
        <td> CRS Focus Areas </td>
        <td>'Relief &amp; Rehabilitation(COVID)' included in the scope of KLI's CSR focus areas.<br> <br>
          This policy has been
          reviewed by Board in its
          meeting dated 02/07/2020.</td>
      </tr>
	  <tr>
        <td>20/10/2021 </td>
        <td>V.4.1.1 </td>
        <td> Rohit Rao </td>
        <td> Whole <br>Document</td>
        <td>Entire policy revamped in view of the amendment to the companies (CSR) Amendment Rules,2021 and to align it in with the Kotak Bank's policy
         <br> <br>
          This policy has been
          reviewed by Board in its
          meeting dated 20/10/2021 </td>
      </tr>
	  
	  <tr>
        <td>28/10/2022</td>
        <td>V.5.1.1 </td>
        <td> - </td>
        <td> Whole <br>Document</td>
        <td>No changes in the policy.
         <br> <br>
          This policy has been
          reviewed by Board in its
          meeting dated 19/10/2022 </td>
      </tr>

      <tr>
        <td>18/10/2023</td>
        <td>V.6.1.1</td>
        <td> Pawan Soni</td>
        <td> Whole <br>Document</td>
        <td>The entire policy revamped to
          bring it in sync with the Kotak
          Group-level policy
         <br> <br>
          TThis policy has been reviewed by
          the Board in its meeting dated
          18/10/2023 </td>
      </tr>
    </tbody></table>
  </div>
</section>

<section class="tableofcontents pt-50">
  <div class="midWrapper">
    <h2>Table of content</h2>
    <ul>
      <li> <a href="https://www.kotaklife.com/#objec" rel="relativeanchor">Preamble</a> </li>
      <li> <a href="https://www.kotaklife.com/#scopeid" rel="relativeanchor">Vision </a></li>
      <li><a href="https://www.kotaklife.com/#reviewid" rel="relativeanchor">Mission</a> </li>
      <li><a href="https://www.kotaklife.com/#visionid" rel="relativeanchor">Scope of KLI’s CSR Policy</a> </li>
      <li><a href="https://www.kotaklife.com/#missionid" rel="relativeanchor">Statement of Commitment</a></li>
      <li><a href="https://www.kotaklife.com/#goverid" rel="relativeanchor">Guiding Principle for Implementation of CSR activities</a></li>
     <!-- <li><a href="#crsid" rel="relativeanchor">CSR Identity</a></li>-->
      <li><a href="https://www.kotaklife.com/#statementid" rel="relativeanchor">CSR Project Expenditure / CSR Funds</a></li>
	 <!-- <li><a href="#statementid" rel="relativeanchor">Guiding Principle for Implementation of CSR activities </a></li>
	  <li style="font-family: 'Lato-Regular';"> <a href="#dcsrp" rel="relativeanchor">Direct CSR Projects</a> </li>
	  <li style="font-family: 'Lato-Regular';"> <a href="#csrpipo" rel="relativeanchor">CSR Projects with Implementing Partner Organisations</a> </li>
	  <li style="font-family: 'Lato-Regular';"> <a href="#ipo" rel="relativeanchor">Implementing Partner Organisations</a> </li>
	  <li style="font-family: 'Lato-Regular';"> <a href="#eoio" rel="relativeanchor">Enagagement of International Organisations </a> </li>-->
     <!-- <li><a href="#implid" rel="relativeanchor">Implementation mode</a></li>-->
      <!--<li ><a href="#partid" rel="relativeanchor">Implementation partners</a></li>-->
	 <!-- <li> <a href="#mon" rel="relativeanchor">Monitoring </a></li>
	  <li> <a href="#csrpecsrf" rel="relativeanchor">CSR Project Expenditure / CSR funds </a></li>
	  <li> <a href="#csrid" rel="relativeanchor">CSR Reporting </a></li>-->
      <li><a href="https://www.kotaklife.com/#boundid" rel="relativeanchor">CSR Reporting</a></li>
      <li><a href="https://www.kotaklife.com/#philid" rel="relativeanchor">Boundary</a></li>
      <li><a href="https://www.kotaklife.com/#focusid" rel="relativeanchor">Key Focus Areas</a></li>
      <div class="crssub">
        <li><a href="https://www.kotaklife.com/#edid" rel="relativeanchor">CSR Impact Assessment</a></li>
        <li><a href="https://www.kotaklife.com/#healthid" rel="relativeanchor">CSR Administrative Overheads Expenses</a></li>
        <li><a href="https://www.kotaklife.com/#envid" rel="relativeanchor">Governance Framework</a></li>
		<li><a href="https://www.kotaklife.com/#rerc" rel="relativeanchor">Information Dissemination</a></li>
        <!-- <li><a href="https://www.kotaklife.com/#sportsid" rel="relativeanchor">Sports:</a></li>
        <li><a href="https://www.kotaklife.com/#othersid" rel="relativeanchor">Others:</a></li> -->
      </div>
<li><a href="https://www.kotaklife.com/#crsaoe" rel="relativeanchor">Law to take precedence and Amendments</a></li>
    </ul>
  </div>
</section>

<section class="objective secheading pt-50" id="objec">
  <div class="midWrapper">
    <h2><b><u>Preamble</u></b></h2>
    <ul class="seclis">
      <li>
        Kotak Mahindra Life Insurance Company Ltd. (“KLI”) recognises the immense opportunity it has to bring about a
        positive change in the lives of communities through its business operations and Corporate Social Responsibility
        (“CSR”) initiatives.
      </li>
      <li>
        KLI aspires to be a trusted partner and contributes significantly towards the economic, environmental and social growth
        of the nation and is also committed to contribute towards United Nation’s (“UN”) Sustainable Development Goals
        (“SDGs”). This CSR Policy sets out the KLI’s vision, mission, governance, and CSR focus areas to fulfill its inclusive
        growth agenda in India.
      </li>
      <li>
        Further, CSR at KLI is implemented collaboratively by the company along with its employees through volunteering
        and engagement activities.
      </li>
      <li>
        While ensuring that its CSR Policy, projects and programmes are compliant with the CSR mandate as specified under
        Sections 134, 135 read with Schedule VII of the Companies Act, 2013 (“Act”) along with the Companies (Corporate
        Social Responsibility Policy) Rules, 2014 (“CSR Rules, 2014”), as amended from time to time and in line with the
        Government of India’s notifications issued from time to time, KLI also endeavours to align its CSR projects and
        programmes with Government initiated social development programmes and interventions and last but not the least, the
        UN’s SDGs.
      </li>
    </ul>
  </div>
</section>

<section class="vision secheading pt-50" id="visionid">
  <div class="midWrapper">
    <h2><b><u>Vision</u></b></h2>
    <p>To improve the quality of life of the communities through positive impacts on economic, social and
environmental parameters and in alignment with India’s social development objectives and UN’s SDGs.</p>
  </div>
</section>


<section class="mission secheading pt-50" id="missionid">
  <div class="midWrapper">
    <h2><b><u>Mission</u></b></h2>
    <p>To create a lasting value for communities in need by promoting and supporting education, livelihood,
healthcare, sports and environmental and sustainable development initiatives and others including
reducing inequalities faced by socially and economically backward groups, relief and rehabilitation, and
interventions towards an educated, employed, healthier and a cleaner India with an aim to serve
communities at large and to transform their lives, in a collaborative manner by partnering with internal
and external stakeholders.
    </p>
    <p>KLI has defined CSR Focus Areas to make a concerted effort to achieve a meaningful and measurable social impact.
      On a case-to-case basis, the CSR programs and/or projects which are outside KLI’s defined six CSR Focus Areas but
      are eligible CSR activities under Section 135 read with schedule VII of the Act along with the CSR Rules, 2014 as amended from time to time and in line with the Government of India’s notifications issued from time to time, shall be
      approved by the Corporate Social Responsibility (CSR) Committee.</p>
  </div>
</section>


<section class="scope secheading pt-50" id="scopeid">
  <div class="midWrapper">
    <h2><b><u>Scope of KLI’s CSR Policy</u></b></h2>
    <p>The scope of KLI’s CSR activity shall be within the scope of the CSR mandate as specified under Sections 134(3)(o)
      and 135 read with Schedule VII of the Act, the CSR Rules, 2014, as amended from time to time and as per the
      Government of India’s notifications issued from time to time. CSR Projects would be guided by the applicable
      regulations and would seek to achieve social objectives and impact as envisaged in the CSR mission.</p>
	 
      <p>Provided that the CSR activities undertaken by KLI, as stated above, shall not include the following:</p>
      <br>
      <p>(i) Activities undertaken in pursuance of normal course of business of KLI;</p>
      <p>(ii) Activities undertaken by KLI outside India except for training of Indian sports personnel
    representing any State or Union Territory at National level or India at an International level;</p>
      <p>(iii) Contribution of any amount directly or indirectly to any political party under Section 182 of the
    Act;</p>
      <p>(iv) Activities benefitting employees of KLI as defined in Clause (k) of Section 2 of the Code on
    Wages, 2019;</p>
      <p>(v) Activities supported by KLI on sponsorship basis for deriving marketing benefits for its
    products or services;</p>
    <p>(vi) Activities carried out for fulfilment of any other statutory obligations under any law in force in
    India.</p>
    <!-- <ul class="seclis">

      <li>Eradicating hunger, poverty and malnutrition, ‘promoting health care including preventive health
care’ and sanitation including contribution to the Swachh Bharat Kosh set-up by the Central
Government for the promotion of sanitation and making available safe drinking water; </li>


      <li>Promoting education, including special education and employment enhancing vocation skills
especially among children, women, elderly and the differently abled and livelihood enhancement
projects; </li>


      <li>Promoting gender equality, empowering women, setting up homes and hostels for women and
orphans; setting up old age homes, day care centres and such other facilities for senior citizens
and measures for reducing inequalities faced by socially and economically backward groups;</li>



      <li>Ensuring environmental sustainability, ecological balance, protection of flora and fauna, animal
welfare, agroforestry, conservation of natural resources and maintaining quality of soil, air and
water including contribution to the Clean Ganga Fund set-up by the Central Government for
rejuvenation of river Ganga;</li>


      <li>Protection of national heritage, art and culture including restoration of buildings and sites of
historical importance and works of art; setting up public libraries; promotion and development of
traditional art and handicrafts; </li>


      <li>Measures for the benefit of armed forces veterans, war widows and their dependents , Central
Armed Police Forces (“CAPF”) and Central Para Military Forces (“CPMF”) veterans, and their
dependents including widows;</li>

      <li>Training to promote rural sports, nationally recognised sports, Paralympic sports and Olympic
sports;</li>

      <li> Contribution to the Prime Minister's National Relief Fund or Prime Minister’s Citizen Assistance
and Relief in Emergency Situations Fund (“PM CARES Fund”) or any other Fund set up by the
Central Government for socio economic development and relief and welfare of the schedule
caste, tribes, other backward classes, minorities and women; </li>

<li>Contribution to incubators or research and development projects in the field of science,
technology, engineering, and medicine, funded by the Central Government or State Government
or Public Sector Undertaking or any agency of the Central Government or State Government;
and</li>

      <li> Contributions to public funded Universities; Indian Institute of Technology (“IITs”); National
Laboratories and autonomous bodies established under Department of Atomic Energy (“DAE”);
Department of Biotechnology (“DBT”); Department of Science and Technology (“DST”);
Department of Pharmaceuticals; Ministry of Ayurveda, Yoga and Naturopathy, Unani, Siddha
and Homoeopathy (“AYUSH”); Ministry of Electronics and Information Technology and other
bodies, namely Defense Research and Development Organisation (“DRDO”); Indian Council of
Agricultural Research (“ICAR”); Indian Council of Medical Research (“ICMR”) and Council of
Scientific and Industrial Research (“CSIR”), engaged in conducting research in science,
technology, engineering and medicine aimed at promoting SDGs;</li>


      <li>Rural development projects;</li>

      <li>Slum area development (the term `slum area' shall mean any area declared as such by the Central
Government or any State Government or any other competent authority under any law for the
time being in force);</li>

      <li>Disaster management, including relief, rehabilitation and reconstruction activities; </li>

      <li> Any other CSR activity as may be specified under Schedule VII of the Act or as may be notified
by the Government of India from time to time. </li>
<li>The items mentioned above forms part of Illustrative list of Projects that may be undertaken by
KLI which shall deemed to have been amended so as to be read in consonance with variation in
applicable law from time to time.</li>
<li>Any other CSR activities which the Government of India may notify from time to time, shall
constitute as CSR activities for the purposes of Section 135 read with Schedule VII of the Act,
along with the CSR Rules, 2014 as amended from time to time and in line with the Government
of India’s notifications issued from time-to-time.</li>
    </ul> -->
	<br><br>
	
	
  </div>
</section>

<section class="statement secheading pt-50" id="statementid">
  <div class="midWrapper">
    <h2><b><u>Statement of Commitment</u></b></h2>
    <p>KLI, at all times, is committed to:</p>

    <ul class="seclis">
      <li>Engage with communities to understand their material expectations and concerns, and will consider these
        material expectations and concerns to design its CSR agenda. </li>

      <li>Implement, monitor, review and evaluate CSR initiatives to achieve the desired outcomes in a transparent
        manner. </li>

      <li>Undertake projects in the areas of inter-alia promoting education, enhancing vocational skills and
        livelihood, promoting preventive healthcare, environment and sustainable development, sports and others
        including reducing inequalities faced by socially and economically backward groups, relief and
        rehabilitation, and interventions towards a cleaner India with the aim to serve communities at large and to
        transform their lives. </li>

      <li> Collaborate with governmental agencies, non-governmental agencies (“NGOs”) and/or other institutions
        to collectively deliver the community development initiatives and support such agencies and institutions
        with appropriate and necessary resources.</li>

      <li>Ensure that surplus arising out of CSR initiatives is utilised to further augment the CSR agenda and that
        such surplus does not form part of KLI’s profits.</li>

      <li>Comply with all legal provisions applicable for CSR and adopt best industry practices, wherever feasible.</li>

     
    </ul>

  </div>
</section>


<section class="implementation secheading pt-50" id="implid">
  <div class="midWrapper">
    <h2><b><u>Guiding Principle for Implementation of CSR activities</u></b></h2>

    <p>Given the enormity of India’s social development requirement, KLI will either directly implement its CSR projects and
      programmes, and /or engage with eligible agencies, meeting the minimum criteria as set out under the heading
      ‘Implementing Agency’</p>

    <!-- <p> Given the enormity of India’s social development requirement, KLI will either directly implement all its
      CSR projects and programmes, and /or partner* with selected partners who may be either governmental
      agencies, NGOs and/or other institution, for implementing projects and programmes who have a proven
      track record to implement cost and process efficient CSR projects and/or programmes that are scalable,
      sustainable, and have measurable social outcomes and impact.</p>

    <p>Further, KLI through its present and past employees, and stakeholders will also implement projects and
      programmes by procuring products and services directly from vendors and market at large.</p>

    <p>[*Partner in the CSR context means KLI joining-hands (partner) with an NGO to implement its CSR
      Programme i.e., KLI’s CSR Programmes will be funded by KLI (thus, CSR funding partner) and
      implemented by/through the partner (thus, an implementing partner). It is clarified that KLI’s
      responsibility and liability is restricted to impact outcomes of its CSR Programmes only and in no
      manner will KLI be responsible or held liable for any acts of omission and commission, and such other
      civil and criminal liabilities]</p> -->
	  

  </div>
</section>

<section class="implementation secheading pt-50" id="dcsrp">
  <div class="midWrapper">
    <h2>Direct CSR Projects</h2>
	<p>CSR Projects undertaken, executed and implemented by itself (KLI) under its Direct CSR Projects may include
    engagement and involvement of all stakeholders including employees, across Indian geography,
    and for the purpose of implementation and monitoring, KLI may also engage third party organisations / consultants etc.
    However, for KLI’s Direct CSR Projects, the onus of responsibility on implementing and monitoring rests with KLI.</p>
	</div>
</section>


<section class="implementation secheading pt-50" id="csrpipo">
  <div class="midWrapper">
    <h2>CSR Projects with Implementing Agencies</h2>
	<p>CSR Project Implementing Agency in the CSR context means KLI engaging an NGO to implement its CSR Projects
    i.e., KLI CSR Projects funded by it, thus, KLI is the CSR funding organisation, and the project is implemented by /
    through the implementing agency. Further, it is clarified that KLI’s responsibility and liability is restricted to impact
    outcomes of its CSR Projects only and in no manner will KLI will be responsible or held liable for any acts of omission
    and commission, and such other civil and criminal liabilities of its implementing agencies</p>
<!-- <p>As per development sector practice and for convenience, KLI will refer to all its implementing partners
as organisations and / or NGOs and / or NPOs unless otherwise specified in this CSR Policy.</p> -->
<br>
<section class="implementation secheading pt-50" id="ipo">
  <div class="midWrapper">
    <h2>Implementing Agencies</h2>
<p>The Board shall ensure that the CSR activities are undertaken by KLI directly or through any of the entities registered
  with the Central Government under the CSR Rules including:</p>
<p>(A) company established under Section 8 of the Act, or a registered public trust or a registered society, exempted
  under sub-clauses (iv), (v), (vi) or (via) of clause (23C) of Section 10 or registered under Sections 12A and 80 G of
  the Income Tax Act, 1961, established by the company, either singly or along with any other company; or</p>
<p>(b) A company established under Section 8 of the Act, or a registered trust or a registered society, established by the
  Central Government or State Government; or</p>
<p>(c) Any entity established under an Act of Parliament or a State legislature; or</p>
<p>(d)A company established under Section 8 of the Act, or a registered public trust or a registered society, exempted
  under sub-clauses (iv), (v), (vi) or (via) of clause (23C) of Section 10 or registered under Sections 12A and 80G of
  the Income Tax Act, 1961, and having an established track record of at least three (3) years in undertaking similar
  activities.</p>
<br>
</div>
</section>

<section class="implementation secheading pt-50" id="eoio">
  <div class="midWrapper">
    <h2>Engagement of International Organisations</h2>

<p>“International Organisation” means an organisation as defined under Rule 2(g) of the CSR Rules, 2014. KLI may engage
  International Organisation(s) for designing, monitoring and evaluation of the CSR projects or programmes as well as
  for capacity building of its personnel for CSR.</p>

	</div>
</section>



<!--<section class="implementationpartner secheading pt-50" id="partid">
  <div class="midWrapper">
    <h2>Implementation partners</h2>

    <p>
      Charitable bodies in the form of KEF, government agencies, Not for Profit Organisations (NPO), trust,
      foundations, companies under section 8 of the Companies Act (previously companies under Sec 25 of
      the Companies Act, 1956) and such other agencies who work in the interest of the community in this
      space. As per development sector practice and for convenience, KLI will refer to all its implementing
      partners as NGOs unless otherwise specified in this CSR Policy.
    </p>
 
 -->



<section class="implementationpartner secheading pt-50" id="mon">
  <div class="midWrapper">
    <h2>Monitoring</h2>
	<p>The CSR Committee of the Board of Directors of KLI will ensure a transparent monitoring mechanism for ensuring
    effective implementation of the projects / programs/ activities proposed to be undertaken by the KLI in pursuance of its
    CSR obligations.</p>
	<p>The CSR Committee would be responsible for monitoring the approved projects and/or programmes and would ensure
    that the funds are utilized for the approved purpose to the satisfaction of the Board of Directors of KLI in the manner
    approved by it and shall be certified by the Chief Financial Officer or the ‘person’ in charge of financial management.</p>
	<p>Monitoring mechanisms may include visits, meetings and progress/status reporting by the project/programme teams.
    KLI’s CSR activities will be regularly reviewed by the CSR Committee.
   </p>
   <p> A system will be put in place to maintain a transparent monitoring and reporting mechanism across all the stakeholders
    involved in the CSR activities of KLI, as required under Section 135 read along with Schedule VII of the Act along
    with the CSR Rules, 2014, as amended from time to time and in line with the Government of India’s notifications issued
    from time to time.</p>
	<p>In case of a multi-year project, having timelines not exceeding three (3) years, excluding the Financial Year in which it
    was commenced, undertaken by KLI in fulfilment of its CSR obligations (including projects that was initially not
    approved as a multi-year project but whose duration has been extended beyond one year by the Board) (“Ongoing
    Project”), the Board shall monitor the implementation of such CSR project with reference to the approved timelines and
    year-wise allocation. The Board may also make modifications, for the smooth implementation of such a project within
    the overall permissible time period.</p>

	 </div>
</section>


<section class="implementationpartner secheading pt-50" id="csrpecsrf">
  <div class="midWrapper">
    <h2>CSR Project Expenditure / CSR Funds</h2>
	<p>The Board shall ensure that in every financial year, KLI spends at least two (2) % of its average net profits made during
    the three (3) immediately preceding financial years in pursuance to the provisions of this CSR Policy and in accordance
    with Section 135 read with Schedule VII of the Act and CSR Rules, 2014, as amended from time to time.</p>
<p>For any CSR funds that remain unspent pursuant to an Ongoing Project, KLI shall transfer such unspent CSR funds to
  its Unspent Corporate Social Responsibility Account, within 30 (thirty) days from the end of the Financial Year. Such
  unspent CSR funds shall then be spent in accordance with the terms of this CSR Policy, within a period of three (3)</p>
<p>Financial Years from the date of such transfer, failing which, KLIshall transfer the same to a Fund specified in Schedule
  VII of the Act, within a period of thirty (30) days from the date of completion of the third financial year.</p>
<p>As per the applicable law, such Unspent CSR funds, pertaining to Ongoing CSR Projects for the Financial Year, which
  are transferred to Unspent Corporate Social Responsibility Account will be considered as part of the 2% prescribed
  CSR requirement for the Financial Year.</p>
  <p>For any unspent CSR funds that do not relate to any Ongoing Project, such unspent funds shall be transferred to the
    Fund specified under Schedule VII of the Act, within a period of six (6) months of the expiry of the financial year.</p>
    <p>In case KLI CSR spends is less than two (2) % of its average net profits made during the three (3) immediately preceding
      financial years, the Board in its report made under Section 134(3)(o) of the Act, shall specify the reasons for not
      spending the said amount.</p>

<p>Any surplus arising out of the CSR activities carried on by KLI, shall not comprise of the business profit of
KLI and shall be dealt with in the following manner:</p>
<p>(i) Surplus to be ploughed back either into the same CSR project and/or programme; or</p>
<p>(ii) Surplus to be transferred to the Unspent CSR Account and spent in pursuance of this CSR Policy and the annual action plan of KLI; or</p>
<p>(iii) Surplus to be transferred to a Fund specified under Schedule VII of the Act;
  within a period of 6 (Six) months of the expiry of the financial year.</p>
<p>In the event that KLI spends an amount in excess of the requirement provided under Section 135(5) of the Act, such
  excess amount may be set-off against the requirement to spend under Section 135(5) of the Act, up to immediate
  succeeding three (3) financial years subject to the conditions that such excess amount shall not include surplus arising
  out of the CSR activities and the Board shall pass a resolution to that effect.</p>
<p>The CSR funds may also be utilized for creation or acquisition of capital asset, to be held by either the beneficiaries of
  the CSR project such as entities, collectives or self-help groups; a public authority; or a company incorporated under
  Section 8 of the Act or a registered public trust, registered society with a charitable objective and a CSR registration
  number.</p>
	
<p>The Board shall satisfy itself that the disbursed funds have been utilized for the purposes and in the manner approved
  by it and the Chief Financial Officer or the person responsible for financial management shall certify to the effect.</p>
	 </div>
</section>

<section class="implementationpartner secheading pt-50" id="csrid">
  <div class="midWrapper">
    <h2><b><u>CSR Reporting</u></b></h2>
	<p>
    The Board’s report pertaining to any Financial Year containing details of the CSR initiatives taken during such Financial
    Year, would include an annual report on CSR in the form and manner prescribed under Section 135 read with Schedule
    VII of the Act read along with the CSR Rules, 2014 as amended from time to time and in line with the Government of
    India’s notifications issued from time to time.</p>
<!-- <p>Where in any Financial Year, KLI has an average CSR obligation of Rupees Ten Crore or more, KLI
shall undertake impact assessment of its CSR projects and/or programmes having outlays of Rupees One
(1) crore or more and which have been completed not less than one (1) year before undertaking the
impact assessment, through an independent agency. The impact assessment reports shall be placed
before the Board and also annexed to the annual report on CSR.</p> -->

	 </div>
</section>


<section class="boundry secheading pt-50" id="boundid">
  <div class="midWrapper">
    <h2><b><u>Boundary</u></b></h2>

    <p>
      While KLI will endeavour to implement its projects and programmes in and around the geographies where it carries its
business and operations, KLI may also implement its CSR programmes and/or projects either directly or with
implementing agencies in any geography but within India to serve and support the needy people and/or towards nation
building.</p>
  </div>
</section>

<section class="philosophy secheading pt-50" id="philid">
  <div class="midWrapper">
    <h2><b><u>Key Focus Areas</u></b></h2>

    <!-- <p>
      KLI has defined CSR Focus Areas to make a concerted effort to achieve a meaningful and measurable
social impact. On a case-to-case basis, the CSR programmes and/or projects which are outside KLI’s
defined six CSR Focus Areas but are eligible CSR activities under Section 135 read with Schedule VII
of the Act, and the CSR Rules, 2014 as amended from time to time and in line with the Government of
India’s notifications issued from time-to-time, shall be approved by the CSR Committee.

    </p> -->
  </div>
</section>

<section class="csr-focus secheading pt-50" id="focusid">
  <div class="midWrapper">
    <h2><b><u>(I)CSR Focus Area</u></b></h2>
    <ul class="seclis">
      <li id="edid">
        <span class="focus-lis">Education &amp; Livelihood:</span>
        <p>
          Through its CSR focus area - Education & Livelihood, KLI will endeavor to enhance accessibility and affordability of
          quality education including special education for the differently abled children and youth.
        </p>
        <p>
          KLI’s programmes and/or projects on Education will focus on providing financial and other resource support to
          educational institutions comprising infrastructure, buses, scholarships and coaching to children, teachers, headmasters,
          principals, administrators and trustees and parents and guardians to cater a holistic learning environment for children at
          school and home. The activities may also include providing mid-day meals and creating relevant infrastructure such as
          specialized food delivery vans, utensils, kitchens, warehouses etc. and other required nutrition and health-related support
          to the children.
        </p>

        <p>
          KLI’s Livelihood programmes and/or projects will work towards imparting vocational skills and development training
          courses to children, youth, women, war widows, war veterans, elderly, and the differently-abled including school and
          college dropouts or anyone who never had any formal education
          (illiterate) through technical, soft and trade and commerce skills which may help them earn a livelihood and/or enhance
          their livelihood.
        </p>
        <p>
          KLI may also undertake any other programmes and/or projects which would focus on the education sector and/or
livelihood sector, as may be approved by the CSR Committee.
        </p>
      </li>

      <li id="healthid">
        <span class="focus-lis"> Healthcare:</span>
        <p>Through its CSR focus area – Healthcare, KLI will undertake projects and programmes directly and/or through
          implementing agency working in the healthcare and sanitation domain, including but not limited to improving access
          to healthcare facilities by providing ambulances, screening vans and mobile health units etc.</p>

        <p>KLI will undertake projects and programmes in the fields of healthcare, sanitation, eradication of hunger and
          malnutrition, and provision of access to safe drinking water. The CSR projects and/or programmes will aim to provide
          preventive and curative care , palliative care, health check-up, spread awareness for prevention and cure of diseases like
          cancer, HIV/AIDS, tuberculosis, malaria, and other communicable and non-communicable diseases and illnesses. KLI
          will also undertake projects and programmes to sensitise communities on personal and community health and
          hygiene. To give life a fighting chance, KLI will promote, encourage and implement blood and organ donations. KLI
          will endeavor to enhance accessibility and affordability of quality health services including eye care for needy
          communities.</p>

        <p>KKLI may also undertake any other programmes and/or projects which would focus on the healthcare sector, as may be
          approved by the CSR Committee.</p>
      </li>

      <li id="envid">
        <span class="focus-lis"> Environment and Sustainable Development:</span>

        <p>Through its CSR focus area – Environment & Sustainable Development, KLI will undertake projects and programmes
          directly and/or through organisations working in the area of maintaining ecological balance, protection of flora and
          fauna, animal welfare, agriculture, agroforestry, forestry, conservation of natural resources and maintaining quality of
          soil, air and water.</p>

        <p>KLI will also invest in projects and programmes for water conservation, rain water harvesting, adopting green
          technologies, waste reduction and recycling including effluent treatment, and reusing (3Rs) and promote, encourage
          and use alternate energy and energy conservation. Further, KLI will undertake projects and/or programmes with
          implementing agency that are committed to and work in areas of Environmental, Social and Governance (“ESG”),
          Sustainability, SDGs and CSR either through direct activities or in the form of advisory, policy advocacy and
          stakeholder awareness programmes either directly or with eligible institutions under the CSR mandate.</p>

        <p>KLI may also undertake any other programmes and/or projects which would focus on the environment and sustainable
          development sector, as may be approved by the CSR Committee.</p>

      </li>
<li id="rerc">
        <span class="focus-lis"> Relief &amp; Rehabilitation (COVID-19):</span>
		<p>Corona Virus (COVID-19) has been declared as pandemic by the World Health Organisation (WHO), and Government
      of India has treated this as a notified disaster. The spread of COVID-19 in India has been widespread. Economic and
      social impact of the pandemic has been equally significant. Many of these issues require sustained and long term CSR
      support. Thus, KLI may undertake and support various relief and rehabilitation activities related to COVID-19 including
      under item nos. (i) and (xii) of Schedule VII of the Act relating to promotion of health care, preventive health care and
      sanitation, and disaster management or under such other areas as may be specified by the Ministry of Corporate Affairs
      from time to time in this regard. Such CSR projects and/or programmes may aim to provide immediate response to
      reduce or avoid potential spread of disease and losses resulting from same, assure prompt and appropriate assistance to
      victims of the pandemic or resulting lockdowns. KLI may also undertake projects and programmes that engage with the
      community for long-term rehabilitation solutions including but not limited to focusing on livelihood enhancement,
      providing shelter and infrastructure for education and health services to achieve rapid and effective recovery.</p>


<p>In case of other calamities, pandemic or a notified disaster, KLI may commit significant portion of the
CSR funds towards disaster management projects and programmes for dealing with humanitarian
aspects of emergencies in particular preparedness, response and recovery in order to lessen the impact
of disaster either directly and/or through implementing partners working in relief, rehabilitation and
reconstruction domain, providing immediate and long term solutions, during and after a disaster with the
purpose to avoid a disaster, reduce its impact or recover from its losses including but not limited to
providing essential relief material such as safe drinking water, meals, clothes, medical aid &amp; camps, and
supply of daily essentials to the affected communities.</p>
<p>KLI may also undertake any other programmes and/or projects which would focus on the Relief &amp;
Rehabilitation (COVID-19), as may be approved by the CSR Committee.</p>
</li>
      <li id="sportsid">
        <span class="focus-lis"> Sports:</span>


        <p>A significantly high percentage of Indian children and youth are from the segment, where basic education and sports
          education, including training and coaching is not available. Sport is an activity for children and youth, and is often used
          as a draw card to recruit children and young people to health and education programmes. Sport development projects
          that focus on educational outcomes use sport as a means to deliver educational messages to participants and spectators
          in some cases.</p>

        <p>The United Nations is using sport and games related projects and programmes to encourage young people, particularly
          girls and young women, to attend school within refugee camps across the world. The United Nations Children's Fund
          (“UNICEF”) also lays strong emphasis on ‘sport’ while campaigning for girls’ education, promoting education through
          events and other awareness campaigns.</p>


        <p>India has a severe dearth of training and coaching facilities for sports. Through its CSR Programme on Sports, KLI will
          either directly or with/through implementing agencies impart training and coaching as well as work towards
          development of infrastructure and training facilities to enable children, youth and adults to take up rural sports,
          nationally recognised sports, international and world championships, Olympics and Para Olympics.</p>
<p>KLI may also undertake any other programmes and/or projects which would focus on the sports sector, as may be
approved by the CSR Committee.</p>
      </li>


      <li id="othersid">
        <span class="focus-lis"> Others:</span>
        <p>KLI’s priority will be to implement CSR projects and programmes which come under CSR Focus areas as defined in
          this CSR Policy statement, but it will not be restricted to these defined CSR focus areas only. On a case to case basis,
          KLI may also consider undertaking CSR programmes and/or projects on CSR focus areas which are eligible under
          Section 135 read with Schedule VII of the Act along with the CSR Rules, 2014 as amended from time to time and in
          line with the Government of India’s notifications issued from time to time and as may be approved by the CSR
          Committee.</p>
          <p>KLI through implementing agency may undertake activities related to financial assistance, technology transfer,
            technical assistance, field trials, imparting education, promoting awareness and such other interventions that would
            diversify and intensify practices in conducting research and development in the areas or subjects specified in Schedule
            VII of the Act.</p>
      </li>


      <section class="review secheading pt-50" id="reviewid">
        <div class="midWrapper">
          <h2><b><u>CSR Impact Assessment</u></b></h2>
          <p>Where in any Financial Year, KLI has an average CSR obligation of Rupees Ten crore or more, KLI shall undertake
            impact assessment of its CSR projects and/or programmes having outlays of Rupees One (1) crore or more and which
            have been completed not less than one (1) year before undertaking the impact assessment, through an independent
            agency. The impact assessment reports shall be placed before the Board and also annexed to the annual report on CSR.
            The impact assessment expenditure in any financial year shall not exceed the limit prescribed under the CSR Rules,
            2014 as amended from time to time</p>
        </div>
      </section>



        <h2><b><u>CSR Administrative Overheads Expenses</u></b></h2>
		<p>As per the provisions of the CSR Rules the Board shall ensure that the administrative overheads (the definition has
      been set out below) shall not exceed five percent of total CSR expenditure of KLI for the financial year.</p>
<br>
<p><b>Meaning and scope of ‘Administrative Overheads’ for CSR as defined under the CSR Rules, 2014</b></p>
<br>
<p><i>“Administrative overheads” means the expenses as defined under Rule 2(b) of the CSR Rules, 2014, as amended from time to time</i></p>
    </ul>
  </div>
</section>
    </div>
</section>







<section class="goverance secheading pt-50" id="goverid">
  <div class="midWrapper">
    <h2><b><u>Governance Framework</u></b></h2>
	<p>KLI has an established CSR Committee which is responsible for the overall governance of CSR. The CSR Committee
    comprises of three (3) or more directors, out of which at least one (1) is an Independent Director.</p>
<p>While the CSR Committee will be responsible to review and approve the projects/programmes under KLI’s CSR Policy
  (and the approved annual action plan), KLI’s CSR head and his/her team will be responsible for execution of CSR
  Projects / Programmes, which at all times will be within the scope of KLI’s CSR policy, the annual action plan, and the
  Act.</p>
<p>The CSR Committee will also be responsible for formulating an annual action plan in consonance with this CSR policy
  and recommending such annual action plan to the Board. The annual action plan shall include the following information:</p>
    <p>(i) A list of CSR projects or programmes that are approved to be undertaken by KLI or subjects specified in
      Schedule VII of the Act;</p>
	<p>(ii) The manner of execution of such CSR projects and programmes;</p>
	<p>(iii) The modalities of utilization of funds and implementation schedules for the projects or programmes;</p>
	<p>(iv) Monitoring and reporting mechanism for the projects or programmes; and</p>
	<p>(v) Details of need and impact assessment, if any, for the projects undertaken by KLI</p>
	<p>Based on the recommendations of the CSR Committee and reasonable justification, the Board shall approve the Annual
    Action Plan for KLI and have the right to alter such annual action plan at any time during a Financial Year.</p>
<br>
<section class="goverance secheading pt-50" id="goverid">
  <div class="midWrapper">
    <h2><b><u>Information Dissemination</u></b></h2>

<p>1. Appropriate documentation of KLI’s CSR Policy, annual CSR activities, implementing agencies, and expenditure
  entailed will be undertaken on a regular basis. Wherever applicable under the Act and CSR Rules, the same will be
  available in the public domain.</p>
<p>2. CSR initiatives of KLI will also be reported in the Annual Report of KLI.</p>
<p>3. This CSR Policy shall be uploaded on KLI’s website for information of all stakeholders.</p>
</div>
</section>
<br>
<section class="goverance secheading pt-50" id="goverid">
  <div class="midWrapper">
    <h2>Effective date of Policy</h2>
<p>This CSR Policy Statement is effective from <b>18th October 2023</b> and supersedes all earlier KLI’s CSR Policy Statements.</p>
</div>
</section>
<br>
<section class="goverance secheading pt-50" id="goverid">
  <div class="midWrapper">
    <h2><b><u>Law to take precedence and Amendments</u></b></h2>
<p>In the event of any variation or inconsistency between the provisions of this Policy and applicable law, the provisions
  of the applicable law shall prevail over this Policy and the provisions of this Policy shall be deemed to have been
  amended so as to be read in consonance with such applicable law.</p>
  <p>For Further information, write to kli.kotaklife-csr@kotak.com</p>
  <p>18th October, 2023 <br>
Mumbai</p>
</div>
</section>
	
     <!-- <li>
        KLI has an established Board appointed Corporate Social Responsibility Committee which is
        responsible for the overall governanace of CSR. KLI’s Board CSR Committee (CSR Committee)
        comprises of three (3) or more directors, out of which one (1) is an independent Director.
      </li>

      <li>
        While, the CSR Committee will be responsible to review and approve KLI’s CSR Policy and
        Programmes, Kotak Life’s CSR head and his/her team will be responsible for execution of CSR
        Programmes within the scope of Kotak Life’s CSR policy and the Companies Act.
       <li>
        KLI’s CSR Expenditure payments will be published in its Annual Report as per the CSR
        reporting format mentioned in the Companies Act and the same shall be available at
        <a href="https://www.kotak.com/en/home.html">www.kotak.com </a>
      </li>
      <li>This CSR Policy Statement is effective from 1st April, 2020 and supersedes all earlier KLI’s
        CSR Policy Statements.</li>
	
      <li> For Further information, write to <a href="mailto:CSR@kotak.com?subject=CSR">CSR@kotak.com</a> </li>
    </ul>-->
  </div>
</section>


</div>

    </div>
    </div>
  </div></section>



  <section class="comp">
    <div class="midWrapper">
      <h2>OUR INITIATIVES:</h2>
      <h6>CSR Projects approved by the Board for FY 2020-21</h6>
      <table>
        <tr>
          <th>CSR Project Unique ID </th>
          <th> CSR Focus Area/ CSR Project </th>
          <th>Implementing Partner / Direct Implementation</th>
          <th> CSR Project -Other than ongoing /Ongoing </th>
          <th class="w-30" colspan="2"> Location </th>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <th> District </th>
          <th>State</th>
        </tr>

        <tr>
          <td>01</td>
          <td>Education & Livelihood</td>
          <td>Kotak Education Foundation</td>
          <td>Other than Ongoing</td>
          <td>Mumbai</td>
          <td>Maharashtra</td>
        </tr>

        <tr>
          <td>02</td>
          <td> Healthcare</td>
          <td> Wockhardt Foundation</td>
          <td> Other than ongoing</td>
          <td> Kolkata, Bangalore and Chennai</td>
          <td>West Bengal, Karnataka and Tamil Nadu</td>
        </tr>


        <tr>
          <td> 03</td>
          <td> Relief & Rehabilitation COVID-19</td>
          <td>Annamrita Foundation</td>
          <td> Other than ongoing</td>
          <td> Mumbai</td>
          <td> Maharashtra</td>
        </tr>

        <tr>
          <td> 04</td>
          <td> Relief & Rehabilitation – COVID-19</td>
          <td> Direct Implementation</td>
          <td> Other than ongoing</td>
          <td> Chennai, Coimbatore, Madurai & Thanjavur Baidyabati</td>
          <td> Tamil Nadu and West Bengal</td>
        </tr>

        <tr>
          <td> 05</td>
          <td> Healthcare</td>
          <td> Eastern India Heart Care & Research Foundation</td>
          <td> Ongoing</td>
          <td> Kolkata</td>
          <td> West Bengal</td>
        </tr>
      </table>

      <h6>CSR Projects approved by the Board for FY 2021-22</h6>


      <table>
        <tr>
          <th class="w-10">CSR Project Unique ID </th>
          <th> CSR Focus Area/ CSR Project </th>
          <th>Implementing Partner</th>
          <th> CSR Project -Other than ongoing /Ongoing </th>
          <th class="w-30" colspan="2"> Location </th>
        </tr>

        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <th> District </th>
          <th>State</th>
        </tr>

        <tr>
          <td class="w-10">KLI202122001</td>
          <td>Relief & Rehabilitation – COVID-19</td>
          <td>Direct Implementation</td>
          <td> Other than ongoing</td>
          <td>Kolkata</td>
          <td>West Bengal</td>
        </tr>

        <tr>
          <td>KLI202122002</td>
          <td>Healthcare</td>
          <td>Wockhardt Foundation</td>
          <td>Ongoing</td>
          <td>Kolkata, Bangalore and Chennai</td>
          <td> West Bengal, Karnataka and Tamil Nadu</td>
        </tr>

        <tr>
          <td>KLI202122003</td>
          <td> Healthcare</td>
          <td> Eastern India Heart Care & Research Foundation</td>
          <td> Ongoing</td>
          <td> Kolkata</td>
          <td> West Bengal</td>
        </tr>

        <tr>
          <td> KLI202122004</td>
          <td> Healthcare</td>
          <td> CanKids… KidsCan</td>
          <td> Ongoing</td>
          <td> Ahmedabad, Rajkot and Vadodara</td>
          <td> Gujarat</td>

        </tr>

      </table>
	  
	     <h6>CSR Projects approved by the Board for FY 2022-23</h6>

<table>
        <tr>
          <th class="w-10">CSR Project Unique ID </th>
          <th> CSR Focus Area/ CSR Project </th>
          <th>Implementing Partner</th>
          <th class="w-30" colspan="2"> Location </th>
        </tr>

        <tr>
          <td></td>
          <td></td>
          <td></td>
         
          <th> District </th>
          <th>State</th>
        </tr>

        <tr>
          <td class="w-10">KLI202223001</td>
          <td>Healthcare</td>
          <td>Eastern India Heart Care and Research Foundation </td>
          <td>Kolkata</td>
          <td>West Bengal</td>
        </tr>

        <tr>
          <td>KLI202223002</td>
          <td>Healthcare</td>
          <td>Wockhardt Foundation</td>
          <td>Chennai, Bangalore, Maysore</td>
          <td>Tamil Nadu, Karnataka</td>
        </tr>

        <tr>
          <td>KLI202223003</td>
          <td> Healthcare</td>
          <td>Maharogi Sewa Samiti</td>
          <td> Chandrapur</td>
          <td>Maharashtra</td>
        </tr>

        <tr>
          <td> KLI202223004</td>
          <td> Healthcare</td>
          <td> Nana Palkar Smruti Samiti</td>
         
          <td>Mumbai</td>
          <td>Maharashtra</td>

        </tr>
         <tr>
          <td> KLI202223005</td>
          <td> Healthcare</td>
          <td>Late Ratilal Devji Chawhan Charitable Trust </td>
         
          <td>Palghar</td>
          <td>Maharashtra</td>

        </tr>
         <tr>
          <td> KLI202223006</td>
          <td> Healthcare</td>
          <td>Hindu Mission Hospital</td>
         
          <td>Chennai</td>
          <td>Tamil Nadu</td>

        </tr>
            <tr>
          <td> KLI202223007</td>
          <td> Healthcare</td>
          <td>Free Ophthalmic Hospitals Society</td>
         
          <td>Mumbai</td>
          <td>Maharashtra</td>

        </tr>

      </table>
      
	  
      
      
      <h6>CSR Projects approved by the Board for FY 2023-24</h6>
      <table>  <tr>
          <th class="w-10">CSR Project Unique ID </th>
          <th> CSR Focus Area/ CSR Project </th>
          <th>Implementing Partner</th>
		  <th>CSR Project -Other than ongoing /Ongoing </th>
          <th class="w-30" colspan="2"> Location </th>
        </tr>

        <tr>
          <td></td>
          <td></td>
          <td></td>
                   <td></td>

          <th> District </th>
          <th>State</th>
        </tr>
<tr><td>KLI202324001</td><td>Healthcare</td><td>Gremaltes Referral Hospital And Leprosy Centre</td><td>Other Than On Going</td><td>Chennai</td><td>Tamil Nadu</td></tr><tr><td>KLI202324002</td><td>Healthcare</td><td>Wockhardt Foundation</td><td>On Going</td><td>Mysore</td><td>Karnataka</td></tr><tr><td>KLI202324003</td><td>Healthcare</td><td>Smile Foundation</td><td>On Going</td><td>Chennai, Virudhunagar, Thoothukudi</td><td>Tamil Nadu</td></tr><tr><td>KLI202324004</td><td>Healthcare</td><td>Vaishnav Charitable and Medical Trust</td><td>Other Than On Going</td><td>Mumbai</td><td>Maharashtra</td></tr><tr><td>KLI202324005</td><td>Healthcare</td><td>Impact Guru Foundation</td><td>On Going</td><td>Pondicherry, Kallkuruchi</td><td>Pondicherry, Tamil Nadu</td></tr><tr><td>KLI202324006</td><td>Healthcare</td><td>Sri Kanchi Kamakoti Medical Trust</td><td>Other Than On Going</td><td>Coimbatore</td><td>Tamil Nadu</td></tr><tr><td>KLI202324007</td><td>Healthcare</td><td>CanKids KidsCan</td><td>On Going</td><td>Vadodara, Ahemdabad, Rajkot</td><td>Gujarat</td></tr><tr><td>KLI202324008</td><td>Healthcare</td><td>Ramakrishna Sarada Mission Maitri Bhavan</td><td>Other Than On Going</td><td>Kolkata</td><td>West Bengal</td></tr><tr><td>KLI202324009</td><td>Healthcare</td><td>The Eastern India Heart Care & Research Foundation</td><td>On Going</td><td>Kolkata</td><td>West Bengal</td></tr><tr><td>KLI202324010</td><td>Education</td><td>Buddy4Study India Foundation</td><td>On Going</td><td>Pune, Nashik, Nagpur, Nagapattinam, Madurai, Thanjavur</td><td>Maharashtra, TamilNadu</td></tr><tr><td>KLI202324011</td><td>Healthcare</td><td>World Vision India</td><td>On Going</td><td>Virudhunagar, Thoothikudi, Kallkuruchi, Pondicherry</td><td>Tamil Nadu, Pondicherry</td></tr><tr><td>KLI202324012</td><td>Healthcare</td><td>MOHAN Foundation</td><td>On Going</td><td>Mumbai</td><td>Maharashtra</td></tr><tr><td>KLI202324013</td><td>Healthcare</td><td>Shrimad Rajchandra Sarvmangal Trust</td><td>Other Than On Going</td><td>Valsad, Vapi</td><td>Gujarat</td></tr><tr><td>KLI202324014</td><td>Healthcare</td><td>Prasad Chikitsa</td><td>Other Than On Going</td><td>Thane</td><td>Maharashtra</td></tr><tr><td>KLI202324015</td><td>Healthcare</td><td>Free Ophthalmic Hospitals' Society</td><td>Other Than On Going</td><td>Mumbai</td><td>Maharashtra</td></tr><tr><td>KLI202324016</td><td>Healthcare</td><td>Tamilnad Kidney Research Foundation</td><td>Other Than On Going</td><td>Chennai</td><td>Tamil Nadu</td></tr><tr><td>KLI202324017</td><td>Healthcare</td><td>Thirumalai Charity Trust</td><td>Other Than On Going</td><td>Ranipet</td><td>Tamil Nadu</td></tr><tr><td>KLI202324018</td><td>Healthcare</td><td>Vaishnav Charitable and Medical Trust</td><td>Other Than On Going</td><td>Mumbai</td><td>Maharashtra</td></tr><tr><td>KLI202324019</td><td>Healthcare</td><td>Shrimad Rajchandra Sarvmangal Trust</td><td>Other Than On Going</td><td>Valsad, Vapi</td><td>Gujarat</td></tr><tr><td>KLI202324020</td><td>Healthcare</td><td>Community Eye Care Foundation</td><td>Other Than On Going</td><td>Pune</td><td>Maharashtra</td></tr><tr><td>KLI202324021</td><td>Healthcare</td><td>Community Eye Care Foundation</td><td>On Going</td><td>Pune</td><td>Maharashtra</td></tr><tr><td>KLI202324022</td><td>Healthcare</td><td>Rushabh Foundation</td><td>On Going</td><td>Mumbai, Palghar</td><td>Maharashtra</td></tr><tr><td>KLI202324023</td><td>Healthcare</td><td>Prasad Chikitsa</td><td>On Going</td><td>Thane</td><td>Maharashtra</td></tr></table>



<h6>CSR Projects approved by the Board for FY 2024-25</h6>
      <table>  <tr>
          <th class="w-10">CSR Project Unique ID </th>
          <th> CSR Focus Area/ CSR Project </th>
          <th>Implementing Partner</th>
          <th>CSR Project -Other than ongoing /Ongoing </th>
          <th class="w-30" colspan="2"> Location </th>
        </tr>

        <tr>
          <td></td>
          <td></td>
          <td></td>
                   <td></td>

          <th> District </th>
          <th>State</th>
        </tr>
<tr><td>KLI202425001</td><td>Healthcare</td><td>Smile Foundation</td><td>Ongoing</td><td>Chennai,Virudhunagar,Thoothukudi</td><td>Tamil Nadu</td></tr><tr><td>KLI202425002</td><td>Healthcare</td><td>Wockhardt Foundation</td><td>Ongoing</td><td>Mysore</td><td>Karnataka</td></tr><tr><td>KLI202425003</td><td>Healthcare</td><td>Impact Guru Foundation </td><td>Ongoing</td><td>Kallakurichi, Puducherry</td><td>Tamil Nadu, Puducherry</td></tr><tr><td>KLI202425004</td><td>Healthcare</td><td>CanKids KidsCan</td><td>Ongoing</td><td>Vadodara, Ahmedabad, Rajkot</td><td>Gujarat</td></tr><tr><td>KLI202425005</td><td>Education</td><td>Buddy4Study India Foundation</td><td>Ongoing</td><td>Madurai, Nagapattinam, Thanjavur, Dharmapuram, Salem,  Pune, Nagpur, Nashik</td><td>Tamil Nadu, Maharashtra</td></tr><tr><td>KLI202425006</td><td>Healthcare</td><td>The Eastern India Heartcare & Research Foundation</td><td>Ongoing</td><td>Kolkata</td><td>West Bengal</td></tr><tr><td>KLI202425007</td><td>Healthcare</td><td>Gurupriya Vision Research Foundation</td><td>Other Than Ongoing</td><td>Chennai</td><td>Tamil Nadu</td></tr><tr></tr></table>

    </div>
  </section>





<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  $(".js-example-placeholder-single-website").select2({
    placeholder: "Select Website",
    allowClear: true
  });

  $(".js-example-placeholder-single-country").select2({
    placeholder: "Select Country",
    allowClear: true
  });
</script>

<script>
/*crspdf scroll to section v*/

$(document).ready(function() {
	$('a[rel="relativeanchor"]').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
	}); 
});

/*crspdf scroll to section ^*/
</script>