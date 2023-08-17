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
                           Seziure Report
                        </h5>
                       
                    </div>
                </div>
            </div>
        </div>
    </div><div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <form method="POST" action="{{ route('save-entry') }}">
                    @csrf
                    <form method='post' enctype='multipart/form-data'  id='gform_19'  action='/?gf_page=preview&#038;id=19' data-formid='19' novalidate>
                        <div class='gform-body gform_body'><div id='gform_fields_19' class='gform_fields top_label form_sublabel_below description_below'><div id="field_19_93"  class="gfield gfield--type-text field_sublabel_below gfield--has-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_93"><label class='gfield_label gform-field-label' for='input_19_93' >REF No:</label><div class='ginput_container ginput_container_text'><input name='input_93' id='input_19_93' type='text' value='' class='large'  aria-describedby="gfield_description_19_93"    aria-invalid="false"   /> </div><div class='gfield_description' id='gfield_description_19_93'>Log No/ Initials of affected party/ DD/MM/YY</div></div><div id="field_19_95"  class="gfield gfield--type-section gsection field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_95"><h3 class="gsection_title">Seizure Report</h3></div><fieldset id="field_19_136"  class="gfield gfield--type-name gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_136"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Name of person we support</legend><div class='ginput_complex ginput_container ginput_container--name no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name gform-grid-row' id='input_19_136'>
                            
                            <span id='input_19_136_3_container' class='name_first gform-grid-col gform-grid-col--size-auto' >
                                                    <input type='text' name='input_136.3' id='input_19_136_3' value=''   aria-required='false'     />
                                                    <label for='input_19_136_3' class='gform-field-label gform-field-label--type-sub '>First</label>
                                                </span>
                            
                            <span id='input_19_136_6_container' class='name_last gform-grid-col gform-grid-col--size-auto' >
                                                    <input type='text' name='input_136.6' id='input_19_136_6' value=''   aria-required='false'     />
                                                    <label for='input_19_136_6' class='gform-field-label gform-field-label--type-sub '>Last</label>
                                                </span>
                            
                        </div></fieldset><div id="field_19_96"  class="gfield gfield--type-text gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_96"><label class='gfield_label gform-field-label' for='input_19_96' >Location</label><div class='ginput_container ginput_container_text'><input name='input_96' id='input_19_96' type='text' value='' class='large'      aria-invalid="false"   /> </div></div><fieldset id="field_19_97"  class="gfield gfield--type-date gfield--input-type-datefield gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_97"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Date of Incident</legend><div id='input_19_97' class='ginput_container ginput_complex gform-grid-row'>
                                        <div class='gfield_date_day ginput_container ginput_container_date gform-grid-col' id='input_19_97_2_container'>
                                            <input type='number'  name='input_97[]' id='input_19_97_2' value=''   aria-required='false'   placeholder='DD' min='1' max='31' step='1'/>
                                            <label for='input_19_97_2' class='gform-field-label gform-field-label--type-sub screen-reader-text'>Day</label>
                                        </div><div class='gfield_date_month ginput_container ginput_container_date gform-grid-col' id='input_19_97_1_container'>
                                        <input type='number'  name='input_97[]' id='input_19_97_1' value=''   aria-required='false'   placeholder='MM' min='1' max='12' step='1'/>
                                        <label for='input_19_97_1' class='gform-field-label gform-field-label--type-sub screen-reader-text'>Month</label>
                                   </div><div class='gfield_date_year ginput_container ginput_container_date gform-grid-col' id='input_19_97_3_container'>
                                        <input type='number'  name='input_97[]' id='input_19_97_3' value=''   aria-required='false'   placeholder='YYYY' min='1920' max='2024' step='1'/>
                                        <label for='input_19_97_3' class='gform-field-label gform-field-label--type-sub screen-reader-text'>Year</label>
                                   </div>
                                </div></fieldset><fieldset id="field_19_101"  class="gfield gfield--type-time gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_101"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Time</legend><div class="ginput_container ginput_complex gform-grid-row">
                        <div class='gfield_time_hour ginput_container ginput_container_time gform-grid-col' id='input_19_101'>
                            <input type='number' maxlength='2' name='input_101[]' id='input_19_101_1' value=''  min='0' max='12' step='1'  placeholder='HH' aria-required='false'   /> 
                            <label class='gform-field-label gform-field-label--type-sub hour_label screen-reader-text' for='input_19_101_1'>Hours</label>
                        </div>
                        <div class="below hour_minute_colon gform-grid-col">:</div>
                        <div class='gfield_time_minute ginput_container ginput_container_time gform-grid-col'>
                            <input type='number' maxlength='2' name='input_101[]' id='input_19_101_2' value=''  min='0' max='59' step='1'  placeholder='MM' aria-required='false'  />
                            <label class='gform-field-label gform-field-label--type-sub minute_label screen-reader-text' for='input_19_101_2'>Minutes</label>
                        </div>
                        <div class='gfield_time_ampm ginput_container ginput_container_time below gform-grid-col' >
                                
                                <select name='input_101[]' id='input_19_101_3'  >
                                    <option value='am' >AM</option>
                                    <option value='pm' >PM</option>
                                </select> 
                                <label class='gform-field-label gform-field-label--type-sub am_pm_label screen-reader-text' for='input_19_101_3'>AM/PM</label>                                
                           </div>
                    </div></fieldset><fieldset id="field_19_103"  class="gfield gfield--type-checkbox gfield--type-choice gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_103"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Was there any warning prior to the seizure?</legend><div class='ginput_container ginput_container_checkbox'><div class='gfield_checkbox' id='input_19_103'><div class='gchoice gchoice_19_103_1'>
								<input class='gfield-choice-input' name='input_103.1' type='checkbox'  value='Change of Mood'  id='choice_19_103_1'   />
								<label for='choice_19_103_1' id='label_19_103_1' class='gform-field-label gform-field-label--type-inline'>Change of Mood</label>
							</div><div class='gchoice gchoice_19_103_2'>
								<input class='gfield-choice-input' name='input_103.2' type='checkbox'  value='Restlessness'  id='choice_19_103_2'   />
								<label for='choice_19_103_2' id='label_19_103_2' class='gform-field-label gform-field-label--type-inline'>Restlessness</label>
							</div><div class='gchoice gchoice_19_103_3'>
								<input class='gfield-choice-input' name='input_103.3' type='checkbox'  value='Sensations'  id='choice_19_103_3'   />
								<label for='choice_19_103_3' id='label_19_103_3' class='gform-field-label gform-field-label--type-inline'>Sensations</label>
							</div><div class='gchoice gchoice_19_103_4'>
								<input class='gfield-choice-input' name='input_103.4' type='checkbox'  value='Sound'  id='choice_19_103_4'   />
								<label for='choice_19_103_4' id='label_19_103_4' class='gform-field-label gform-field-label--type-inline'>Sound</label>
							</div><div class='gchoice gchoice_19_103_5'>
								<input class='gfield-choice-input' name='input_103.5' type='checkbox'  value='Other'  id='choice_19_103_5'   />
								<label for='choice_19_103_5' id='label_19_103_5' class='gform-field-label gform-field-label--type-inline'>Other</label>
							</div></div></div></fieldset><div id="field_19_104"  class="gfield gfield--type-textarea gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_104"><label class='gfield_label gform-field-label' for='input_19_104' >If &quot;Other&quot;, Please give details below:</label><div class='ginput_container ginput_container_textarea'><textarea name='input_104' id='input_19_104' class='textarea medium'      aria-invalid="false"   rows='10' cols='50'></textarea></div></div><fieldset id="field_19_137"  class="gfield gfield--type-checkbox gfield--type-choice gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_137"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Were they</legend><div class='ginput_container ginput_container_checkbox'><div class='gfield_checkbox' id='input_19_137'><div class='gchoice gchoice_19_137_1'>
								<input class='gfield-choice-input' name='input_137.1' type='checkbox'  value='Standing'  id='choice_19_137_1'   />
								<label for='choice_19_137_1' id='label_19_137_1' class='gform-field-label gform-field-label--type-inline'>Standing</label>
							</div><div class='gchoice gchoice_19_137_2'>
								<input class='gfield-choice-input' name='input_137.2' type='checkbox'  value='Sitting'  id='choice_19_137_2'   />
								<label for='choice_19_137_2' id='label_19_137_2' class='gform-field-label gform-field-label--type-inline'>Sitting</label>
							</div><div class='gchoice gchoice_19_137_3'>
								<input class='gfield-choice-input' name='input_137.3' type='checkbox'  value='In bed'  id='choice_19_137_3'   />
								<label for='choice_19_137_3' id='label_19_137_3' class='gform-field-label gform-field-label--type-inline'>In bed</label>
							</div><div class='gchoice gchoice_19_137_4'>
								<input class='gfield-choice-input' name='input_137.4' type='checkbox'  value='Unobserved Seizure'  id='choice_19_137_4'   />
								<label for='choice_19_137_4' id='label_19_137_4' class='gform-field-label gform-field-label--type-inline'>Unobserved Seizure</label>
							</div><div class='gchoice gchoice_19_137_5'>
								<input class='gfield-choice-input' name='input_137.5' type='checkbox'  value='Other'  id='choice_19_137_5'   />
								<label for='choice_19_137_5' id='label_19_137_5' class='gform-field-label gform-field-label--type-inline'>Other</label>
							</div></div></div></fieldset><div id="field_19_138"  class="gfield gfield--type-textarea gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_138"><label class='gfield_label gform-field-label' for='input_19_138' >If &quot;Other&quot;, Please give details below:</label><div class='ginput_container ginput_container_textarea'><textarea name='input_138' id='input_19_138' class='textarea medium'      aria-invalid="false"   rows='10' cols='50'></textarea></div></div><div id="field_19_139"  class="gfield gfield--type-textarea gfield--width-full field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_139"><label class='gfield_label gform-field-label' for='input_19_139' >What were they doing prior to seizure?</label><div class='ginput_container ginput_container_textarea'><textarea name='input_139' id='input_19_139' class='textarea large'      aria-invalid="false"   rows='10' cols='50'></textarea></div></div><fieldset id="field_19_140"  class="gfield gfield--type-checkbox gfield--type-choice gfield--width-third field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_140"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Did they fall?</legend><div class='ginput_container ginput_container_checkbox'><div class='gfield_checkbox' id='input_19_140'><div class='gchoice gchoice_19_140_1'>
								<input class='gfield-choice-input' name='input_140.1' type='checkbox'  value='Forward'  id='choice_19_140_1'   />
								<label for='choice_19_140_1' id='label_19_140_1' class='gform-field-label gform-field-label--type-inline'>Forward</label>
							</div><div class='gchoice gchoice_19_140_2'>
								<input class='gfield-choice-input' name='input_140.2' type='checkbox'  value='Backward'  id='choice_19_140_2'   />
								<label for='choice_19_140_2' id='label_19_140_2' class='gform-field-label gform-field-label--type-inline'>Backward</label>
							</div><div class='gchoice gchoice_19_140_3'>
								<input class='gfield-choice-input' name='input_140.3' type='checkbox'  value='N/A'  id='choice_19_140_3'   />
								<label for='choice_19_140_3' id='label_19_140_3' class='gform-field-label gform-field-label--type-inline'>N/A</label>
							</div></div></div></fieldset><fieldset id="field_19_141"  class="gfield gfield--type-checkbox gfield--type-choice gfield--width-third field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_141"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Did they stiffen?</legend><div class='ginput_container ginput_container_checkbox'><div class='gfield_checkbox' id='input_19_141'><div class='gchoice gchoice_19_141_1'>
								<input class='gfield-choice-input' name='input_141.1' type='checkbox'  value='Yes'  id='choice_19_141_1'   />
								<label for='choice_19_141_1' id='label_19_141_1' class='gform-field-label gform-field-label--type-inline'>Yes</label>
							</div><div class='gchoice gchoice_19_141_2'>
								<input class='gfield-choice-input' name='input_141.2' type='checkbox'  value='No'  id='choice_19_141_2'   />
								<label for='choice_19_141_2' id='label_19_141_2' class='gform-field-label gform-field-label--type-inline'>No</label>
							</div></div></div></fieldset><fieldset id="field_19_142"  class="gfield gfield--type-checkbox gfield--type-choice gfield--width-third field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_142"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Was there loss of consciousness?</legend><div class='ginput_container ginput_container_checkbox'><div class='gfield_checkbox' id='input_19_142'><div class='gchoice gchoice_19_142_1'>
								<input class='gfield-choice-input' name='input_142.1' type='checkbox'  value='Yes'  id='choice_19_142_1'   />
								<label for='choice_19_142_1' id='label_19_142_1' class='gform-field-label gform-field-label--type-inline'>Yes</label>
							</div><div class='gchoice gchoice_19_142_2'>
								<input class='gfield-choice-input' name='input_142.2' type='checkbox'  value='No'  id='choice_19_142_2'   />
								<label for='choice_19_142_2' id='label_19_142_2' class='gform-field-label gform-field-label--type-inline'>No</label>
							</div></div></div></fieldset><fieldset id="field_19_143"  class="gfield gfield--type-checkbox gfield--type-choice gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_143"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Did their colour change?</legend><div class='ginput_container ginput_container_checkbox'><div class='gfield_checkbox' id='input_19_143'><div class='gchoice gchoice_19_143_1'>
								<input class='gfield-choice-input' name='input_143.1' type='checkbox'  value='Yes'  id='choice_19_143_1'   />
								<label for='choice_19_143_1' id='label_19_143_1' class='gform-field-label gform-field-label--type-inline'>Yes</label>
							</div><div class='gchoice gchoice_19_143_2'>
								<input class='gfield-choice-input' name='input_143.2' type='checkbox'  value='No'  id='choice_19_143_2'   />
								<label for='choice_19_143_2' id='label_19_143_2' class='gform-field-label gform-field-label--type-inline'>No</label>
							</div></div></div></fieldset><div id="field_19_144"  class="gfield gfield--type-textarea gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_144"><label class='gfield_label gform-field-label' for='input_19_144' >If yes, describe colour</label><div class='ginput_container ginput_container_textarea'><textarea name='input_144' id='input_19_144' class='textarea small'      aria-invalid="false"   rows='10' cols='50'></textarea></div></div><fieldset id="field_19_145"  class="gfield gfield--type-checkbox gfield--type-choice gfield--width-third field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_145"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Was there movement?</legend><div class='ginput_container ginput_container_checkbox'><div class='gfield_checkbox' id='input_19_145'><div class='gchoice gchoice_19_145_1'>
								<input class='gfield-choice-input' name='input_145.1' type='checkbox'  value='Yes'  id='choice_19_145_1'   />
								<label for='choice_19_145_1' id='label_19_145_1' class='gform-field-label gform-field-label--type-inline'>Yes</label>
							</div><div class='gchoice gchoice_19_145_2'>
								<input class='gfield-choice-input' name='input_145.2' type='checkbox'  value='No'  id='choice_19_145_2'   />
								<label for='choice_19_145_2' id='label_19_145_2' class='gform-field-label gform-field-label--type-inline'>No</label>
							</div></div></div></fieldset><fieldset id="field_19_146"  class="gfield gfield--type-checkbox gfield--type-choice gfield--width-third field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_146"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Parts of the body involved</legend><div class='ginput_container ginput_container_checkbox'><div class='gfield_checkbox' id='input_19_146'><div class='gchoice gchoice_19_146_1'>
								<input class='gfield-choice-input' name='input_146.1' type='checkbox'  value='Left'  id='choice_19_146_1'   />
								<label for='choice_19_146_1' id='label_19_146_1' class='gform-field-label gform-field-label--type-inline'>Left</label>
							</div><div class='gchoice gchoice_19_146_2'>
								<input class='gfield-choice-input' name='input_146.2' type='checkbox'  value='Right'  id='choice_19_146_2'   />
								<label for='choice_19_146_2' id='label_19_146_2' class='gform-field-label gform-field-label--type-inline'>Right</label>
							</div><div class='gchoice gchoice_19_146_3'>
								<input class='gfield-choice-input' name='input_146.3' type='checkbox'  value='Both sides'  id='choice_19_146_3'   />
								<label for='choice_19_146_3' id='label_19_146_3' class='gform-field-label gform-field-label--type-inline'>Both sides</label>
							</div><div class='gchoice gchoice_19_146_4'>
								<input class='gfield-choice-input' name='input_146.4' type='checkbox'  value='Arms'  id='choice_19_146_4'   />
								<label for='choice_19_146_4' id='label_19_146_4' class='gform-field-label gform-field-label--type-inline'>Arms</label>
							</div><div class='gchoice gchoice_19_146_5'>
								<input class='gfield-choice-input' name='input_146.5' type='checkbox'  value='Legs'  id='choice_19_146_5'   />
								<label for='choice_19_146_5' id='label_19_146_5' class='gform-field-label gform-field-label--type-inline'>Legs</label>
							</div><div class='gchoice gchoice_19_146_6'>
								<input class='gfield-choice-input' name='input_146.6' type='checkbox'  value='Picking/fumbling of clothes'  id='choice_19_146_6'   />
								<label for='choice_19_146_6' id='label_19_146_6' class='gform-field-label gform-field-label--type-inline'>Picking/fumbling of clothes</label>
							</div><div class='gchoice gchoice_19_146_7'>
								<input class='gfield-choice-input' name='input_146.7' type='checkbox'  value='Eyelid flutters/blinking'  id='choice_19_146_7'   />
								<label for='choice_19_146_7' id='label_19_146_7' class='gform-field-label gform-field-label--type-inline'>Eyelid flutters/blinking</label>
							</div><div class='gchoice gchoice_19_146_8'>
								<input class='gfield-choice-input' name='input_146.8' type='checkbox'  value='Spasmodic jerking of arms'  id='choice_19_146_8'   />
								<label for='choice_19_146_8' id='label_19_146_8' class='gform-field-label gform-field-label--type-inline'>Spasmodic jerking of arms</label>
							</div><div class='gchoice gchoice_19_146_9'>
								<input class='gfield-choice-input' name='input_146.9' type='checkbox'  value='Facial movements'  id='choice_19_146_9'   />
								<label for='choice_19_146_9' id='label_19_146_9' class='gform-field-label gform-field-label--type-inline'>Facial movements</label>
							</div><div class='gchoice gchoice_19_146_11'>
								<input class='gfield-choice-input' name='input_146.11' type='checkbox'  value='Eyes turning'  id='choice_19_146_11'   />
								<label for='choice_19_146_11' id='label_19_146_11' class='gform-field-label gform-field-label--type-inline'>Eyes turning</label>
							</div><div class='gchoice gchoice_19_146_12'>
								<input class='gfield-choice-input' name='input_146.12' type='checkbox'  value='Stiffening of arms'  id='choice_19_146_12'   />
								<label for='choice_19_146_12' id='label_19_146_12' class='gform-field-label gform-field-label--type-inline'>Stiffening of arms</label>
							</div><div class='gchoice gchoice_19_146_13'>
								<input class='gfield-choice-input' name='input_146.13' type='checkbox'  value='Stiffening of legs'  id='choice_19_146_13'   />
								<label for='choice_19_146_13' id='label_19_146_13' class='gform-field-label gform-field-label--type-inline'>Stiffening of legs</label>
							</div><div class='gchoice gchoice_19_146_14'>
								<input class='gfield-choice-input' name='input_146.14' type='checkbox'  value='Spasmodic jerking of legs'  id='choice_19_146_14'   />
								<label for='choice_19_146_14' id='label_19_146_14' class='gform-field-label gform-field-label--type-inline'>Spasmodic jerking of legs</label>
							</div><div class='gchoice gchoice_19_146_15'>
								<input class='gfield-choice-input' name='input_146.15' type='checkbox'  value='Blank stare/absence'  id='choice_19_146_15'   />
								<label for='choice_19_146_15' id='label_19_146_15' class='gform-field-label gform-field-label--type-inline'>Blank stare/absence</label>
							</div><div class='gchoice gchoice_19_146_16'>
								<input class='gfield-choice-input' name='input_146.16' type='checkbox'  value='Tremors'  id='choice_19_146_16'   />
								<label for='choice_19_146_16' id='label_19_146_16' class='gform-field-label gform-field-label--type-inline'>Tremors</label>
							</div><div class='gchoice gchoice_19_146_17'>
								<input class='gfield-choice-input' name='input_146.17' type='checkbox'  value='Other'  id='choice_19_146_17'   />
								<label for='choice_19_146_17' id='label_19_146_17' class='gform-field-label gform-field-label--type-inline'>Other</label>
							</div></div></div></fieldset><div id="field_19_147"  class="gfield gfield--type-textarea gfield--width-third field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_147"><label class='gfield_label gform-field-label' for='input_19_147' >If &quot;Other&quot;, describe below</label><div class='ginput_container ginput_container_textarea'><textarea name='input_147' id='input_19_147' class='textarea small'      aria-invalid="false"   rows='10' cols='50'></textarea></div></div><fieldset id="field_19_148"  class="gfield gfield--type-checkbox gfield--type-choice gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_148"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Was there difficulty breathing?</legend><div class='ginput_container ginput_container_checkbox'><div class='gfield_checkbox' id='input_19_148'><div class='gchoice gchoice_19_148_1'>
								<input class='gfield-choice-input' name='input_148.1' type='checkbox'  value='Yes'  id='choice_19_148_1'   />
								<label for='choice_19_148_1' id='label_19_148_1' class='gform-field-label gform-field-label--type-inline'>Yes</label>
							</div><div class='gchoice gchoice_19_148_2'>
								<input class='gfield-choice-input' name='input_148.2' type='checkbox'  value='No'  id='choice_19_148_2'   />
								<label for='choice_19_148_2' id='label_19_148_2' class='gform-field-label gform-field-label--type-inline'>No</label>
							</div></div></div></fieldset><div id="field_19_149"  class="gfield gfield--type-textarea gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_149"><label class='gfield_label gform-field-label' for='input_19_149' >How long did the seizure last?</label><div class='ginput_container ginput_container_textarea'><textarea name='input_149' id='input_19_149' class='textarea small'      aria-invalid="false"   rows='10' cols='50'></textarea></div></div><fieldset id="field_19_150"  class="gfield gfield--type-checkbox gfield--type-choice gfield--width-full field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_150"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Was there incontinence?</legend><div class='ginput_container ginput_container_checkbox'><div class='gfield_checkbox' id='input_19_150'><div class='gchoice gchoice_19_150_1'>
								<input class='gfield-choice-input' name='input_150.1' type='checkbox'  value='Yes'  id='choice_19_150_1'   />
								<label for='choice_19_150_1' id='label_19_150_1' class='gform-field-label gform-field-label--type-inline'>Yes</label>
							</div><div class='gchoice gchoice_19_150_2'>
								<input class='gfield-choice-input' name='input_150.2' type='checkbox'  value='No'  id='choice_19_150_2'   />
								<label for='choice_19_150_2' id='label_19_150_2' class='gform-field-label gform-field-label--type-inline'>No</label>
							</div></div></div></fieldset><fieldset id="field_19_151"  class="gfield gfield--type-checkbox gfield--type-choice gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_151"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >What was the person&#039;s condition after seizure?</legend><div class='ginput_container ginput_container_checkbox'><div class='gfield_checkbox' id='input_19_151'><div class='gchoice gchoice_19_151_1'>
								<input class='gfield-choice-input' name='input_151.1' type='checkbox'  value='Confused'  id='choice_19_151_1'   />
								<label for='choice_19_151_1' id='label_19_151_1' class='gform-field-label gform-field-label--type-inline'>Confused</label>
							</div><div class='gchoice gchoice_19_151_2'>
								<input class='gfield-choice-input' name='input_151.2' type='checkbox'  value='Agitated'  id='choice_19_151_2'   />
								<label for='choice_19_151_2' id='label_19_151_2' class='gform-field-label gform-field-label--type-inline'>Agitated</label>
							</div><div class='gchoice gchoice_19_151_3'>
								<input class='gfield-choice-input' name='input_151.3' type='checkbox'  value='Other'  id='choice_19_151_3'   />
								<label for='choice_19_151_3' id='label_19_151_3' class='gform-field-label gform-field-label--type-inline'>Other</label>
							</div></div></div></fieldset><div id="field_19_152"  class="gfield gfield--type-textarea gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_152"><label class='gfield_label gform-field-label' for='input_19_152' >Length of Recovery</label><div class='ginput_container ginput_container_textarea'><textarea name='input_152' id='input_19_152' class='textarea small'      aria-invalid="false"   rows='10' cols='50'></textarea></div></div><fieldset id="field_19_153"  class="gfield gfield--type-checkbox gfield--type-choice gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_153"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Did the person suffer any injury?</legend><div class='ginput_container ginput_container_checkbox'><div class='gfield_checkbox' id='input_19_153'><div class='gchoice gchoice_19_153_1'>
								<input class='gfield-choice-input' name='input_153.1' type='checkbox'  value='Yes'  id='choice_19_153_1'   />
								<label for='choice_19_153_1' id='label_19_153_1' class='gform-field-label gform-field-label--type-inline'>Yes</label>
							</div><div class='gchoice gchoice_19_153_2'>
								<input class='gfield-choice-input' name='input_153.2' type='checkbox'  value='No'  id='choice_19_153_2'   />
								<label for='choice_19_153_2' id='label_19_153_2' class='gform-field-label gform-field-label--type-inline'>No</label>
							</div></div></div></fieldset><div id="field_19_154"  class="gfield gfield--type-textarea gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_154"><label class='gfield_label gform-field-label' for='input_19_154' >Treatment</label><div class='ginput_container ginput_container_textarea'><textarea name='input_154' id='input_19_154' class='textarea small'      aria-invalid="false"   rows='10' cols='50'></textarea></div></div><fieldset id="field_19_155"  class="gfield gfield--type-checkbox gfield--type-choice gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_155"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Were there any triggers?</legend><div class='ginput_container ginput_container_checkbox'><div class='gfield_checkbox' id='input_19_155'><div class='gchoice gchoice_19_155_1'>
								<input class='gfield-choice-input' name='input_155.1' type='checkbox'  value='Stress'  id='choice_19_155_1'   />
								<label for='choice_19_155_1' id='label_19_155_1' class='gform-field-label gform-field-label--type-inline'>Stress</label>
							</div><div class='gchoice gchoice_19_155_2'>
								<input class='gfield-choice-input' name='input_155.2' type='checkbox'  value='Illness'  id='choice_19_155_2'   />
								<label for='choice_19_155_2' id='label_19_155_2' class='gform-field-label gform-field-label--type-inline'>Illness</label>
							</div><div class='gchoice gchoice_19_155_3'>
								<input class='gfield-choice-input' name='input_155.3' type='checkbox'  value='Unusual exercise/experience'  id='choice_19_155_3'   />
								<label for='choice_19_155_3' id='label_19_155_3' class='gform-field-label gform-field-label--type-inline'>Unusual exercise/experience</label>
							</div><div class='gchoice gchoice_19_155_4'>
								<input class='gfield-choice-input' name='input_155.4' type='checkbox'  value='Medication'  id='choice_19_155_4'   />
								<label for='choice_19_155_4' id='label_19_155_4' class='gform-field-label gform-field-label--type-inline'>Medication</label>
							</div><div class='gchoice gchoice_19_155_5'>
								<input class='gfield-choice-input' name='input_155.5' type='checkbox'  value='Other'  id='choice_19_155_5'   />
								<label for='choice_19_155_5' id='label_19_155_5' class='gform-field-label gform-field-label--type-inline'>Other</label>
							</div></div></div></fieldset><div id="field_19_156"  class="gfield gfield--type-textarea gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_156"><label class='gfield_label gform-field-label' for='input_19_156' >If &quot;Other&quot;, please specify below</label><div class='ginput_container ginput_container_textarea'><textarea name='input_156' id='input_19_156' class='textarea small'      aria-invalid="false"   rows='10' cols='50'></textarea></div></div><fieldset id="field_19_157"  class="gfield gfield--type-name gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_157"><legend class='gfield_label gform-field-label gfield_label_before_complex'  >Reported By</legend><div class='ginput_complex ginput_container ginput_container--name no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name gform-grid-row' id='input_19_157'>
                            
                            <span id='input_19_157_3_container' class='name_first gform-grid-col gform-grid-col--size-auto' >
                                                    <input type='text' name='input_157.3' id='input_19_157_3' value=''   aria-required='false'     />
                                                    <label for='input_19_157_3' class='gform-field-label gform-field-label--type-sub '>First</label>
                                                </span>
                            
                            <span id='input_19_157_6_container' class='name_last gform-grid-col gform-grid-col--size-auto' >
                                                    <input type='text' name='input_157.6' id='input_19_157_6' value=''   aria-required='false'     />
                                                    <label for='input_19_157_6' class='gform-field-label gform-field-label--type-sub '>Last</label>
                                                </span>
                            
                        </div></fieldset><div id="field_19_158"  class="gfield gfield--type-date gfield--input-type-datepicker gfield--datepicker-no-icon gfield--width-half field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_19_158"><label class='gfield_label gform-field-label' for='input_19_158' >Date</label><div class='ginput_container ginput_container_date'>
                            <input name='input_158' id='input_19_158' type='text' value='' class='datepicker gform-datepicker mdy datepicker_no_icon gdatepicker-no-icon'   placeholder='mm/dd/yyyy' aria-describedby="input_19_158_date_format" aria-invalid="false" />
                            <span id='input_19_158_date_format' class='screen-reader-text'>MM slash DD slash YYYY</span>
                        </div>
                        <input type='hidden' id='gforms_calendar_icon_input_19_158' class='gform_hidden' value='https://icrit.b-e.digital/wp-content/plugins/gravityforms/images/datepicker/datepicker.svg'/></div></div></div>
        <div class='gform_footer top_label'> <input type='submit' id='gform_submit_button_19' class='gform_button button' value='Submit'  onclick='if(window["gf_submitting_19"]){return false;}  if( !jQuery("#gform_19")[0].checkValidity || jQuery("#gform_19")[0].checkValidity()){window["gf_submitting_19"]=true;}  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_19"]){return false;} if( !jQuery("#gform_19")[0].checkValidity || jQuery("#gform_19")[0].checkValidity()){window["gf_submitting_19"]=true;}  jQuery("#gform_19").trigger("submit",[true]); }' /> 
            <input type='hidden' class='gform_hidden' name='is_submit_19' value='1' />
            <input type='hidden' class='gform_hidden' name='gform_submit' value='19' />
            
            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
            <input type='hidden' class='gform_hidden' name='state_19' value='WyJ7XCIxMDMuMVwiOlwiZWU4YTc5MGY5NWRlZmFkMTEwM2I5Njc5NmU2NGJiZmJcIixcIjEwMy4yXCI6XCI4OTgyZDFjN2U2MWMyNDFlOWMzM2ZjNmQxMGFmMjc2ZVwiLFwiMTAzLjNcIjpcIjkwNzNiYmUzZDRkYjYzNzk4OGI4OTJkYmY1YmNmYjU0XCIsXCIxMDMuNFwiOlwiYjA4ZGVkOWU4MmI3M2VhMmRlZjUxZTMwYmQ2MjNjZmJcIixcIjEwMy41XCI6XCI3NTRjYzU3OGQ0MjVmNTUzMjU2NGIyMDBkNzU0MjZkZFwiLFwiMTM3LjFcIjpcIjViZDNlMGEyZWQ5YWRhYTk5NzU2ZDg1ZGI4NDMxY2ZiXCIsXCIxMzcuMlwiOlwiNmNjMTdmMmE2ODgyYzRkNDc4ZTE5MjljZDk3M2U3OTdcIixcIjEzNy4zXCI6XCJlN2IxMGE4NDQ1YTIxMTkxMzAwODdkMTVlNTkwYzI2NlwiLFwiMTM3LjRcIjpcImQzNWZjMzRiYzU3ZWQ5MDAwYmIxODRjOTU3ZGIxOTExXCIsXCIxMzcuNVwiOlwiNzU0Y2M1NzhkNDI1ZjU1MzI1NjRiMjAwZDc1NDI2ZGRcIixcIjE0MC4xXCI6XCJjNWUzOGMwYTZkNTJmZjc5MGNkMzgwMmQ0YjU5ZGUwYlwiLFwiMTQwLjJcIjpcImQxNGQwMDBjZGY3YWNiMGI1NmYwYzJhYzY5M2VkNTNmXCIsXCIxNDAuM1wiOlwiYWNjY2Q5ZDI1ZjI4NWNkNjk1MDA1Y2NkNWQ3NTAxNGRcIixcIjE0MS4xXCI6XCIwNGYzZDBjMjUzOGM3MTEzNGQyMDEwYzVhYzlhMWNiMVwiLFwiMTQxLjJcIjpcImUyMDk5NjM5ZmNiOWRiNjAyNzFmZWUxNTMxYjA3MWIyXCIsXCIxNDIuMVwiOlwiMDRmM2QwYzI1MzhjNzExMzRkMjAxMGM1YWM5YTFjYjFcIixcIjE0Mi4yXCI6XCJlMjA5OTYzOWZjYjlkYjYwMjcxZmVlMTUzMWIwNzFiMlwiLFwiMTQzLjFcIjpcIjA0ZjNkMGMyNTM4YzcxMTM0ZDIwMTBjNWFjOWExY2IxXCIsXCIxNDMuMlwiOlwiZTIwOTk2MzlmY2I5ZGI2MDI3MWZlZTE1MzFiMDcxYjJcIixcIjE0NS4xXCI6XCIwNGYzZDBjMjUzOGM3MTEzNGQyMDEwYzVhYzlhMWNiMVwiLFwiMTQ1LjJcIjpcImUyMDk5NjM5ZmNiOWRiNjAyNzFmZWUxNTMxYjA3MWIyXCIsXCIxNDYuMVwiOlwiOWE0YzEzMjM2ZDlhZWI2ZDAzYzM4ZGUyZTBhMDQ2NGNcIixcIjE0Ni4yXCI6XCIzNzcwOGYzNmZmNTliM2FjOGRiMmQ5OTM2OWNiNzQ2ZlwiLFwiMTQ2LjNcIjpcIjIzYjIyYWY4N2YxN2QxMjQ1MGY5YzExMGI3NmQ5MTIyXCIsXCIxNDYuNFwiOlwiNmJmN2Y1ODAxN2NhZGM1ZjIyZDBlOWZlODFmYWQzYzJcIixcIjE0Ni41XCI6XCI5YTFkNjJhYmVmOGIxYzM1NWE3MWM5M2EzN2ZhOGI5YlwiLFwiMTQ2LjZcIjpcImQ4MDcwMzViYjMyNzE0ZGJhNWY1MGMyZDkxMjUwMjRhXCIsXCIxNDYuN1wiOlwiZDhmMTE0MzMzYmNkNTc0ZTE2NzlkZWMwYjM3NTUzNmNcIixcIjE0Ni44XCI6XCJiNWM3ZmQ2NzQyMzNkODk2MzVjYTI0OWFlMWViYTljY1wiLFwiMTQ2LjlcIjpcImM3YjY0YTQ2YjYyMDJiYzQwZTllNzFhZTFiZjBhMDY4XCIsXCIxNDYuMTFcIjpcImFiODRlZWU4NDljMTJjMjAwODU0MDYxYzM3NDA2MjE1XCIsXCIxNDYuMTJcIjpcImU5MmRlMWM3MmMwMDM4Y2M2YWI4M2RmOTNkNmFjMDU3XCIsXCIxNDYuMTNcIjpcImJhYThhYzk0Y2FmMDQzYmYzMjFlYmMzOTdjZmIzYmI4XCIsXCIxNDYuMTRcIjpcIjMzNGQ1MTA3NmI0ODgzOTAxOWE4MjRjMzA3ZThlYzRjXCIsXCIxNDYuMTVcIjpcIjBkZjlkZWE1MTUzYzY1ZjdiYzA4OTE2YWJiYTc4YmMxXCIsXCIxNDYuMTZcIjpcImVhMmRlM2I5ZTgwODNmMGRmZDUwZWEwZDhjNTU0NDNlXCIsXCIxNDYuMTdcIjpcIjc1NGNjNTc4ZDQyNWY1NTMyNTY0YjIwMGQ3NTQyNmRkXCIsXCIxNDguMVwiOlwiMDRmM2QwYzI1MzhjNzExMzRkMjAxMGM1YWM5YTFjYjFcIixcIjE0OC4yXCI6XCJlMjA5OTYzOWZjYjlkYjYwMjcxZmVlMTUzMWIwNzFiMlwiLFwiMTUwLjFcIjpcIjA0ZjNkMGMyNTM4YzcxMTM0ZDIwMTBjNWFjOWExY2IxXCIsXCIxNTAuMlwiOlwiZTIwOTk2MzlmY2I5ZGI2MDI3MWZlZTE1MzFiMDcxYjJcIixcIjE1MS4xXCI6XCI0MDU0NzY5NzRiNzU5MjJhYTg3YmM0YjAyYWUzMGYxMlwiLFwiMTUxLjJcIjpcIjEzNTAzZjg3MWM0NzdjZjAyODU4NDk5MWI1NjY3ZDk5XCIsXCIxNTEuM1wiOlwiNzU0Y2M1NzhkNDI1ZjU1MzI1NjRiMjAwZDc1NDI2ZGRcIixcIjE1My4xXCI6XCIwNGYzZDBjMjUzOGM3MTEzNGQyMDEwYzVhYzlhMWNiMVwiLFwiMTUzLjJcIjpcImUyMDk5NjM5ZmNiOWRiNjAyNzFmZWUxNTMxYjA3MWIyXCIsXCIxNTUuMVwiOlwiMjc4MzEwMzRmOGI1M2QwYTg5NzNjMzc0OTM4ODY5MzZcIixcIjE1NS4yXCI6XCJjMzU2ODA1NGU2Njc3ODc5M2ZlNTVmOGQ4YzBiMWM1NlwiLFwiMTU1LjNcIjpcIjM0MjhlN2FiOWU0MDhkNjhiZDVjYTA3ZmYwZTdiY2I4XCIsXCIxNTUuNFwiOlwiYTNhZWE4Y2Q0MDdjNjQ2ZTlhNTM5ZWNlZjVhZTc5MjVcIixcIjE1NS41XCI6XCI3NTRjYzU3OGQ0MjVmNTUzMjU2NGIyMDBkNzU0MjZkZFwifSIsImRhOTkzMTEzY2U1MzNiZGEyMGZlOGQ3ZTc1MGEwNThhIl0=' />
            <input type='hidden' class='gform_hidden' name='gform_target_page_number_19' id='gform_target_page_number_19' value='0' />
            <input type='hidden' class='gform_hidden' name='gform_source_page_number_19' id='gform_source_page_number_19' value='1' />
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
