<footer class="styles_footer__D62n0">
    <div class="styles_container__0CKa2 styles_footer_container__VIymK">
        <div><img alt="Valmo - send more for less" loading="lazy" width="190" height="50" decoding="async" data-nimg="1"
                style="color:transparent" src="<?php echo base_url('assets'); ?>/valmo-web/valmo-logo-white.svg" />
        </div>
        <div class="styles_org_details__BLOIO">
            <div class="styles_org_details_sub__hB1IJ">
                <h4>Fashnear Technologies Private Limited</h4>
                <div class="styles_more_info__KuY4B">
                    <div class="styles_more_info_sub__ziXmm"><img alt="Valmo&#x27;s office address icon" loading="lazy"
                            width="23" height="23" decoding="async" data-nimg="1" style="color:transparent"
                            src="<?php echo base_url('assets'); ?>/valmo-web/location-pin.svg" />
                        <p class="styles_valmo_contact_info__6BKPU">Fashnear Technologies Private Limited
                            <!-- -->,<br />CIN: U74900KA2015PTC082263<br /> 3rd Floor, Wing-E, Helios Business
                            Park,Kadubeesanahalli Village, Varthur Hobli, Outer Ring Road Bellandur, Bangalore,
                            Bangalore South, Karnataka, India, 560103
                        </p>
                    </div>
                    <div class="styles_more_info_sub__ziXmm"><img alt="Valmo&#x27;s email details icon" loading="lazy"
                            width="24" height="24" decoding="async" data-nimg="1" style="color:transparent"
                            src="<?php echo base_url('assets'); ?>/valmo-web/email.svg" />
                        <p class="styles_valmo_contact_info__6BKPU"><a href="mailto:valmo.in">valmo.in</a></p>
                    </div>
                </div>
            </div>
            <div class="styles_legal_container__X1zCi">
                <h4>Legal</h4>
                <h6><a href="#">Privacy Policy</a></h6>
                <h6><a href="#">Terms of use</a></h6>
            </div>
        </div>
    </div>
    <div class="styles_container__0CKa2 styles_disclaimer__ieQPi"><i>
            Disclaimer: Any official communication for business related formalities will be sent by Valmo using
            our authorised official email addresses (@valmologisticpartners.com or @meesho.com).
            Kindly DO NOT interact with any communications or requests for payments from any other sources or
            share any personal information.
        </i></div>
    <div class="styles_divider__HIor8"></div>
    <div class="styles_container__0CKa2 styles_copyright_container__7XEUY">
        <div class="styles_copyright__eLvzX">Copyright © 2025. All rights reserved.</div>
    </div>
</footer>

<div id="id01" class="modal" style="margin-top: 50px;">
    <div class="form-container mt-3">
        <h4>Franchise Application</h4>
        <div id="franchiseFormMessage">
            <?php $err = $this->session->flashdata('errormsg'); ?>
            <?php if (!empty($err)): ?>
                <div class="alert alert-danger"><?php echo $err; ?></div>
            <?php endif; ?>
            <?php $msg = $this->session->flashdata('successmsg'); ?>
            <?php if (!empty($msg)): ?>
                <div class="alert alert-success"><?php echo $msg; ?></div>
            <?php endif; ?>
        </div>
        <form id="franchiseForm" class="modal-content animate" method="POST" action="javascript:void(0);">
            <div class="container">
                <input type="text" placeholder="Enter Full Name" name="name" required>
                <input type="email" placeholder="Enter E-mail" name="email" required>
                <input type="text" placeholder="Enter Contact Number" name="mobile" required>
                <input type="text" placeholder="Enter Pin Code" name="pincode" required>
                <input type="text" placeholder="Enter City" name="city" required>
                <input type="text" placeholder="Enter Address" name="address" required>
                <select class="form-control" name="franchise_type" required>
                    <option value="Delivery Franchise">Delivery Franchise</option>
                    <option value="District Franchise Hub">District Franchise Hub</option>
                </select>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select class="form-control" name="state" id="inputState" required>
                        <option value="">Select State</option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madya Pradesh">Madya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Pondicherry">Pondicherry</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputDistrict">District</label>
                    <select class="form-control" name="district" id="inputDistrict">
                        <option value="">-- select one -- </option>
                    </select>
                </div>

                <button id="franchiseSubmitBtn"
                    style="  background-color: #04AA6D; color: white; padding: 4px 6px; margin: 8px 0; border: none; cursor: pointer; width: 100%; border-radius: 50px;"
                    type="submit">
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"
                        style="display:none; margin-right:6px;"></span>
                    <span class="btn-text">Submit</span>
                </button>
            </div>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/jquery/popper.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/jquery/bootstrap.min.js"></script>

<script>
    var modal = document.getElementById('id01');
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script>
    var AndraPradesh = ["Anantapur", "Chittoor", "East Godavari", "Guntur", "Kadapa", "Krishna", "Kurnool", "Prakasam", "Nellore", "Srikakulam", "Visakhapatnam", "Vizianagaram", "West Godavari"];
    var ArunachalPradesh = ["Anjaw", "Changlang", "Dibang Valley", "East Kameng", "East Siang", "Kra Daadi", "Kurung Kumey", "Lohit", "Longding", "Lower Dibang Valley", "Lower Subansiri", "Namsai", "Papum Pare", "Siang", "Tawang", "Tirap", "Upper Siang", "Upper Subansiri", "West Kameng", "West Siang", "Itanagar"];
    var Assam = ["Baksa", "Barpeta", "Biswanath", "Bongaigaon", "Cachar", "Charaideo", "Chirang", "Darrang", "Dhemaji", "Dhubri", "Dibrugarh", "Goalpara", "Golaghat", "Hailakandi", "Hojai", "Jorhat", "Kamrup Metropolitan", "Kamrup (Rural)", "Karbi Anglong", "Karimganj", "Kokrajhar", "Lakhimpur", "Majuli", "Morigaon", "Nagaon", "Nalbari", "Dima Hasao", "Sivasagar", "Sonitpur", "South Salmara Mankachar", "Tinsukia", "Udalguri", "West Karbi Anglong"];
    var Bihar = ["Araria", "Arwal", "Aurangabad", "Banka", "Begusarai", "Bhagalpur", "Bhojpur", "Buxar", "Darbhanga", "East Champaran", "Gaya", "Gopalganj", "Jamui", "Jehanabad", "Kaimur", "Katihar", "Khagaria", "Kishanganj", "Lakhisarai", "Madhepura", "Madhubani", "Munger", "Muzaffarpur", "Nalanda", "Nawada", "Patna", "Purnia", "Rohtas", "Saharsa", "Samastipur", "Saran", "Sheikhpura", "Sheohar", "Sitamarhi", "Siwan", "Supaul", "Vaishali", "West Champaran"];
    var Chhattisgarh = ["Balod", "Baloda Bazar", "Balrampur", "Bastar", "Bemetara", "Bijapur", "Bilaspur", "Dantewada", "Dhamtari", "Durg", "Gariaband", "Janjgir Champa", "Jashpur", "Kabirdham", "Kanker", "Kondagaon", "Korba", "Koriya", "Mahasamund", "Mungeli", "Narayanpur", "Raigarh", "Raipur", "Rajnandgaon", "Sukma", "Surajpur", "Surguja"];
    var Goa = ["North Goa", "South Goa"];
    var Gujarat = ["Ahmedabad", "Amreli", "Anand", "Aravalli", "Banaskantha", "Bharuch", "Bhavnagar", "Botad", "Chhota Udaipur", "Dahod", "Dang", "Devbhoomi Dwarka", "Gandhinagar", "Gir Somnath", "Jamnagar", "Junagadh", "Kheda", "Kutch", "Mahisagar", "Mehsana", "Morbi", "Narmada", "Navsari", "Panchmahal", "Patan", "Porbandar", "Rajkot", "Sabarkantha", "Surat", "Surendranagar", "Tapi", "Vadodara", "Valsad"];
    var Haryana = ["Ambala", "Bhiwani", "Charkhi Dadri", "Faridabad", "Fatehabad", "Gurugram", "Hisar", "Jhajjar", "Jind", "Kaithal", "Karnal", "Kurukshetra", "Mahendragarh", "Mewat", "Palwal", "Panchkula", "Panipat", "Rewari", "Rohtak", "Sirsa", "Sonipat", "Yamunanagar"];
    var HimachalPradesh = ["Bilaspur", "Chamba", "Hamirpur", "Kangra", "Kinnaur", "Kullu", "Lahaul Spiti", "Mandi", "Shimla", "Sirmaur", "Solan", "Una"];
    var JammuKashmir = ["Anantnag", "Bandipora", "Baramulla", "Budgam", "Doda", "Ganderbal", "Jammu", "Kargil", "Kathua", "Kishtwar", "Kulgam", "Kupwara", "Leh", "Poonch", "Pulwama", "Rajouri", "Ramban", "Reasi", "Samba", "Shopian", "Srinagar", "Udhampur"];
    var Jharkhand = ["Bokaro", "Chatra", "Deoghar", "Dhanbad", "Dumka", "East Singhbhum", "Garhwa", "Giridih", "Godda", "Gumla", "Hazaribagh", "Jamtara", "Khunti", "Koderma", "Latehar", "Lohardaga", "Pakur", "Palamu", "Ramgarh", "Ranchi", "Sahebganj", "Seraikela Kharsawan", "Simdega", "West Singhbhum"];
    var Karnataka = ["Bagalkot", "Bangalore Rural", "Bangalore Urban", "Belgaum", "Bellary", "Bidar", "Vijayapura", "Chamarajanagar", "Chikkaballapur", "Chikkamagaluru", "Chitradurga", "Dakshina Kannada", "Davanagere", "Dharwad", "Gadag", "Gulbarga", "Hassan", "Haveri", "Kodagu", "Kolar", "Koppal", "Mandya", "Mysore", "Raichur", "Ramanagara", "Shimoga", "Tumkur", "Udupi", "Uttara Kannada", "Yadgir"];
    var Kerala = ["Alappuzha", "Ernakulam", "Idukki", "Kannur", "Kasaragod", "Kollam", "Kottayam", "Kozhikode", "Malappuram", "Palakkad", "Pathanamthitta", "Thiruvananthapuram", "Thrissur", "Wayanad"];
    var MadhyaPradesh = ["Agar Malwa", "Alirajpur", "Anuppur", "Ashoknagar", "Balaghat", "Barwani", "Betul", "Bhind", "Bhopal", "Burhanpur", "Chhatarpur", "Chhindwara", "Damoh", "Datia", "Dewas", "Dhar", "Dindori", "Guna", "Gwalior", "Harda", "Hoshangabad", "Indore", "Jabalpur", "Jhabua", "Katni", "Khandwa", "Khargone", "Mandla", "Mandsaur", "Morena", "Narsinghpur", "Neemuch", "Panna", "Raisen", "Rajgarh", "Ratlam", "Rewa", "Sagar", "Satna",
        "Sehore", "Seoni", "Shahdol", "Shajapur", "Sheopur", "Shivpuri", "Sidhi", "Singrauli", "Tikamgarh", "Ujjain", "Umaria", "Vidisha"];
    var Maharashtra = ["Ahmednagar", "Akola", "Amravati", "Aurangabad", "Beed", "Bhandara", "Buldhana", "Chandrapur", "Dhule", "Gadchiroli", "Gondia", "Hingoli", "Jalgaon", "Jalna", "Kolhapur", "Latur", "Mumbai City", "Mumbai Suburban", "Nagpur", "Nanded", "Nandurbar", "Nashik", "Osmanabad", "Palghar", "Parbhani", "Pune", "Raigad", "Ratnagiri", "Sangli", "Satara", "Sindhudurg", "Solapur", "Thane", "Wardha", "Washim", "Yavatmal"];
    var Manipur = ["Bishnupur", "Chandel", "Churachandpur", "Imphal East", "Imphal West", "Jiribam", "Kakching", "Kamjong", "Kangpokpi", "Noney", "Pherzawl", "Senapati", "Tamenglong", "Tengnoupal", "Thoubal", "Ukhrul"];
    var Meghalaya = ["East Garo Hills", "East Jaintia Hills", "East Khasi Hills", "North Garo Hills", "Ri Bhoi", "South Garo Hills", "South West Garo Hills", "South West Khasi Hills", "West Garo Hills", "West Jaintia Hills", "West Khasi Hills"];
    var Mizoram = ["Aizawl", "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit", "Saiha", "Serchhip", "Aizawl", "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit", "Saiha", "Serchhip"];
    var Nagaland = ["Dimapur", "Kiphire", "Kohima", "Longleng", "Mokokchung", "Mon", "Peren", "Phek", "Tuensang", "Wokha", "Zunheboto"];
    var Odisha = ["Angul", "Balangir", "Balasore", "Bargarh", "Bhadrak", "Boudh", "Cuttack", "Debagarh", "Dhenkanal", "Gajapati", "Ganjam", "Jagatsinghpur", "Jajpur", "Jharsuguda", "Kalahandi", "Kandhamal", "Kendrapara", "Kendujhar", "Khordha", "Koraput", "Malkangiri", "Mayurbhanj", "Nabarangpur", "Nayagarh", "Nuapada", "Puri", "Rayagada", "Sambalpur", "Subarnapur", "Sundergarh"];
    var Punjab = ["Amritsar", "Barnala", "Bathinda", "Faridkot", "Fatehgarh Sahib", "Fazilka", "Firozpur", "Gurdaspur", "Hoshiarpur", "Jalandhar", "Kapurthala", "Ludhiana", "Mansa", "Moga", "Mohali", "Muktsar", "Pathankot", "Patiala", "Rupnagar", "Sangrur", "Shaheed Bhagat Singh Nagar", "Tarn Taran"];
    var Rajasthan = ["Ajmer", "Alwar", "Banswara", "Baran", "Barmer", "Bharatpur", "Bhilwara", "Bikaner", "Bundi", "Chittorgarh", "Churu", "Dausa", "Dholpur", "Dungarpur", "Ganganagar", "Hanumangarh", "Jaipur", "Jaisalmer", "Jalore", "Jhalawar", "Jhunjhunu", "Jodhpur", "Karauli", "Kota", "Nagaur", "Pali", "Pratapgarh", "Rajsamand", "Sawai Madhopur", "Sikar", "Sirohi", "Tonk", "Udaipur"];
    var Sikkim = ["East Sikkim", "North Sikkim", "South Sikkim", "West Sikkim"];
    var TamilNadu = ["Ariyalur", "Chennai", "Coimbatore", "Cuddalore", "Dharmapuri", "Dindigul", "Erode", "Kanchipuram", "Kanyakumari", "Karur", "Krishnagiri", "Madurai", "Nagapattinam", "Namakkal", "Nilgiris", "Perambalur", "Pudukkottai", "Ramanathapuram", "Salem", "Sivaganga", "Thanjavur", "Theni", "Thoothukudi", "Tiruchirappalli", "Tirunelveli", "Tiruppur", "Tiruvallur", "Tiruvannamalai", "Tiruvarur", "Vellore", "Viluppuram", "Virudhunagar"];
    var Telangana = ["Adilabad", "Bhadradri Kothagudem", "Hyderabad", "Jagtial", "Jangaon", "Jayashankar", "Jogulamba", "Kamareddy", "Karimnagar", "Khammam", "Komaram Bheem", "Mahabubabad", "Mahbubnagar", "Mancherial", "Medak", "Medchal", "Nagarkurnool", "Nalgonda", "Nirmal", "Nizamabad", "Peddapalli", "Rajanna Sircilla", "Ranga Reddy", "Sangareddy", "Siddipet", "Suryapet", "Vikarabad", "Wanaparthy", "Warangal Rural", "Warangal Urban", "Yadadri Bhuvanagiri"];
    var Tripura = ["Dhalai", "Gomati", "Khowai", "North Tripura", "Sepahijala", "South Tripura", "Unakoti", "West Tripura"];
    var UttarPradesh = ["Agra", "Aligarh", "Allahabad", "Ambedkar Nagar", "Amethi", "Amroha", "Auraiya", "Azamgarh", "Baghpat", "Bahraich", "Ballia", "Balrampur", "Banda", "Barabanki", "Bareilly", "Basti", "Bhadohi", "Bijnor", "Budaun", "Bulandshahr", "Chandauli", "Chitrakoot", "Deoria", "Etah", "Etawah", "Faizabad", "Farrukhabad", "Fatehpur", "Firozabad", "Gautam Buddha Nagar", "Ghaziabad", "Ghazipur", "Gonda", "Gorakhpur", "Hamirpur", "Hapur", "Hardoi", "Hathras", "Jalaun", "Jaunpur", "Jhansi", "Kannauj", "Kanpur Dehat", "Kanpur Nagar", "Kasganj", "Kaushambi", "Kheri", "Kushinagar", "Lalitpur", "Lucknow", "Maharajganj", "Mahoba", "Mainpuri", "Mathura", "Mau", "Meerut", "Mirzapur", "Moradabad", "Muzaffarnagar", "Pilibhit", "Pratapgarh", "Raebareli", "Rampur", "Saharanpur", "Sambhal", "Sant Kabir Nagar", "Shahjahanpur", "Shamli", "Shravasti", "Siddharthnagar", "Sitapur", "Sonbhadra", "Sultanpur", "Unnao", "Varanasi"];
    var Uttarakhand = ["Almora", "Bageshwar", "Chamoli", "Champawat", "Dehradun", "Haridwar", "Nainital", "Pauri", "Pithoragarh", "Rudraprayag", "Tehri", "Udham Singh Nagar", "Uttarkashi"];
    var WestBengal = ["Alipurduar", "Bankura", "Birbhum", "Cooch Behar", "Dakshin Dinajpur", "Darjeeling", "Hooghly", "Howrah", "Jalpaiguri", "Jhargram", "Kalimpong", "Kolkata", "Malda", "Murshidabad", "Nadia", "North 24 Parganas", "Paschim Bardhaman", "Paschim Medinipur", "Purba Bardhaman", "Purba Medinipur", "Purulia", "South 24 Parganas", "Uttar Dinajpur"];
    var AndamanNicobar = ["Nicobar", "North Middle Andaman", "South Andaman"];
    var Chandigarh = ["Chandigarh"];
    var DadraHaveli = ["Dadra Nagar Haveli"];
    var DamanDiu = ["Daman", "Diu"];
    var Delhi = ["Central Delhi", "East Delhi", "New Delhi", "North Delhi", "North East Delhi", "North West Delhi", "Shahdara", "South Delhi", "South East Delhi", "South West Delhi", "West Delhi"];
    var Lakshadweep = ["Lakshadweep"];
    var Puducherry = ["Karaikal", "Mahe", "Puducherry", "Yanam"];


    $("#inputState").change(function () {
        var StateSelected = $(this).val();
        var optionsList;
        var htmlString = "";

        switch (StateSelected) {
            case "Andra Pradesh":
                optionsList = AndraPradesh;
                break;
            case "Arunachal Pradesh":
                optionsList = ArunachalPradesh;
                break;
            case "Assam":
                optionsList = Assam;
                break;
            case "Bihar":
                optionsList = Bihar;
                break;
            case "Chhattisgarh":
                optionsList = Chhattisgarh;
                break;
            case "Goa":
                optionsList = Goa;
                break;
            case "Gujarat":
                optionsList = Gujarat;
                break;
            case "Haryana":
                optionsList = Haryana;
                break;
            case "Himachal Pradesh":
                optionsList = HimachalPradesh;
                break;
            case "Jammu and Kashmir":
                optionsList = JammuKashmir;
                break;
            case "Jharkhand":
                optionsList = Jharkhand;
                break;
            case "Karnataka":
                optionsList = Karnataka;
                break;
            case "Kerala":
                optionsList = Kerala;
                break;
            case "Madya Pradesh":
                optionsList = MadhyaPradesh;
                break;
            case "Maharashtra":
                optionsList = Maharashtra;
                break;
            case "Manipur":
                optionsList = Manipur;
                break;
            case "Meghalaya":
                optionsList = Meghalaya;
                break;
            case "Mizoram":
                optionsList = Mizoram;
                break;
            case "Nagaland":
                optionsList = Nagaland;
                break;
            case "Orissa":
                optionsList = Orissa;
                break;
            case "Punjab":
                optionsList = Punjab;
                break;
            case "Rajasthan":
                optionsList = Rajasthan;
                break;
            case "Sikkim":
                optionsList = Sikkim;
                break;
            case "Tamil Nadu":
                optionsList = TamilNadu;
                break;
            case "Telangana":
                optionsList = Telangana;
                break;
            case "Tripura":
                optionsList = Tripura;
                break;
            case "Uttaranchal":
                optionsList = Uttaranchal;
                break;
            case "Uttar Pradesh":
                optionsList = UttarPradesh;
                break;
            case "West Bengal":
                optionsList = WestBengal;
                break;
            case "Andaman and Nicobar Islands":
                optionsList = AndamanNicobar;
                break;
            case "Chandigarh":
                optionsList = Chandigarh;
                break;
            case "Dadar and Nagar Haveli":
                optionsList = DadraHaveli;
                break;
            case "Daman and Diu":
                optionsList = DamanDiu;
                break;
            case "Delhi":
                optionsList = Delhi;
                break;
            case "Lakshadeep":
                optionsList = Lakshadeep;
                break;
            case "Pondicherry":
                optionsList = Pondicherry;
                break;
            case "Puducherry":
                optionsList = Puducherry;
                break;
            case "Odisha":
                optionsList = Odisha;
                break;
        }


        for (var i = 0; i < optionsList.length; i++) {
            htmlString = htmlString + "<option value='" + optionsList[i] + "'>" + optionsList[i] + "</option>";
        }
        $("#inputDistrict").html(htmlString);

    });

    $('.navbar-toggler').on('click', function () {
        $('#navbarSupportedContent').toggleClass('show');
        // $('#navbarSupportedContent').toggleClass('collapsing');
        // $('#navbarSupportedContent').toggleClass('collapse');
    });

    // Franchise form submission via AJAX
    $('#franchiseForm').on('submit', function (event) {
        event.preventDefault();
        var $form = $(this);
        var $message = $('#franchiseFormMessage');
        var $submitBtn = $('#franchiseSubmitBtn');
        var $spinner = $submitBtn.find('.spinner-border');
        var $btnText = $submitBtn.find('.btn-text');

        $message.removeClass('alert-danger alert-success').empty();

        // Show spinner and disable button while submitting
        $submitBtn.prop('disabled', true);
        $spinner.show();
        $btnText.text('Submitting...');

        $.ajax({
            url: '<?php echo site_url('home/submit_franchise_application'); ?>',
            method: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            dataType: 'json'
        })
            .done(function (data) {
                if (data.status === 'success') {
                    alert(data.message || 'Form submitted successfully!');
                    $form[0].reset();
                    setTimeout(function () {
                        var modal = document.getElementById('id01');
                        if (modal) modal.style.display = 'none';
                    }, 1200);
                } else if (data.status === 'error') {
                    alert(data.message || 'An error occurred while submitting the form. Please try again.');
                } else {
                    alert('Unexpected response from server. Please try again later.');
                }
            })
            .fail(function (jqXHR) {
                alert('Failed to submit the form. Please check your internet connection and try again.');
            })
            .always(function () {
                $submitBtn.prop('disabled', false);
                $spinner.hide();
                $btnText.text('Submit');
            });
    });
</script>
</body>

</html>