<style>
  @media (min-width: 992px) {

    /* Base styles for dropdowns */
    .navbar .dropdown>ul {
      display: grid;
      gap: 10px;
      background-color: #fff;
      /* Adjust background as needed */
      padding: 10px;
      border-radius: 5px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: max-content;
      position: absolute;
      top: 100%;
      left: 50%;
      transform: translateX(-50%);
      max-width: calc(100vw - 40px);
      /* Prevent exceeding screen width */
      z-index: 999;
    }

    /* Four columns */
    .navbar .dropdown.amanNavAdj-multi-column-4>ul {
      grid-template-columns: repeat(4, 1fr);
    }

    /* Three columns */
    .navbar .dropdown.amanNavAdj-multi-column-3>ul {
      grid-template-columns: repeat(3, 1fr);
    }

    /* Two columns */
    .navbar .dropdown.amanNavAdj-multi-column-2>ul {
      grid-template-columns: repeat(2, 1fr);
    }

    /* Shared list item styles */
    .navbar .dropdown>ul>li {
      list-style: none;
    }

    .navbar .dropdown>ul>li a {
      display: block;
      padding: 5px 10px;
      color: #333;
      /* Adjust color as needed */
      text-decoration: none;
    }

    .navbar .dropdown>ul>li a:hover {
      background-color: #fecc00;
      /* Adjust hover background */
      color: #000;
      /* Adjust hover color */
    }
  }
</style>

<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-lg-between">
    <h2 class="logo me-auto me-lg-0">
      <a href="<?= base_url() ?>"><img
          src="<?= base_url('aman_assets/images/logos/tekAlgo_logo_in_white.png') ?>" /></a>
    </h2>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li>
          <a class="nav-link scrollto active" href="<?= base_url('home') ?>">Home</a>
        </li>
        <li class="dropdown amanNavAdj-multi-column-3">
          <a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li>
              <a href="<?= base_url('service/app-development'); ?>">App Development</a>
            </li>
            <li>
              <a href="<?= base_url('service/app-maintenance'); ?>">App Maintenance</a>
            </li>
            <li>
              <a href="<?= base_url('service/data-backup-and-recovery'); ?>">Data Backup & Recovery</a>
            </li>
            <li>
              <a
                href="<?= base_url('service/business-processing-outsourcing'); ?>">Business Process Outsourcing</a>
            </li>
            <li>
              <a href="<?= base_url('service/custom-software-services'); ?>">Custom Software Services</a>
            </li>
            <li>
              <a href="<?= base_url('service/api-development'); ?>">
                API Development</a>
            </li>
            <li>
              <a href="<?= base_url('service/devOps'); ?>"> DevOps</a>
            </li>
            <li>
              <a href="<?= base_url('service/digital-transformation'); ?>">
                Digital Transformation</a>
            </li>
            <li>
              <a
                href="<?= base_url('service/implementation-and-deployment'); ?>">
                Implementation & Deployment</a>
            </li>
            <li>
              <a href="<?= base_url('service/migration-and-updates'); ?>">
                Migration & Updates</a>
            </li>
            <li>
              <a href="<?= base_url('service/infrastructure-support'); ?>">
                Infrastructure Support</a>
            </li>
            <li>
              <a href="<?= base_url('service/ai-ml-and-bot'); ?>">
                AI, ML & Bot</a>
            </li>
            <li>
              <a href="<?= base_url('service/android-ios'); ?>"> Android/IOS</a>
            </li>
            <li>
              <a href="<?= base_url('service/crm'); ?>"> CRM</a>
            </li>
            <li>
              <a href="<?= base_url('service/partner-product-support'); ?>">
                Partner Product Support</a>
            </li>
            <li>
              <a
                href="<?= base_url('service/product-lifecycle-management'); ?>">
                Product Lifecycle Management</a>
            </li>
            <li>
              <a href="<?= base_url('service/quality-assurance'); ?>">
                Quality Assurance</a>
            </li>
            <li>
              <a href="<?= base_url('service/rpa'); ?>"> RPA</a>
            </li>
            <li>
              <a href="<?= base_url('service/sla-support'); ?>"> SLA Support</a>
            </li>
            <li>
              <a href="<?= base_url('service/software-security'); ?>">
                Software Security</a>
            </li>
            <li>
              <a href="<?= base_url('service/startups-mvp'); ?>">
                Startups & MVP Services</a>
            </li>
            <li>
              <a href="<?= base_url('service/web'); ?>"> Web</a>
            </li>
            <li>
              <a href="<?= base_url(' service/system-integration'); ?>">System Integration</a>
            </li>

          </ul>
        </li>
        <li class="dropdown amanNavAdj-multi-column-4">
          <a href="#"><span>Solutions</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="<?= base_url('solution/cms'); ?>">CMS</a></li>
            <li>
              <a href="<?= base_url('solution/animation-and-graphic'); ?>">Animation & Graphics</a>
            </li>
            <li>
              <a href="<?= base_url('solution/ai-ml-and-bot'); ?>">AI ML and Bot Solution</a>
            </li>
            <li><a href="<?= base_url('solution/ar-vr'); ?>">AR/VR</a></li>
            <li>
              <a href="<?= base_url('solution/artificial-intelligence'); ?>">Artificial Intelligence</a>
            </li>
            <li>
              <a href="<?= base_url('solution/autodesk'); ?>">Autodesk</a>
            </li>
            <li>
              <a href="<?= base_url('solution/bi-and-analytics'); ?>">BI & Analytics</a>
            </li>
            <li>
              <a href="<?= base_url('solution/biometrics'); ?>">Biometrics</a>
            </li>
            <li>
              <a href="<?= base_url('solution/blockchain'); ?>">Blockchain</a>
            </li>
            <li><a href="<?= base_url('solution/cloud'); ?>">Cloud</a></li>
            <li><a href="<?= base_url('solution/crm'); ?>">CRM</a></li>
            <li>
              <a href="<?= base_url('solution/database'); ?>">Database</a>
            </li>
            <li>
              <a href="<?= base_url('solution/digital-assets-management'); ?>">Digital Assets Management</a>
            </li>
            <li>
              <a href="<?= base_url('solution/digital-marketing'); ?>">Digital Marketing</a>
            </li>
            <li>
              <a href="<?= base_url('solution/digital-signage'); ?>">Digital Signage</a>
            </li>
            <li>
              <a href="<?= base_url('solution/embedded-software'); ?>">Embedded Software</a>
            </li>
            <li>
              <a href="<?= base_url('solution/mob-app'); ?>">Mob App</a>
            </li>
            <li><a href="<?= base_url('solution/rpa'); ?>">RPA</a></li>
            <li><a href="<?= base_url('solution/web'); ?>">Web</a></li>
            <li><a href="<?= base_url('solution/erp'); ?>">ERP</a></li>
            <li>
              <a href="<?= base_url('solution/facilities-management'); ?>">Facilities Management</a>
            </li>
            <li>
              <a href="<?= base_url('solution/field-service-management'); ?>">Field Service Management</a>
            </li>
            <li>
              <a href="<?= base_url('solution/firmware'); ?>">Firmware</a>
            </li>
            <li>
              <a href="<?= base_url('solution/franchise-management'); ?>">Franchise Management</a>
            </li>
            <li>
              <a href="<?= base_url('solution/fraud-protection'); ?>">Fraud Protection</a>
            </li>
            <li>
              <a href="<?= base_url('solution/gis'); ?>">GIS</a>
            </li>
            <li>
              <a href="<?= base_url('solution/iot-and-m2m'); ?>">IOT & M2M</a>
            </li>
            <li>
              <a href="<?= base_url('solution/it-service-management'); ?>">IT Service Management</a>
            </li>
            <li>
              <a href="<?= base_url('solution/kiosk'); ?>">kiosk</a>
            </li>
            <li>
              <a href="<?= base_url('solution/lbs'); ?>">LBS</a>
            </li>
            <li>
              <a href="<?= base_url('solution/legacy'); ?>">Legacy</a>
            </li>
            <li>
              <a href="<?= base_url('solution/middleware'); ?>">Middleware</a>
            </li>
            <li>
              <a href="<?= base_url('solution/mobile-and-tablet'); ?>">Mobile & Tablet</a>
            </li>
            <li>
              <a href="<?= base_url('solution/netsuit'); ?>">Netsuit</a>
            </li>
            <li>
              <a href="<?= base_url('solution/open-source'); ?>">Open Source</a>
            </li>
            <li>
              <a href="<?= base_url('solution/oracle'); ?>">Oracle</a>
            </li>
            <li>
              <a href="<?= base_url('solution/pos'); ?>">POS</a>
            </li>
            <li>
              <a href="<?= base_url('solution/sales-management'); ?>">Sales Management</a>
            </li>
            <li>
              <a href="<?= base_url('solution/salesforce'); ?>">Salesforce</a>
            </li>
            <li>
              <a href="<?= base_url('solution/sap'); ?>">SAP</a>
            </li>
            <li>
              <a href="<?= base_url('solution/telephony'); ?>">Telephony</a>
            </li>
            <li>
              <a href="<?= base_url('solution/uipath'); ?>">UiPath</a>
            </li>
            <li>
              <a href="<?= base_url('solution/ticketing'); ?>">Ticketing</a>
            </li>
            <li>
              <a href="<?= base_url('solution/asset-tracking'); ?>">Asset Tracking (RFID & Barcode)</a>
            </li>
            <li>
              <a href="<?= base_url('solution/document-management'); ?>">Document Management</a>
            </li>
            <li>
              <a href="<?= base_url('solution/ui-ux'); ?>">UI/UX</a>
            </li>
            <li>
              <a href="<?= base_url('solution/wearable-technology'); ?>">Wearable Technology</a>
            </li>
          </ul>
        </li>

        <li class="dropdown amanNavAdj-multi-column-4">
          <a href="#"><span>Industries</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li>
              <a href="<?= base_url('industry/healthcare'); ?>">Healthcare</a>
            </li>

            <li><a href="<?= base_url('industry/energy'); ?>">Energy</a></li>
            <li>
              <a href="<?= base_url('industry/financial-services'); ?>">Financial Services</a>
            </li>

            <li>
              <a href="<?= base_url('industry/educational'); ?>">Educational</a>
            </li>

            <li>
              <a href="<?= base_url('industry/agriculture'); ?>">Agriculture</a>
            </li>

            <li>
              <a href="<?= base_url('industry/casino-gaming'); ?>">Casino Games</a>
            </li>
            <li>
              <a href="<?= base_url('industry/construction'); ?>">Construction</a>
            </li>
            <li>
              <a href="<?= base_url('industry/enviromental-management'); ?>">Enviromental Management</a>
            </li>

            <li>
              <a href="<?= base_url('industry/logistics'); ?>">Logistics</a>
            </li>
            <li>
              <a href="<?= base_url('industry/hospitality-and-tourism'); ?>">Hospitality & tourism</a>
            </li>
            <li>
              <a href="<?= base_url('industry/manufacturing'); ?>">Manufacturing</a>
            </li>
            <li>
              <a href="<?= base_url('industry/retail'); ?>">Retail</a>
            </li>
            <li>
              <a href="<?= base_url('industry/telecom'); ?>">Telecom</a>
            </li>
            <li>
              <a href="<?= base_url('industry/food-and-beverage'); ?>">Food & Beverage</a>
            </li>
            <li>
              <a href="<?= base_url('industry/gaming'); ?>">Gaming</a>
            </li>
            <li>
              <a href="<?= base_url('industry/human-capital-management'); ?>">Human Capital Management</a>
            </li>
            <li>
              <a href="<?= base_url('industry/legal'); ?>">Legal</a>
            </li>
            <li>
              <a href="<?= base_url('industry/media-and-entertainment'); ?>">Media & Entertainment</a>
            </li>
            <li>
              <a href="<?= base_url('industry/meetings-and-events'); ?>">Meetings & Events</a>
            </li>
            <li>
              <a href="<?= base_url('industry/nonprofit'); ?>">Nonprofit</a>
            </li>
            <li>
              <a href="<?= base_url('industry/oil-and-gas'); ?>">Oil & Gas</a>
            </li>
            <li>
              <a href="<?= base_url('industry/political-campaigns'); ?>">Political Campaigns</a>
            </li>
            <li>
              <a href="<?= base_url('industry/real-estate'); ?>">Real Estate</a>
            </li>
            <li>
              <a href="<?= base_url('industry/sports'); ?>">Sports</a>
            </li>
            <li>
              <a href="<?= base_url('industry/supply-chain'); ?>">Supply Chain</a>
            </li>
            <li>
              <a href="<?= base_url('industry/transportation'); ?>">Transportation</a>
            </li>

            <li>
              <a href="<?= base_url('industry/aviation'); ?>">Aviation</a>
            </li>
            <li>
              <a href="<?= base_url('industry/banking'); ?>">Banking</a>
            </li>
            <li>
              <a href="<?= base_url('industry/e-learning'); ?>">E-Learning & Education</a>
            </li>
            <li>
              <a href="<?= base_url('industry/insurance'); ?>">Insurance</a>
            </li>
            <li>
              <a href="<?= base_url('industry/mortgage-lending'); ?>">Mortgage & Lending</a>
            </li>
            <li>
              <a href="<?= base_url('industry/payments'); ?>">Payments</a>
            </li>
            <li>
              <a href="<?= base_url('industry/telecommunication'); ?>">Telecommunication</a>

            </li>
            <li>
              <a href="<?= base_url('industry/corrections'); ?>">Corrections</a>

            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#"><span>Utilities</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li>
              <a
                href="https://tekalgo.com/product-digital-profile"
                target="_blank">Create Digital Profile</a>
            </li>
            <!-- <li><a href="<?= base_url('insights'); ?>">Insights</a></li> -->
            <!-- <li>
              <a href="<?= base_url('roi-calculator'); ?>">ROI Calculator</a>
            </li>

            <li>
              <a href="<?= base_url('bandwidth-calculator'); ?>">Bandwidth Calculator</a>
            </li>
            <li>
              <a href="<?= base_url('defect-rate-calculator'); ?>">Defect Rate Calculator</a>
            </li>
            <li>
              <a href="<?= base_url('emi-calculator'); ?>">EMI Calculator</a>
            </li>
            <li>
              <a href="<?= base_url('invoice-generator'); ?>">Invoice Generator</a>
            </li>
            <li>
              <a href="<?= base_url('production-cost-calculator'); ?>">Production Cost Calculator</a>
            </li>
            <li>
              <a href="<?= base_url('password-strength'); ?>">Password Strength</a>
            </li>
            <li>
              <a href="<?= base_url('sale-tax-calculator'); ?>">Sale Tax Calculator</a>
            </li>
            <li>
              <a href="<?= base_url('shipment-cost-calculator'); ?>">Shipment Cost Calculator</a>
            </li> -->
            <!-- <li>
              <a href="<?= base_url('website-grader'); ?>">Website Grader</a>
            </li> -->
            <!-- <li><a href="<?= base_url('guides'); ?>">Guides</a></li> -->
          </ul>
        </li>

        <!-- <li class="dropdown amanNavAdj-multi-column-3">
                 <a href="#"><span>Agency</span> <i class="bi bi-chevron-down"></i></a>
                 <ul>
                     <li><a href="<?= base_url('about-us'); ?>">About Us</a></li>
                     <li><a href="<?= base_url('mission-vision'); ?>">Mission & Vision</a></li>
                     <li><a href="<?= base_url('strategic-partnerships'); ?>">Strategic Partnerships</a></li>
                     <li><a href="<?= base_url('testimonials'); ?>">Testimonials</a></li>
                     <li><a href="<?= base_url('team'); ?>">Team</a></li>
                     <li><a href="<?= base_url('career'); ?>">Career</a></li>
                 </ul>
             </li>
   
             <li class="dropdown amanNavAdj-multi-column-2">
                 <a href="#"><span>Agency</span> <i class="bi bi-chevron-down"></i></a>
                 <ul>
                     <li><a href="<?= base_url('about-us'); ?>">About Us</a></li>
                     <li><a href="<?= base_url('mission-vision'); ?>">Mission & Vision</a></li>
                     <li><a href="<?= base_url('strategic-partnerships'); ?>">Strategic Partnerships</a></li>
                     <li><a href="<?= base_url('testimonials'); ?>">Testimonials</a></li>
                     <li><a href="<?= base_url('team'); ?>">Team</a></li>
                     <li><a href="<?= base_url('career'); ?>">Career</a></li>
                 </ul>
             </li> -->

        <li class="dropdown">
          <a href="#"><span>Company</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="<?= base_url('company/about-us'); ?>">About Us</a></li>
            <li>
              <a href="<?= base_url('company/mission-vision'); ?>">Mission & Vision</a>
            </li>
            <li>
              <a href="<?= base_url('company/strategic-partnerships'); ?>">Strategic Partnerships</a>
            </li>
            <li>
              <a href="<?= base_url('company/testimonials'); ?>">Testimonials</a>
            </li>
            <li><a href="<?= base_url('company/team'); ?>">Team</a></li>
            <li><a href="<?= base_url('company/career'); ?>">Career</a></li>
            <li><a href="<?= base_url('company/insights'); ?>">Insights</a></li>
          </ul>
        </li>
        <li>
          <a class="nav-link scrollto" href="<?= base_url('contact'); ?>">Contact</a>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>

    <!-- .navbar -->

    <!-- <a href="<?= base_url('free-tools'); ?>" class="get-started-btn scrollto">Free Tools</a> -->
    <!-- <a href="https://tekalgo.com/product-digital-profile" class="get-started-btn scrollto">Create Digital Profile</a> -->
  </div>
</header>
<script>
  // Function to sort the <li> elements in a <ul>
  function sortDropdowns() {
    // Select all dropdown <ul> elements
    const dropdownLists = document.querySelectorAll(".dropdown > ul");

    // Iterate over each <ul>
    dropdownLists.forEach((ul) => {
      // Get all <li> elements as an array
      const listItems = Array.from(ul.querySelectorAll("li"));

      // Sort the <li> elements alphabetically based on their text content
      listItems.sort((a, b) =>
        a.textContent.trim().localeCompare(b.textContent.trim())
      );

      // Clear the existing <ul> and re-append the sorted <li> elements
      ul.innerHTML = "";
      listItems.forEach((li) => ul.appendChild(li));
    });
  }

  // Execute sorting after the page loads
  document.addEventListener("DOMContentLoaded", sortDropdowns);
</script>