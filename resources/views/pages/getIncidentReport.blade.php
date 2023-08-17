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
                           Incident Report
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
                    <form method='post' enctype='multipart/form-data'  id='gform_17'  action='/?gf_page=preview&#038;id=17' data-formid='17' novalidate>
                        <div class='gform-body gform_body'><div id='gform_fields_17' class='gform_fields top_label form_sublabel_below description_below'><fieldset id="field_17_99"  class="gfield gfield--type-name field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_99"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Name</legend><div class='ginput_complex ginput_container ginput_container--name no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name gform-grid-row' id='input_17_99'>
                            
                            <span id='input_17_99_3_container' class='name_first gform-grid-col gform-grid-col--size-auto' >
                                                    <input type='text' name='input_99.3' id='input_17_99_3' value=''   aria-required='false'     />
                                                    <label for='input_17_99_3' class='gform-field-label gform-field-label--type-sub '>First</label>
                                                </span>
                            
                            <span id='input_17_99_6_container' class='name_last gform-grid-col gform-grid-col--size-auto' >
                                                    <input type='text' name='input_99.6' id='input_17_99_6' value=''   aria-required='false'     />
                                                    <label for='input_17_99_6' class='gform-field-label gform-field-label--type-sub '>Last</label>
                                                </span>
                            
                        </div></fieldset><div id="field_17_93"  class="gfield gfield--type-text field_sublabel_below gfield--has-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_93"><label class='gfield_label gform-field-label' for='input_17_93' >REF No:</label><div class='ginput_container ginput_container_text'><input name='input_93' id='input_17_93' type='text' value='' class='large'  aria-describedby="gfield_description_17_93"    aria-invalid="false"   /> </div><div class='gfield_description' id='gfield_description_17_93'>Log No/ Initials of affected party/ DD/MM/YY</div></div><div id="field_17_95"  class="gfield gfield--type-section gsection field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_95"><h3 class="gsection_title">Details Of Incident</h3></div><div id="field_17_96"  class="gfield gfield--type-text gfield--width-third field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_96"><label class='gfield_label gform-field-label' for='input_17_96' >Location</label><div class='ginput_container ginput_container_text'><input name='input_96' id='input_17_96' type='text' value='' class='large'      aria-invalid="false"   /> </div></div><fieldset id="field_17_97"  class="gfield gfield--type-date gfield--input-type-datefield gfield--width-third field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_97"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Date</legend><div id='input_17_97' class='ginput_container ginput_complex gform-grid-row'>
                                        <div class='gfield_date_day ginput_container ginput_container_date gform-grid-col' id='input_17_97_2_container'>
                                            <input type='number'  name='input_97[]' id='input_17_97_2' value=''   aria-required='false'   placeholder='DD' min='1' max='31' step='1'/>
                                            <label for='input_17_97_2' class='gform-field-label gform-field-label--type-sub screen-reader-text'>Day</label>
                                        </div><div class='gfield_date_month ginput_container ginput_container_date gform-grid-col' id='input_17_97_1_container'>
                                        <input type='number'  name='input_97[]' id='input_17_97_1' value=''   aria-required='false'   placeholder='MM' min='1' max='12' step='1'/>
                                        <label for='input_17_97_1' class='gform-field-label gform-field-label--type-sub screen-reader-text'>Month</label>
                                   </div><div class='gfield_date_year ginput_container ginput_container_date gform-grid-col' id='input_17_97_3_container'>
                                        <input type='number'  name='input_97[]' id='input_17_97_3' value=''   aria-required='false'   placeholder='YYYY' min='1920' max='2024' step='1'/>
                                        <label for='input_17_97_3' class='gform-field-label gform-field-label--type-sub screen-reader-text'>Year</label>
                                   </div>
                                </div></fieldset><fieldset id="field_17_101"  class="gfield gfield--type-time gfield--width-third field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_101"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Time</legend><div class="ginput_container ginput_complex gform-grid-row">
                        <div class='gfield_time_hour ginput_container ginput_container_time gform-grid-col' id='input_17_101'>
                            <input type='number' maxlength='2' name='input_101[]' id='input_17_101_1' value=''  min='0' max='12' step='1'  placeholder='HH' aria-required='false'   /> 
                            <label class='gform-field-label gform-field-label--type-sub hour_label screen-reader-text' for='input_17_101_1'>Hours</label>
                        </div>
                        <div class="below hour_minute_colon gform-grid-col">:</div>
                        <div class='gfield_time_minute ginput_container ginput_container_time gform-grid-col'>
                            <input type='number' maxlength='2' name='input_101[]' id='input_17_101_2' value=''  min='0' max='59' step='1'  placeholder='MM' aria-required='false'  />
                            <label class='gform-field-label gform-field-label--type-sub minute_label screen-reader-text' for='input_17_101_2'>Minutes</label>
                        </div>
                        <div class='gfield_time_ampm ginput_container ginput_container_time below gform-grid-col' >
                                
                                <select name='input_101[]' id='input_17_101_3'  >
                                    <option value='am' >AM</option>
                                    <option value='pm' >PM</option>
                                </select> 
                                <label class='gform-field-label gform-field-label--type-sub am_pm_label screen-reader-text' for='input_17_101_3'>AM/PM</label>                                
                           </div>
                    </div></fieldset><div id="field_17_100"  class="gfield gfield--type-text gfield--width-full field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_100"><label class='gfield_label gform-field-label' for='input_17_100' >Initials of injured/ affected party:</label><div class='ginput_container ginput_container_text'><input name='input_100' id='input_17_100' type='text' value='' class='large'      aria-invalid="false"   /> </div></div><fieldset id="field_17_103"  class="gfield gfield--type-checkbox gfield--type-choice gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_103"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Was the person affected</legend><div class='ginput_container ginput_container_checkbox'><div class='gfield_checkbox' id='input_17_103'><div class='gchoice gchoice_17_103_1'>
								<input class='gfield-choice-input' name='input_103.1' type='checkbox'  value='A person we support'  id='choice_17_103_1'   />
								<label for='choice_17_103_1' id='label_17_103_1' class='gform-field-label gform-field-label--type-inline'>A person we support</label>
							</div><div class='gchoice gchoice_17_103_2'>
								<input class='gfield-choice-input' name='input_103.2' type='checkbox'  value='A staff member'  id='choice_17_103_2'   />
								<label for='choice_17_103_2' id='label_17_103_2' class='gform-field-label gform-field-label--type-inline'>A staff member</label>
							</div><div class='gchoice gchoice_17_103_3'>
								<input class='gfield-choice-input' name='input_103.3' type='checkbox'  value='Agency'  id='choice_17_103_3'   />
								<label for='choice_17_103_3' id='label_17_103_3' class='gform-field-label gform-field-label--type-inline'>Agency</label>
							</div><div class='gchoice gchoice_17_103_4'>
								<input class='gfield-choice-input' name='input_103.4' type='checkbox'  value='N/A'  id='choice_17_103_4'   />
								<label for='choice_17_103_4' id='label_17_103_4' class='gform-field-label gform-field-label--type-inline'>N/A</label>
							</div><div class='gchoice gchoice_17_103_5'>
								<input class='gfield-choice-input' name='input_103.5' type='checkbox'  value='Other'  id='choice_17_103_5'   />
								<label for='choice_17_103_5' id='label_17_103_5' class='gform-field-label gform-field-label--type-inline'>Other</label>
							</div></div></div></fieldset><div id="field_17_104"  class="gfield gfield--type-textarea gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_104"><label class='gfield_label gform-field-label' for='input_17_104' >If &quot;Other&quot;, Please specify below:</label><div class='ginput_container ginput_container_textarea'><textarea name='input_104' id='input_17_104' class='textarea medium'      aria-invalid="false"   rows='10' cols='50'></textarea></div></div><div id="field_17_105"  class="gfield gfield--type-text gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_105"><label class='gfield_label gform-field-label' for='input_17_105' >Initials of person causing harm/ intimidation/ damge or where known behaviours have changed:</label><div class='ginput_container ginput_container_text'><input name='input_105' id='input_17_105' type='text' value='' class='large'      aria-invalid="false"   /> </div></div><fieldset id="field_17_106"  class="gfield gfield--type-checkbox gfield--type-choice gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_106"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >N/A to this incident</legend><div class='ginput_container ginput_container_checkbox'><div class='gfield_checkbox' id='input_17_106'><div class='gchoice gchoice_17_106_1'>
								<input class='gfield-choice-input' name='input_106.1' type='checkbox'  value='Yes'  id='choice_17_106_1'   />
								<label for='choice_17_106_1' id='label_17_106_1' class='gform-field-label gform-field-label--type-inline'>Yes</label>
							</div></div></div></fieldset><div id="field_17_107"  class="gfield gfield--type-textarea gfield--width-full field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_107"><label class='gfield_label gform-field-label' for='input_17_107' >Please provide a full description of the incident (include any injuries or damage sustained)</label><div class='ginput_container ginput_container_textarea'><textarea name='input_107' id='input_17_107' class='textarea large'      aria-invalid="false"   rows='10' cols='50'></textarea></div></div><div id="field_17_108"  class="gfield gfield--type-textarea gfield--width-full field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_108"><label class='gfield_label gform-field-label' for='input_17_108' >Were there any identified causes to this incident?</label><div class='ginput_container ginput_container_textarea'><textarea name='input_108' id='input_17_108' class='textarea large'      aria-invalid="false"   rows='10' cols='50'></textarea></div></div><fieldset id="field_17_109"  class="gfield gfield--type-checkbox gfield--type-choice gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_109"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Please identify any other forms that were completed with this Incident Report.</legend><div class='ginput_container ginput_container_checkbox'><div class='gfield_checkbox' id='input_17_109'><div class='gchoice gchoice_17_109_1'>
								<input class='gfield-choice-input' name='input_109.1' type='checkbox'  value='Body Map'  id='choice_17_109_1'   />
								<label for='choice_17_109_1' id='label_17_109_1' class='gform-field-label gform-field-label--type-inline'>Body Map</label>
							</div><div class='gchoice gchoice_17_109_2'>
								<input class='gfield-choice-input' name='input_109.2' type='checkbox'  value='Witness Statement'  id='choice_17_109_2'   />
								<label for='choice_17_109_2' id='label_17_109_2' class='gform-field-label gform-field-label--type-inline'>Witness Statement</label>
							</div><div class='gchoice gchoice_17_109_3'>
								<input class='gfield-choice-input' name='input_109.3' type='checkbox'  value='Falls Checklist'  id='choice_17_109_3'   />
								<label for='choice_17_109_3' id='label_17_109_3' class='gform-field-label gform-field-label--type-inline'>Falls Checklist</label>
							</div><div class='gchoice gchoice_17_109_4'>
								<input class='gfield-choice-input' name='input_109.4' type='checkbox'  value='Seizure Report'  id='choice_17_109_4'   />
								<label for='choice_17_109_4' id='label_17_109_4' class='gform-field-label gform-field-label--type-inline'>Seizure Report</label>
							</div><div class='gchoice gchoice_17_109_5'>
								<input class='gfield-choice-input' name='input_109.5' type='checkbox'  value='Other'  id='choice_17_109_5'   />
								<label for='choice_17_109_5' id='label_17_109_5' class='gform-field-label gform-field-label--type-inline'>Other</label>
							</div></div></div></fieldset><div id="field_17_110"  class="gfield gfield--type-textarea gfield--width-half field_sublabel_below gfield--has-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_110"><label class='gfield_label gform-field-label' for='input_17_110' >If Other Form</label><div class='ginput_container ginput_container_textarea'><textarea name='input_110' id='input_17_110' class='textarea large'  aria-describedby="gfield_description_17_110"    aria-invalid="false"   rows='10' cols='50'></textarea></div><div class='gfield_description' id='gfield_description_17_110'>If "Other", please state below:</div></div><fieldset id="field_17_111"  class="gfield gfield--type-name gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_111"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Name Of Person Completing This Report</legend><div class='ginput_complex ginput_container ginput_container--name no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name gform-grid-row' id='input_17_111'>
                            
                            <span id='input_17_111_3_container' class='name_first gform-grid-col gform-grid-col--size-auto' >
                                                    <input type='text' name='input_111.3' id='input_17_111_3' value=''   aria-required='false'     />
                                                    <label for='input_17_111_3' class='gform-field-label gform-field-label--type-sub '>First</label>
                                                </span>
                            
                            <span id='input_17_111_6_container' class='name_last gform-grid-col gform-grid-col--size-auto' >
                                                    <input type='text' name='input_111.6' id='input_17_111_6' value=''   aria-required='false'     />
                                                    <label for='input_17_111_6' class='gform-field-label gform-field-label--type-sub '>Last</label>
                                                </span>
                            
                        </div></fieldset><fieldset id="field_17_112"  class="gfield gfield--type-date gfield--input-type-datefield gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_112"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Date Completed</legend><div id='input_17_112' class='ginput_container ginput_complex gform-grid-row'>
                                        <div class='gfield_date_day ginput_container ginput_container_date gform-grid-col' id='input_17_112_2_container'>
                                            <input type='number'  name='input_112[]' id='input_17_112_2' value=''   aria-required='false'   placeholder='DD' min='1' max='31' step='1'/>
                                            <label for='input_17_112_2' class='gform-field-label gform-field-label--type-sub screen-reader-text'>Day</label>
                                        </div><div class='gfield_date_month ginput_container ginput_container_date gform-grid-col' id='input_17_112_1_container'>
                                        <input type='number'  name='input_112[]' id='input_17_112_1' value=''   aria-required='false'   placeholder='MM' min='1' max='12' step='1'/>
                                        <label for='input_17_112_1' class='gform-field-label gform-field-label--type-sub screen-reader-text'>Month</label>
                                   </div><div class='gfield_date_year ginput_container ginput_container_date gform-grid-col' id='input_17_112_3_container'>
                                        <input type='number'  name='input_112[]' id='input_17_112_3' value=''   aria-required='false'   placeholder='YYYY' min='1920' max='2024' step='1'/>
                                        <label for='input_17_112_3' class='gform-field-label gform-field-label--type-sub screen-reader-text'>Year</label>
                                   </div>
                                </div></fieldset><div id="field_17_113"  class="gfield gfield--type-signature gfield--width-half field_sublabel_below gfield--has-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_113"><label class='gfield_label gform-field-label' for='input_17_113' >Signature</label><div class='gfield_signature_ui_container gform-theme__no-reset--children' ><div id='input_17_113_Container' class='gfield_signature_container ginput_container' style='height:180px; width:300px; ' ><input type='hidden' class='gform_hidden' name='input_17_113_valid' id='input_17_113_valid' /><canvas id='input_17_113' width='300' height='180'></canvas></div></div><div class='gfield_description' id='gfield_description_17_113'>Optional</div></div><div id="field_17_114"  class="gfield gfield--type-text gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_17_114"><label class='gfield_label gform-field-label' for='input_17_114' >Time Manager/ On-Call notified:</label><div class='ginput_container ginput_container_text'><input name='input_114' id='input_17_114' type='text' value='' class='large'      aria-invalid="false"   /> </div></div></div></div>
        <div class='gform_footer top_label'> <input type='submit' id='gform_submit_button_17' class='gform_button button' value='Submit'  onclick='if(window["gf_submitting_17"]){return false;}  if( !jQuery("#gform_17")[0].checkValidity || jQuery("#gform_17")[0].checkValidity()){window["gf_submitting_17"]=true;}  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_17"]){return false;} if( !jQuery("#gform_17")[0].checkValidity || jQuery("#gform_17")[0].checkValidity()){window["gf_submitting_17"]=true;}  jQuery("#gform_17").trigger("submit",[true]); }' /> 
            <input type='hidden' class='gform_hidden' name='is_submit_17' value='1' />
            <input type='hidden' class='gform_hidden' name='gform_submit' value='17' />
            
            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
            <input type='hidden' class='gform_hidden' name='state_17' value='WyJ7XCIxMDMuMVwiOlwiNTAyMTJmM2ZjZGFhM2JjNDM5OTFlNmVkN2YwZjhkMzBcIixcIjEwMy4yXCI6XCI2ZGQ3MjM5ZDZkMGNjZjc5ZjZkNzE5OThiMDQ5ZjIxZlwiLFwiMTAzLjNcIjpcImUwMjczNTVlYzFlMWJhNDFjMjBiZmU4ZmU4NGQwYWM2XCIsXCIxMDMuNFwiOlwiYWNjY2Q5ZDI1ZjI4NWNkNjk1MDA1Y2NkNWQ3NTAxNGRcIixcIjEwMy41XCI6XCI3NTRjYzU3OGQ0MjVmNTUzMjU2NGIyMDBkNzU0MjZkZFwiLFwiMTA2LjFcIjpcIjA0ZjNkMGMyNTM4YzcxMTM0ZDIwMTBjNWFjOWExY2IxXCIsXCIxMDkuMVwiOlwiM2M1YWFkNGM5ZThlMDFkMTAzYzFlNjVlMWE5Zjg3NjNcIixcIjEwOS4yXCI6XCJhNWY1MGRjM2E3MWVjNzRhZGMzMDU0OWZjMjZlODkzNFwiLFwiMTA5LjNcIjpcIjQ3NTQ3NjZjZTMzYTUzNzBlNTJjYzYzNzliYjhjMjM3XCIsXCIxMDkuNFwiOlwiZWRkOGU1YzNhZDYyZGYwNDdlNTJiNzIzYjQzNmY2MDJcIixcIjEwOS41XCI6XCI3NTRjYzU3OGQ0MjVmNTUzMjU2NGIyMDBkNzU0MjZkZFwifSIsIjJkMDhiNGU1ZDE4YzM5OGU0NjhmM2NmYzMyZmE5NmUyIl0=' />
            <input type='hidden' class='gform_hidden' name='gform_target_page_number_17' id='gform_target_page_number_17' value='0' />
            <input type='hidden' class='gform_hidden' name='gform_source_page_number_17' id='gform_source_page_number_17' value='1' />
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
