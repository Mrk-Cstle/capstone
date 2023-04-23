<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CYSDO Scholar</title>

  <style>
    /* Main */
    main {
      display: flex;
      width: 100%;
      justify-content: flex-start;
      align-items: center;
      flex-direction: row;
      background-image: url("Images/s.jpg");
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: scroll;
      background-size: cover;
      min-height: 100vh;
    }

    #about {
      height: 100vh;
      display: flex;
      flex-direction: row;
      padding: 10px 40px;
      background-color: whitesmoke;


    }

    #aboutPic {
      width: 40%;
      display: flex;
      justify-items: center;
    }

    #aboutInfo {
      width: 60%;
      display: flex;
      flex-direction: column;

    }

    .aboutFormat {
      margin: 40px 5px;
    }

    .aboutFormat p,
    li {
      font-size: 20px;
      text-align: justify;
      line-height: 1.8;
    }

    .aboutFormat h3 {
      font-size: 40px;
      margin-bottom: 20px;
    }

    #aboutPic img {
      width: 600px;
      height: auto;

    }

    #faqs {
      height: 100vh;
      width: 100%;
      display: flex;
      background-color: wheat;
      flex-direction: column;
      padding: 0px 80px;
      margin: 0px 0px;
      line-height: 1.8;


    }

    #faqs h3 {
      font-size: 40px;
    }

    #faqsHeader {

      width: 100%;

    }

    #faqsContent {

      margin-top: 100px;
      width: 90%;
    }

    #faqsContent details {
      border: 1px solid black;
      padding: 10px;
      margin: 30px 0px;
    }

    #faqsContent details p,
    li {
      font-size: 20px;

    }

    #faqsContent summary {
      font-size: 20px;
      font-weight: bold;

    }

    #contact {
      width: 100%;
      height: 100vh;
      display: flex;
      flex-direction: column;
      padding: 0px 80px;
      margin: 0px 0px;
      line-height: 1.8;

    }

    #contactHeader {
      width: 100%;
      margin-top: 100px;
    }

    #contactHeader h3 {
      font-size: 40px;
    }

    #contactHeader p {
      font-size: 20px;
    }

    #contactDetails {
      width: 100%;
      margin-bottom: 200px;

    }

    .contactFormat {
      display: flex;
      flex-direction: row;
      gap: 10px;
      margin-top: 50px;

    }

    .contactIcon {
      height: 100px;
      width: 5%;
      height: auto;
      border: 1px solid black;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;


    }

    .contactIcon img {
      height: 70px;
      width: auto;
    }

    .contactText {

      height: 100px;
      width: 95%;
      border: 1px solid black;
      padding: 20px;
    }
  </style>
</head>

<body>
  <?php
  include 'include/homeNavigation.php';
  ?>
  <main>
    <div class="1">

    </div>

    <div id="2"></div>
  </main>
  <div id="about">
    <div id="aboutPic">
      <img src="Images/CysdoLogo.png" />
    </div>
    <div id="aboutInfo">
      <div class="aboutFormat">
        <h3>MANDATE</h3>
        <p>Assist the City Mayor in the implementation of the Constitutional Provisions
          relative to youth development through promotion of its youth welfare
          enhancement, sport, and education programs and become a progressive
          community with competent youth thriving in a vibrant economy.</p>
      </div>
      <div class="aboutFormat">
        <h3>VISION</h3>
        <p>A highly efficient office who caters comprehensively to the needs of the youth
          sector integral to the over-all enhancement and relevant social transformation of
          San Joseños.</p>
      </div>
      <div class="aboutFormat">
        <h3>MISSION</h3>
        <ol>
          <li>Provide quality service to young clientele.</li>
          <li>Promote holistic development both in-school and out-of-school youth.</li>
          <li>Strengthen the capacity level of young people to make them competitive in the
            National and Global Market.
          </li>
          <li>Empower the youth sector to become dynamic leaders.</li>
        </ol>
      </div>
    </div>
  </div>
  <div id="faqs">
    <div id="faqsHeader">
      <h3>Frequently Asked Questions</h3>

      <div id="faqsContent">

        <details>
          <summary>Who can apply?</summary>
          <ul>
            <li>Incoming college students/ Current college students (30 years old and
              below only)</li>
            <li>Bonafide resident of the City of San Jose Del Monte, Bulacan</li>
          </ul>
        </details>
        <details>
          <summary>When to apply?
          </summary>
          <p>Online application usually happens on the 1st quarter of every year. The online application will be posted on our FB Page: City Youth and Sports Development Office - CSJDM.</p>
        </details>
        <details>
          <summary>What are the qualifications?
          </summary>
          <p>Ang lokal na pamahalaan ng Lungsod ng San Jose Del Monte ay patuloy na naghahatid ng programang pang-edukasyon sa mga kabataang San Joseños na mas kilala bilang City Educational Assistance Program (CEAP). Itinataguyod nito ang layunin na makapagbigay ng tulong pinansiyal sa mga kabataan upang makapagtapos ng pag-aaral.</p>

          <h4>QUALIFICATIONS:</h4>
          <ol>
            <li>Filipino, may asawa o wala, at naninirahan sa Lungsod ng San Jose Del Monte sa loob ng tatlo (3) o mahigit pang taon, nakapagtapos ng sekondarya sa alin mang paaralan sa Lungsod, pribado man o pampubliko. Kung hindi naman nakapagtapos sa Lungsod ay kinakailangang residente nito sa nakalipas na limang (5) taon.</li>
            <li>Hindi lalagpas ng 30 taon ang edad sa araw ng paghahain ng aplikasyon.</li>
            <li>Hindi bababa sa 76% (passing grade) ang general average sa huling taon sa Senior High School.</li>
            <li>Kailangang mapanatili ang 15 enrolled units lakip ang Curriculum or SYLLABUS per semester maliban sa mga magtatapos o graduating students.</li>
            <li>Maaring magpatala sa anumang kursong kanilang nanaisin maging Degree Course (4-year o 5-year courses). o Non-Degree Course (3-year o 2-year courses).</li>
            <li>Ang inyong aplikasyon ay hindi garantiya na kayo ay tanggap na, kailangang sumailalim at pumasa sa mga sumusunod:</li>
            <ol>
              <li>Qualifying Examination</li>
              <li>Interview</li>
              <li>Community Investigation</li>
            </ol>
            <li>May mabuting asal (Certificate of Good Moral).</li>
            <li>Tinatangkilik lamang ang magulang na may pinagsamang kita na hindi hihigit sa P25,000.00 kada buwan o P300,000.00 bawat taon.</li>
            <li>Isa lamang sa bawat pamilya ang maaaring mabigyan ng Educational Assistance, sa pasubali na kung nakatapos na sa kolehiyo ang isang iskolar ay doon pa lang maaaring magkaroon ng pagkakataon na maging iskolar ang isa sa kanyang kapatid, maliban din naman kung kambal o triplet o quadruplet ay bibigyan ng exemption sa aytem na ito.</li>
            <li>Walang tinatanggap na educational assistance o scholarship sa kahit anong ahensya o organisasyon ng Gobyerno at iba pang Lokal na Pamahalaan.</li>
            <li>Ang mga mag-aaral ng City College of San Jose Del Monte (CCSJDM) at Bulacan State University-Sarmiento Campus (BSU-SC) o kahit anong State University o College sa loob ng Lungsod ng San Jose Del Monte na sumasailalim sa UNIFAST – Free Higher Education Program ay HINDI NA maaring maging benepisyaryo ng City Educational Assistance Program (CEAP).</li>
          </ol>
        </details>
        <details>
          <summary>Initial Requirements
          </summary>
          <p> PAALALA:</p>
          <ul>
            <li>Ang LAHAT NG REQUIREMENTS na ito ay IPAPALIWANAG SA ARAW NG ORIENTATION.</li>
            <li>Kung hindi makakarating sa araw ng orientation ang aplikante, maaaring ang PARENT O GUARDIAN ang dumalo.</li>
            <li>Hindi na bibigyan ng pangalawang pagkakataon ang mga NAG-REGISTER ONLINE NA HINDI MAKAKARATING SA ORIENTATION.</li>
            <li>Ang initial requirements ay kinakailangang MAKUMPLETO upang payagang makapag-exam ang aplikante.</li>
          </ul>
          <ol>
            <li>FOR APPLICANTS:</li>
            <ol>
              <li>Birth Certificate (PSA);</li>
              <li>Cedula ng aplikante na may edad 18 taon pataas;</li>
              <li>Certificate of Good Moral Character (Date Issued: 2023) Endorsement Letter</li>
              <li>Certificate of Residency (No. of years of residency must be indicated)</li>
              <li>Sketch ng inyong bahay mula sa barangay (sketch o map)</li>
              <li>Litrato ng permanenteng tirahan (labas at loob);</li>
              <li>Voter's Stub/Certification (Kung wala pa nito ay kinakailangang magpa-rehistro sa COMELEC kapag nag-resume na ang registration).</li>
            </ol>
            <li>FOR PARENT/GUARDIAN:</li>
            <ol>
              <li>Cedula</li>
              <li>Indigency Certificate from Barangay</li>
              <li>Solo Parent I.D</li>
              <li>Notarized Guardianship Certificate from Barangay</li>
            </ol>
          </ol>
          <p> Kung kayo ay MAKAKAPASA sa QUALIFYING EXAMINATION, narito ang FINAL REQUIREMENTS na kailangang asikasuhin:</p>
          <ol>
            <li>Katunayan ng taunang pinagsamang kita ng magulang:</li>
            <ol>
              <li>TAX EXEMPTION CERTIFICATE from BIR para sa walang pirmihang pinagkakakitaan o hindi nagbabayad ng buwis;</li>
              <li>INCOME TAX RETURN (Year 2022) para sa may pirmihang pinagkakakitaan o nagbabayad ng buwis.</li>
              <li>Latest copy of contract or Proof of Income for children of OFWs</li>
            </ol>
            <li>Health Certificate (City Health Office)</li>
            <li>Katunayan ng enrollment at nakamit na grado mula sa paaralan:</li>
            <ol>
              <li>Para sa mga SHS Graduates/Incoming College Students:</li>
              <ol>
                <li>Form 138 (Original o Certified True Copy);</li>
                <li>Registration Form/Card 1st Semester S.Y 2023-2024 (Original o Certified True Copy) ng kasalukuyang semestre sa kolehiyo.</li>
              </ol>
              <li>Para sa mga nasa Kolehiyo:</li>
              <ol>
                <li>Registration Card/Form (Original o Certified True Copy) noong nakaraang semestre (2nd Semester S.Y 2022-2023);</li>
                <li>Certificate of Grades (Original o Certified True Copy) noong nakaraang semestre (2nd Semester S.Y 2022-2023);</li>
                <li>Registration Form/Card (Original o Certified True Copy) ng kasalukuyang semestre (1st Semester S.Y 2023-2024).</li>
              </ol>
              <li>Para sa mga Alternative Learning System (ALS) Graduates: DepEd Certification of Equivalency for ALS Graduate</li>
            </ol>
            <li>Kopya ng Curriculum na nakadepende sa bilang ng taon/semestre ng kinukuhang Course/Degree</li>
            <li>Kinakailangang dokumento para sa pagkuha ng ATM Cash Card:</li>
            <ul>
              <li>ATM Cash Card Registration Form (Landbank Form);</li>
              <li>Photocopy ng Valid ID o School ID;</li>
              <li>2x2 ID Picture;</li>
            </ul>
          </ol>
        </details>
        <details>
          <summary>Filing of Application</summary>
          <ol>
            <li>Like and follow the Official Facebook Page of the City Youth and Sports Development Office.</li>
            <li>Wait for the post regarding the Opening of the Online Application.</li>
            <li>Fill out the Google Form/Online Application Form.</li>
            <li>After the successful registration, wait for the schedule of orientation to be posted on the FB Page.</li>
          </ol>
        </details>
        <details>
          <summary>Issuance of Examination Stub</summary>
          <p>Upon submission of the Application Form during the Orientation, Examination Stub will be released to the applicants.</p>
        </details>
        <details>
          <summary>Announcement of Qualifiers</summary>
          <p>List of all the CEAP Qualifiers will be posted at the Official Facebook Page of the City Youth and Sports Development Office.</p>
        </details>
      </div>

    </div>
  </div>
  <div id="contact">
    <div id="contactHeader">
      <h3>Contact & Address</h3>
      <p>You can contact us through the following;
      </p>
    </div>
    <div id="contactDetails">
      <div class="contactFormat">
        <div class="contactIcon">
          <img src="Images/fbIcon.png" />
        </div>
        <div class="contactText">
          <h5>Facebook Page</h5>
          <a href="https://www.facebook.com/CEAP.CYSDO ">https://www.facebook.com/CEAP.CYSDO(City Youth and Sports Development Office – CSJDM)</a>
        </div>
      </div>
      <div class="contactFormat">
        <div class="contactIcon">
          <img src="Images/gmailIcon.png" />
        </div>
        <div class="contactText">
          <h5>Email</h5>
          <a href="csjdm.cysdo1@gmail.com ">csjdm.cysdo1@gmail.com</a>
        </div>
      </div>
      <div class="contactFormat">
        <div class="contactIcon">
          <img src="Images/callIcon.png" />
        </div>
        <div class="contactText">
          <h5>Contact No.</h5>
          <p>(639)905-603-7218</p>
        </div>
      </div>
      <div class="contactFormat">
        <div class="contactIcon">
          <img src="Images/locationIcon.png" />
        </div>
        <div class="contactText">
          <h5>Address</h5>
          <p>Productivity Complex, Barangay Sapang Palay Proper, City of San Jose del Monte, Bulacan</p>
        </div>
      </div>
    </div>
  </div>

</body>

</html>