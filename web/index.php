
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Student Dashboard 0.1</title>
  <link rel="stylesheet" href="https://cd
                               njs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- Dashboard (Parent Block)-->
<div class="dashboard">
  <!-- Dashboard Sidebar (Block)-->
  <div class="dashboard-sidebar">
    <!-- Brand (Element)-->
    <div class="dashboard-sidebar__brand">Student Portal 0.1</div>
    <!-- Dashboard Nav (Block)-->
    <div class="dashboard-nav">
      <ul>
        <!-- Item (Element)-->
        <li class="dashboard-nav__item"><a href="home"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_home.svg"/>Home</a></li>
        <!-- Item:Selected (Element:Modifier)        -->
        <li class="dashboard-nav__item dashboard-nav__item--selected"><a href="my_trip"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_my_trip.svg"/>Grades</a></li>
        <!-- Item (Element)-->
        <li class="dashboard-nav__item"><a href="discover_places"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_discover_places.svg"/>Links</a></li>
        <!-- Item (Element)-->
        <li class="dashboard-nav__item"><a href="notifications"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_notifications.svg"/>Notifications</a></li>
        <!-- Item (Element)-->
        <li class="dashboard-nav__item"><a href="settings"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_settings.svg"/>Settings</a></li>
      </ul>
    </div>
  </div>
  <!-- Dashboard Content (Block)-->
  <div class="dashboard-content">
    <!-- Dashboard Header (Block)-->
    <div class="dashboard-header">
      <!-- Search (Element)-->
      <div class="dashboard-header__search">
        <input type="search" placeholder="Search..."/>
      </div>
      <!-- New (Element)-->
      <div class="dashboard-header__new"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_new_plan.svg"/></div>
    </div>
    <!-- Dashboard Content Panel (Element)-->
    <div class="dashboard-content__panel" data-panel-id="home">
      <p>Home</p>
    </div>
    <!-- Dashboard Content Panel (Element)-->
    <div class="dashboard-content__panel dashboard-content__panel--active" data-panel-id="my_trip">
      <!-- Dashboard List (Block) -->
      <div class="dashboard-list">
        <!-- Dasboard List Item (Element)-->
        <div class="dashboard-list__item" data-item-id="kulon_progo">
          <!-- Title (Element)-->
          <h2>SS Assignment</h2>
          <!-- Date (Element)--><span>15 May - 23 May 2016</span>
          <!-- Avatar (Element)-->
          <div class="dashboard-list__avatar"><img src="" data-avatar-id="0"/></div>
        </div>
        <!-- Dasboard List Item (Element)-->
        <div class="dashboard-list__item dashboard-list__item--active" data-item-id="bromo">
          <!-- Title (Element)-->
          <h2>LA Assignment</h2>
          <!-- Date (Element)--><span>15 May - 23 May 2016</span>
          <!-- Avatar (Element)-->
          <div class="dashboard-list__avatar"><img src="" data-avatar-id="0"/></div>
        </div>
      </div>
    </div>
    <!-- Dashboard Content Panel (Element)-->
    <div class="dashboard-content__panel" data-panel-id="discover_places">
      <ul class="social-icons">
  <li class="icon icon--sharepoint">
    <a href="https://bsd405.sharepoint.com/sites/student/Pages/StudentPortal.aspx">
      <span class="icon__name">Student Portal</span>
    </a>
  </li>
  <li class="icon icon--outlook">
    <a href="https://outlook.office.com/owa/?realm=bsd405.org&ver=16.1027.13.1880268&cver=16.1027.13.1880268&cf=1&vC=0&forceBO=false#path=/mail">
      <span class="icon__name">Outlook</span>
    </a>
  </li>
  <li class="icon icon--grades">
    <a href="https://wa-bsd405-psv.edupoint.com/PXP2_Login_Student.aspx?regenerateSessionId=True">
      <span class="icon__name">Synergy</span>
    </a>
  </li>
  <li class="icon icon--clever">
    <a href="https://clever.com/in/bsd405">
      <span class="icon__name">Clever</span>
    </a>
  </li>
  <li class="icon icon--onedrive">
    <a href="https://bsd405-my.sharepoint.com/">
      <span class="icon__name">Onedrive</span>
    </a>
  </li>
  <li class="icon icon--help">
    <a href="https://bsd405.sharepoint.com/HowTo/Technology/SitePages/Student%20How%20To%20Guides.aspx">
      <span class="icon__name">Tech Help</span>
    </a>
  </li>
  <li class="icon icon--github">
    <a href="https://github.com/bsd405/s-bsd405/">
      <span class="icon__name">This Project</span>
    </a>
  </li>
    <li class="icon icon--navi">
    <a href="https://bsd405.org/about/initiatives/college/naviance/">
      <span class="icon__name">Naviance</span>
    </a>
  </li>
</ul>
    </div>
    <!-- Dashboard Content Panel (Element)-->
    <div class="dashboard-content__panel" data-panel-id="notifications">
      <p>Notifications</p>
    </div>
    <!-- Dashboard Content Panel (Element)-->
    <div class="dashboard-content__panel" data-panel-id="settings">
      <ul id="xd_accordion" class="xd-accordion">
  
  <div class="setting-menu">
  <input id="xd_toggle" type="checkbox">
  <label for="xd_toggle">Show all the Links</label>
</div>  
  
  <li>
    <div class="side-links up">Quick Links</div>
    <ul class="sub-menu isopen">
      <li><a href="#">Start a New Order</a></li>
      <li><a href="#">Pending Order</a></li>
      <li><a href="#">Order History</a></li>
      <li><a href="#">Promotional Products</a></li>
      <li><a href="#">Pricing</a></li>
    </ul>
  </li>
    
  <li>
    <div class="side-links">Marketing Tools</div>
    <ul class="sub-menu">
      <li><a href="#">List Building Tools</a></li>
      <li><a href="#">Delivery Options</a></li>
      <li><a href="#">Marketing Tips</a></li>
      <li><a href="#">Video Center</a></li>
      <li><a href="#">QR Code Generator</a></li>
      <li><a href="#">Subscribe to eNews</a></li>
      <li><a href="#">Online Resources</a></li>
    </ul>
  </li>  
  
  <li>
    <div class="side-links">Print & Direct Mail</div>
    <ul class="sub-menu">
      <li><a href="#">Brand Essentials</a></li>
      <li><a href="#">Business Cards</a></li>
      <li><a href="#">Property Postcards</a></li>
      <li><a href="#">Property Brochures</a></li>
      <li><a href="#">Luxury Collection</a></li>
      <li><a href="#">Personal & Company Marketing</a></li>
      <li><a href="#">Wallet Brochures</a></li>
      <li><a href="#">Newsletters</a></li>
    </ul>
  </li>    
<ul>  
    </div>
  </div>
  <!-- Dashboard Preview (Block)  -->
  <div class="dashboard-preview">
    <!-- Panel (Element)-->
    <div class="dashboard-preview__panel" data-panel-id="kulon_progo">
      <!-- Header (Element)-->
      <div class="dashboard-preview__header">
        <h2>GPA:</h2>
        <h3>4.00<span>A</span>
        </h3>
      </div>
      <!-- Content (Element)-->
      <div class="dashboard-preview__content">
        <section>
          <h2>Discussion <span>(36 unread)</span></h2>
        </section>
        <section>
          <h2>Progress <span>(Day 7 of 10)</span></h2>
          <div class="progress-bar">
            <div class="progress-bar__bar" style="width: #{percetange}%;"></div>
            <div class="progress-bar__badge" style="left: #{percetange}%;">8%</div>
          </div>
        </section>
      </div>
    </div>
    <!-- Panel (Element)-->
    <div class="dashboard-preview__panel dashboard-preview__panel--active" data-panel-id="bromo">
      <!-- Header (Element)-->
      <div class="dashboard-preview__header">
        <h2>GPA:</h2>
        <h3>4.00<span>A</span>
        </h3>
      </div>
      <!-- Content (Element)-->
      <div class="dashboard-preview__content">
        
        <section>
          <h2>Discussion <span>(97 unread)</span></h2>
        </section>
        <section>
          <h2>Progress <span>(Day 9 of 10)</span></h2>
          <div class="progress-bar">
            <div class="progress-bar__bar" style="width: #{percetange}%;"></div>
            <div class="progress-bar__badge" style="left: #{percetange}%;">99%</div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>

