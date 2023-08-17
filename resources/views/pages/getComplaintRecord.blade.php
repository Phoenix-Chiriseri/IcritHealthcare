@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="/img/icritLogo.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                           Complaint Record
                        </h5>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <form method="POST" action="{{ route('save-entry') }}">
                    @csrf
                    <form method='post' enctype='multipart/form-data'  id='gform_15'  action='/?gf_page=preview&#038;id=15' data-formid='15' novalidate>
                        <div class='gform-body gform_body'><div id='gform_fields_15' class='gform_fields top_label form_sublabel_below description_below'><div id="field_15_29"  class="gfield gfield--type-section gsection field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_15_29"><h3 class="gsection_title">Recording the Complaint/ Concern - Part A</h3></div><div id="field_15_30"  class="gfield gfield--type-section gsection field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_15_30"><h3 class="gsection_title">Details Of Complainant</h3></div><fieldset id="field_15_24"  class="gfield gfield--type-name gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_15_24"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Name of Person</legend><div class='ginput_complex ginput_container ginput_container--name no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name gform-grid-row' id='input_15_24'>
                            
                            <span id='input_15_24_3_container' class='name_first gform-grid-col gform-grid-col--size-auto' >
                                                    <input type='text' name='input_24.3' id='input_15_24_3' value=''   aria-required='false'     />
                                                    <label for='input_15_24_3' class='gform-field-label gform-field-label--type-sub '>First</label>
                                                </span>
                            
                            <span id='input_15_24_6_container' class='name_last gform-grid-col gform-grid-col--size-auto' >
                                                    <input type='text' name='input_24.6' id='input_15_24_6' value=''   aria-required='false'     />
                                                    <label for='input_15_24_6' class='gform-field-label gform-field-label--type-sub '>Last</label>
                                                </span>
                            
                        </div></fieldset><div id="field_15_31"  class="gfield gfield--type-phone gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_15_31"><label class='gfield_label gform-field-label' for='input_15_31' >Phone Number</label><div class='ginput_container ginput_container_phone'><input name='input_31' id='input_15_31' type='tel' value='' class='large'    aria-invalid="false"   /></div></div><fieldset id="field_15_32"  class="gfield gfield--type-address gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_15_32"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Address</legend>    
                    <div class='ginput_complex ginput_container has_street has_street2 has_city has_state has_zip has_country ginput_container_address gform-grid-row' id='input_15_32' >
                         <span class='ginput_full address_line_1 ginput_address_line_1 gform-grid-col' id='input_15_32_1_container' >
                                        <input type='text' name='input_32.1' id='input_15_32_1' value=''    aria-required='false'    />
                                        <label for='input_15_32_1' id='input_15_32_1_label' class='gform-field-label gform-field-label--type-sub '>Street Address</label>
                                    </span><span class='ginput_full address_line_2 ginput_address_line_2 gform-grid-col' id='input_15_32_2_container' >
                                        <input type='text' name='input_32.2' id='input_15_32_2' value=''     aria-required='false'   />
                                        <label for='input_15_32_2' id='input_15_32_2_label' class='gform-field-label gform-field-label--type-sub '>Address Line 2</label>
                                    </span><span class='ginput_left address_city ginput_address_city gform-grid-col' id='input_15_32_3_container' >
                                    <input type='text' name='input_32.3' id='input_15_32_3' value=''    aria-required='false'    />
                                    <label for='input_15_32_3' id='input_15_32_3_label' class='gform-field-label gform-field-label--type-sub '>City</label>
                                 </span><span class='ginput_right address_state ginput_address_state gform-grid-col' id='input_15_32_4_container' >
                                        <input type='text' name='input_32.4' id='input_15_32_4' value=''      aria-required='false'    />
                                        <label for='input_15_32_4' id='input_15_32_4_label' class='gform-field-label gform-field-label--type-sub '>County / State / Region</label>
                                      </span><span class='ginput_left address_zip ginput_address_zip gform-grid-col' id='input_15_32_5_container' >
                                    <input type='text' name='input_32.5' id='input_15_32_5' value=''    aria-required='false'    />
                                    <label for='input_15_32_5' id='input_15_32_5_label' class='gform-field-label gform-field-label--type-sub '>ZIP / Postal Code</label>
                                </span><span class='ginput_right address_country ginput_address_country gform-grid-col' id='input_15_32_6_container' >
                                        <select name='input_32.6' id='input_15_32_6'   aria-required='false'    ><option value='' selected='selected'></option><option value='Afghanistan' >Afghanistan</option><option value='Albania' >Albania</option><option value='Algeria' >Algeria</option><option value='American Samoa' >American Samoa</option><option value='Andorra' >Andorra</option><option value='Angola' >Angola</option><option value='Anguilla' >Anguilla</option><option value='Antarctica' >Antarctica</option><option value='Antigua and Barbuda' >Antigua and Barbuda</option><option value='Argentina' >Argentina</option><option value='Armenia' >Armenia</option><option value='Aruba' >Aruba</option><option value='Australia' >Australia</option><option value='Austria' >Austria</option><option value='Azerbaijan' >Azerbaijan</option><option value='Bahamas' >Bahamas</option><option value='Bahrain' >Bahrain</option><option value='Bangladesh' >Bangladesh</option><option value='Barbados' >Barbados</option><option value='Belarus' >Belarus</option><option value='Belgium' >Belgium</option><option value='Belize' >Belize</option><option value='Benin' >Benin</option><option value='Bermuda' >Bermuda</option><option value='Bhutan' >Bhutan</option><option value='Bolivia' >Bolivia</option><option value='Bonaire, Sint Eustatius and Saba' >Bonaire, Sint Eustatius and Saba</option><option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option><option value='Botswana' >Botswana</option><option value='Bouvet Island' >Bouvet Island</option><option value='Brazil' >Brazil</option><option value='British Indian Ocean Territory' >British Indian Ocean Territory</option><option value='Brunei Darussalam' >Brunei Darussalam</option><option value='Bulgaria' >Bulgaria</option><option value='Burkina Faso' >Burkina Faso</option><option value='Burundi' >Burundi</option><option value='Cambodia' >Cambodia</option><option value='Cameroon' >Cameroon</option><option value='Canada' >Canada</option><option value='Cape Verde' >Cape Verde</option><option value='Cayman Islands' >Cayman Islands</option><option value='Central African Republic' >Central African Republic</option><option value='Chad' >Chad</option><option value='Chile' >Chile</option><option value='China' >China</option><option value='Christmas Island' >Christmas Island</option><option value='Cocos Islands' >Cocos Islands</option><option value='Colombia' >Colombia</option><option value='Comoros' >Comoros</option><option value='Congo' >Congo</option><option value='Congo, Democratic Republic of the' >Congo, Democratic Republic of the</option><option value='Cook Islands' >Cook Islands</option><option value='Costa Rica' >Costa Rica</option><option value='Croatia' >Croatia</option><option value='Cuba' >Cuba</option><option value='Curaçao' >Curaçao</option><option value='Cyprus' >Cyprus</option><option value='Czechia' >Czechia</option><option value='Côte d&#039;Ivoire' >Côte d&#039;Ivoire</option><option value='Denmark' >Denmark</option><option value='Djibouti' >Djibouti</option><option value='Dominica' >Dominica</option><option value='Dominican Republic' >Dominican Republic</option><option value='Ecuador' >Ecuador</option><option value='Egypt' >Egypt</option><option value='El Salvador' >El Salvador</option><option value='Equatorial Guinea' >Equatorial Guinea</option><option value='Eritrea' >Eritrea</option><option value='Estonia' >Estonia</option><option value='Eswatini' >Eswatini</option><option value='Ethiopia' >Ethiopia</option><option value='Falkland Islands' >Falkland Islands</option><option value='Faroe Islands' >Faroe Islands</option><option value='Fiji' >Fiji</option><option value='Finland' >Finland</option><option value='France' >France</option><option value='French Guiana' >French Guiana</option><option value='French Polynesia' >French Polynesia</option><option value='French Southern Territories' >French Southern Territories</option><option value='Gabon' >Gabon</option><option value='Gambia' >Gambia</option><option value='Georgia' >Georgia</option><option value='Germany' >Germany</option><option value='Ghana' >Ghana</option><option value='Gibraltar' >Gibraltar</option><option value='Greece' >Greece</option><option value='Greenland' >Greenland</option><option value='Grenada' >Grenada</option><option value='Guadeloupe' >Guadeloupe</option><option value='Guam' >Guam</option><option value='Guatemala' >Guatemala</option><option value='Guernsey' >Guernsey</option><option value='Guinea' >Guinea</option><option value='Guinea-Bissau' >Guinea-Bissau</option><option value='Guyana' >Guyana</option><option value='Haiti' >Haiti</option><option value='Heard Island and McDonald Islands' >Heard Island and McDonald Islands</option><option value='Holy See' >Holy See</option><option value='Honduras' >Honduras</option><option value='Hong Kong' >Hong Kong</option><option value='Hungary' >Hungary</option><option value='Iceland' >Iceland</option><option value='India' >India</option><option value='Indonesia' >Indonesia</option><option value='Iran' >Iran</option><option value='Iraq' >Iraq</option><option value='Ireland' >Ireland</option><option value='Isle of Man' >Isle of Man</option><option value='Israel' >Israel</option><option value='Italy' >Italy</option><option value='Jamaica' >Jamaica</option><option value='Japan' >Japan</option><option value='Jersey' >Jersey</option><option value='Jordan' >Jordan</option><option value='Kazakhstan' >Kazakhstan</option><option value='Kenya' >Kenya</option><option value='Kiribati' >Kiribati</option><option value='Korea, Democratic People&#039;s Republic of' >Korea, Democratic People&#039;s Republic of</option><option value='Korea, Republic of' >Korea, Republic of</option><option value='Kuwait' >Kuwait</option><option value='Kyrgyzstan' >Kyrgyzstan</option><option value='Lao People&#039;s Democratic Republic' >Lao People&#039;s Democratic Republic</option><option value='Latvia' >Latvia</option><option value='Lebanon' >Lebanon</option><option value='Lesotho' >Lesotho</option><option value='Liberia' >Liberia</option><option value='Libya' >Libya</option><option value='Liechtenstein' >Liechtenstein</option><option value='Lithuania' >Lithuania</option><option value='Luxembourg' >Luxembourg</option><option value='Macao' >Macao</option><option value='Madagascar' >Madagascar</option><option value='Malawi' >Malawi</option><option value='Malaysia' >Malaysia</option><option value='Maldives' >Maldives</option><option value='Mali' >Mali</option><option value='Malta' >Malta</option><option value='Marshall Islands' >Marshall Islands</option><option value='Martinique' >Martinique</option><option value='Mauritania' >Mauritania</option><option value='Mauritius' >Mauritius</option><option value='Mayotte' >Mayotte</option><option value='Mexico' >Mexico</option><option value='Micronesia' >Micronesia</option><option value='Moldova' >Moldova</option><option value='Monaco' >Monaco</option><option value='Mongolia' >Mongolia</option><option value='Montenegro' >Montenegro</option><option value='Montserrat' >Montserrat</option><option value='Morocco' >Morocco</option><option value='Mozambique' >Mozambique</option><option value='Myanmar' >Myanmar</option><option value='Namibia' >Namibia</option><option value='Nauru' >Nauru</option><option value='Nepal' >Nepal</option><option value='Netherlands' >Netherlands</option><option value='New Caledonia' >New Caledonia</option><option value='New Zealand' >New Zealand</option><option value='Nicaragua' >Nicaragua</option><option value='Niger' >Niger</option><option value='Nigeria' >Nigeria</option><option value='Niue' >Niue</option><option value='Norfolk Island' >Norfolk Island</option><option value='North Macedonia' >North Macedonia</option><option value='Northern Mariana Islands' >Northern Mariana Islands</option><option value='Norway' >Norway</option><option value='Oman' >Oman</option><option value='Pakistan' >Pakistan</option><option value='Palau' >Palau</option><option value='Palestine, State of' >Palestine, State of</option><option value='Panama' >Panama</option><option value='Papua New Guinea' >Papua New Guinea</option><option value='Paraguay' >Paraguay</option><option value='Peru' >Peru</option><option value='Philippines' >Philippines</option><option value='Pitcairn' >Pitcairn</option><option value='Poland' >Poland</option><option value='Portugal' >Portugal</option><option value='Puerto Rico' >Puerto Rico</option><option value='Qatar' >Qatar</option><option value='Romania' >Romania</option><option value='Russian Federation' >Russian Federation</option><option value='Rwanda' >Rwanda</option><option value='Réunion' >Réunion</option><option value='Saint Barthélemy' >Saint Barthélemy</option><option value='Saint Helena, Ascension and Tristan da Cunha' >Saint Helena, Ascension and Tristan da Cunha</option><option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option><option value='Saint Lucia' >Saint Lucia</option><option value='Saint Martin' >Saint Martin</option><option value='Saint Pierre and Miquelon' >Saint Pierre and Miquelon</option><option value='Saint Vincent and the Grenadines' >Saint Vincent and the Grenadines</option><option value='Samoa' >Samoa</option><option value='San Marino' >San Marino</option><option value='Sao Tome and Principe' >Sao Tome and Principe</option><option value='Saudi Arabia' >Saudi Arabia</option><option value='Senegal' >Senegal</option><option value='Serbia' >Serbia</option><option value='Seychelles' >Seychelles</option><option value='Sierra Leone' >Sierra Leone</option><option value='Singapore' >Singapore</option><option value='Sint Maarten' >Sint Maarten</option><option value='Slovakia' >Slovakia</option><option value='Slovenia' >Slovenia</option><option value='Solomon Islands' >Solomon Islands</option><option value='Somalia' >Somalia</option><option value='South Africa' >South Africa</option><option value='South Georgia and the South Sandwich Islands' >South Georgia and the South Sandwich Islands</option><option value='South Sudan' >South Sudan</option><option value='Spain' >Spain</option><option value='Sri Lanka' >Sri Lanka</option><option value='Sudan' >Sudan</option><option value='Suriname' >Suriname</option><option value='Svalbard and Jan Mayen' >Svalbard and Jan Mayen</option><option value='Sweden' >Sweden</option><option value='Switzerland' >Switzerland</option><option value='Syria Arab Republic' >Syria Arab Republic</option><option value='Taiwan' >Taiwan</option><option value='Tajikistan' >Tajikistan</option><option value='Tanzania, the United Republic of' >Tanzania, the United Republic of</option><option value='Thailand' >Thailand</option><option value='Timor-Leste' >Timor-Leste</option><option value='Togo' >Togo</option><option value='Tokelau' >Tokelau</option><option value='Tonga' >Tonga</option><option value='Trinidad and Tobago' >Trinidad and Tobago</option><option value='Tunisia' >Tunisia</option><option value='Turkmenistan' >Turkmenistan</option><option value='Turks and Caicos Islands' >Turks and Caicos Islands</option><option value='Tuvalu' >Tuvalu</option><option value='Türkiye' >Türkiye</option><option value='US Minor Outlying Islands' >US Minor Outlying Islands</option><option value='Uganda' >Uganda</option><option value='Ukraine' >Ukraine</option><option value='United Arab Emirates' >United Arab Emirates</option><option value='United Kingdom' >United Kingdom</option><option value='United States' >United States</option><option value='Uruguay' >Uruguay</option><option value='Uzbekistan' >Uzbekistan</option><option value='Vanuatu' >Vanuatu</option><option value='Venezuela' >Venezuela</option><option value='Viet Nam' >Viet Nam</option><option value='Virgin Islands, British' >Virgin Islands, British</option><option value='Virgin Islands, U.S.' >Virgin Islands, U.S.</option><option value='Wallis and Futuna' >Wallis and Futuna</option><option value='Western Sahara' >Western Sahara</option><option value='Yemen' >Yemen</option><option value='Zambia' >Zambia</option><option value='Zimbabwe' >Zimbabwe</option><option value='Åland Islands' >Åland Islands</option></select>
                                        <label for='input_15_32_6' id='input_15_32_6_label' class='gform-field-label gform-field-label--type-sub '>Country</label>
                                    </span>
                    <div class='gf_clear gf_clear_complex'></div>
                </div></fieldset><div id="field_15_33"  class="gfield gfield--type-email gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_15_33"><label class='gfield_label gform-field-label' for='input_15_33' >Email</label><div class='ginput_container ginput_container_email'>
                            <input name='input_33' id='input_15_33' type='email' value='' class='large'     aria-invalid="false"  />
                        </div></div><div id="field_15_34"  class="gfield gfield--type-section gsection field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_15_34"><h3 class="gsection_title">Status Of Complainant</h3></div><fieldset id="field_15_35"  class="gfield gfield--type-radio gfield--type-choice gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_15_35"><legend class='gfield_label gform-field-label'  >Status</legend><div class='ginput_container ginput_container_radio'><div class='gfield_radio' id='input_15_35'>
			<div class='gchoice gchoice_15_35_0'>
					<input class='gfield-choice-input' name='input_35' type='radio' value='Parent/ Relative'  id='choice_15_35_0' onchange='gformToggleRadioOther( this )'    />
					<label for='choice_15_35_0' id='label_15_35_0' class='gform-field-label gform-field-label--type-inline'>Parent/ Relative</label>
			</div>
			<div class='gchoice gchoice_15_35_1'>
					<input class='gfield-choice-input' name='input_35' type='radio' value='Person we Support'  id='choice_15_35_1' onchange='gformToggleRadioOther( this )'    />
					<label for='choice_15_35_1' id='label_15_35_1' class='gform-field-label gform-field-label--type-inline'>Person we Support</label>
			</div>
			<div class='gchoice gchoice_15_35_2'>
					<input class='gfield-choice-input' name='input_35' type='radio' value='Social Worker'  id='choice_15_35_2' onchange='gformToggleRadioOther( this )'    />
					<label for='choice_15_35_2' id='label_15_35_2' class='gform-field-label gform-field-label--type-inline'>Social Worker</label>
			</div>
			<div class='gchoice gchoice_15_35_3'>
					<input class='gfield-choice-input' name='input_35' type='radio' value='Neighbour'  id='choice_15_35_3' onchange='gformToggleRadioOther( this )'    />
					<label for='choice_15_35_3' id='label_15_35_3' class='gform-field-label gform-field-label--type-inline'>Neighbour</label>
			</div>
			<div class='gchoice gchoice_15_35_4'>
					<input class='gfield-choice-input' name='input_35' type='radio' value='Advocate/ Friend'  id='choice_15_35_4' onchange='gformToggleRadioOther( this )'    />
					<label for='choice_15_35_4' id='label_15_35_4' class='gform-field-label gform-field-label--type-inline'>Advocate/ Friend</label>
			</div>
			<div class='gchoice gchoice_15_35_5'>
					<input class='gfield-choice-input' name='input_35' type='radio' value='Other (Please Specify)'  id='choice_15_35_5' onchange='gformToggleRadioOther( this )'    />
					<label for='choice_15_35_5' id='label_15_35_5' class='gform-field-label gform-field-label--type-inline'>Other (Please Specify)</label>
			</div></div></div></fieldset><div id="field_15_36"  class="gfield gfield--type-textarea gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_15_36"><label class='gfield_label gform-field-label' for='input_15_36' >If &quot;Other&quot;, please specify below:</label><div class='ginput_container ginput_container_textarea'><textarea name='input_36' id='input_15_36' class='textarea medium'      aria-invalid="false"   rows='10' cols='50'></textarea></div></div><div id="field_15_37"  class="gfield gfield--type-textarea gfield--width-full field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_15_37"><label class='gfield_label gform-field-label' for='input_15_37' >Details of the complaint/ concern</label><div class='ginput_container ginput_container_textarea'><textarea name='input_37' id='input_15_37' class='textarea large'      aria-invalid="false"   rows='10' cols='50'></textarea></div></div><fieldset id="field_15_38"  class="gfield gfield--type-radio gfield--type-choice gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_15_38"><legend class='gfield_label gform-field-label'  >What description best fits the complaint/ concern</legend><div class='ginput_container ginput_container_radio'><div class='gfield_radio' id='input_15_38'>
			<div class='gchoice gchoice_15_38_0'>
					<input class='gfield-choice-input' name='input_38' type='radio' value='Staff Action'  id='choice_15_38_0' onchange='gformToggleRadioOther( this )'    />
					<label for='choice_15_38_0' id='label_15_38_0' class='gform-field-label gform-field-label--type-inline'>Staff Action</label>
			</div>
			<div class='gchoice gchoice_15_38_1'>
					<input class='gfield-choice-input' name='input_38' type='radio' value='Tenant/ Resident&#039;s Action'  id='choice_15_38_1' onchange='gformToggleRadioOther( this )'    />
					<label for='choice_15_38_1' id='label_15_38_1' class='gform-field-label gform-field-label--type-inline'>Tenant/ Resident's Action</label>
			</div>
			<div class='gchoice gchoice_15_38_2'>
					<input class='gfield-choice-input' name='input_38' type='radio' value='Both'  id='choice_15_38_2' onchange='gformToggleRadioOther( this )'    />
					<label for='choice_15_38_2' id='label_15_38_2' class='gform-field-label gform-field-label--type-inline'>Both</label>
			</div>
			<div class='gchoice gchoice_15_38_3'>
					<input class='gfield-choice-input' name='input_38' type='radio' value='A Disputed Decision'  id='choice_15_38_3' onchange='gformToggleRadioOther( this )'    />
					<label for='choice_15_38_3' id='label_15_38_3' class='gform-field-label gform-field-label--type-inline'>A Disputed Decision</label>
			</div>
			<div class='gchoice gchoice_15_38_4'>
					<input class='gfield-choice-input' name='input_38' type='radio' value='An Oversight'  id='choice_15_38_4' onchange='gformToggleRadioOther( this )'    />
					<label for='choice_15_38_4' id='label_15_38_4' class='gform-field-label gform-field-label--type-inline'>An Oversight</label>
			</div>
			<div class='gchoice gchoice_15_38_5'>
					<input class='gfield-choice-input' name='input_38' type='radio' value='A Misunderstanding'  id='choice_15_38_5' onchange='gformToggleRadioOther( this )'    />
					<label for='choice_15_38_5' id='label_15_38_5' class='gform-field-label gform-field-label--type-inline'>A Misunderstanding</label>
			</div>
			<div class='gchoice gchoice_15_38_6'>
					<input class='gfield-choice-input' name='input_38' type='radio' value='Violence'  id='choice_15_38_6' onchange='gformToggleRadioOther( this )'    />
					<label for='choice_15_38_6' id='label_15_38_6' class='gform-field-label gform-field-label--type-inline'>Violence</label>
			</div>
			<div class='gchoice gchoice_15_38_7'>
					<input class='gfield-choice-input' name='input_38' type='radio' value='Theft'  id='choice_15_38_7' onchange='gformToggleRadioOther( this )'    />
					<label for='choice_15_38_7' id='label_15_38_7' class='gform-field-label gform-field-label--type-inline'>Theft</label>
			</div>
			<div class='gchoice gchoice_15_38_8'>
					<input class='gfield-choice-input' name='input_38' type='radio' value='Verbal Insults'  id='choice_15_38_8' onchange='gformToggleRadioOther( this )'    />
					<label for='choice_15_38_8' id='label_15_38_8' class='gform-field-label gform-field-label--type-inline'>Verbal Insults</label>
			</div>
			<div class='gchoice gchoice_15_38_9'>
					<input class='gfield-choice-input' name='input_38' type='radio' value='Personal Upset'  id='choice_15_38_9' onchange='gformToggleRadioOther( this )'    />
					<label for='choice_15_38_9' id='label_15_38_9' class='gform-field-label gform-field-label--type-inline'>Personal Upset</label>
			</div>
			<div class='gchoice gchoice_15_38_10'>
					<input class='gfield-choice-input' name='input_38' type='radio' value='Other (Specify)'  id='choice_15_38_10' onchange='gformToggleRadioOther( this )'    />
					<label for='choice_15_38_10' id='label_15_38_10' class='gform-field-label gform-field-label--type-inline'>Other (Specify)</label>
			</div></div></div></fieldset><div id="field_15_39"  class="gfield gfield--type-textarea gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_15_39"><label class='gfield_label gform-field-label' for='input_15_39' >If &quot;Other&quot;, please specify below:</label><div class='ginput_container ginput_container_textarea'><textarea name='input_39' id='input_15_39' class='textarea medium'      aria-invalid="false"   rows='10' cols='50'></textarea></div></div><div id="field_15_40"  class="gfield gfield--type-section gsection field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_15_40"><h3 class="gsection_title">This complaint/ concern was recorded by</h3></div><fieldset id="field_15_41"  class="gfield gfield--type-name gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_15_41"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Name</legend><div class='ginput_complex ginput_container ginput_container--name no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name gform-grid-row' id='input_15_41'>
                            
                            <span id='input_15_41_3_container' class='name_first gform-grid-col gform-grid-col--size-auto' >
                                                    <input type='text' name='input_41.3' id='input_15_41_3' value=''   aria-required='false'     />
                                                    <label for='input_15_41_3' class='gform-field-label gform-field-label--type-sub '>First</label>
                                                </span>
                            
                            <span id='input_15_41_6_container' class='name_last gform-grid-col gform-grid-col--size-auto' >
                                                    <input type='text' name='input_41.6' id='input_15_41_6' value=''   aria-required='false'     />
                                                    <label for='input_15_41_6' class='gform-field-label gform-field-label--type-sub '>Last</label>
                                                </span>
                            
                        </div></fieldset><div id="field_15_42"  class="gfield gfield--type-date gfield--input-type-datepicker gfield--datepicker-no-icon gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_15_42"><label class='gfield_label gform-field-label' for='input_15_42' >Date</label><div class='ginput_container ginput_container_date'>
                            <input name='input_42' id='input_15_42' type='text' value='' class='datepicker gform-datepicker mdy datepicker_no_icon gdatepicker-no-icon'   placeholder='mm/dd/yyyy' aria-describedby="input_15_42_date_format" aria-invalid="false" />
                            <span id='input_15_42_date_format' class='screen-reader-text'>MM slash DD slash YYYY</span>
                        </div>
                        <input type='hidden' id='gforms_calendar_icon_input_15_42' class='gform_hidden' value='https://icrit.b-e.digital/wp-content/plugins/gravityforms/images/datepicker/datepicker.svg'/></div><div id="field_15_43"  class="gfield gfield--type-text gfield--width-full field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_15_43"><label class='gfield_label gform-field-label' for='input_15_43' >Position Held</label><div class='ginput_container ginput_container_text'><input name='input_43' id='input_15_43' type='text' value='' class='large'      aria-invalid="false"   /> </div></div></div></div>
        <div class='gform_footer top_label'> <input type='submit' id='gform_submit_button_15' class='gform_button button' value='Submit'  onclick='if(window["gf_submitting_15"]){return false;}  if( !jQuery("#gform_15")[0].checkValidity || jQuery("#gform_15")[0].checkValidity()){window["gf_submitting_15"]=true;}  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_15"]){return false;} if( !jQuery("#gform_15")[0].checkValidity || jQuery("#gform_15")[0].checkValidity()){window["gf_submitting_15"]=true;}  jQuery("#gform_15").trigger("submit",[true]); }' /> 
            <input type='hidden' class='gform_hidden' name='is_submit_15' value='1' />
            <input type='hidden' class='gform_hidden' name='gform_submit' value='15' />
            
            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
            <input type='hidden' class='gform_hidden' name='state_15' value='WyJ7XCIzNVwiOltcImE1MTlkZDkyMTZmZjk4ODQ1ZjdmZDliNDg2MTY0OThlXCIsXCI0OTQwODRkMzQxOGMxZTE2YTk1NDg2M2M1NGI5MzUyM1wiLFwiMzUyNWU3MzU5MmVkYzJjZTgwZDAyMmU0ZjI0OGJmNWVcIixcIjI1NDI5NjQ1NjJlZjVmOWY2MmRhYzY1MTFmNDM4ZDUwXCIsXCIzMTdiN2Y0MzMxZTIyM2FiYTliNDRkZDNkZmViMjhiMFwiLFwiNmQ2NmEwMjljZjRjMTU0MDRkZmUyNTljNjc4ZjM3NWNcIl0sXCIzOFwiOltcIjRhYTJhZGM5MTcwZjg2MGIyZDQ4ZTdlM2Y4MTQ5YTA4XCIsXCJiNjFiYTAzY2Y4YThlMmRmN2QxMjg0ZjAxNGE1NDhiYVwiLFwiODVhMjFjYTllNjRmYmU4OTMyM2Q0N2Q5YTA2YjUyYThcIixcIjQxZTEwN2FmYWRhMWI0NzYzYmZkOGY3ODVhZmFmMzVhXCIsXCJkY2RjODM3YjJkZTJiNTcyZDIyYjNkOGNhNjZmODg0Y1wiLFwiZmU4MWYwZTdlODc5Zjc0ZmY4NGFmMjMyNjg4M2M0NTBcIixcImM3N2M1MWY5OTMxODZmZmJiMTI3YzcxZmEzOWFkM2Q4XCIsXCI3N2Y5N2NjNDczYTU3ZWU3YzU1Mjk2NWQwNjUwM2E4ZVwiLFwiNDAzZTNlZGI4ZjIzZjY1NzBmMjkyZWE0OWRiMWU3OThcIixcImYzMjgyZmY4YmRjZjVlMDA2ZGM0NDIyYzg4Nzk2Y2NhXCIsXCIwYjlhYWRhNjQzYWExZTI1N2ExZWVkMTJjZmUyZDVlN1wiXX0iLCI2MDA5ZTUxYmEyNWVmMTQ2NDJkZDRjYzEyNGZjZmYzMCJd' />
            <input type='hidden' class='gform_hidden' name='gform_target_page_number_15' id='gform_target_page_number_15' value='0' />
            <input type='hidden' class='gform_hidden' name='gform_source_page_number_15' id='gform_source_page_number_15' value='1' />
            <input type='hidden' name='gform_field_values' value='' />
            
        </div>
                        </form>

                </form>
                </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
