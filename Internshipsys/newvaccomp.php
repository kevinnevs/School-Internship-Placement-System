<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<link href="Style.css" rel="stylesheet" type="text/css" media="all"> 
<body
<!-- Navbar -->
<div class="topnav" id="Home"> 
		<a href="studhome.php">
  <img src="backbutton.png" alt="back home" style="width:20px;height:20px;border:0;">
</a> <font color="white">back to home page</font>
        </div>
<h2>ALL COMPANIES</h2>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<table id="myTable">
<tr>
    <th style="width:10%;">Company Name</th>
    <th style="width:10%;">Apply using the Email of the company</th>
    <th style="width:10%;">Fun fact about this program</th>
  </tr>
  <tr>
    <td >KPMG LLP</a></td>
    <td >kpmg@gmail.com</td>
    <td >KPMG interns have the opportunity to participate in KPMG's Global Internship Program, which is a four-week rotation abroad at an international KPMG member firm! Additionally, interns have the option to build their own internship program (BYOIP) to tailor their experience to their own interests and career needs.</td>
  </tr>
  <tr>
    <td >Aflac</a></td>
    <td >aflac@gmail.com</td>
    <td >Aflac's interns enjoy a very special perk: The company provides housing for them!</td>
  </tr>
  <tr>
    <td >AIG</a></td>
    <td >aig@gmail.com</td>
    <td >AIG interns get to start their internship with a 3 day orientation and training, and if you're a high-performing intern, you get considered for a full-time job after graduation.</td>
  </tr>
  <tr>
    <td >Apex</td>
    <td >apex@gmail.com</td>
    <td >Apex interns get a first-hand understanding of what it's like to work at one of the top staffing & recruiting firms in the U.S., all while practicing in the company's annual activity-filled field day!</td>
  </tr>
  <tr>
    <td >Asurion</a></td>
    <td >asurion@gmail.com</td>
    <td >Interns at Asurion attend a week long on-boarding at the company's HQ. Past Interns have even gotten the opportunity to meet with the Chief Operating Officer on their first day!</td>
  </tr>
  <tr>
    <td >Autozone</td>
    <td >autozone@gmail</td>
    <td >AutoZone interns, aka AutoZoners, are treated like real employees and are able to get 20% off the company's products.</td>
  </tr>
  <tr>
    <td >Bank of America</td>
    <td >boa@gmail.com</td>
    <td >Almost all new grad corporate hires came from the internship program their junior summer.</td>
  </tr>
  <tr>
    <td >BCG</a></td>
    <td >bcg@gmail.com</td>
    <td >Some BCG interns get to travel internationally during their time at the company.</td>
  </tr>
  <tr>
    <td >BlackRock</td>
    <td >blackrock@gmail.com</td>
    <td >Apart from a summer internship, candidates for the U.S. BlackRock Founders Scholarship also qualify for a $17,500 merit award.</td>
  </tr>
  <tr>
    <td >Bose</a></td>
    <td >bose@gmail.com</td>
    <td >Bose interns get to embed themselves in the company's business to help create innovative new products - which they can score great discounts on!</td>
  </tr>
  <tr>
    <td >Campbell's Soup Company</a></td>
    <td >campbell@gmail.com</td>
    <td >Interns at Campbell's Soup enjoy benefits like access to leadership, webinars, and the ability to get hired as full-time employees (and then offered tuition assistance for additional degrees earned)!</td>
  </tr>
  <tr>
    <td >Casper</a></td>
    <td >casper@gmail.com</td>
    <td >One of the most innovative mattress companies makes sure its interns are happy, making an impact, well-rested, and happy with monthly rooftop happy hours exclusively for interns.</td>
  </tr>
  <tr>
    <td >CBS News</a></td>
    <td >cbs@gmail.com</td>
    <td >Interns at CBS get a first-hand look into what it's like working at one of the world's largest media and entertainment companies by assisting producers, greeting guests, or researching stories.</td>
  </tr>
  <tr>
    <td >CDW</td>
    <td >cdw@gmail.com</td>
    <td >CDW even hires year-round campus interns who connect their university's IT department with CDW.</td>
  </tr>
  <tr>
    <td >Charles Schwab</a></td>
    <td >charles@gmail.com</td>
    <td >Charles Schwab's intern programs touch more than 40 different business lines and help students form skills that'll help them throughout their careers.</td>
  </tr>
  <tr>
    <td >Chewy</a></td>
    <td >chewy@gmail.com</td>
    <td >Chewy interns are dedicated to serving pet owners-and pets! The top-dog intern receives a full-time position to start after graduation.</td>
  </tr>
  <tr>
    <td >Chick-fil-A</a></td>
    <td >cfa@gmail.com</td>
    <td >Chick-fil-A's C.E.O. gave interns a private tour around Atlanta to visit the first Chick-fil-A restaurant and other memorable locations that are a part of the brand's history.</td>
  </tr>
  <tr>
    <td >Cisco</a></td>
    <td >cisco@gmail.com</td>
    <td >Cisco interns get to take over the company's Snapchat account to show off the work they've been doing!</td>
  </tr>
  <tr>
    <td >Citi</td>
    <td >citi@gmail.com</td>
    <td >Citi has a Sophomore Early Identification program (totally remote, five-week training) which then converts many participants into interns for their junior summers. Imagine getting an internship offer during your Sophomore summer!</td>
  </tr>
  <tr>
    <td >CohnReznick LLP</a></td>
    <td >cllp@gmail.com</td>
    <td >Interns are provided with development opportunities through the Firm's “Imagine More Series” which is a suite of learning modules designed to bring to life CohnReznick's Values.</td>
  </tr>
  <tr>
    <td >Coinbase</a></td>
    <td >coinbase@gmail.com</td>
    <td >Coinbase interns get to work with one of the fast-growing financial trends: crypto-currencies</td>
  </tr>
  <tr>
    <td >Corning</a></td>
    <td >corning@gmail.com</td>
    <td >Past interns received Six Sigma training sessions that helped them obtain Yellow Belt certification and learn how to use a data-driven approach to improve processes for their summer projects.</td>
  </tr>
  <tr>
    <td >Cox Enterprises</a></td>
    <td >cox@gmail.com</td>
    <td >Cox interns have the opportunity to complete business-critical projects, network with  employees across the entire company, and improve their communities through company-wide service days!</td>
  </tr>
  <tr>
    <td >CVS</a></td>
    <td >cvs@gmail.com</td>
    <td >Interns at CVS work on a structured project all summer long that's reviewed and evaluated by their Intern Leaders. CVS's internship program is also one of the highest-ranked health care internships in the country!</td>
  </tr>
  <tr>
    <td >Dell</td>
    <td >dell@gmail.com</td>
    <td >At the end of the summer internship, Dell interns present their findings to an array of senior executives and leaders. Past intern projects include Voice Analytics for Dell Technician Assistance and DDV Natural Language Processing.</td>
  </tr>
  <tr>
    <td >Deloitte</td>
    <td >deloitte@gmail.com</td>
    <td >Deloitte interns are assigned to a mentorship team at the start of their internships. Each team includes a counselor and an onboarding advisor—fitting for an organization that's been named a top private company for leadership development.</td>
  </tr>
  <tr>
    <td>Deutsche Bank</td>
    <td >deutsche@gmail.com</td>
    <td >Deutshce Bank converts a high portion of their interns into full-time employees. If you make it into the Deutsche Bank Risk program for new grads, you can even get the opportunity to complete an international rotation!</td>
  </tr>
  <tr>
    <td >Devries Global</a></td>
    <td >devries@gmail.com</td>
    <td >Interns at Devries Global get to work across 1-3 client accounts in different practice areas such as retail, lifestyle, and social strategy.</td>
  </tr>
  <tr>
    <td >DICK'S Sporting Goods</td>
    <td >dsp@gmail.com</td>
    <td >Interns at Dick's get access to the company's state-of-the-art fitness equipment, walking/running trails, and sports viewing parties-and that's just to name a few perks.</td>
  </tr>
  <tr>
    <td >Digitas</a></td>
    <td >digitas@gmail.com</td>
    <td >Digitas interns get a hands-on experience with advertising by working on a capstone project throughout the summer.</td>
  </tr>
  <tr>
    <td >Enterprise Holdings</a></td>
    <td >enterpriseh@gmail.com</td>
    <td >Enterprise interns learn what it takes to run a successful business by developing their entrepreneurial skills across fields. Enterprise also hires more interns each summer than almost any other company in the world!</td>
  </tr>
  <tr>
    <td >EY<</td>
    <td >ey@gmail.com</td>
    <td >All 3,500 EY interns meet up at the firm's International Intern Leadership Conference, which is held in Walt Disney World!</td>
  </tr>
  <tr>
    <td >Facebook</a></td>
    <td >fb@gmail.com</td>
    <td >Aside from being some of the top paid interns in the country, Facebook interns get to travel to places like Yosemite and Santa Cruz on company-sponsored outings</td>
  </tr>
  <tr>
    <td >Gallagher</td>
    <td >gallagher@gmail.com</td>
    <td >Gallagher interns get a jump start on their careers through the company's on-the-job and professional development training, which includes shadowing current employees, participating in mock proposal meetings, and more!</td>
  </tr>
  <tr>
    <td >General Dynamics Information Technology</a></td>
    <td >gdit@gmail.com</td>
    <td >General Dynamics' management team encourages interns to share their ideas and give feedback on projects—a characteristic that aligns with the company's ethos: honesty, transparency, trust, and alignment.</td>
  </tr>
  <tr>
    <td >General Electric</a></td>
    <td >ge@gmail.com</td>
    <td >60% of GE's Leadership Program employees were former GE interns.</td>
  </tr>
  <tr>
    <td >Goldman Sachs</a></td>
    <td >gs@gmail.com</td>
    <td >Known for its prestigious banking internships, Goldman Sachs interns get executive exposure—even to the company's CEO</td>
  </tr>
  <tr>
    <td >Google</td>
    <td >google@gmail.com</td>
    <td >Google has one of the best diversity internships in the country, BOLD, and also has incredible engineering internships that provide students the opportunity to make am impact on products used by billions of people.</td>
  </tr>
  <tr>
    <td >Groupon</a></td>
    <td >groupon@gmail.com</td>
    <td >Interns at Groupon are a tight-knit group who get to do fun activities together throughout the summer, like group cooking classes. Groupon is known for giving its interns real responsibilities that a full-time employee would even do.</td>
  </tr>
  <tr>
    <td >Hilton</td>
    <td >hilton@gmail.com</td>
    <td >Hilton offers a range of internships, including a 12-month Leadership Internship that's designed to help train the next group of company leaders.</td>
  </tr>
  <tr>
    <td >Honda</td>
    <td >honda@gmail.com</td>
    <td >Honda's internship perks include housing, relocation assistance, social and professional development, and community service events.</td>
  </tr>
  <tr>
    <td >Horizon Media, Inc.</a></td>
    <td >horizon@gmail.com</td>
    <td >Horizon Media's 10-week program includes fun intern events like trips to Yankees games and visits to NBC and the Food Network!</td>
  </tr>
  <tr>
    <td >HP, Inc.</a></td>
    <td >hp@gmail.com</td>
    <td >Thinking about interning at HP? You can submit your application anytime because they accept internship applications all year long.</td>
  </tr>
  <tr>
    <td >Hubbell Incorporated</a></td>
    <td >hubbell@gmail.com</td>
    <td >Hubbell partners with charities such as Habitat for Humanity to enable employees and interns to serve their local communities.</td>
  </tr>
  <tr>
    <td >HubSpot</a></td>
    <td >hubspot@gmail.com</td>
    <td >HubSpot's interns get to hang out in the company's awesome offices and get to participate in fun, company-wide mystery dinners!</td>
  </tr>
  <tr>
    <td >IBM</td>
    <td >ibm@gmail.com</td>
    <td >IBM pays interns based on the number of college credits they've earned toward their degree. That means your full course load will literally pay off!</td>
  </tr>
  <tr>
    <td >Intuit</a></td>
    <td >intuit@gmail.com</td>
    <td >Intuit encourages its employees to take 10% of their working hours as “unstructured time” so they can pursue ideas and projects they are passionate about.</td>
  </tr>
  <tr>
    <td >JetBlue Airways</a></td>
    <td >jetblue@gmail.com</td>
    <td >JetBlue interns get to attend a new hire orientation at JetBlue University in Orlando, Florida!</td>
  </tr>
  <tr>
    <td >John Deere</a></td>
    <td >jd@gmail.com</td>
    <td >John Deere's interns get to attend a two-day Summer Intern Conference held in Moline, Illinois, and enjoy perks like subsidized housing!</td>
  </tr>
  <tr>
    <td >Johnson and Family</td>
    <td >j&j@gmail.com</td>
    <td >J&amp;J has a "Be Vital" app that helps intern applicants get helpful content and connect with mentors.</td>
  </tr>
  <tr>
    <td >Kiewit</a></td>
    <td >kiewit@gmail.com</td>
    <td >Kiewit interns get a true taste of what it's like being a full-time employee with guided tours of the company's large-scale construction projects.</td>
  </tr>
  <tr>
    <td >Koch</td>
    <td >koch@gmail.com</td>
    <td >The president and C.O.O. of Koch Industries, Dave Robertson, started his career as an intern at the company.</td>
  </tr>
  <tr>
    <td >Kohl's</a></td>
    <td >kohls@gmail.com</td>
    <td >Interns at Kohl's get to make an impact through a range of responsibilities, including designing apparel, allocating home goods, and making sure the mobile app is secure and easy to use.</td>
  </tr>
  <tr>
    <td >Kroger</td>
    <td >kroger@gmail.com</td>
    <td >Kroger interns can do everything from labor relations to data science, and more.</td>
  </tr>
  <tr>
    <td >L'Oréal</td>
    <td >loreal@gmail.com</td>
    <td >L'Oréal interns get exposure to executive leaders and enjoy an annual event every summer that's held in their honor.</td>
  </tr>
  <tr>
    <td >Liberty Mutual Insuarance</td>
    <td >liberty@gmail.com</td>
    <td >Interns at Liberty Mutual get the ultimate corporate experience with networking, executive exposure, social events, and trainings.</td>
  </tr>
  <tr>
    <td >Lincoln Electric</td>
    <td >lincoln@gmail.com</td>
    <td >Lincoln Electric interns get to interact with company executives, attend lunch &amp; learns, and have the opportunity to gain hands-on experience at their world-class Welding School.</td>
  </tr>
  <tr>
    <td >Lockheed Martin</td>
    <td >lm@gmail.com</td>
    <td >Lockheed Martin has an internship program that hires students in high school and trains them all the way through their college graduation. This past year, they had 80% of the high school interns who were now College Seniors get full-time job offers!</td>
  </tr>
  <tr>
    <td >Macy's, Inc.</a></td>
    <td >macy@gmail.com</td>
    <td >Macy's interns participate in interactive workshops, community service, and networking events while learning about the ever-evolving retail industry.</td>
  </tr>
  <tr>
    <td >MetLife</a></td>
    <td >metlife@gmail.com</td>
    <td >MetLife interns focus on diverse areas of the industry, including Actuary and Technology.</td>
  </tr>
  <tr>
    <td >Morgan Stanley</a></td>
    <td >morgan@gmail.com</td>
    <td >Morgan Stanley has a "Women in Banking" Scholarship Program.</td>
  </tr>
  <tr>
    <td >Motorola Solutions, Inc.</a></td>
    <td >motorola@gmail.com</td>
    <td >Motorola has an Open Door policy, where interns can go to anyone's office to meet for coffee and get advice. Past interns say the coolest part is that they get to play a big role in public safety by working at a company that helps prevent catastrophes and disasters. Whoa.</td>
  </tr>
  <tr>
    <td >NASA</a></td>
    <td >nasa@gmail.com</td>
    <td >NASA awards its interns by financially supporting their academic exploration through NASA-related research. And...it's NASA!!</td>
  </tr>
  <tr>
    <td >Nascar</a></td>
    <td >nascar@gmail.com</td>
    <td >Nascar interns get to work in Florida while having housing, meals, and travel expenses covered!</td>
  </tr>
  <tr>
    <td >Nasdaq</a></td>
    <td >nasaq@gmail.com</td>
    <td >Nasdaq's C.E.O., Adena Friedman, started off as an intern herself! #goals</td>
  </tr>
  <tr>
    <td >NBCUniversal</a></td>
    <td >nbc@gmail.com</td>
    <td >Some NBCUniversal intern programs fly their entire team members to NYC for an orientation that includes tours of the iconic 30 Rock office.</td>
  </tr>
  <tr>
    <td >NetApp</a></td>
    <td >netapp@gmail.com</td>
    <td >NetApp interns work on meaningful projects and have the opportunity to participate in a wide array of activities, including the annual Intern Showcase. Interns at NetApp also receive mentorship opportunities, volunteer time off, and access to discounts and fitness centers.</td>
  </tr>
  <tr>
    <td >Nielsen</td>
    <td >nielsen@gmail.com</td>
    <td >Nielsen interns participate in Nielsen Global Impact Day volunteering to renovate neighborhood treasures.</td>
  </tr>
  <tr>
    <td >Nike</a></td>
    <td >nike@gmail.com</td>
    <td >In addition to a discount at Nike Employee stores, interns also get to take advantage of Nike's world-class athletic facilities!</td>
  </tr>
 </table>
 
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
</body>
</html>
