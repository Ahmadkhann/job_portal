<?php 
/**
 * Template Name: future jobs
 */
 
get_header(); 




?>
	<!-- Breadcromb Area Start -->
	<section class="jobguru-submit-resume-area section_70">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form method="POST" >
						<div class="submit-resume-box">
							<div class="resume-box">
								<h3>Personal Information</h3>
								<div class="single-resume-feild feild-flex-2">
									<div class="single-input">
										<label for="name">Your Name:</label>
										<input type="text" placeholder="Your Full Name" name="name" id="name"> </div>
									<div class="single-input">
										<label for="p_title">Email:</label>
										<input type="email" placeholder="Email" name="email" id="p_title"> </div>
								</div>
								<div class="single-resume-feild feild-flex-2">
									<div class="single-input">
										<label for="Phone">Phone:</label>
										<input type="tel" placeholder="Phone Number" name="phone" id="Phone"> </div>
									<div class="single-input">
										<label for="experience">Total Experience:</label>
										<select id="experience" name="experience">
											<option selected>select Experience</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
										</select>
									</div>
									<!-- <div class="single-input">
                                 <label for="Email">Tota:</label>
                                 <input type="email" placeholder="Your Email Address" id="Email">
                              </div> --></div>
								<div class="single-resume-feild feild-flex-2">
									<div class="single-input">
										<label for="cnic">CNIC:</label>
										<input type="text" name="cnic" placeholder="12345-6789253-5" id="cnic" /> </div>
									<div class="single-input">
										<label for="gender">Gender:</label>
										<select name="gender" id="gender">
											<option selected>Male</option>
											<option>Female</option>
											<option>both</option>
										</select>
									</div>
								</div>
								<div class="single-resume-feild feild-flex-2">
									<div class="single-input">
										<label for="date-birth">Date of Bith:</label>
										<input type="date" name="date_of_birth" placeholder="dd/mm/yy/" id="date_of_birth" /> </div>
									<div class="single-input">
										<label for="gender">Preffered City:</label>
										<select name="city" id="gender">
											<option selected>Lahore</option>
											<option>Sailkot</option>
											<option>Gujranwala</option>
										</select>
									</div>
								</div>
								<div class="single-resume-feild ">
									<div class="single-input">
										<label for="hometown">Home Town:</label>
										<input type="text" name="home-town" id="home-town" placeholder="home town"> </div>
									<div class="single-input">
										<label for="Bio">Introduce Yourself:</label>
										<textarea id="Bio" name="bio" placeholder="Write Your Bio Here..."></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<label>Select Job Type</label>
									<div class="jobTypeList">
										<div class="checkbox__wrapper">
											<input class="inp-cbx" id="cbx" type="radio" name="jobType" value="Teaching">
											<label class="cbx cbx__main_label" for="cbx"> <span style="width: 25px;">
                                       <svg width="12px" height="10px" viewbox="0 0 12 10">
                                          <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                       </svg>
                                    </span> <span>Teaching</span> </label>
										</div>
										<div class="checkbox__wrapper">
											<input class="inp-cbx" id="cbx-1" type="radio" name="jobType" value="Non-Teaching">
											<label class="cbx cbx__main_label" for="cbx-1"> <span style="width: 24px;">
                                       <svg width="12px" height="10px" viewbox="0 0 12 10">
                                          <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                       </svg>
                                    </span> <span>Non-Teaching</span> </label>
										</div>
										<div class="checkbox__wrapper">
											<input class="inp-cbx" id="cbx-2" type="radio" name="jobType" value="SupportStaff">
											<label class="cbx cbx__main_label" for="cbx-2"> <span>
                                       <svg width="12px" height="10px" viewbox="0 0 12 10">
                                          <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                       </svg>
                                    </span> <span>Support Staff</span> </label>
										</div>
									</div>
								</div>
							</div>
							<div class="box Teaching">
								<div class="row">
									<div class="col-lg-3">
										<div>
											<div class="chooseshift">
												<label>Choose Shift</label>
												<div class="checkbox__wrapper">
													<input class="inp-cbx" id="shift-id-1" type="radio" name="shift" value="Morning">
													<label class="cbx cbx__main_label" for="shift-id-1"> <span style="width: 19px;">
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                       <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                 </span> <span>Morning</span> </label>
												</div>
												<div class="checkbox__wrapper">
													<input class="inp-cbx" id="shift-id-2" type="radio" name="shift" value="Evening">
													<label class="cbx cbx__main_label" for="shift-id-2"> <span style="width: 19px;">
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                       <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                 </span> <span>Evening</span> </label>
												</div>
												<div class="checkbox__wrapper">
													<input class="inp-cbx" id="shift-id-3" type="radio" name="shift" value="Both">
													<label class="cbx cbx__main_label" for="shift-id-3"> <span style="width: 19px;">
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                       <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                 </span> <span>Both</span> </label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="single-input">
											<label for="post">Choose Post</label>
											<select id="post">
												<option value="1">Principal</option>
												<option value="2">Vice Principal</option>
												<option value="3">Professor</option>
												<option value="4">Assistant Professor</option>
												<option value="5">Lecturer</option>
												<option value="6">Teacher</option>
												<option value="7">Second Teacher</option>
												<option value="8">Sports Teacher</option>
												<option value="9">Fine Arts Teacher</option>
												<option value="10">Junior School Teacher</option>
											</select>
										</div>
									</div>
									<div class="col-lg-5">
										<div>
											<label>Applying For</label>
											<div class="checkbox__wrapper">
												<input class="inp-cbx" id="cbx-7" type="checkbox" class="Junior School Teacher( Playgroup to Class 5)">
												<label class="cbx cbx__main_label" for="cbx-7"> <span style="width: 19px;">
                                 <svg width="12px" height="10px" viewbox="0 0 12 10">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                 </svg>
                              </span> <span>Junior School Teacher( Playgroup to Class 5)</span> </label>
											</div>
											<div class="checkbox__wrapper">
												<input class="inp-cbx" id="cbx-8" type="checkbox" value="Middle School Teacher(From class 6 to class 8 )">
												<label class="cbx cbx__main_label" for="cbx-8"> <span style="width: 19px;">
                                 <svg width="12px" height="10px" viewbox="0 0 12 10">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                 </svg>
                              </span> <span>Middle School Teacher(From class 6 to class 8 )</span> </label>
											</div>
											<div class="checkbox__wrapper">
												<input class="inp-cbx high-school-check" id="cbx-9" type="checkbox" value="High School Teacher( 9th and 10 th)">
												<label class="cbx cbx__main_label" for="cbx-9"> <span style="width: 19px;">
                                 <svg width="12px" height="10px" viewbox="0 0 12 10">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                 </svg>
                              </span> <span>High School Teacher( 9th and 10 th)</span> </label>
											</div>
											<div class="high-school-subjects mt-2 mb-2 me-2">
												<ul class="subject-list">
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-1" type="checkbox" value="Arabic">
															<label class="cbx cbx__main_label" for="high-school-subjects-1"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Arabic</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-2" type="checkbox" value="Biology">
															<label class="cbx cbx__main_label" for="high-school-subjects-2"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Biology</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-3" type="checkbox" value="Chemistry">
															<label class="cbx cbx__main_label" for="high-school-subjects-3"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Chemistry</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-4" type="checkbox" value="Civics">
															<label class="cbx cbx__main_label" for="high-school-subjects-4"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Civics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-5" type="checkbox" value="Computer Science">
															<label class="cbx cbx__main_label" for="high-school-subjects-5"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Computer Science</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-6" type="checkbox" value="Economics">
															<label class="cbx cbx__main_label" for="high-school-subjects-6"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Economics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-7" type="checkbox" value="Education">
															<label class="cbx cbx__main_label" for="high-school-subjects-7"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Education</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-8" type="checkbox" value="English">
															<label class="cbx cbx__main_label" for="high-school-subjects-8"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>English</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-9" type="checkbox" value="G.Science">
															<label class="cbx cbx__main_label" for="high-school-subjects-9"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>G.Science</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-10" type="checkbox" value="History">
															<label class="cbx cbx__main_label" for="high-school-subjects-10"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>History</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-11" type="checkbox" value="Information Technology">
															<label class="cbx cbx__main_label" for="high-school-subjects-11"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Information Technology</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-12" type="checkbox" value="Islamiat">
															<label class="cbx cbx__main_label" for="high-school-subjects-12"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Islamiat</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-13" type="checkbox" value="Mathematics">
															<label class="cbx cbx__main_label" for="high-school-subjects-13"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Mathematics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-14" type="checkbox" value="Pak. Studies">
															<label class="cbx cbx__main_label" for="high-school-subjects-14"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Pak. Studies</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-15" type="checkbox" value="Physics">
															<label class="cbx cbx__main_label" for="high-school-subjects-15"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Physics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-16" type="checkbox" value="Political Sciences">
															<label class="cbx cbx__main_label" for="high-school-subjects-16"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Political Sciences</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-17" type="checkbox" value="Punjabi">
															<label class="cbx cbx__main_label" for="high-school-subjects-17"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Punjabi</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-18" type="checkbox" value="Social Studies">
															<label class="cbx cbx__main_label" for="high-school-subjects-18"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Social Studies</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-19" type="checkbox" value="Statistics">
															<label class="cbx cbx__main_label" for="high-school-subjects-19"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Statistics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-20" type="checkbox" value="Urdu">
															<label class="cbx cbx__main_label" for="high-school-subjects-20"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Urdu</span> </label>
														</div>
													</li>
												</ul>
											</div>
											<div class="checkbox__wrapper">
												<input class="inp-cbx college-subjects-check" id="cbx-10" type="checkbox" value="College Level(1st Year and 2nd Year)">
												<label class="cbx cbx__main_label" for="cbx-10"> <span style="width: 19px;">
                                 <svg width="12px" height="10px" viewbox="0 0 12 10">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                 </svg>
                              </span> <span>College Level(1st Year and 2nd Year)</span> </label>
											</div>
											<div class="college-subjects mt-2 mb-2 me-2">
												<ul class="subject-list">
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-21" type="checkbox" value="Arabic">
															<label class="cbx cbx__main_label" for="high-school-subjects-21"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Arabic</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-22" type="checkbox" value="Biology">
															<label class="cbx cbx__main_label" for="high-school-subjects-22"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Biology</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-23" type="checkbox" value="Chemistry">
															<label class="cbx cbx__main_label" for="high-school-subjects-23"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Chemistry</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-24" type="checkbox" value="Civics">
															<label class="cbx cbx__main_label" for="high-school-subjects-24"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Civics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-25" type="checkbox" value="Computer Science">
															<label class="cbx cbx__main_label" for="high-school-subjects-25"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Computer Science</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-26" type="checkbox" value="Economics">
															<label class="cbx cbx__main_label" for="high-school-subjects-26"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Economics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-27" type="checkbox" value="Education">
															<label class="cbx cbx__main_label" for="high-school-subjects-27"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Education</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-28" type="checkbox" value="English">
															<label class="cbx cbx__main_label" for="high-school-subjects-28"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>English</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-29" type="checkbox" value="G.Science">
															<label class="cbx cbx__main_label" for="high-school-subjects-29"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>G.Science</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-30" type="checkbox" value="History">
															<label class="cbx cbx__main_label" for="high-school-subjects-30"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>History</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-31" type="checkbox" value="Information Technology">
															<label class="cbx cbx__main_label" for="high-school-subjects-31"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Information Technology</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-32" type="checkbox" value="Islamiat">
															<label class="cbx cbx__main_label" for="high-school-subjects-32"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Islamiat</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-33" type="checkbox" value="Mathematics">
															<label class="cbx cbx__main_label" for="high-school-subjects-33"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Mathematics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-34" type="checkbox" value="Pak. Studies">
															<label class="cbx cbx__main_label" for="high-school-subjects-34"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Pak. Studies</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-35" type="checkbox" value="Physics">
															<label class="cbx cbx__main_label" for="high-school-subjects-35"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Physics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-36" type="checkbox" value="Political Sciences">
															<label class="cbx cbx__main_label" for="high-school-subjects-36"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Political Sciences</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-37" type="checkbox" value="Punjabi">
															<label class="cbx cbx__main_label" for="high-school-subjects-37"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Punjabi</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-38" type="checkbox" value="Social Studies">
															<label class="cbx cbx__main_label" for="high-school-subjects-38"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Social Studies</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-39" type="checkbox" value="Statistics">
															<label class="cbx cbx__main_label" for="high-school-subjects-39"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Statistics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-40" type="checkbox" value="Urdu">
															<label class="cbx cbx__main_label" for="high-school-subjects-40"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Urdu</span> </label>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="box Non-Teaching">
								<div class="row">
									<div class="col-lg-3">
										<div>
											<div class="chooseshift">
												<label>Choose Shift</label>
												<div class="checkbox__wrapper">
													<input class="inp-cbx" id="shift-id-4" type="radio" name="shift" value="Morning">
													<label class="cbx cbx__main_label" for="shift-id-4"> <span style="width: 19px;">
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                       <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                 </span> <span>Morning</span> </label>
												</div>
												<div class="checkbox__wrapper">
													<input class="inp-cbx" id="shift-id-5" type="radio" name="shift" value="Evening">
													<label class="cbx cbx__main_label" for="shift-id-5"> <span style="width: 19px;">
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                       <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                 </span> <span>Evening</span> </label>
												</div>
												<div class="checkbox__wrapper">
													<input class="inp-cbx" id="shift-id-6" type="radio" name="shift" value="Both">
													<label class="cbx cbx__main_label" for="shift-id-6"> <span style="width: 19px;">
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                       <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                 </span> <span>Both</span> </label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="single-input">
											<label for="Department">Choose Department</label>
											<select id="Department">
												<option value="1">Admin</option>
												<option value="2">Publications</option>
												<option value="3">HR</option>
												<option value="4">Sports</option>
												<option value="5">IT</option>
												<option value="6">Coordination</option>
												<option value="7">Research and Development</option>
												<option value="8">Entry Test</option>
												<option value="9">Finance</option>
												<option value="10">Legal</option>
												<option value="11">CDD(Marketing)</option>
												<option value="12">Event Management/Media</option>
											</select>
										</div>
									</div>
									<div class="col-lg-5"> </div>
								</div>
							</div>
							<div class="box SupportStaff">
								<div class="row">
									<div class="col-lg-3">
										<div>
											<div class="chooseshift">
												<label>Choose Shift</label>
												<div class="checkbox__wrapper">
													<input class="inp-cbx" id="shift-id-7" type="radio" name="shift" value="Morning">
													<label class="cbx cbx__main_label" for="shift-id-7"> <span style="width: 19px;">
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                       <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                 </span> <span>Morning</span> </label>
												</div>
												<div class="checkbox__wrapper">
													<input class="inp-cbx" id="shift-id-8" type="radio" name="shift" value="Evening">
													<label class="cbx cbx__main_label" for="shift-id-8"> <span style="width: 19px;">
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                       <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                 </span> <span>Evening</span> </label>
												</div>
												<div class="checkbox__wrapper">
													<input class="inp-cbx" id="shift-id-9" type="radio" name="shift" value="Both" checked>
													<label class="cbx cbx__main_label" for="shift-id-9"> <span style="width: 19px;">
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                       <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                 </span> <span>Both</span> </label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="single-input">
											<label for="post2">Select Post</label>
											<select id="post2">
												<option value="1">Aaya</option>
												<option value="2">Attendant</option>
												<option value="3">Drivers</option>
												<option value="4">Electrician</option>
												<option value="5">Loader</option>
												<option value="6">Plumber</option>
												<option value="7">Rider</option>
												<option value="8">SecurityGuard</option>
												<option value="9">Sweeper</option>
												<option value="10">Welder</option>
												<option value="11">default</option>
											</select>
										</div>
									</div>
									<div class="col-lg-5"> </div>
								</div>
							</div>
							<div class="submit-resume">
								<input name="sub" type="submit" value="Send Resume" />
							</div>
					</form>
					
						</div>
				</div>
			</div>
         <?php 
         if(isset($_POST['sub'])) {

                   $name = $_REQUEST['name'];
                   $email = $_REQUEST['email'];
                   $phone = $_REQUEST['phone'];
                   $experience = $_REQUEST['experience']; 
                   $cnic = $_REQUEST['cnic'];
                   $gender =  $_REQUEST['gender'];
                   $date_birth = $_REQUEST['date_of_birth'];
                   $prefered_city = $_REQUEST['city'];
                   $home_town = $_REQUEST['home-town'];
                   $intro = $_REQUEST['bio'];

                   print_r($_POST['name']); 
 
                   } 
        ?>
         
	</section>
	<?php get_footer(); ?>
		<!-- Footer Area End -->
		<script type="text/javascript">
		$(".high-school-check").click(function() {
			if($(this).is(":checked")) {
				$(".high-school-subjects").slideDown();
			} else {
				$(".high-school-subjects").slideUp();
			}
		});
		</script>
		<script type="text/javascript">
		$(".college-subjects-check").click(function() {
			if($(this).is(":checked")) {
				$(".college-subjects").slideDown();
			} else {
				$(".college-subjects").slideUp();
			}
		});
		</script>
		<script type="text/javascript">
		$(document).ready(function() {
			$('.jobTypeList input[type="radio"]').click(function() {
				var inputValue = $(this).attr("value");
				var targetBox = $("." + inputValue);
				$(".box").not(targetBox).hide();
				$(targetBox).show();
			});
		});
		</script>

		</html>